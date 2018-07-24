<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/db/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/lib/db/config/transactioninterface.php';

/**
 * Clase de administracion para la tabla prueba
 *
 * @author Juan Manuel Gutierrez
 * @Correo juangu455@gmail.com
 */
class Clientess extends transactioninterface {

    /**
     * parametro _id_cliente
     * @var type int
     */
    private $_id_cliente;

    /**
     * parametro _nombre
     * @var type string
     */
    private $_nombre;

    /**
     * parametro _direccion
     * @var type string
     */
    private $_direccion;

    /**
     * parametro _email
     * @var type string
     */
    private $_email;

    /**
     * parametro _region
     * @var type int
     */
    private $_region;

    /**
     * parametro _telefono
     * @var type string
     */
    private $_telefono;

    /**
     * parametro _fax
     * @var type string
     */
    private $_fax;

    /**
     * parametro _comercial
     * @var type string
     */
    private $_comercial;

    /**
     * parametro _nombre_comercial
     * @var type string
     */
    private $_nombre_comercial;

    /**
     * parametro _contacto
     * @var type string
     */
    private $_contacto;

    /**
     * parametro _fecha
     * @var type date
     */
    private $_fecha;

    /**
     * Constructor de la clase
     */
    public function __construct() {
        $this->_nametable = 'clientes';
        $this->_engine = 'MyISAM';
        parent::__construct();
    }

    /**
     * Método sobre escrito 
     * @param type transactioninterface
     */
    public function arraymap() {
        $this->_arraymap = array(
            "nombre" => $this->_nombre,
            "direccion" => $this->_direccion,
            "email" => $this->_email,
            "region" => $this->_region,
            "telefono" => $this->_telefono,
            "fax" => $this->_fax,
            "comercial" => $this->_comercial,
            "nombre_comercial" => $this->_nombre_comercial,
            "contacto" => $this->_contacto,
            "fecha" => $this->_fecha
        );
    }

    /**
     * Método sobre escrito 
     * @param type transactioninterface
     */
    public function arrayupdate() {
        if (!empty($this->_nombre)) {
            $this->_arraymap["nombre"] = $this->_nombre;
        }
        if (!empty($this->_direccion)) {
            $this->_arraymap["direccion"] = $this->_direccion;
        }
        if (!empty($this->_email)) {
            $this->_arraymap["email"] = $this->_email;
        }
        if (!empty($this->_region)) {
            $this->_arraymap["region"] = $this->_region;
        }
        if (!empty($this->_telefono)) {
            $this->_arraymap["telefono"] = $this->_telefono;
        }
        if (!empty($this->_fax)) {
            $this->_arraymap["fax"] = $this->_fax;
        }
        if (!empty($this->_comercial)) {
            $this->_arraymap["comercial"] = $this->_comercial;
        }
        if (!empty($this->_nombre_comercial)) {
            $this->_arraymap["nombre_comercial"] = $this->_nombre_comercial;
        }
        if (!empty($this->_contacto)) {
            $this->_arraymap["contacto"] = $this->_contacto;
        }
        if (!empty($this->_fecha)) {
            $this->_arraymap["fecha"] = $this->_fecha;
        }
    }

    /**
     * Método para insertar un nuevo registro
     */
    public function createClientes() {
        return $this->create();
    }

    /**
     * Método para actualizar un registro
     */
    public function updateClientes() {
        if ($this->newCondition()) {
            $this->update();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function deleteClientes() {
        if ($this->newCondition()) {
            $this->delete();
        }
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    public function selectFectAll() {
        $this->_namefilecondition = "id_cliente";
        $this->_order = 'desc';
        $this->selectAll();
        return $this->_alldata;
    }

    /**
     * Método que genera una nueva condición para actualizar o eliminar
     */
    private function newCondition() {
        if (!empty($this->_id_cliente)) {
            $this->_namefilecondition = "id_cliente";
            $this->_valuefilecondition = $this->_id_cliente;
            return true;
        }
    }

    /**
     * Método de consulta
     */
    public function consultPrueba() {
        
    }

    /**
     * Obtiene el valor de _id_cliente 
     * @return type int 
     */
    public function getId_cliente() {
        return $this->_id_cliente;
    }

    /**
     * Estable el valor a _id_cliente 
     * @param type int $id_cliente 
     */
    public function setId_cliente($id_cliente) {
        $this->_id_cliente = $id_cliente;
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
     * Obtiene el valor de _direccion 
     * @return type string 
     */
    public function getDireccion() {
        return $this->_direccion;
    }

    /**
     * Estable el valor a _direccion 
     * @param type string $direccion 
     */
    public function setDireccion($direccion) {
        $this->_direccion = $direccion;
    }

    /**
     * Obtiene el valor de _email 
     * @return type string 
     */
    public function getEmail() {
        return $this->_email;
    }

    /**
     * Estable el valor a _email 
     * @param type string $email 
     */
    public function setEmail($email) {
        $this->_email = $email;
    }

    /**
     * Obtiene el valor de _region 
     * @return type int 
     */
    public function getRegion() {
        return $this->_region;
    }

    /**
     * Estable el valor a _region 
     * @param type int $region 
     */
    public function setRegion($region) {
        $this->_region = $region;
    }

    /**
     * Obtiene el valor de _telefono 
     * @return type string 
     */
    public function getTelefono() {
        return $this->_telefono;
    }

    /**
     * Estable el valor a _telefono 
     * @param type string $telefono 
     */
    public function setTelefono($telefono) {
        $this->_telefono = $telefono;
    }

    /**
     * Obtiene el valor de _fax 
     * @return type string 
     */
    public function getFax() {
        return $this->_fax;
    }

    /**
     * Estable el valor a _fax 
     * @param type string $fax 
     */
    public function setFax($fax) {
        $this->_fax = $fax;
    }

    /**
     * Obtiene el valor de _comercial 
     * @return type string 
     */
    public function getComercial() {
        return $this->_comercial;
    }

    /**
     * Estable el valor a _comercial 
     * @param type string $comercial 
     */
    public function setComercial($comercial) {
        $this->_comercial = $comercial;
    }

    /**
     * Obtiene el valor de _nombre_comercial 
     * @return type string 
     */
    public function getNombre_comercial() {
        return $this->_nombre_comercial;
    }

    /**
     * Estable el valor a _nombre_comercial 
     * @param type string $nombre_comercial 
     */
    public function setNombre_comercial($nombre_comercial) {
        $this->_nombre_comercial = $nombre_comercial;
    }

    /**
     * Obtiene el valor de _contacto 
     * @return type string 
     */
    public function getContacto() {
        return $this->_contacto;
    }

    /**
     * Estable el valor a _contacto 
     * @param type string $contacto 
     */
    public function setContacto($contacto) {
        $this->_contacto = $contacto;
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
