<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/xajax/ConfigXajax.php';
require_once 'Dimension0.php';
require_once 'TableRegion.php';

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
            $this->_xajaxfunctionregister = array('addcliente', 'loadclientetable', 'deletecliente');
            parent::__construct();
            $this->_xajaxjavascript = $this->_xajax->printJavascript("");
        }
        $this->_xajaxobjresponse = new xajaxResponse();
    }

    public function AddCliente($form) {

        $objcliente = new Cliente();
        $objcliente->setComercial($form['comercial']);
        $objcliente->setContacto($form['contacto']);
        $objcliente->setDireccion($form['direccion']);
        $objcliente->setEmail($form['email']);
        $objcliente->setFax($form['fax']);
        $objcliente->setNombre($form['nombre']);
        $objcliente->setNombre_comercial($form['nombrecomercial']);
        $objcliente->setRegion($form['region']);
        $objcliente->setTelefono($form['telefono']);
        $res = $objcliente->createClientes();

        if ($res) {
            $this->_labelmodal = 'Nuevo cliente';
            $this->_bodymodal = 'Creaste un nuevo cliente';
            $this->modalCiente();
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

    private function configTableCliente() {
        $objTable = new classTableCliente;
        $this->_xajaxobjresponse->assign("idcliente", "innerHTML", '');
        $this->_xajaxobjresponse->assign("idcliente", "innerHTML", $objTable->_table);
    }

    private function modalCiente() {
        $this->_xajaxobjresponse->assign("labelModal", "innerHTML", $this->_labelmodal);
        $this->_xajaxobjresponse->assign("bodyModal", "innerHTML", $this->_bodymodal);
        $this->_xajaxobjresponse->script("$('#myModal').modal('toggle');");
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
