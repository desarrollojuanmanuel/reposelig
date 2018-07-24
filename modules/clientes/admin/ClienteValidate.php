<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/selig/class/Validate.php';

/**
 * Description of ClienteValidate
 *
 * @author jgutierrez
 */
class ClienteValidate extends Validate {

    public $_validate;
    public $_estvalidatecliente;
    public $_idform;
    public $_idinputvalidate;

    /**
     * Metodo construnctor de la clase ClienteValidate
     */
    public function __construct() {
        parent::__construct();
        $this->clienteStateValidate();
    }

    /**
     * Metodo encargado de la configuracion del validador
     */
    public function loadValidate() {

        $this->_validate = "
            <style type='text/css'>

                #$this->_idform .has-error .control-label,
                #$this->_idform .has-error .help-block,
                #$this->_idform .has-error .form-control-feedback {
                    color:;
                }

                #$this->_idform .has-success .control-label,
                #$this->_idform .has-success .help-block,
                #$this->_idform .has-success .form-control-feedback {
                    color:;
                }
            </style>
            
            <script>
                 function loadScript(){
                    xajax_addcliente(xajax.getFormValues('$this->_idform'));
                    return false;   
                }
            </script>
            
            <script>
                $('#$this->_idform').formValidation({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        codigo_cliente: {
                            validators: {
                                stringLength: {
                                    min: 1,
                                    max: 30,
                                    message: '" . $this->encodeString('Minimo 1 y maximo 30') . "'
                                },
                                regexp: {
                                    regexp: $this->_expalphanumeric,
                                    message: '" . $this->encodeString('El código cliente que intenta digitar no es valido') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique el código') . "'
                                },
                                onSuccess: function(e, data) {
                                    // data.fv is the plugin instance
                                    // Revalidate the start date if it's not valid
                                    if (!data.fv.isValidField('')) {
                                        data.fv.revalidateField('');
                                    }
                                }
                            }
                        },                
                        nombre: {
                            validators: {
                                regexp: {
                                    regexp: $this->_expregstring,
                                    message: '" . $this->encodeString('EL campo solo puede contener letras') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique nombre') . "'
                                }
                            }
                        },
                        direccion: {
                            validators: {
                                regexp: {
                                    regexp: $this->_expregsdireccion,
                                    message: '" . $this->encodeString('Por favor, indique una dirección validas') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique la direccion') . "'
                                }
                            }
                        },
                        iddimension1: {
                            validators: {
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique la región') . "'
                                }
                            }
                        },
                        vendedor: {
                            validators: {
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, seleccione el comercial') . "'
                                }
                            }
                        },
                        nombre_cial: {
                            validators: {
                                regexp: {
                                    regexp: $this->_expregstring,
                                    message: '" . $this->encodeString('EL campo solo puede contener letras') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique el nombre del comercial') . "'
                                }
                            }
                        },
                        contacto: {
                            validators: {
                                regexp: {
                                    regexp: $this->_expregstring,
                                    message: '" . $this->encodeString('EL campo solo puede contener letras') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique el contacto') . "'
                                }
                            }
                        },
                        correo: {
                            validators: {
                                emailAddress: {
                                    message: '" . $this->encodeString('Por favor, introduce una dirección de correo electrónico válida') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique su correo') . "'
                                },
                                regexp: {
                                    regexp: $this->_expregsemail
                                }
                            }
                        }
                    }
                }).
                on('success.form.fv', function(e) {
                
                    
                   resetfrm = false;     
                    var stateform = parseInt($('#$this->_idinputvalidate').val());   

                    if(stateform){
                        $('#$this->_idinputvalidate').val(1);
                        resetfrm = true;  
                    }else{
                        $('#$this->_idinputvalidate').val(0);
                    }
                    
                    // Prevent form submission
                     e.preventDefault();

                     // You can get the form instance
                    var \$form = $(e.target);

                    // and the FormValidation instance
                    var fv = \$form.data('formValidation');
                    
                    if($('#action').val() == true){
                         xajax_editformcliente(xajax.getFormValues('$this->_idform'));
                    }else{
                        xajax_addcliente(xajax.getFormValues('$this->_idform'));
                    }   
                    
                });
                /*on('success.validator.fv', function(e, data) {
                
                    if(data.field == 'codigo_cliente' && data.validator === 'regexp'){
                        var value = $('#'+data.field).val();
                        if(value != ''){
                            e.preventDefault();
                            xajax_validatefilecliente(data.field, value);   
                            
                        }
                    }
                    if(data.field == 'correo' && data.validator === 'regexp'){
                        var value = $('#'+data.field).val();
                        if(value != ''){
                            e.preventDefault();
                            xajax_validatefilecliente(data.field, value);   
                            
                        }
                    }
                }); */   
        </script>
        
     ";
    }

    /**
     * Metodo encargado de estbabecer el input el id para el estado de la validacion
     */
    private function clienteStateValidate() {
        $this->_idinputvalidate = $this->_idvalidatestatus;
        $this->_estvalidatecliente = $this->_inputstatus;
    }

}
