<?php
/* Smarty version 3.1.30, created on 2017-07-12 19:23:58
  from "C:\wamp64\www\selig\templates\head.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966774ebf9029_09147074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bd3e41e9bf6ed1fd9a7efa41e6a914608b151e0' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\templates\\head.html',
      1 => 1497478474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966774ebf9029_09147074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dist/css/sb-admin-2.css" rel="stylesheet">

        
    <?php if ($_smarty_tpl->tpl_vars['loadajax']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

    <?php }?>

    
    <!-- DataTables CSS -->
    <?php if ($_smarty_tpl->tpl_vars['datatables']->value) {?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">    
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <?php }?>

    <!-- bootstrap-select CSS -->
    <?php if ($_smarty_tpl->tpl_vars['bootselect']->value) {?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dist/css/bootstrap-select.css" rel="stylesheet">
    <?php }?>

    <!-- Custom Fonts -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
</head>

<?php }
}
