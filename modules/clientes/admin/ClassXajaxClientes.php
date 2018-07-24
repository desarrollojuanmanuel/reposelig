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
 * Clase encargado de manejo de eventos xajax
 *
 * @author jgutierrez
 */
class ClassXajaxClientes extends ConfigXajax {

    public $_xajaxjavascript;
    public $_namefunction;
    private $_labelmodal;
    private $_bodymodal;
    private $_validate_values;
    private $_form_cliente;
    private $_objCliente;

    /**
     * Metodo constructor de la clase
     * @param type $param
     */
    public function __construct($param = true) {

        if ($param) {
            $this->registerXajaxFunctionsCliente();
            parent::__construct();
            $this->_xajaxjavascript = $this->_xajax->printJavascript("");
        }

        $this->_objCliente = new Cliente();
        $this->_xajaxobjresponse = new xajaxResponse();
    }

    /**
     * Metodo encargardo de la creacion un nuevo cliente
     * @param type array
     * @return type xajax
     */
    public function AddCliente() {

        if ($this->validateFileCliente()) {
            return $this->_xajaxobjresponse;
        }
        $this->_objCliente->setCodigo_cliente($this->_form_cliente['codigo_cliente']);
        $this->_objCliente->setNombre($this->_form_cliente['nombre']);
        $this->_objCliente->setNombre_cial($this->_form_cliente['nombre_cial']);
        $this->_objCliente->setContacto($this->_form_cliente['contacto']);
        $this->_objCliente->setCorreo($this->_form_cliente['correo']);
        $this->_objCliente->setVendedor($this->_form_cliente['vendedor']);
        $this->_objCliente->setDireccion($this->_form_cliente['direccion']);
        $this->_objCliente->setDimension0(null);
        $this->_objCliente->setDimension1($this->_form_cliente['iddimension1']);
        $this->_objCliente->setDimension2(null);
        $this->_objCliente->setStatus(1);

        $res = $this->_objCliente->createCliente();

        if ($res) {
            $this->_labelmodal = 'Nuevo cliente';
            $this->_bodymodal = 'Creaste un nuevo cliente';
            $this->modalCiente("myModal");
            $this->_xajaxobjresponse->script("$('#formcliente')[0].reset()");
            //$this->configTableCliente();
        }

        return $this->_xajaxobjresponse;
    }

    /**
     * Metodo encargardo de cargar la tabla con el listado de clientes
     * @return xajax
     */
    public function loadClienteTable() {
        $objTable = new classTableCliente;
        $this->configTableCliente();
        return $this->_xajaxobjresponse;
    }

    /**
     * Metodo encargado de eliminar un cliente 
     * @param type int
     * @return Xajax
     */
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

    /**
     * Metodo encargado de validar que un valor de este repetido en la tabla cliente
     * @param type string
     * @param type string
     * @return xajax
     */
    public function validateFileCliente() {
        $msj = '';
        foreach ($this->_form_cliente as $key => $value) {
            $this->_objCliente = new Cliente();
            if ($key == 'codigo_cliente') {
                $this->_objCliente->countCliente($key, $value);
                if ($this->_objCliente->getNumFiles() > 0) {
                    $msj .= "$key ya se encuentra registrado <br/>";
                }
            }

            if ($key == 'correo') {
                $this->_objCliente->countCliente($key, $value);
                if ($this->_objCliente->getNumFiles() > 0) {
                    $msj .= "$key ya se encuentra registrado";
                }
            }
        }
        if (!empty($msj)) {
            $this->_labelmodal = "Error !";
            $this->_bodymodal = $msj;
            $this->modalCiente("modelempty");
            return $this->_xajaxobjresponse;
        }
        return false;
    }

    public function editCliente($idcliente) {
        /* if ($this->validateFileCliente()) {
          return $this->_xajaxobjresponse;btn
          } */
        $this->_xajaxobjresponse->script("$('#formcliente')[0].reset();");
        $this->_xajaxobjresponse->script("$('#action').val('1');");
        $this->_xajaxobjresponse->script("$('#id_cliente').val('$idcliente');");
        $this->_objCliente->selectFetchAssocCliente('idcliente', $idcliente);
        $this->_xajaxobjresponse->append('codigo_cliente', 'value', $this->_objCliente->getCodigo_cliente());
        $this->_xajaxobjresponse->append('nombre', 'value', $this->_objCliente->getNombre());
        $this->_xajaxobjresponse->append('nombre_cial', 'value', $this->_objCliente->getNombre_cial());
        $this->_xajaxobjresponse->append('contacto', 'value', $this->_objCliente->getContacto());
        $this->_xajaxobjresponse->append('correo', 'value', $this->_objCliente->getCorreo());
        $this->_xajaxobjresponse->append('vendedor', 'value', $this->_objCliente->getVendedor());
        $this->_xajaxobjresponse->append('direccion', 'value', $this->_objCliente->getDireccion());
        $this->_xajaxobjresponse->append('iddimension1', 'value', $this->_objCliente->getDimension1());
        $this->_xajaxobjresponse->append('checkboxSuccess', 'value', 0);
        $this->_xajaxobjresponse->script("uploaddiv('form');");

        return $this->_xajaxobjresponse;
    }

    /**
     * 
     * @return boolean
     */
    private function validateEditFormCliente() {
        $msj = '';
        $this->_objCliente->setClienteData($this->_form_cliente);
        foreach ($this->_form_cliente as $key => $value) {
            $this->_objCliente = new Cliente();
            $this->_objCliente->setClienteData($this->_form_cliente);
            if ($key == 'codigo_cliente') {
                $this->_objCliente->generateSQLCliente('editCliente', $key);
                if ($this->_objCliente->getNumFiles() > 0) {
                    $msj .= "$key ya se encuentra registrado <br/>";
                }
            }

            if ($key == 'correo') {
                $this->_objCliente->generateSQLCliente('editCliente', $key);
                if ($this->_objCliente->getNumFiles() > 0) {
                    $msj .= "$key ya se encuentra registrado";
                }
            }
        }
        if (!empty($msj)) {
            $this->_labelmodal = "Error !";
            $this->_bodymodal = $msj;
            $this->modalCiente("modelempty");
            return true;
        }
        return false;
    }

    /**
     * 
     * @return type
     */
    public function editFormCliente() {
        if (!$this->validateFileCliente()) {
            
        }
        return $this->_xajaxobjresponse;
    }

    /**
     * Metodo encargardo de la configuracion de la tabla cliente
     */
    private function configTableCliente() {
        $objTable = new classTableCliente;
        $this->configDataTables();
        $this->_xajaxobjresponse->assign("idcliente", "innerHTML", '');
        $this->_xajaxobjresponse->assign("idcliente", "innerHTML", $objTable->_table);
    }

    /**
     * Metodo ecargado de ejecutar una modal
     */
    private function modalCiente($idmodal) {
        //$this->_xajaxobjresponse->assign("labelModal", "innerHTML", $this->_labelmodal);
        $this->_xajaxobjresponse->script("$('.labelModal').html('');");
        $this->_xajaxobjresponse->script("$('.bodyModal').html('');");
        $this->_xajaxobjresponse->script("$('.labelModal').html('$this->_labelmodal');");
        $this->_xajaxobjresponse->script("$('.bodyModal').html('$this->_bodymodal');");
        $this->_xajaxobjresponse->script("$('#$idmodal').modal('toggle');");
    }

    /**
     * Metodo encargado de registrar las funciones xajax
     */
    private function registerXajaxFunctionsCliente() {
        $this->_xajaxfunctionregister = array(
            'addcliente',
            'loadclientetable',
            'deletecliente',
            'validatefilecliente',
            'editcliente',
            'editformcliente'
        );
    }

    /**
     * Metodo para iniciar la libreria datatables
     */
    private function configDataTables() {
        $this->_xajaxobjresponse->script("        
        $(document).ready(function () {
            $('#idcliente').DataTable({
                responsive: true,
                destroy: true
            });
       });");
    }

    /**
     * Estable el valor _form_cliente
     * @param array $form
     */
    public function setForm($form) {
        $this->_form_cliente = $form;
    }

}

/* * *
 * Funciones para ejecucion de xajax
 */

function addcliente($form) {
    $onj = new ClassXajaxClientes(false);
    $onj->setForm($form);
    return $onj->AddCliente();
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

function editcliente($idcliente) {
    $onj = new ClassXajaxClientes(false);
    return $onj->editCliente($idcliente);
}

function editformcliente($form) {
    $onj = new ClassXajaxClientes(false);
    $onj->setForm($form);
    return $onj->editFormCliente();
}
