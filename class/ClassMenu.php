<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/smarty/libs/Smarty.class.php';

/**
 * Description of ClassMenu
 *
 * @author jgutierrez
 */
class ClassMenu {

    private $_msmarty;
    private $_generals;

    protected function __construct() {
        $this->_msmarty = new Smarty();
        $this->_generals = 'http://localhost/selig/';
    }

    protected function generalMenu() {
        $this->_msmarty->assign('mn_menu', $this->_generals . 'modules/home');
        $this->_msmarty->assign('mn_cliente', $this->_generals . 'modules/clientes');
        $this->_msmarty->assign('mn_usuario', $this->_generals . 'modules/usuarios');
        $this->_msmarty->assign('mn_producto', $this->_generals . 'modules/configuracion/productos');
        $this->_msmarty->assign('mn_comercial', $this->_generals . 'modules/configuracion/comerciales');
        $this->_msmarty->assign('mn_gescalidad', $this->_generals . 'modules/configuracion/gestioncalidad');
        $this->_msmarty->assign('mn_paramgeneral', $this->_generals . 'modules/configuracion/parametrosgenerales');
        $this->_msmarty->assign('mn_unidadnegocio', $this->_generals . 'modules/configuracion/unidadnegocio');
        $this->_msmarty->assign('mn_region', $this->_generals . 'modules/configuracion/region');
        $this->_msmarty->assign('mn_sucursal', $this->_generals . 'modules/configuracion/sucursal');
        $this->_msmarty->assign('mn_calendario', $this->_generals . 'modules/configuracion/calendario');
        $this->_msmarty->assign('mn_hispedidos', $this->_generals . 'modules/historicopedidos');
        $this->_msmarty->assign('mn_login', $this->_generals . 'modules/login');
    }

    protected function templateMenu() {

        $this->_smarty->assign('mn_menu', '/selig/modules/home');
        $this->_smarty->assign('mn_cliente', '/selig/modules/clientes');
        $this->_smarty->assign('mn_usuario', '/selig/modules/usuarios');
        $this->_smarty->assign('mn_producto', '/selig/modules/configuracion/productos');
        $this->_smarty->assign('mn_comercial', '/selig/modules/configuracion/comerciales');
        $this->_smarty->assign('mn_gescalidad', '/selig/modules/configuracion/gestioncalidad');
        $this->_smarty->assign('mn_paramgeneral', '/selig/modules/configuracion/parametrosgenerales');
        $this->_smarty->assign('mn_unidadnegocio', '/selig/modules/configuracion/unidadnegocio');
        $this->_smarty->assign('mn_region', '/selig/modules/configuracion/region');
        $this->_smarty->assign('mn_sucursal', '/selig/modules/configuracion/sucursal');
        $this->_smarty->assign('mn_calendario', '/selig/modules/configuracion/calendario');
        $this->_smarty->assign('mn_hispedidos', '/selig/modules/historicopedidos');
        $this->_smarty->assign('mn_login', '/selig/modules/login');
    }

}
