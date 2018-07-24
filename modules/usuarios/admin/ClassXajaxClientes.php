<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/xajax/ConfigXajax.php';
require_once 'Cliente.php';
require_once 'classTableCliente.php';
require_once 'ClienteValidate.php';

/**
 * Description of XajaxLogin
 *
 * @author jgutierrez
 */
class ClassXajaxClientes extends ConfigXajax {

    public $_xajaxjavascript;
    public $_namefunction;
    private $_labelmodal;
    private $_bodymodal;

    public function __construct($param = true) {

        if ($param) {
            $this->registerXajaxFunctionsCliente();
            parent::__construct();
            $this->_xajaxjavascript = $this->_xajax->printJavascript("");
        }
        $this->_xajaxobjresponse = new xajaxResponse();
    }

    public function AddCliente($form) {

        $objcliente = new Cliente();
        $objcliente->setCodigo_cliente($form['codigo_cliente']);
        $objcliente->setNombre($form['nombre']);
        $objcliente->setNombre_cial($form['nombre_cial']);
        $objcliente->setContacto($form['contacto']);
        $objcliente->setCorreo($form['correo']);
        $objcliente->setVendedor($form['vendedor']);
        $objcliente->setDireccion($form['direccion']);
        $objcliente->setDimension0(null);
        $objcliente->setDimension1($form['iddimension1']);
        $objcliente->setDimension2(null);
        $objcliente->setStatus(1);
        $res = $objcliente->createCliente();

        if ($res) {
            $this->_labelmodal = 'Nuevo cliente';
            $this->_bodymodal = 'Creaste un nuevo cliente';
            $this->modalCiente();
            $this->_xajaxobjresponse->script("uploaddiv('list');");
            $this->configTableCliente();
        }

        return $this->_xajaxobjresponse;
    }

    public function loadClienteTable() {
        $objTable = new classTableCliente;
        $this->configTableCliente();
        return $this->_xajaxobjresponse;
    }

    public function DeleteCliente($idcliente) {
        $objTable = new Cliente();
        $objTable->setId_cliente($idcliente);
        $objTable->deleteClientes();
        $this->_labelmodal = 'Desactivar cliente';
        $this->_bodymodal = 'Cliente desactivado';
        $this->modalCiente();
        $this->configTableCliente();
        return $this->_xajaxobjresponse;
    }

    public function validateFileCliente($campo, $valor) {
        session_start();

        $objTable = new Cliente();
        $validate = new ClienteValidate();
        unset($_SESSION['error_validate_session_cliente'][$campo]);
        $_SESSION['error_validate_session_cliente'][$campo] = $campo;

        $objTable->countCliente($campo, $valor);

        if ($objTable->getNumFiles() > 0) {
           // $this->_xajaxobjresponse->script("$('#$campo').val('');");
            $this->_xajaxobjresponse->script("$('#formcliente').formValidation('validateField', '$campo');");
            $this->_labelmodal = "Error !";
            $this->_bodymodal = "El $campo $valor ya se encuentra registrado";
            $this->modalCiente();
        } else {
            unset($_SESSION['error_validate_session_cliente'][$campo]);
        }

        $count = count($_SESSION['error_validate_session_cliente']);
        if ($count > 0) {
            $val = 0;
        } else {
            $val = 1;
        }
        $this->_xajaxobjresponse->script("$('#$validate->_idinputvalidate').val('$val');");
        return $this->_xajaxobjresponse;
    }

    private function configTableCliente() {
        $objTable = new classTableCliente;
        $this->configDataTables();
        $this->_xajaxobjresponse->assign("idcliente", "innerHTML", '');
        $this->_xajaxobjresponse->assign("idcliente", "innerHTML", $objTable->_table);
    }

    private function modalCiente() {
        $this->_xajaxobjresponse->assign("labelModal", "innerHTML", $this->_labelmodal);
        $this->_xajaxobjresponse->assign("bodyModal", "innerHTML", $this->_bodymodal);
        $this->_xajaxobjresponse->script("$('#myModal').modal('toggle');");
    }

    private function registerXajaxFunctionsCliente() {
        $this->_xajaxfunctionregister = array(
            'addcliente',
            'loadclientetable',
            'deletecliente',
            'validatefilecliente'
        );
    }

    /**
     * Metodo para iniciar la libreria datatables
     */
    private function configDataTables() {
        $this->_xajaxobjresponse->script("        
        $(document).ready(function () {
            $('#idcliente').DataTable({
                destroy: true,
                responsive: true
            });
        })");
    }

}

function addcliente($form) {
    $onj = new ClassXajaxClientes(false);
    return $onj->AddCliente($form);
}

function loadclientetable() {
    $onj = new ClassXajaxClientes(false);
    return $onj->loadClienteTable();
}

function deletecliente($idcliente) {
    $onj = new ClassXajaxClientes(false);
    return $onj->DeleteCliente($idcliente);
}

function validatefilecliente($campo, $valor) {
    $onj = new ClassXajaxClientes(false);
    return $onj->validateFileCliente($campo, $valor);
}
