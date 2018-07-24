<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/xajax/xajax_core/xajax.inc.php';

/**
 * Description of AjaxConfig
 *
 * @author jgutierrez
 */
class ConfigXajax {

    /**
     *
     * @var type 
     */
    protected $_xajaxfunctionregister;

    /**
     *
     * @var type 
     */
    protected $_headscript;

    /**
     *
     * @var xajaxResponse
     */
    protected $_xajaxobjresponse;

    /**
     *
     * @var xajax 
     */
    protected $_xajax;

    /**
     *
     * @var xajax 
     */
    protected $_uploadajax;

    public function __construct() {

        $this->_xajax = new xajax();
        //$xajax->configure("debug", true);
        //$this->_xajax->configure("javascript URI", '/xajax/');
        $this->_xajax ->configure("javascript URI" ,"../../lib/xajax");
        $this->registerFunctions();
        $this->_xajax->getJavascript();
        $this->_xajax->processRequest();
    }

    private function registerFunctions() {
        foreach ($this->_xajaxfunctionregister as $key => $value) {
            $this->_xajax->register(XAJAX_FUNCTION, $value);
        }
    }

}
