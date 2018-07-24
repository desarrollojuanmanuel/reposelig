<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/db/config/transactioninterface.php';

/**
 * Clase de administracion para la tabla prueba
 *
 * @author Juan Manuel Gutierrez
 * @Correo juangu455@gmail.com
 */
class Vendedor extends transactioninterface {

    /**
     * parametro _idvendedor
     * @var type int
     */
    private $_idvendedor;

    /**
     * parametro _codigo
     * @var type int
     */
    private $_codigo;

    /**
     * parametro _nombre
     * @var type string
     */
    private $_nombre;

    /**
     * parametro _correo
     * @var type string
     */
    private $_correo;

    /**
     * Constructor de la clase
     */
    public function __construct() {
        $this->_nametable = 'vendedor';
        $this->_engine = 'MyISAM';
        parent::__construct();
    }

    /**
     * Método sobre escrito 
     * @param type transactioninterface
     */
    public function arraymap() {
        $this->_arraymap = array(
            "codigo" => $this->_codigo,
            "nombre" => $this->_nombre,
            "correo" => $this->_correo,
        );
    }

    /**
     * Método sobre escrito 
     * @param type transactioninterface
     */
    public function arrayupdate() {
        if (!empty($this->_codigo)) {
            $this->_arraymap["codigo"] = $this->_codigo;
        }
        if (!empty($this->_nombre)) {
            $this->_arraymap["nombre"] = $this->_nombre;
        }
        if (!empty($this->_correo)) {
            $this->_arraymap["correo"] = $this->_correo;
        }
    }

    /**
     * Método para insertar un nuevo registro
     */
    public function createVendedor() {
        $this->create();
    }

    /**
     * Método para actualizar un registro
     */
    public function updateVendedor() {
        if ($this->newCondition()) {
            $this->update();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function deleteVendedor() {
        if ($this->newCondition()) {
            $this->delete();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function selectFectAll() {
        $this->_namefilecondition = "idvendedor";
        $this->_order = "desc";
        $this->selectAll();
        return $this->_alldata;
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function selectAssocNumb() {
        $this->_namefilecondition = "idvendedor";
        $this->_order = "desc";
        $this->selectAsocNum();
        return $this->_alldata;
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    private function newCondition() {
        if (!empty($this->_idvendedor)) {
            $this->_namefilecondition = "idvendedor";
            $this->_valuefilecondition = $this->_idvendedor;
        }
    }

    /**
     * Obtiene el valor de _idvendedor 
     * @return type int 
     */
    public function getIdvendedor() {
        return $this->_idvendedor;
    }

    /**
     * Estable el valor a _idvendedor 
     * @param type int $idvendedor 
     */
    public function setIdvendedor($idvendedor) {
        $this->_idvendedor = $idvendedor;
    }

    /**
     * Obtiene el valor de _codigo 
     * @return type int 
     */
    public function getCodigo() {
        return $this->_codigo;
    }

    /**
     * Estable el valor a _codigo 
     * @param type int $codigo 
     */
    public function setCodigo($codigo) {
        $this->_codigo = $codigo;
    }

    /**
     * Obtiene el valor de _nombre 
     * @return type string 
     */
    public function getNombre() {
        return $this->_nombre;
    }

    /**
     * Estable el valor a _nombre 
     * @param type string $nombre 
     */
    public function setNombre($nombre) {
        $this->_nombre = $nombre;
    }

    /**
     * Obtiene el valor de _correo 
     * @return type string 
     */
    public function getCorreo() {
        return $this->_correo;
    }

    /**
     * Estable el valor a _correo 
     * @param type string $correo 
     */
    public function setCorreo($correo) {
        $this->_correo = $correo;
    }

}
