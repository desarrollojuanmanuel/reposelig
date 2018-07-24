

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
class Dimension1 extends transactioninterface {

    /**
     * parametro _iddimension0
     * @var type int
     */
    private $_iddimension1;

    /**
     * parametro _codigo
     * @var type string
     */
    private $_codigo;

    /**
     * parametro _nombre
     * @var type string
     */
    private $_nombre;

    /**
     * Constructor de la clase
     */
    public function __construct() {
        $this->_nametable = 'dimension1';
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
    }

    /**
     * Método para insertar un nuevo registro
     */
    public function createDimension1() {
        $this->create();
    }

    /**
     * Método para actualizar un registro
     */
    public function updateDimension1() {
        if ($this->newCondition()) {
            $this->update();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function deleteDimension1() {
        if ($this->newCondition()) {
            $this->delete();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function selectFectAll() {
        $this->_namefilecondition = "iddimension1";
        $this->_order = "desc";
        $this->selectAll();
        return $this->_alldata;
    }
    
    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function selectAssocNumb() {
        $this->_namefilecondition = "iddimension1";
        $this->_order = "desc";
        $this->selectAsocNum();
        return $this->_alldata;
    }
    
    
    

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    private function newCondition() {
        if (!empty($this->_iddimension1)) {
            $this->_namefilecondition = "iddimension1";
            $this->_valuefilecondition = $this->_iddimension1;
        }
    }

    /**
     * Método de consulta
     */
    public function consultPrueba() {
        
    }

    /**
     * Obtiene el valor de _iddimension0 
     * @return type int 
     */
    public function getIddimension1() {
        return $this->_iddimension1;
    }

    /**
     * Estable el valor a _iddimension0 
     * @param type int $iddimension0 
     */
    public function setIddimension1($iddimension1) {
        $this->_iddimension1 = $iddimension1;
    }

    /**
     * Obtiene el valor de _codigo 
     * @return type string 
     */
    public function getCodigo() {
        return $this->_codigo;
    }

    /**
     * Estable el valor a _codigo 
     * @param type string $codigo 
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

}
