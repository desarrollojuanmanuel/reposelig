<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/adminview.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/modules/clientes/admin/ClassXajaxClientes.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/classGenerateSelecthtml.php';
require_once 'admin/ClienteValidate.php';
require_once 'admin/classTableCliente.php';

/**
 * Description of clientes
 *
 * @author jgutierrez
 */
class Clienteload extends AdminView {

    //put your code here
    //put your code here

    public function __construct() {
        $this->config();
        parent::__construct();
    }

    private function config() {
        $this->_view = 'clientes.html';
        $this->_typemenu = false;
        $this->_datatables = true;
        $this->_bootselect = true;
        $this->_formvalidation = true;
        $this->_xajax = true;
    }

    public function runClientes() {
        $this->createSelectFormCliente();
        $this->loadValidator();
        $xajax = new ClassXajaxClientes();
        $this->_objsmarty->assign('xajax', $xajax->_xajaxjavascript);
        $this->_objsmarty->display($this->_view);
    }

    private function loadValidator() {
        $val = new ClienteValidate();
        $val->_idform = 'formcliente';
        $val->loadValidate();
        $this->_objsmarty->assign('idform', $val->_idform);
        $this->_objsmarty->assign('statevalidate', $val->_estvalidatecliente);
        $this->_objsmarty->assign('validator', $val->_validate);
    }

    private function createSelectFormCliente() {

        $objSelect = new classGenerateSelecthtml();
        $this->_objsmarty->assign('reghtml', $objSelect->selectRegion());
        $this->_objsmarty->assign('comercialhtml', $objSelect->selectVendedor());
    }

}

$clientes = new Clienteload();
$clientes->runClientes();
