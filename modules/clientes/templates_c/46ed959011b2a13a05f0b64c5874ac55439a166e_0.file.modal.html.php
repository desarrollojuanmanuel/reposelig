<?php
/* Smarty version 3.1.30, created on 2017-08-22 19:37:14
  from "C:\wamp64\www\selig\templates\modal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599c87eae71cb5_42250039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46ed959011b2a13a05f0b64c5874ac55439a166e' => 
    array (
      0 => 'C:\\wamp64\\www\\selig\\templates\\modal.html',
      1 => 1503430628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599c87eae71cb5_42250039 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="xajax_loadclientetable();uploaddiv('list');">&times;</button>
                <h4 class="modal-title labelModal"></h4>
            </div>
            <div class="modal-body bodyModal"></div>
            <div class="modal-footer" id="buttonmodal">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="xajax_loadclientetable();uploaddiv('list');">Cerrar</button>
                <!--button type="button" class="btn btn-primary">Save changes</button-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>

    <!-- /.modal-dialog -->

</div>
<div class="modal fade" id="modelempty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title labelModal"></h4>
            </div>
            <div class="modal-body bodyModal"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="">Cerrar</button>
                <!--button type="button" class="btn btn-primary">Save changes</button-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><?php }
}
