<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/adminview.php';

/**
 * Description of index
 *
 * @author Hanssen Avelino, Miguel Maceta, Juan M. Gutierrez
 */
class HistoricoPedidos extends AdminView{

    //put your code here
    //put your code here

    /**
     * Metedo constructor de la clase
     */
    public function __construct() {
        $this->config();
        $this->_typemenu = false;
        parent::__construct();
    }

    /**
     * Metodo de configuracion de la visa
     */
    protected function config() {
        $this->_view = 'hispedidos.html';
        $this->_datatables = true;
        $this->_bootselect = true;
    }

    /**
     * Metodo de ejecucion de la clase
     */
    public function loadHistoricoPedidos() {
        $this->_objsmarty->display($this->_view);
    }

}

$ClassHome = new HistoricoPedidos();
$ClassHome->loadHistoricoPedidos();