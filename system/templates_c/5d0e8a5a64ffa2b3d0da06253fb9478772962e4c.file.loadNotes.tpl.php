<?php /* Smarty version Smarty 3.1.4, created on 2015-06-27 13:11:26
         compiled from ".\templates\loadNotes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91145581c4ff2982a3-91144858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0e8a5a64ffa2b3d0da06253fb9478772962e4c' => 
    array (
      0 => '.\\templates\\loadNotes.tpl',
      1 => 1435435874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91145581c4ff2982a3-91144858',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5581c4ffbe2d1',
  'variables' => 
  array (
    'FullText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5581c4ffbe2d1')) {function content_5581c4ffbe2d1($_smarty_tpl) {?><div class="controls">
    <textarea class="m-wrap span12" style="height:150px" name="eViewNotes" id="eViewNotes"><?php echo $_smarty_tpl->tpl_vars['FullText']->value;?>
</textarea>
</div><?php }} ?>