

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
class Cliente extends transactioninterface {

    /**
     * parametro _idcliente
     * @var type int
     */
    private $_idcliente;

    /**
     * parametro _codigo_cliente
     * @var type string
     */
    private $_codigo_cliente;

    /**
     * parametro _nombre
     * @var type string
     */
    private $_nombre;

    /**
     * parametro _nombre_cial
     * @var type string
     */
    private $_nombre_cial;

    /**
     * parametro _contacto
     * @var type string
     */
    private $_contacto;

    /**
     * parametro _correo
     * @var type string
     */
    private $_correo;

    /**
     * parametro _vendedor
     * @var type int
     */
    private $_vendedor;

    /**
     * parametro _direccion
     * @var type string
     */
    private $_direccion;

    /**
     * parametro _dimension0
     * @var type int
     */
    private $_dimension0;

    /**
     * parametro _dimension1
     * @var type int
     */
    private $_dimension1;

    /**
     * parametro _dimension2
     * @var type int
     */
    private $_dimension2;

    /**
     * parametro _status
     * @var type int
     */
    private $_status;

    /**
     * Numero de registros
     * @var int 
     */
    private $_numfiles;

    /**
     * parametro _fecha
     * @var type date
     */
    private $_fecha;

    /**
     * 
     * @var array 
     */
    private $_cliente_data;

    /**
     * Constructor de la clase Cliente
     */
    public function __construct() {
        $this->_nametable = 'cliente';
        $this->_engine = 'MyISAM';
        parent::__construct();
    }

    /**
     * Metodo sobre escrito 
     * @param type transactioninterface
     */
    public function arraymap() {
        $this->_arraymap = array(
            "codigo_cliente" => $this->_codigo_cliente,
            "nombre" => $this->_nombre,
            "nombre_cial" => $this->_nombre_cial,
            "contacto" => $this->_contacto,
            "correo" => $this->_correo,
            "vendedor" => $this->_vendedor,
            "direccion" => $this->_direccion,
            "dimension0" => $this->_dimension0,
            "dimension1" => $this->_dimension1,
            "dimension2" => $this->_dimension2,
            "status" => $this->_status,
            "fecha" => $this->_fecha
        );
    }

    /**
     * Metodo sobre escrito 
     * @param type transactioninterface
     */
    public function arrayupdate() {
        if (!empty($this->_codigo_cliente)) {
            $this->_arraymap["codigo_cliente"] = $this->_codigo_cliente;
        }
        if (!empty($this->_nombre)) {
            $this->_arraymap["nombre"] = $this->_nombre;
        }
        if (!empty($this->_nombre_cial)) {
            $this->_arraymap["nombre_cial"] = $this->_nombre_cial;
        }
        if (!empty($this->_contacto)) {
            $this->_arraymap["contacto"] = $this->_contacto;
        }
        if (!empty($this->_correo)) {
            $this->_arraymap["correo"] = $this->_correo;
        }
        if (!empty($this->_vendedor)) {
            $this->_arraymap["vendedor"] = $this->_vendedor;
        }
        if (!empty($this->_direccion)) {
            $this->_arraymap["direccion"] = $this->_direccion;
        }

        if (!empty($this->_dimension0)) {
            $this->_arraymap["dimension0"] = $this->_dimension0;
        }
        if (!empty($this->_dimension1)) {
            $this->_arraymap["dimension1"] = $this->_dimension1;
        }
        if (!empty($this->_dimension2)) {
            $this->_arraymap["dimension2"] = $this->_dimension2;
        }
        if (!empty($this->_status)) {
            $this->_arraymap["status"] = $this->_status;
        }
        if (!empty($this->_fecha)) {
            $this->_arraymap["fecha"] = $this->_fecha;
        }
    }

    /**
     * Metodo para insertar un nuevo registro
     */
    public function createCliente() {
        $res = $this->create();
        return $res;
    }

    /**
     * Metodo para actualizar un registro
     */
    public function updateCliente() {
        if ($this->newCondition()) {
            $this->update();
        }
    }

    /**
     * Metodo que genera una nueva condicion para actualizar o eliminar
     */
    public function deleteCliente() {
        if ($this->newCondition()) {
            $this->delete();
        }
    }

    /**
     * Metodo que genera una nueva condicien para actualizar o eliminar
     */
    public function selectFectAll() {
        $this->_namefilecondition = "idcliente";
        $this->_order = "desc";
        $this->selectAll();
        return $this->_alldata;
    }

    /**
     * 
     * @param type $campo
     * @param type $valor
     */
    public function countCliente($campo, $valor) {
        $this->_arraymap[$campo] = $valor;
        $this->countRows();
        $this->setNumFiles($this->_alldata);
    }

    /**
     * 
     * @param type $type
     * @param type $campo
     */
    public function generateSQLCliente($type, $campo) {
        switch ($type) {
            case 'editCliente':
                $nombre_campo = $campo;
                $id = 'idcliente';
                $this->_arrayvalues[":$nombre_campo"] = $this->_cliente_data["$nombre_campo"];
                $this->_arrayvalues[":$id"] = $this->_cliente_data["$id"];
                $sql = "SELECT * FROM cliente WHERE $nombre_campo = :$nombre_campo AND $id <> :$id";
                $this->_rowCount = true;
                break;

            default:
                break;
        }
        $this->_SQL = $sql;
        $this->runSQLFree();
        $this->setNumFiles($this->_alldata);
    }

    /**
     * 
     * @param type $campo
     * @param type $valor
     */
    public function selectFetchAssocCliente($campo, $valor) {
        $this->_arraymap[$campo] = $valor;
        $this->selectFetchAssoc();
        foreach ($this->_alldata[0] as $key => $value) {
            $attribute_name = '_' . $key;
            $this->$attribute_name = $value;
        }
    }

    /**
     * Metodo que genera una nueva condicien para actualizar o eliminar
     */
    private function newCondition() {
        if (!empty($this->_idcliente)) {
            $this->_namefilecondition = "idcliente";
            $this->_valuefilecondition = $this->_idcliente;
        }
    }

    /**
     * Metodo de consulta
     */
    public function consultPrueba() {
        
    }

    /**
     * Obtiene el valor de _idcliente 
     * @return type int 
     */
    public function getIdcliente() {
        return $this->_idcliente;
    }

    /**
     * Estable el valor a _idcliente 
     * @param type int $idcliente 
     */
    public function setIdcliente($idcliente) {
        $this->_idcliente = $idcliente;
    }

    /**
     * Obtiene el valor de _codigo_cliente 
     * @return type string 
     */
    public function getCodigo_cliente() {
        return $this->_codigo_cliente;
    }

    /**
     * Estable el valor a _codigo_cliente 
     * @param type string $codigo_cliente 
     */
    public function setCodigo_cliente($codigo_cliente) {
        $this->_codigo_cliente = $codigo_cliente;
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
     * Obtiene el valor de _nombre_cial 
     * @return type string 
     */
    public function getNombre_cial() {
        return $this->_nombre_cial;
    }

    /**
     * Estable el valor a _nombre_cial 
     * @param type string $nombre_cial 
     */
    public function setNombre_cial($nombre_cial) {
        $this->_nombre_cial = $nombre_cial;
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

    /**
     * Obtiene el valor de _vendedor 
     * @return type int 
     */
    public function getVendedor() {
        return $this->_vendedor;
    }

    /**
     * Estable el valor a _vendedor 
     * @param type int $vendedor 
     */
    public function setVendedor($vendedor) {
        $this->_vendedor = $vendedor;
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
     * Obtiene el valor de _dimension0 
     * @return type int 
     */
    public function getDimension0() {
        return $this->_dimension0;
    }

    /**
     * Estable el valor a _dimension0 
     * @param type int $dimension0 
     */
    public function setDimension0($dimension0) {
        $this->_dimension0 = $dimension0;
    }

    /**
     * Obtiene el valor de _dimension1 
     * @return type int 
     */
    public function getDimension1() {
        return $this->_dimension1;
    }

    /**
     * Estable el valor a _dimension1 
     * @param type int $dimension1 
     */
    public function setDimension1($dimension1) {
        $this->_dimension1 = $dimension1;
    }

    /**
     * Obtiene el valor de _dimension2 
     * @return type int 
     */
    public function getDimension2() {
        return $this->_dimension2;
    }

    /**
     * Estable el valor a _dimension2 
     * @param type int $dimension2 
     */
    public function setDimension2($dimension2) {
        $this->_dimension2 = $dimension2;
    }

    /**
     * Obtiene el valor de _status 
     * @return type int 
     */
    public function getStatus() {
        return $this->_status;
    }

    /**
     * Estable el valor a _status 
     * @param type int $status 
     */
    public function setStatus($status) {
        $this->_status = $status;
    }

    /**
     * Obtiene el valor de _numfiles 
     * @return type int 
     */
    public function getNumFiles() {
        return $this->_numfiles;
    }

    /**
     * Estable el valor a _numfiles 
     * @param type int $numfiles 
     */
    public function setNumFiles($numfiles) {
        $this->_numfiles = $numfiles;
    }

    /**
     * Estable el valor a _cliente_data
     * @param array $data
     */
    public function setClienteData($data) {
        $this->_cliente_data = $data;
    }

}
