<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Cliente.php';

/**
 * Description of classTableCliente
 *
 * @author jgutierrez
 */
class classTableCliente extends Cliente {

    /**
     * Atributo que se le establece el contenido de la tabla
     * @var classTableCliente 
     */
    public $_table;

    /**
     * Constructor de clase
     */
    public function __construct() {
        $this->headTableCliente();
        $this->bodyTableCliente();
    }

    /**
     * Metodo encargado de generar el contenido de la tabla
     */
    private function bodyTableCliente() {

        $objcliente = new Cliente();

        $data = $objcliente->selectFectAll();
        foreach ($data as $key => $value) {
            $this->_table .= '<tr class="warning">  ';
            $this->_table .= '<td>' . $data[$key]['idcliente'] . '</td>';
            $this->_table .= '<td>' . $data[$key]['codigo_cliente'] . '</td>';
            $this->_table .= '<td>' . $data[$key]['nombre'] . '</td>';
            $this->_table .= '<td>' . $data[$key]['nombre_cial'] . '</td>';
            $this->_table .= '<td>' . $data[$key]['contacto'] . '</td>';
            $this->_table .= '<td class="center">
                <a href="javascript:;" onclick="xajax_deletecliente(' . $data[$key]['idcliente'] . ');"><span class="fa fa-times "></span></a>
                <a href="javascript:;" onclick="alert(' . $data[$key]['idcliente'] . ');"><span class="fa fa-edit "></span></a></td>';
            $this->_table .= '</tr>';
        }
        $this->_table .= '</tbody';
    }

    /**
     * Metodo que crea el encabezado Encabezado de la tabla
     */
    private function headTableCliente() {
        $this->_table .= '
          <thead>
          <tr>
            <th>id</th>
            <th>Codigo cliente</th>
            <th>Nombre</th>
            <th>Nombre Comercial</th>
            <th>Contacto</th>
            <th>Opciones</th>
          </tr>
          </thead>
          <tbody>';
    }

}
