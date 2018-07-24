<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteValidate
 *
 * @author jgutierrez
 */
class ClienteValidate {

    public $_validate;
    public $_idform;
    private $_expregnumber;
    private $_expregstring;
    private $_expregsdireccion;
    private $_expregsemail;

    public function __construct() {
        $this->regularExpression();
    }

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
                        telefono: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                    message: '" . $this->encodeString('El teléfono debe tener un mínimo y un máximo de 10 caracteres') . "'
                                },
                                regexp: {
                                    regexp: $this->_expregnumber,
                                    message: '" . $this->encodeString('EL campo solo puede contener números') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique su teléfono') . "'
                                }
                            }
                        },
                        fax: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                    message: '" . $this->encodeString('Minimo 10 y maximo 10') . "'
                                },
                                regexp: {
                                    regexp: $this->_expregnumber,
                                    message: '" . $this->encodeString('EL campo solo puede contener números') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique su fax') . "'
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
                        region: {
                            validators: {
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, seleccione  la región') . "'
                                }
                            }
                        },
                        comercial: {
                            validators: {
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, seleccione el comercial') . "'
                                }
                            }
                        },
                        nombrecomercial: {
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
                        email: {
                            validators: {
                                emailAddress: {
                                    message: '" . $this->encodeString('Por favor, introduce una dirección de correo electrónico válida') . "'
                                },
                                notEmpty: {
                                    message: '" . $this->encodeString('Por favor, indique su correo') . "'
                                }
                            }
                        }
                    }
                })
                .on('success.form.fv', function(e) {
                    // Prevent form submission
                    e.preventDefault();

                    // You can get the form instance
                    var \$form = $(e.target);

                    // and the FormValidation instance
                    var fv = \$form.data('formValidation');

                    if(loadScript()){
                        alert('error');
                    }

                    var \$form = $(e.target);
                    \$form.formValidation('resetForm', true);      
                });
            
            
                   
        </script>
        
     ";
    }

    private function encodeString($param) {
        return utf8_encode($param);
    }

    private function regularExpression() {
        $this->_expregnumber = '/^[0-9]+$/';
        $this->_expregstring = '/^[a-áéíóúzA-Z ]+$/';
        $this->_expregsdireccion = '/^[a-zA-Z-0-9-# ]+$/';
        $this->_expregsemail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$ /';
    }

}
