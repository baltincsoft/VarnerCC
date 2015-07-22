<?php /* Smarty version Smarty 3.1.4, created on 2015-07-22 11:27:41
         compiled from ".\templates\editInsuredEmployeeDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14230558c829d2acec1-89275330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8074027476ce8d7f1bac3f69e2ab8e85e7d447f3' => 
    array (
      0 => '.\\templates\\editInsuredEmployeeDetails.tpl',
      1 => 1435948626,
      2 => 'file',
    ),
    '8db7b085c7a021cb42ed16003d6219495435e633' => 
    array (
      0 => '.\\templates\\index-main.tpl',
      1 => 1437332223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14230558c829d2acec1-89275330',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_558c829e8ce43',
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
<?php if ($_valid && !is_callable('content_558c829e8ce43')) {function content_558c829e8ce43($_smarty_tpl) {?><!DOCTYPE html>
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
                
<div class="span12">
    <div class="tab-content">
        <div class="active tab-pane ">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Edit Employee Details</h4>
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
Export-Employee/<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
" class="btn pull-right blue" target="_blank">
                                    <i class="icon-download icon-white"></i>
                                    <span>Download Employee CSV(.csv) File</span>
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
                    <form id="add-IEmployee" method="POST" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
System/">
                        <?php if ($_smarty_tpl->tpl_vars['TotalRecord']->value>0){?>
                        <?php  $_smarty_tpl->tpl_vars['EMP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EmployeeRecord']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMP']->key => $_smarty_tpl->tpl_vars['EMP']->value){
$_smarty_tpl->tpl_vars['EMP']->_loop = true;
?>
                        <h3 class="form-section">General Information</h3>								 
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">VCC Case#</label>
                                    <div class="controls">
                                            <input type="text" class="m-wrap span12" id="VCCCaseNumber" name="VCCCaseNumber" placeholder="VCC Case" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['VCCCaseNumber'];?>
" readonly/>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">VCC Employee Code</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="VCCEmployeeCode" name="VCCEmployeeCode" placeholder="Employee Code" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['VCCEmployeeCode'];?>
"/>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">NP Earliest Start Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <?php if ($_smarty_tpl->tpl_vars['EMP']->value['NPEarliestStartDate']!="00/00/0000"){?>
                                                <input id="npEarliestDate" name="npEarliestDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['NPEarliestStartDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }else{ ?>
                                                <input id="npEarliestDate" name="npEarliestDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">First Name</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-user"></i>
                                            <input type="text" class="m-wrap span12" id="iFirstName" name="iFirstName" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IFirstName'];?>
" />
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-user"></i>
                                            <input type="text" class="m-wrap span12" id="iLastName" name="iLastName" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['ILastName'];?>
">
                                        </div>
                                    </div>
                                </div>
                           </div>
                            <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-envelope"></i>
                                            <input type="text" class="m-wrap span12" placeholder="Address" name="iAddress" id="iAddress" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IAddress'];?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Apartment Number(#)</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-envelope"></i>
                                            <input type="text" class="m-wrap span12" placeholder="Apartment Number" name="iAprtNum" id="iAprtNum" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IAppartmentNumber'];?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="iCity" name="iCity" placeholder="City" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['ICity'];?>
"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" id="iState" name="iState">
                                            <?php echo $_smarty_tpl->tpl_vars['Statelist']->value;?>

                                        </select>
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                        </div>       

                        <!--/row-->
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Zip</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="iZip" name="iZip" placeholder="Zip" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IZip'];?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-envelope"></i>
                                            <input type="email" class="m-wrap span12" name="iEmail" id="iEmail" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IEmailAddress'];?>
"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
						   
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Gender</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="iGender" id="iGender">
                                            <option value="M" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['M_SELECTED'];?>
>Male</option>
                                            <option value="F" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['F_SELECTED'];?>
>Female</option>
                                         </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
						<div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Occupation</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Occupation" id="iOccupation" name="iOccupation" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IOccupation'];?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Age</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Age" id="iAge" name="iAge" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IAge'];?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-phone"></i>
                                            <input type="tel" class="m-wrap span12 phone" placeholder="Phone" name="iPhone" id="iPhone" maxlength="13" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IPhone'];?>
"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Mobile</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-phone"></i>
                                            <input type="text" class="m-wrap span12 phone" placeholder="Mobile" name="iMobile" id="iMobile" maxlength="13" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IMobile'];?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        
                        <div class="row-fluid">
                            <!--/span-->
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Languages Spoken</label>
                                    <div class="controls">	
                                        <select data-placeholder="Languages Spoken" class="chosen span12" multiple="multiple" id="iLanguagesKnown" name="iLanguagesKnown[]">
                                            <optgroup label="Languages Spoken">
                                                <option value="US" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['US_SELECTED'];?>
>English(US)</option>
                                                <option value="UK" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['UK_SELECTED'];?>
>English(UK)</option>
                                                <option value="French" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['French_SELECTED'];?>
>French</option>
                                                <option value="Irish" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['Irish_SELECTED'];?>
>Irish</option>
                                                <option value="Mandarin" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['Mandarin_SELECTED'];?>
>Mandarin</option>
                                                <option value="Russian" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['Russian_SELECTED'];?>
>Russian</option>
                                                <option value="Spanish" <?php echo $_smarty_tpl->tpl_vars['EMP']->value['Spanish_SELECTED'];?>
>Spanish</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <h3 class="form-section">Injury Details</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="placementDate" class="control-label">Date Of Injury</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['InjuryDate']!="00/00/0000"){?>
                                                    <input id="iDateOfInjury" name="iDateOfInjury" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['InjuryDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="iDateOfInjury" name="iDateOfInjury" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Claim Number</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="iClaimNumber" id="iClaimNumber" placeholder="Claim Number" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['ClaimNumber'];?>
"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Injury Type</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="iInjuryType" id="iInjuryType" placeholder="Injury Type"><?php echo $_smarty_tpl->tpl_vars['EMP']->value['InjuryType'];?>
</textarea>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">State Jurisdiction</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="iStateJurd" id="iStateJurd">
                                            <?php echo $_smarty_tpl->tpl_vars['JuridictionList']->value;?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Pre-Injury Weekly Hours Worked</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="iPreInjWeeklyHrsWorked" id="iPreInjWeeklyHrsWorked" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['PIWHoursWorked'];?>
" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">AWW Rate</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <input type="text" class="m-wrap span12" name="npAWWRate" id="npAWWRate" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['AWWRate'];?>
" placeholder="0.00"/> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Comp Rate</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npCompRate" id="npCompRate" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['CompRate'];?>
"  placeholder="0.00"/>
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Hour Rate ALD</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npHourRateALD" id="npHourRateALD" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['ALDRateHourly'];?>
"> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Weekly ALD Rate</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npWeeklyALDRate" id="npWeeklyALDRate" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['ALDRateWeekly'];?>
">
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="placementDate" class="control-label">Date of Restriction</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['RestrictionDate']!="00/00/0000"){?>
                                                    <input id="npDateOfRestriction" name="npDateOfRestriction" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['RestrictionDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npDateOfRestriction" name="npDateOfRestriction" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Next Dr. Appt:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['NextDAppointment']!="00/00/0000"){?>
                                                    <input id="npNextDrApptDate" name="npNextDrApptDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['NextDAppointment'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npNextDrApptDate" name="npNextDrApptDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">By Physician</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npByPhysician" id="npByPhysician" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['IPhysician'];?>
" placeholder="By Physician"/>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Transportation Issues</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="npTransIssues" id="npTransIssues">
                                            <option value="0" selected>No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                <label class="control-label">Medical Restrictions</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npMedicalRest" id="npMedicalRest"><?php echo $_smarty_tpl->tpl_vars['EMP']->value['MedRestriction'];?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                <label class="control-label">Trans Issue Type</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npTransIssueType" id="npTransIssueType"><?php echo $_smarty_tpl->tpl_vars['EMP']->value['TransIssueType'];?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Follow-Up Details</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Referral Date</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['RefreralDate']!="00/00/0000"){?>
                                                    <input id="npReferralDate" name="npReferralDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['RefreralDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npReferralDate" name="npReferralDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Re-Open Date</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['ReOpenDate']!="00/00/0000"){?>
                                                    <input id="npReOpenDate" name="npReOpenDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['ReOpenDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npReOpenDate" name="npReOpenDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Preset Content:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <Select type="text" class="m-wrap span12" name="npPresetContent" id="npPresetContent">
                                                <?php echo $_smarty_tpl->tpl_vars['PresetContentList']->value;?>

                                            </Select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid hidden">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Others</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="otherReason" id="otherReason" value="<?php echo $_smarty_tpl->tpl_vars['otherReason']->value;?>
" placeholder="OTHER PRESET CONTENT"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Person Assigned:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <Select type="text" class="m-wrap span12" name="npPersonAssigned" id="npPersonAssigned" onchange="javascript:sendEmailToAssignee(this.value,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);">
                                                <?php echo $_smarty_tpl->tpl_vars['PersonAssigned']->value;?>

                                            </Select>
                                            <span id="eAssigneeMsg" class="help-inline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Pre-Call Date:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['PreCallDate']!="00/00/0000"){?>
                                                    <input id="npPreCallDate" name="npPreCallDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['PreCallDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npPreCallDate" name="npPreCallDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Follow-Up Date:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['FollowUpDate']!="00/00/0000"){?>
                                                    <input id="npFollowupDate" name="npFollowupDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['FollowUpDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npFollowupDate" name="npFollowupDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Close Date:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                <?php if ($_smarty_tpl->tpl_vars['EMP']->value['CloseDate']!="00/00/0000"){?>
                                                    <input id="npCloseDate" name="npCloseDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="<?php echo $_smarty_tpl->tpl_vars['EMP']->value['CloseDate'];?>
"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }else{ ?>
                                                    <input id="npCloseDate" name="npCloseDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                <?php }?>
                                            </div>
                                        </div>
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
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Employee Details</button>
                        </div>
                        <input type="hidden" name="LoginID" value="<?php echo $_smarty_tpl->tpl_vars['LoginID']->value;?>
"/>
                        <input type="hidden" name="EmployeeID" value="<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
"/>
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"/>
                        <?php } ?>
                        <?php }?>
                    </form>
                 <!-- END FORM-->                
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