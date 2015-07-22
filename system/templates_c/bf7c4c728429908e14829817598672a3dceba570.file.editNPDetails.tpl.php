<?php /* Smarty version Smarty 3.1.4, created on 2015-07-19 11:57:08
         compiled from ".\templates\editNPDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18479558c82b58c3514-63590957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf7c4c728429908e14829817598672a3dceba570' => 
    array (
      0 => '.\\templates\\editNPDetails.tpl',
      1 => 1436470775,
      2 => 'file',
    ),
    '8db7b085c7a021cb42ed16003d6219495435e633' => 
    array (
      0 => '.\\templates\\index-main.tpl',
      1 => 1437332223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18479558c82b58c3514-63590957',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_558c82b750c46',
  'variables' => 
  array (
    'SERVER_ACTUAL_PATH' => 0,
    'Name' => 0,
    'emp_active' => 0,
    'EmployeeID' => 0,
    'emplyr_active' => 0,
    'lgl_active' => 0,
    'npd_active' => 0,
    'addnl_active' => 0,
    'srch_active' => 0,
    'upd_active' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c82b750c46')) {function content_558c82b750c46($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Varner Claims Consulting | DashBoard</title>
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
assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/css/style.css" rel="stylesheet" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/css/style_responsive.css" rel="stylesheet" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/css/style_default.css" rel="stylesheet" id="style_color" />
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
   
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
System/">
            <img src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/img/logo.gif" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/img/avatar.jpg" />
                  <span class="username"> <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Change-Password"><i class="icon-user"></i> Change Password</a></li>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Logout"><i class="icon-key"></i> Log Out</a></li>
                  </ul>
               </li>
               <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->         
         <ul>
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="start <?php echo $_smarty_tpl->tpl_vars['emp_active']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
View-Employee-Detail/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
">
                <i class="icon-user"></i>
                <span class="title">View Employee Detail</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['emplyr_active']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['EmployeeID']->value>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
View-Employer-Detail/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
">
                    <i class="icon-home"></i>
                    <span class="title">View Employer Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#">
                    <i class="icon-home"></i>
                    <span class="title">Employer Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }?>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['lgl_active']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['EmployeeID']->value>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
View-Legal-Detail/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
">
                    <i class="icon-table"></i> 
                    <span class="title">View Legal Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#">
                    <i class="icon-table"></i> 
                    <span class="title">Legal Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }?>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['npd_active']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['EmployeeID']->value>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
View-NP-Detail/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
">
                    <i class="icon-table"></i> 
                    <span class="title">View Non-Profit Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#">
                    <i class="icon-table"></i> 
                    <span class="title">Non-Profit Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }?>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['addnl_active']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['EmployeeID']->value>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
View-Addition-Detail/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
">
                    <i class="icon-table"></i> 
                    <span class="title">View Additional Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#">
                    <i class="icon-table"></i> 
                    <span class="title">Additional Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }?>
            </li>
            <li class="">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Employee-Detail">
                <i class="icon-table"></i> 
                <span class="title">Add New Employee</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['srch_active']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Search">
                <i class="icon-briefcase"></i>
                <span class="title">Search</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['upd_active']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Document/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
">
                <i class="icon-upload"></i>
                <span class="title">Upload Documents</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Notes/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
" target="_blank">
                <i class="icon-print"></i>
                <span class="title">Print Notes</span>
                <span class="selected"></span>
                </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div>
					<!-- END BEGIN STYLE CUSTOMIZER --> 
                    <h3 class="page-title">
                     <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    </h3>
                    <ul class="breadcrumb">
                            <li>
                                    <i class="icon-home"></i>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
">Home</a>
                                    <span class="icon-angle-right"></span>
                            </li>
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="modal fade" id="view_iNotes">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Notes</h4>
                        </div>
                        <div class="modal-body" id="iNotes-Data">
                            <h3>... Loading Notes ...</h3>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default red" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="npCall-Log">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Call Logs</h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <table width='100%' align='center'>
                                    <tr class='cl-container-tr-row'>
                                        <td colspan='5'>
                                            <span id="logMsg" class="help-inline"></span>
                                        </td>
                                    </tr>
                                    <tr class='cl-container-tr-row'>
                                        <td style="width:2%">
                                            <input type="checkbox" class="m-wrap span8" id='followUP' value='1'/> 
                                        </td>
                                        <td colspan='7'>
                                            <div class="controls">
                                                <input type="text" class="m-wrap span12" id='logDesc' style="margin:0px;" />
                                            </div>
                                        </td>
                                        <td colspan="2" style="width:10%">
                                            <a href='#' class="btn green" onClick='javascript:addNewLog(<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);'>New Log</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="npCall-Log-Data">
                                <h3>... Loading Logs ...</h3>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default red" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="row-fluid">
                <!-- BEGIN BODY CONTENT -->
                
<div id="ADD-EditNP">
<div class="span12">
    <div class="tab-content">
        <div class="active tab-pane ">
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Edit Non-Profit Details</h4>
                    <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN EMPLOYEE DETAILS MANAGER PANEL-->
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="pull-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Print/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
" class="btn pull-right green" target="_blank">
                                    <span>PRINT CALL LOGS</span>
                                    <i class="icon-print icon-white"></i>
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="#" onClick="javascript:callLogs();" class="btn pull-right blue">
                                    <span>CALL LOGS</span>
                                    <i class="icon-bell icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value){?>
                        <div class="alert alert-success">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Success!</strong><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error_msg']->value){?>
                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Error!</strong><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>

                        </div>
                    <?php }?>
                    <!-- END EMPLOYEE DETAILS MANAGER PANEL-->
                    <!-- BEGIN FORM-->
                    <form id="add-NPDetails" method="POST" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
System/">
                        <h3 class="form-section">Non-Profit Information</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Job Code</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="npJobCode"  name="npJobCode" placeholder="Job Code" value="<?php echo $_smarty_tpl->tpl_vars['JobCode']->value;?>
" />
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <div class="controls">                                                
                                        <label class="checkbox">
                                        <?php if ($_smarty_tpl->tpl_vars['DoNotCall']->value==1){?>
                                            <input type="checkbox" name="npDndCall" id="npDndCall" checked/>Do Not Call
                                        <?php }else{ ?>
                                            <input type="checkbox" name="npDndCall" id="npDndCall" />Do Not Call
                                        <?php }?>
                                        </label>                                                
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                         <div class="row-fluid">
                                <!--/span-->
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Non Profit</label>
                                    <div class="controls" id="np-toggle">
                                        <Select class="m-wrap span10" id="npNonProfit" name="npNonProfit" onChange="javascript:editNPDetails(this.value,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);">
                                            <?php echo $_smarty_tpl->tpl_vars['NPList']->value;?>

                                        </select>
                                        <button type="button" id="toggle-btn" class="input-append btn green" onClick="javascript:dropdownnpToText();">Toggle</button>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                         </div>
                        <h3 class="form-section">Primary Contact</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">First Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcFirstName" id="nppcFirstName" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['NPPCFirstName']->value;?>
">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcLastName" id="nppcLastName" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['NPPCLastName']->value;?>
" />
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-envelope"></i>
                                            <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcAddress" id="nppcAddress" value="<?php echo $_smarty_tpl->tpl_vars['NPPCAddress']->value;?>
" />	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcCity" id="nppcCity" value="<?php echo $_smarty_tpl->tpl_vars['NPPCCity']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcState" id="nppcState">
                                        <?php echo $_smarty_tpl->tpl_vars['Statelist']->value;?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                         <!--/row-->           
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Zip</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcZip" id="nppcZip" value="<?php echo $_smarty_tpl->tpl_vars['NPPCZip']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcPhone" id="nppcPhone" value="<?php echo $_smarty_tpl->tpl_vars['NPPCPhone']->value;?>
" maxlength="13" />
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcExtension" id="nppcExtension" value="<?php echo $_smarty_tpl->tpl_vars['NPPCExtension']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Fax</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="nppcFax" id="nppcFax" value="<?php echo $_smarty_tpl->tpl_vars['NPPCFax']->value;?>
" maxlength="13"/>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-envelope"></i>
                                            <input type="email" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 placeholder="Email Address" name="nppcEmail" id="nppcEmail" value="<?php echo $_smarty_tpl->tpl_vars['NPPCEmail']->value;?>
" />	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->                               
                        <h3 class="form-section">Secondary Contact</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">First Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="First Name" name="npscFirstName" id="npscFirstName" value="<?php echo $_smarty_tpl->tpl_vars['NPSCFirstName']->value;?>
" />
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Last Name" name="npscLastName" id="npscLastName" value="<?php echo $_smarty_tpl->tpl_vars['NPSCLastName']->value;?>
" />
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" id="sPhone" name="sPhone" class="m-wrap span12 phone" maxlength="13" placeholder="Phone Number" value="<?php echo $_smarty_tpl->tpl_vars['NPSCPhone']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" id="sExtension" name="sExtension" class="m-wrap span12" placeholder="Extension" value="<?php echo $_smarty_tpl->tpl_vars['NPSCExtension']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" id="sEmail" name="sEmail" class="m-wrap span12" placeholder="Email Address" value="<?php echo $_smarty_tpl->tpl_vars['NPSCEmail']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <h3 class="form-section">Report and Work Scheduler</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Report To</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" <?php echo $_smarty_tpl->tpl_vars['makeRed']->value;?>
 name="npReportTo" id="npReportTo" value="<?php echo $_smarty_tpl->tpl_vars['NPReportTo']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npTitle" id="npTitle" value="<?php echo $_smarty_tpl->tpl_vars['NPReportTitle']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Dress Code</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npDressCode" id="npDressCode"><?php echo $_smarty_tpl->tpl_vars['NPDressCode']->value;?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="placementDate" class="control-label">Placement Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPPDate']->value!="00/00/0000"){?>
                                                <input id="placementDate" name="placementDate" value="<?php echo $_smarty_tpl->tpl_vars['NPPDate']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="placementDate" name="placementDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="reportDate" class="control-label">Report Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPRDate']->value!="00/00/0000"){?>
                                                <input id="reportDate" name="reportDate" value="<?php echo $_smarty_tpl->tpl_vars['NPRDate']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="reportDate" name="reportDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Report Time</label>
                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker">
                                            <input id="reportTime" name="reportTime" value="<?php echo $_smarty_tpl->tpl_vars['NPReportTime']->value;?>
" class="m-wrap m-ctrl-small timepicker-default" type="text" placeholder="Pick Time"/>
                                            <span class="add-on"><i class="icon-time"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="startDate" class="control-label">Start Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPActStartDate']->value!="00/00/0000"){?>
                                                <input id="startDate" name="startDate" value="<?php echo $_smarty_tpl->tpl_vars['NPActStartDate']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="startDate" name="startDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="projStartDate" class="control-label">Restart Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPProjStartDate']->value!="00/00/0000"){?>
                                                <input id="reStartDate" name="reStartDate" value="<?php echo $_smarty_tpl->tpl_vars['NPProjStartDate']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="reStartDate" name="reStartDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="projStartDate" class="control-label">Last Worked Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPLastDateWorked']->value!="00/00/0000"){?>
                                                <input id="npLastWorkedDate" name="npLastWorkedDate" value="<?php echo $_smarty_tpl->tpl_vars['NPLastDateWorked']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="npLastWorkedDate" name="npLastWorkedDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Work Schedule 1</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsWorkSchedule1" id="npwsWorkSchedule1" value="<?php echo $_smarty_tpl->tpl_vars['NPWorkSchedule1']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Work Schedule 2</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsWorkSchedule2" id="npwsWorkSchedule2" value="<?php echo $_smarty_tpl->tpl_vars['NPWorkSchedule2']->value;?>
" /> 
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Work Schedule 3</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsWorkSchedule3" id="npwsWorkSchedule3" value="<?php echo $_smarty_tpl->tpl_vars['NPWorkSchedule3']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">NP2 Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="np2Name" id="np2Name" value="<?php echo $_smarty_tpl->tpl_vars['NPLocation2Name']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">NP2 Address,City,State,Zip</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="np2AddrComb" id="np2AddrComb" value="<?php echo $_smarty_tpl->tpl_vars['NPLocation2Address']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Total Weekly Hours</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsTotalWeeklyHours" id="npwsTotalWeeklyHours" value="<?php echo $_smarty_tpl->tpl_vars['NPTotalWeeklyHours']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Outcome</label>
                                    <div class="controls">                          
                                        <div class="input-group">
                                            <select class="m-wrap span12" name="npwsStatus" id="npwsStatus">
                                                <?php echo $_smarty_tpl->tpl_vars['NPOutComeList']->value;?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                           </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="npOutcomeDate" class="control-label">Outcome Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPStatusDate']->value!="00/00/0000"){?>
                                                <input id="npOutcomeDate" name="npOutcomeDate" value="<?php echo $_smarty_tpl->tpl_vars['NPStatusDate']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="npOutcomeDate" name="npOutcomeDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="npRtwDate" class="control-label">RTW Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['NPRTWDate']->value!="00/00/0000"){?>
                                                <input id="npRtwDate" name="npRtwDate" value="<?php echo $_smarty_tpl->tpl_vars['NPRTWDate']->value;?>
" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="npRtwDate" name="npRtwDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Total Hours Worked</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsTHW" id="npwsTHW" value="<?php echo $_smarty_tpl->tpl_vars['NPTotalHoursWorked']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Total Days Worked</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsTDW" id="npwsTDW" value="<?php echo $_smarty_tpl->tpl_vars['NPTotalDaysWorked']->value;?>
"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <h3 class="form-section">Non-Profit Description</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npDescription" id="npDescription"><?php echo $_smarty_tpl->tpl_vars['NPDescription']->value;?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Non-Profit Additional Instructions</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npAddnInst" id="npAddInst"><?php echo $_smarty_tpl->tpl_vars['NPAddnInstructions']->value;?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Job Task(format as shown on assignment letter)</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npJobTask" id="npJobTask"><?php echo $_smarty_tpl->tpl_vars['NPJobTask']->value;?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
						<h3 class="form-section">Job Task 2(format as shown on assignment letter)</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npJobTask2" id="npJobTask2"><?php echo $_smarty_tpl->tpl_vars['NPJobTask2']->value;?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Notes</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group" id="Add_LoadNotes">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" style="height:150px" name="eViewNotes" id="eViewNotes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                <label class="control-label">Add Note Area:</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" style="height:150px" name="eNotes" id="eNotes"></textarea>
                                        <span id="eNotesMsg" class="help-inline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" onClick="javascript:iNewNote(<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
,0,<?php echo $_smarty_tpl->tpl_vars['IsAdmin']->value;?>
);" class="btn green pull-left" style="margin-right:10px"> Add Notes</button>
                            <button type="button" onClick="javascript:viewNotes();" class="btn green pull-left" style="margin-right:10px">View Notes</button>
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Non Profit Details</button>
                        </div>
                        <input type="hidden" name="LoginID" value="<?php echo $_smarty_tpl->tpl_vars['LoginID']->value;?>
"/>
                        <input type="hidden" name="EmployeeID" value="<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
"/>
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"/>
                </form>
                <!-- END FORM-->                
                </div>
            </div>
        </div>
    </div>
</div>
</div>

                <!-- END BODY CONTENT -->
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2014 &copy; Baltinc'Soft Technologies.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/jquery-1.8.3.min.js"></script>    
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/breakpoints/breakpoints.js"></script>       
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/jquery.blockui.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/jquery.cookie.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/excanvas.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/respond.js"></script>
   <![endif]-->
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/app.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
system/includes/sajax.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
system/includes/Us-Phone.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/js/jquery.alerts.js"></script>
    <script>
        jQuery(document).ready(function()
        {       
            // to fix chosen dropdown width in inactive hidden tab content
            $('#advance_form_hor').on('shown', function (e)
            {
                App.initChosenSelect('#chosen_category');
            });
            // initiate layout and plugins
            App.init();
            $('.phone').usphone();
            loadNotes(<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);
        });  
    </script>
    <script>
        var loadJS=function()
        {
			$('#advance_form_hor').on('shown', function (e)
            {
                App.initChosenSelect('#chosen_category');
            });
            // initiate layout and plugins
            App.init();
            $('.phone').usphone();
            loadNotes(<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);
        }
    </script>
    <script>
        var viewNotes=function()
        {
            var strPost = "EmployeeID="+<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
;
            Ajax_Call(strPost,"iNotes-Data","view_notes");
            $('#view_iNotes').modal('show');
        }
        var callLogs=function()
        {
            var strPost = "EmployeeID="+<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
;
            Ajax_Call(strPost,"npCall-Log-Data","view_logs");
            $('#npCall-Log').modal('show');
        }
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html><?php }} ?>