<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/ConfigClass.php';

/**
 * Description of adminview
 *
 * @author jgutierrez
 */
class AdminView extends ConfigClass{

    //put your code here
    //put your code here

    protected $_view;
    
    /**
     *
     * @var Smarty 
     */
    protected $_objsmarty;
    protected $_menu;

    protected function __construct() {
        parent::__construct();
        $this->_objsmarty = $this->_smarty;
        $this->_menupath = $this->_menu;
        //$this->run();
    }

    public function run() {
       // $this->_objsmarty->display($this->_view);
    }

}
