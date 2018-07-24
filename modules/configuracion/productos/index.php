<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/adminview.php';

/**
 * Description of clientes
 *
 * @author jgutierrez
 */
class Productos extends AdminView {

    //put your code here
    //put your code here

    public function __construct() {
        $this->config();
        parent::__construct();
    }

    protected function config() {
        $this->_view = 'productos.html';
        $this->_typemenu = false;
        $this->_datatables = true;
    }

    public function loadProductos() {
        $this->_objsmarty->display($this->_view);
    }

}

$clientes = new Productos();
$clientes->loadProductos();
