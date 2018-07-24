<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/adminview.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/modules/login/admin/ClassXajaxLogin.php';

/**
 * Description of clientes
 *
 * @author jgutierrez
 */
class Login  extends AdminView {

    //put your code here
    //put your code here
    
   // private $_objxajax;

    public function __construct() {
        $this->config();
        $this->_typemenu = false;
        parent::__construct();
    }
    
    protected function config() {
        $this->_view = 'login.html';
        $this->_typemenu = false;
        $this->_xajax = true;
    }

    public function loadLogin() {

        $xajax = new ClassXajaxLogin();
        $this->_objsmarty->assign('xajax',$xajax->_xajaxjavascript);
        $this->_objsmarty->display($this->_view);
    }

}

$clientes = new Login();
$clientes->loadLogin();
