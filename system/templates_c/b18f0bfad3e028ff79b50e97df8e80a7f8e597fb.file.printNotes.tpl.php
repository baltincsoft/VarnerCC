<?php /* Smarty version Smarty 3.1.4, created on 2015-06-27 14:47:26
         compiled from ".\templates\printNotes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17934558c82a63357f4-25029055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18f0bfad3e028ff79b50e97df8e80a7f8e597fb' => 
    array (
      0 => '.\\templates\\printNotes.tpl',
      1 => 1435441639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17934558c82a63357f4-25029055',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_558c82a665257',
  'variables' => 
  array (
    'SERVER_ACTUAL_PATH' => 0,
    'tot_note_rows' => 0,
    'Notes' => 0,
    'NP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c82a665257')) {function content_558c82a665257($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Varner Claims Consulting | Print Call Log</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/css/metro.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/css/style_responsive.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/uniform/css/uniform.default.css" />
    <link rel="shortcut icon" href="favicon.ico" />

    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;
            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head></head><body>" + 
              divElements + "</body>";
            //Print Page
            window.print();
            //Restore orignal HTML
            document.body.innerHTML = oldPage;
        }
    </script>
	<style type="text/css">
	.printTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; width:100%}
	.printTable th { background-color:#BDB76B;color:white;width:50%;border-bottom:1px dotted #BDB76B; }
	.printTable td, .printTable th { padding:5px;border:0;border-bottom:1px dotted #BDB76B; }
	.printTable td { border-bottom:1px dotted #BDB76B; }
</style>
</head>
<body>
    <form id="form1" runat="server">
	<div id="printablediv" class="row-fluid">
            <div style="margin-bottom:5px;" align="center">
                <h3 class="form-section">NOTES</h3>
            </div>
            <table class="printTable" style="border:1px solid black;" align="center" width="100%">
                <tr>
                    <th style="border-right:1px solid black;width:5%;">#</th>
                    <th style="border-right:1px solid black;width:10%;">Initials</th>
                    <th style="border-right:1px solid black;width:30%;">Date</th>
                    <th style="border-right:1px solid black;width:45%;">Note Description</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['tot_note_rows']->value>0){?>
                <?php  $_smarty_tpl->tpl_vars['NP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NP']->key => $_smarty_tpl->tpl_vars['NP']->value){
$_smarty_tpl->tpl_vars['NP']->_loop = true;
?>
                    <tr>
                        <td style="border-right:1px solid black;width:5%;text-align:center;">#</td>
                        <td style="border-right:1px solid black;width:10%;"><?php echo $_smarty_tpl->tpl_vars['NP']->value['Initial'];?>
</td>
                        <td style="border-right:1px solid black;width:30%;"><?php echo $_smarty_tpl->tpl_vars['NP']->value['LastUpdatedDate'];?>
</td>
                        <td style="border-right:1px solid black;width:45%;"><?php echo $_smarty_tpl->tpl_vars['NP']->value['NoteDescription'];?>
</td>
                    </tr>
                <?php } ?>
                <?php }?>
            </table>
        </div>
        <div style="margin-top:10px;" align="center">
            <input type="button" class="btn blue" value="Print Notes" onclick="javascript:printDiv('printablediv')"/>
        </div>
        
    </form>
</body>
</html><?php }} ?>