<?php
/* Smarty version 3.1.30, created on 2017-07-12 19:24:20
  from "C:\wamp64\www\selig\templates\script.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59667764ba6758_79057306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a127c75930e2a037f8ae59e0527796ee8e3a4905' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\templates\\script.html',
      1 => 1498526758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59667764ba6758_79057306 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/metisMenu/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

<!-- Morris Charts JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/raphael/raphael.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/morrisjs/morris.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
data/morris-data.js"><?php echo '</script'; ?>
>


<!-- DataTables JavaScript -->
<?php if ($_smarty_tpl->tpl_vars['datatables']->value) {?>  
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/datatables/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/datatables-plugins/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/datatables-responsive/dataTables.responsive.js"><?php echo '</script'; ?>
>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<?php }?>

<!-- bootstrap-select JavaScript -->
<?php if ($_smarty_tpl->tpl_vars['bootselect']->value) {?> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dist/js/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['loadvalidator']->value) {?> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/bootstrap-validator-master/js/validator.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['validator']->value;?>
 
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['loadajax']->value) {
echo $_smarty_tpl->tpl_vars['xajax']->value;?>

<?php }?>


<?php }
}
