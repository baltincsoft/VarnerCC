<?php /* Smarty version Smarty 3.1.4, created on 2015-06-27 14:36:35
         compiled from ".\templates\viewNotes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247558f00a8741012-70824927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6d9b5dc9dca2f2d89070e3c2d717c80fa424436' => 
    array (
      0 => '.\\templates\\viewNotes.tpl',
      1 => 1435440897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247558f00a8741012-70824927',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_558f00a89789a',
  'variables' => 
  array (
    'tot_note_rows' => 0,
    'Notes' => 0,
    'L' => 0,
    'EmployeeID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f00a89789a')) {function content_558f00a89789a($_smarty_tpl) {?><div>
    <table width='100%' align='center'>
        <?php if ($_smarty_tpl->tpl_vars['tot_note_rows']->value>0){?>
        <?php  $_smarty_tpl->tpl_vars['L'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['L']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['L']->key => $_smarty_tpl->tpl_vars['L']->value){
$_smarty_tpl->tpl_vars['L']->_loop = true;
?>
	<tr>
            <td><?php echo $_smarty_tpl->tpl_vars['L']->value['Initial'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['L']->value['LastUpdatedDate'];?>
</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class='cl-container-tr-row'>
            <td colspan='3'>
                <div class="controls">
                    <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['L']->value['Color'];?>
 id='description_<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteDescription'];?>
'/> 
                </div>
            </td>
            <td style="width:12%">
                <a href='#' class="btn green" onClick='javascript:updateNote(<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
)'>Update</a>
            </td>
            <td style="width:10%">
                <a href='#' class="btn blue" onClick='javascript:deleteNote(<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
)'>Delete</a>
            </td>
        </tr>
        <?php } ?>
        <?php }else{ ?>
            <tr>
                <td colspan="5">Notes not found</td>
            </tr>
        <?php }?>
            
    </table>
</div><?php }} ?>