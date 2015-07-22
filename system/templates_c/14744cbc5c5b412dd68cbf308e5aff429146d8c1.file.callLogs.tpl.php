<?php /* Smarty version Smarty 3.1.4, created on 2015-07-19 11:49:04
         compiled from ".\templates\callLogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3112055abe7d699f445-65373104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14744cbc5c5b412dd68cbf308e5aff429146d8c1' => 
    array (
      0 => '.\\templates\\callLogs.tpl',
      1 => 1437331737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3112055abe7d699f445-65373104',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_55abe7d726b63',
  'variables' => 
  array (
    'tot_note_rows' => 0,
    'Notes' => 0,
    'L' => 0,
    'EmployeeID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55abe7d726b63')) {function content_55abe7d726b63($_smarty_tpl) {?><div>
    <table width='100%' align='center'>
		<tr>
            <th style="width:4%;">Follow Up</th>
            <th style="width:15%">First Name</th>
			<th style="width:10%">Non Profit</th>
			<th style="width:10%">NP City</th>
			<th style="width:10%">NP Phone</th>
			<th colspan="2" style="width:35%">Log Description</th>
			<th style="width:7%;">Do Not Call</th>
			<th colspan="2" style="width:10%;">Action</th>
        </tr>
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
            <td colspan="8"></td>
        </tr>
        <tr class='cl-container-tr-row'>
            <td style="width:4%;">
                <input type="checkbox" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['FollowUpFlag'];?>
' <?php echo $_smarty_tpl->tpl_vars['L']->value['FChecked'];?>
/> 
            </td>
			<td style="width:15%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_<?php echo $_smarty_tpl->tpl_vars['L']->value['NPPCFirstName'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['NPPCFirstName'];?>
'/> 
            </td>
			<td style="width:10%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_<?php echo $_smarty_tpl->tpl_vars['L']->value['NonProfit'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['NonProfit'];?>
'/> 
            </td>
			<td style="width:10%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_<?php echo $_smarty_tpl->tpl_vars['L']->value['NPPCCity'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['NPPCCity'];?>
' /> 
            </td>
			<td style="width:10%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_<?php echo $_smarty_tpl->tpl_vars['L']->value['NPPCPhone'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['NPPCPhone'];?>
'/> 
            </td>
            <td colspan='2' style="width:35%">
                <div class="controls">
                    <input type="text" class="m-wrap span12" onClick='javascript:addOrUpdateRecord(<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
)' id='logDesc_<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteDescription'];?>
' style="margin:0px;" /> 
                </div>
            </td>
			<td style="width:7%;">
                <input type="checkbox" class="m-wrap span12" style="margin:0px;padding:0px;" id='followUP_<?php echo $_smarty_tpl->tpl_vars['L']->value['DoNotCall'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['L']->value['DoNotCall'];?>
' <?php echo $_smarty_tpl->tpl_vars['L']->value['DChecked'];?>
/> 
            </td>
            <td style="width:5%">
                <a href='#' class="btn green" onClick='javascript:updateLog(<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
)'>Update</a>
            </td>
            <td style="width:5%">
                <a href='#' class="btn red" onClick='javascript:deleteLog(<?php echo $_smarty_tpl->tpl_vars['L']->value['NoteID'];?>
,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
)'>Delete</a>
            </td>
        </tr>
        <?php } ?>
        <?php }else{ ?>
            <tr>
                <td colspan="5">Logs not found</td>
            </tr>
        <?php }?>
            
    </table>
</div><?php }} ?>