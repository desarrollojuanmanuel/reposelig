<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'PDOext.php';

/**
 * Description of transactioninterface
 *
 * @author jgutierrez
 */
class transactioninterface extends PDOext {

    /**
     * Array de los valores de la tabla
     * @var array 
     */
    protected $_arraymap = array();

    /**
     * Nombre de la tabla
     * @var string 
     */
    protected $_nametable;

    /**
     * Cotejamiento de la tabla
     * @var string 
     */
    protected $_engine;

    /**
     * nombre de la condicion
     * @var type 
     */
    protected $_namefilecondition;

    /**
     * Valor de la condicion
     * @var int 
     */
    protected $_valuefilecondition;

    /**
     * Datos de la tabla
     * @var array 
     */
    protected $_alldata;

    /**
     * Objeto PDO
     * @var PDO 
     */
    protected $_prepare;

    /**
     * SQL dinamico
     * @var string 
     */
    protected $_SQL;

    /**
     * clave valor
     * @var array 
     */
    protected $_arrayvalues;

    /**
     * Nombre del campo
     * @var string 
     */
    private $_filename;

    /**
     * Valores del campo
     * @var type 
     */
    private $_values;

    /**
     * Objeto PDO
     * @var PDO 
     */
    private $_PDO;

    /**
     * retorno
     * @var bolean 
     */
    private $_return;

    /**
     * Bandera que indica el tipo de consulta
     * @var boolean 
     */
    private $_all = false;

    /**
     * Bandera que indica el tipo de consulta
     * @var type 
     */
    private $_allasocnum = false;

    /**
     * Cantidad de registros
     * @var type 
     */
    protected $_rowCount = false;

    /**
     * Metodo constructor de la clase
     */
    protected function __construct() {
        $this->_PDO = PDOext::getInstance();
    }

    /**
     * Contiene valores de la tabla
     */
    protected function arraymap() {
        
    }

    /**
     * contiene array de actualizacion
     */
    protected function arrayupdate() {
        
    }

    /**
     * Metodo para crear un registro en la tabla
     * @return bolean
     */
    protected function create() {
        $this->generateInsert();
        $this->typeTransacction();
        return $this->_return;
    }

    /**
     * Metodo para actualizar un registro por el id de la tabla
     */
    protected function update() {
        $this->generateUpdate();
        $this->typeTransacction();
    }

    /**
     * Metodo que inactivar un registtro de la tabla
     * @return type
     */
    protected function delete() {
        $this->generateDelete();
        $this->typeTransacction();
        return $this->_return;
    }

    /**
     * Metedo para consultar el total de la tabla
     */
    public function selectAll() {
        $this->generateSelectAll();
        $this->_all = true;
        $this->typeTransacction();
        $this->utf8_decode_array();
    }

    /**
     * Metedo para consultar el total de la tabla
     */
    protected function selectAsocNum() {
        $this->generateSelectAll();
        $this->_allasocnum = true;
        $this->typeTransacction();
        $this->utf8_decode_array();
    }

    protected function countRows() {
        $this->_rowCount = true;
        $this->generateSelectCondition();
        $this->typeTransacction();
    }

    /**
     * 
     */
    protected function runSQLFree() {
        $this->typeTransacction();
    }

    protected function selectFetchAssoc() {
        $this->_allasocnum = true;
        $this->generateSelectCondition();
        $this->typeTransacction();
    }

    /**
     * Metodo encargado de construir un insert
     */
    private function generateInsert() {
        $this->arraymap();
        $count = 1;
        $this->_filename = "INSERT INTO $this->_nametable (";
        $this->_values = '';
        $this->utf8_encode_array();
        foreach ($this->_arraymap as $key => $value) {
            if (count($this->_arraymap) != $count) {
                $this->_filename .= "$key,";
                $this->_arrayvalues[':' . $key] = $value;
                $this->_values .= ":$key, ";
            } else {
                $this->_filename .= "$key";
                if (empty($value)) {
                    $value = 'NOW()';
                } else {
                    $value = $this->_PDO->quote($value);
                }
                $this->_values .= $value;
            }
            $count++;
        }

        $this->_SQL = $this->_filename . ') VALUES (' . $this->_values . ')';
    }

    /**
     * Metodo encargado de construir un update
     */
    protected function generateUpdate() {
        $this->arrayupdate();
        $count = 1;
        $this->_filename = "UPDATE $this->_nametable SET ";
        $this->_values = '';
        foreach ($this->_arraymap as $key => $value) {
            if (count($this->_arraymap) != $count) {
                $this->_filename .= "$key = :$key,";
                $this->_arrayvalues[':' . $key] = $value;
            } else {
                $this->_filename .= " $key = :$key";
                $this->_arrayvalues[':' . $key] = $value;
            }
            $count++;
        }
        $this->generateCondition();
        $this->_SQL = "$this->_filename WHERE $this->_namefilecondition = :$this->_namefilecondition";
    }

    /**
     * Metodo encargado de construir un delete
     */
    private function generateDelete() {
        $this->generateCondition();
        $this->_SQL = $this->_filename = "DELETE FROM $this->_nametable WHERE $this->_namefilecondition = :$this->_namefilecondition";
    }

    /**
     * * Metodo encargado de construir un select toatal
     */
    private function generateSelectAll() {
        $this->arraymap();
        $count = 1;

        $this->_arraymap[$this->_namefilecondition] = NULL;
        $this->_filename = "SELECT ";
        $this->_values = '';
        foreach ($this->_arraymap as $key => $value) {
            if (count($this->_arraymap) != $count) {
                $this->_filename .= "$key, ";
                $this->_values .= ":$key, ";
            } else {
                $this->_filename .= "$key";
                if (empty($value)) {
                    $value = 'NOW()';
                } else {
                    $value = $this->_PDO->quote($value);
                }
                $this->_values .= $value;
            }
            $count++;
        }

        $this->_SQL = $this->_filename . ' FROM ' . $this->_nametable . " ORDER BY $this->_namefilecondition ASC";
    }

    /**
     * 
     */
    private function generateSelectCondition() {

        $this->_values = '';
        $this->_filename = '';
        foreach ($this->_arraymap as $key => $value) {
            $this->_filename .= "$key";
            $this->_values .= ":$key ";

            $this->_arrayvalues[':' . $key] = $value;
        }
        $this->_SQL = "SELECT * FROM $this->_nametable WHERE $this->_filename = $this->_values";
    }

    /**
     * * Metodo encargado de construir una condicion
     */
    private function generateCondition() {
        $this->_arrayvalues[':' . $this->_namefilecondition] = $this->_valuefilecondition;
    }

    /**
     * Metodo encargado de evaluar el cotejamiento de la tabla
     */
    private function typeTransacction() {
        if ($this->_engine == 'InnoDB') {
            $this->transacctionON();
        }

        if ($this->_engine == 'MyISAM') {
            $this->transacctionOFF();
        }
    }

    /**
     * Metodo encargado de ejecutar un sql con transacciones
     */
    private function transacctionON() {
        try {
            $this->_PDO->beginTransaction();
            $this->_prepare = $this->_PDO->prepare($this->_SQL);
            $this->_prepare->execute($this->_arrayvalues);
            $return = $this->_PDO->commit();
            die($return);
        } catch (Exception $e) {

            $this->_PDO->rollback();
            echo "Fallo: " . $e->getMessage() . '' . var_dump($e->getTrace());
        }
    }

    /**
     * Metodo encargado de ejecutar un sql sin transacciones 
     */
    private function transacctionOFF() {
        try {
            $this->_prepare = $this->_PDO->prepare($this->_SQL);
            $return = $this->_prepare->execute($this->_arrayvalues);

            if ($this->_rowCount) {
                $this->_alldata = $this->_prepare->rowCount();
            }

            if ($this->_all) {
                $this->_alldata = $this->_prepare->fetchAll();
            }

            if ($this->_allasocnum) {
                $this->_alldata = $this->_prepare->fetchall(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            echo "Fallo: " . $e->getMessage() . '' . var_dump($e->getTrace());
            die;
        }
        $this->_return = $return;
    }

    /**
     * Metodo encargado de convertir caracteres especiales dentro de un array
     * @param type $array
     * @return type
     */
    private function utf8_encode_array() {
        $array = $this->_arraymap;
        array_walk_recursive($array, function(&$item, $key) {
            if (!mb_detect_encoding($item, 'utf-8', true)) {
                $item = utf8_encode($item);
            }
        });
        $this->_arraymap = $array;
        return $this->_arraymap;
    }

    /**
     * Metodo encargado de convertir caracteres especiales dentro de un array
     * @param type $array
     * @return type
     */
    private function utf8_decode_array() {
        $array = $this->_alldata;
        array_walk_recursive($array, function(&$item, $key) {
            if (!mb_detect_encoding($item, 'utf-8', true)) {
                $item = utf8_decode($item);
            }
        });

        $this->_alldata = $array;
        return $this->_alldata;
    }

}
