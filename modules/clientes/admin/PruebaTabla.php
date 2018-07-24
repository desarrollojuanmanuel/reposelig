<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/selig/lib/db/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/selig/lib/db/config/transactioninterface.php';
//die($_SERVER['REMOTE_HOST']);
/**
 * Clase de administracion para la tabla prueba
 *
 * @author Juan Manuel Gutierrez
 * @Correo juangu455@gmail.com
 */
class Prueba extends transactioninterface {

    /**
     * parametro _id_prueba
     * @var type int
     */
    private $_id_prueba;

    /**
     * parametro _campo1
     * @var type string
     */
    private $_campo1;

    /**
     * parametro _campo2
     * @var type string
     */
    private $_campo2;

    /**
     * parametro _campo3
     * @var type string
     */
    private $_campo3;

    /**
     * parametro _campo4
     * @var type string
     */
    private $_campo4;

    /**
     * parametro _fecha
     * @var type date
     */
    private $_fecha;

    /**
     * Constructor de la clase
     */
    public function __construct() {
        $this->_nametable = 'prueba';
        $this->_engine = 'InnoDB';
        parent::__construct();
    }

    /**
     * Método sobre escrito 
     * @param type transactioninterface
     */
    public function arraymap() {
        $this->_arraymap = array(
            "campo1" => $this->_campo1,
            "campo2" => $this->_campo2,
            "campo3" => $this->_campo3,
            "campo4" => $this->_campo4,
            "fecha" => $this->_fecha
        );
    }

    /**
     * Método sobre escrito 
     * @param type transactioninterface
     */
    public function arrayupdate() {
        if (!empty($this->_campo1)) {
            $this->_arraymap["campo1"] = $this->_campo1;
        }
        if (!empty($this->_campo2)) {
            $this->_arraymap["campo2"] = $this->_campo2;
        }
        if (!empty($this->_campo3)) {
            $this->_arraymap["campo3"] = $this->_campo3;
        }
        if (!empty($this->_campo4)) {
            $this->_arraymap["campo4"] = $this->_campo4;
        }
        if (!empty($this->_fecha)) {
            $this->_arraymap["fecha"] = $this->_fecha;
        }
    }

    /**
     * Método para insertar un nuevo registro
     */
    public function createPrueba() {
        $this->create();
    }

    /**
     * Método para actualizar un registro
     */
    public function updatePrueba() {
        if ($this->newCondition()) {
            $this->update();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function deletePrueba() {
        if ($this->newCondition()) {
            $this->delete();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    private function newCondition() {
        if (!empty($this->_id_prueba)) {
            $this->_namefilecondition = "id_prueba";
            $this->_valuefilecondition = $this->_id_prueba;
        }
    }

    /**
     * Método de consulta
     */
    public function consultPrueba() {
        
    }

    /**
     * Obtiene el valor de _id_prueba 
     * @return type int 
     */
    public function getIdPrueba() {
        return $this->_id_prueba;
    }

    /**
     * Estable el valor a _id_prueba 
     * @param type int $id_prueba 
     */
    public function setIdPrueba($id_prueba) {
        $this->_id_prueba = $id_prueba;
    }

    /**
     * Obtiene el valor de _campo1 
     * @return type string 
     */
    public function getCampo1() {
        return $this->_campo1;
    }

    /**
     * Estable el valor a _campo1 
     * @param type string $campo1 
     */
    public function setCampo1($campo1) {
        $this->_campo1 = $campo1;
    }

    /**
     * Obtiene el valor de _campo2 
     * @return type string 
     */
    public function getCampo2() {
        return $this->_campo2;
    }

    /**
     * Estable el valor a _campo2 
     * @param type string $campo2 
     */
    public function setCampo2($campo2) {
        $this->_campo2 = $campo2;
    }

    /**
     * Obtiene el valor de _campo3 
     * @return type string 
     */
    public function getCampo3() {
        return $this->_campo3;
    }

    /**
     * Estable el valor a _campo3 
     * @param type string $campo3 
     */
    public function setCampo3($campo3) {
        $this->_campo3 = $campo3;
    }

    /**
     * Obtiene el valor de _campo4 
     * @return type string 
     */
    public function getCampo4() {
        return $this->_campo4;
    }

    /**
     * Estable el valor a _campo4 
     * @param type string $campo4 
     */
    public function setCampo4($campo4) {
        $this->_campo4 = $campo4;
    }

    /**
     * Obtiene el valor de _fecha 
     * @return type date 
     */
    public function getFecha() {
        return $this->_fecha;
    }

    /**
     * Estable el valor a _fecha 
     * @param type date $fecha 
     */
    public function setFecha($fecha) {
        $this->_fecha = $fecha;
    }

}

$ss = new Prueba();
$ss->setCampo1('vamos');
$ss->setCampo2('todos');
$ss->setCampo3('ganÁá?rsssssssssssss');
$ss->setCampo4('partido');

$ss->createPrueba();


