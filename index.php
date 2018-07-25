<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Clase main para inicio del programa
 *
 * @author Juan Mannuel Gutierrez
 * email juangu455@gamil.com
 */
abstract class ClassIndex {

    static function load() {
        header("Location: http://localhost/selig/modules/home/");
    }

}
ClassIndex::load();
