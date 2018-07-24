<?php
/* Smarty version 3.1.30, created on 2017-09-05 16:50:34
  from "C:\wamp64\www\selig\modules\clientes\templates\clientes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aed5dad21218_36240373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3dbcd149b8a5d535b289e96bde6cf0d328b851' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\modules\\clientes\\templates\\clientes.html',
      1 => 1504630222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aed5dad21218_36240373 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">

    <!-- INCLUIMOS EL ARCHIVO QUE CONTIENE EL HEAD -->   
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <!--NO INSPECCIONAR CONSOLA->
    <!--body oncontextmenu="return false" onkeydown="" onmousedown=""-->

    <body>

        <div id="wrapper">

            <!-- INCLUIMOS EL ARCHIVO QUE CONTIENE EL MENU -->   
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Clientes</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                La siguiente es la lista de clientes cargados en el sistema. Puede agregar direcciones y usuarios a cada cliente ingresando con el ícono Edit respectivo
                            </div>
                            <div class="panel-heading" id="addcl">
                                <a href="javascript:;" onclick="uploaddiv('form'); $('#action').val('0'); $('#id_cliente').val('0');">
                                    <span class="glyphicon-class">Crear Cliente</span>	
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="panel-heading" id="listcl" style="display:none;">
                                <a href="javascript:;" onclick="uploaddiv('list')">
                                    <span class="glyphicon-class">Listar Clientes</span>	
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                </a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" id="table">
                                <table class="table-striped table-bordered table-hover table" id="idcliente">

                                </table>
                            </div>

                            <div class="panel-body" id="form" style="display:none;">
                                <form data-toggle="validator" role="forms" id="<?php echo $_smarty_tpl->tpl_vars['idform']->value;?>
" action="">
                                    <input type="hidden" id="action" value="0">
                                    <input type="hidden" id="id_cliente" name="idcliente" value="0">
                                    <div class="col-md-12">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="telefono"  class="control-label">C&oacute;digo cliente </label>
                                                <input type="text"  class="form-control" name="codigo_cliente" id="codigo_cliente">
                                            </div>
                                        </div>    

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="inputError">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" id="nombre"/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="inputError">Nombre Comercial</label>
                                                <input type="text" class="form-control" id="nombre_cial" name="nombre_cial" id="nombre_cial">

                                            </div>
                                        </div>   
                                    </div>

                                    <div class="col-md-12">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="contacto">Contacto</label>
                                                <input type="text" class="form-control" name="contacto" id="contacto">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="email">Email</label>
                                                <input type="text" class="form-control" name="correo" id="correo">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php echo $_smarty_tpl->tpl_vars['comercialhtml']->value;?>
       
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="inputError">Direccion</label>
                                                <input type="text" class="form-control" id="direccion" name="direccion" id="direccion"/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php echo $_smarty_tpl->tpl_vars['reghtml']->value;?>

                                            </div>
                                        </div>
                                    </div>    

                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <div class="form-check has-success">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="checkboxSuccess" checked>
                                                    activo
                                                </label>
                                            </div>
                                        </div>    
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Guardar</button>              
                                        </div> 

                                    </div>

                                </form>
                            </div> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <!-- INCLUIMOS EL ARCHIVO QUE CONTIENE LAS MODALES -->            
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


            <!-- INCLUIMOS VARIBALE QUE INDICA EL ESTADO DE LA VALIDACION-->  
            <?php echo $_smarty_tpl->tpl_vars['statevalidate']->value;?>


        </div>

        <!-- jQuery -->
        <!-- INCLUIMOS EL ARCHIVO QUE CONTIENE LIBRERIAS JS -->  
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['templates']->value)."/script.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <?php echo '<script'; ?>
>
            xajax_loadclientetable();
            function uploaddiv(val) {
                if (val == 'form') {
                    $("#table").hide();
                    $('#form').show(250);
                    $("#addcl").hide();
                    $('#listcl').show(250);
                }
                if (val == 'list') {
                    $('#table').show(250);
                    $('#form').hide(250);
                    $("#addcl").show();
                    $('#listcl').hide(250);
                }
            }
        <?php echo '</script'; ?>
> 
    </body>
</html>
<?php }
}
