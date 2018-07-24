<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/xajax/ConfigXajax.php';

/**
 * Description of XajaxLogin
 *
 * @author jgutierrez
 */
class ClassXajaxLogin extends ConfigXajax {

    public $_xajaxjavascript;
    public $_namefunction;

    public function __construct($param = true) {

        if ($param) {
            $this->_xajaxfunctionregister = 'myfunction';
            parent::__construct();
            $this->_xajaxjavascript = $this->_xajax->printJavascript("");
        }
    }

    private function loadObjectResponse() {
        $this->_xajaxobjresponse = new xajaxResponse();
    }

    public function MyFunction() {
        $this->loadObjectResponse();
        $this->_xajaxobjresponse->alert('tomalo de nuevo');
        return $this->_xajaxobjresponse;
    }

}

function myfunction() {
    $onj = new ClassXajaxLogin(false);
    return $onj->MyFunction();
}
