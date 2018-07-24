<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/smarty/libs/Smarty.class.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/ClassMenu.php';

/**
 * Description of ConfigClass
 *
 * @author jgutierrez
 */
class ConfigClass extends ClassMenu {

    //put your code here
    //put your code here

    protected $_templates;
    protected $_general;
    
    /**
     *
     * @var Smarty 
     */
    protected $_smarty;
    
    protected $_menupath;
    protected $_typemenu = true;
    protected $_datatables = false;
    protected $_bootselect = false;
    protected $_xajax = false;
    protected $_formvalidation = false;

    // protected $_

    protected function __construct() {
        $this->config();
        $this->menu();
    }

    private function config() {
        $this->_smarty = new Smarty();
        $this->_general = 'http://localhost/selig/'; // ambienye local de desarrollo
        //$this->_general = 'http://localhost/selig/'; // Produccion
        $this->_templates = $_SERVER['DOCUMENT_ROOT'] . '/selig/templates';
        $this->_smarty->assign('templates', $this->_templates);
        $this->_smarty->assign('path', $this->_general);
        $this->_smarty->assign('datatables', $this->_datatables);
        $this->_smarty->assign('bootselect', $this->_bootselect);
        $this->_smarty->assign('loadajax', $this->_xajax);//loadvalidator
        $this->_smarty->assign('loadvalidator', $this->_formvalidation);
    }

    private function menu() {
        parent::__construct();
        if ($this->_typemenu) {
            $this->generalMenu();
            $this->templateMenu();
        } else {
            $this->templateMenu();
        }
    }

}
