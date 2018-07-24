<?php
/* Smarty version 3.1.30, created on 2017-07-12 19:24:05
  from "C:\wamp64\www\selig\templates\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59667755c79cf9_64065601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71193b2d4cdd453631f08a95cc961860c6cfebc' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\templates\\menu.html',
      1 => 1497293938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59667755c79cf9_64065601 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--li class="sidebar-search">
                            <!--div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div-->
                            <!-- /input-group -->
                        <!--/li -->
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['mn_menu']->value;?>
/"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
			<li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['mn_cliente']->value;?>
/"><i class="fa fa-user fa-fw"></i>Clientes</a>
                        </li>
						<li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['mn_usuario']->value;?>
/"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Configuracion<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_producto']->value;?>
/">productos</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_comercial']->value;?>
/">Comerciales</a>
                                </li>
								<li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_gescalidad']->value;?>
/">Gestion de calidad</a>
                                </li>
								<li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_paramgeneral']->value;?>
/">Parametros Generales</a>
                                </li>
								<li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_unidadnegocio']->value;?>
/">Unidades de negocio</a>
                                </li>
								<li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_region']->value;?>
/">Regiones</a>
                                </li>
								<li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_sucursal']->value;?>
/">Sucursales</a>
                                </li>
								<li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mn_calendario']->value;?>
/">Calendario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['mn_hispedidos']->value;?>
/"><i class="fa fa-table fa-fw"></i> Historico de Pedidos</a>
                        </li>
						<li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['mn_login']->value;?>
/"><i class="fa fa-power-off fa-fw"></i>Salir</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div><?php }
}
