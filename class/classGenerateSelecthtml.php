<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Clase classGenerateSelecthtml clase encargarda de generar select y retornarlos como html
 *
 * @author jgutierrez
 */
class classGenerateSelecthtml {

    private $_data;
    private $_idselect;
    private $_selecthtml;
    private $_namelabel;
    private $_nameoption;
    private $_idoption;

    private function generateSelectHtml() {

        $this->_selecthtml = '';
        $this->_selecthtml .= "<label class='control-label' for='$this->_idselect'>" . utf8_encode($this->_namelabel) . "</label>";
        $this->_selecthtml .= "<div class='col-xs-13 selectContainer'>";
        $this->_selecthtml .= "<select  style class='form-control' id='$this->_idselect' name='$this->_idselect' id='$this->_idselect'>";
        $this->_selecthtml .= "<option style='background: rgba(0, 0, 0, 0.1);' value=''>Seleccione</option>";

        foreach ($this->_data as $key => $values) {
            foreach ($values as $id => $value) {

                if ($id == $this->_nameoption) {
                    $nameselect = $value;
                }
                if ($id == $this->_idoption) {
                    $idselect = $value;
                }

                if (!empty($nameselect) && !empty($idselect)) {
                    $this->_selecthtml .= "<option style='background: rgba(37, 164, 246, 0.2);' value='$idselect'>" . strtoupper($nameselect) . "</option>";
                    $nameselect = '';
                    $idselect = '';
                }
            }
        }
        $this->_selecthtml .= "</select>";
        $this->_selecthtml .= "</div>";
    }

    /**
     * Metodo encargardo de configurar el select para vendedores
     * @return string
     */
    public function selectVendedor() {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/modules/configuracion/comerciales/admin/Vendedor.php';
        $objVendedor = new Vendedor();
        $data = $objVendedor->selectAssocNumb();
        $this->_data = $data;
        $this->_idselect = 'vendedor';
        $this->_namelabel = 'Comercial';
        $this->_nameoption = 'nombre';
        $this->_idoption = 'idvendedor';
        $this->generateSelectHtml();
        return $this->_selecthtml;
    }

    /**
     * Metodo encargardo de configurar el select para regiones
     * @return string
     */
    public function selectRegion() {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/modules/configuracion/region/admin/Dimension0.php';

        $objDimension = new Dimension1();
        $data = $objDimension->selectAssocNumb();
        $this->_data = $data;
        $this->_idselect = 'iddimension1';
        $this->_namelabel = 'Region';
        $this->_nameoption = 'nombre';
        $this->_idoption = 'iddimension1';
        $this->generateSelectHtml();
        return $this->_selecthtml;
    }

}
