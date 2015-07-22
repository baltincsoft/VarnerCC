<?php /* Smarty version Smarty 3.1.4, created on 2015-06-27 17:19:21
         compiled from ".\templates\editEmployerDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29869558f3d89a21f68-88049835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4734ba8b6bf2a8f0993f44e1304b78bea2fc4754' => 
    array (
      0 => '.\\templates\\editEmployerDetails.tpl',
      1 => 1435440029,
      2 => 'file',
    ),
    '8db7b085c7a021cb42ed16003d6219495435e633' => 
    array (
      0 => '.\\templates\\index-main.tpl',
      1 => 1435448816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29869558f3d89a21f68-88049835',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_558f3d8a76a98',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f3d8a76a98')) {function content_558f3d8a76a98($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=10" />
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Notes</h4>
                        </div>
                        <div class="modal-body" id="iNotes-Data">
                            <h3>... Loading Logs ...</h3>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                                        <td style="width:7%">
                                            <input type="checkbox" class="m-wrap span8" id='followUP' value='1'/> 
                                        </td>
                                        <td colspan='4'>
                                            <div class="controls">
                                                <input type="text" class="m-wrap span12" id='logDesc' style="margin:0px;" />
                                            </div>
                                        </td>
                                        <td style="width:22.8%">
                                            <a href='#' class="btn green" onClick='javascript:addNewLog(<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);'>Add New Log</a>
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
                
<div id="employerEdit">
<div class="span12">
    <div class="tab-content">
        <div class="active tab-pane ">
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>View/Edit Employer Details</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="portlet-body form">
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
                    <form id="add-Employer" method="POST" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
System/">
                    <h3 class="form-section">General Information</h3>								 
                        <div class="row-fluid">
                            <div class="span5">
                                 <div class="control-group">
                                     <label class="control-label">Referral Source</label>
                                     <div class="controls">
                                         <input type="text" class="m-wrap span12" placeholder="Referral Source" name="eR_RefferalSource" id="eR_RefferalSource" value="<?php echo $_smarty_tpl->tpl_vars['GIEReferralSource']->value;?>
" onBlur="javascript:findEmployer();">
                                     </div>
                                 </div>
                            </div>
                            <div class="span6">
                                 <div class="control-group">
                                     <label class="control-label">Employer</label>
                                     <div class="controls" id="replace-Toggler">
                                         <Select class="m-wrap span9" name="eR_Employer" id="eR_Employer" onChange="javascript:fillEmployerDetails(this.value,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);">
                                            <?php echo $_smarty_tpl->tpl_vars['EmployerList']->value;?>

                                         </select>
                                         <button type="button" id="togglebtn" class="input-append btn green" onClick="javascript:dropdownToText();">Toggle</button>
                                     </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Placement Fee</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Placement Fee" id="PlacementFee" name="PlacementFee" onCopy="return false" onPaste="return false" autocomplete="off"  value="<?php echo $_smarty_tpl->tpl_vars['GIPlacementFee']->value;?>
"/>                             
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">2nd Placement Fee</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="2nd Placement Fee" id="PlacementFee2" name="PlacementFee2" onCopy="return false" onPaste="return false" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['GISecondPlacementFee']->value;?>
"/>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">3rd Placement Fee</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="3rd Placement Fee" id="PlacementFee3" name="PlacementFee3" onCopy="return false" onPaste="return false" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['GIThirdPlacementFee']->value;?>
"/> 
                                    </div>
                                </div>
                           </div>
                        </div>       

                        <!--/row-->
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">First Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_FirstName" id="eR_FirstName" value="<?php echo $_smarty_tpl->tpl_vars['GIFirstName']->value;?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_LastName" id="eR_LastName" value="<?php echo $_smarty_tpl->tpl_vars['GILastName']->value;?>
">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_Address" id="eR_Address" value="<?php echo $_smarty_tpl->tpl_vars['GIAddress']->value;?>
">
                                    </div>
                                </div>
                            </div>
                         </div>

                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_City" id="eR_City" value="<?php echo $_smarty_tpl->tpl_vars['GICity']->value;?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="eR_State" id="eR_State">
                                            <?php echo $_smarty_tpl->tpl_vars['Statelist']->value;?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->

                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Zip</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_Zip" id="eR_Zip" value="<?php echo $_smarty_tpl->tpl_vars['GIZip']->value;?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--/row-->
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Business Phone</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" name="eR_BusinessPhone" id="eR_BusinessPhone" maxlength="13" value="<?php echo $_smarty_tpl->tpl_vars['GIBusinessPhone']->value;?>
"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_Extension" id="eR_Extension" value="<?php echo $_smarty_tpl->tpl_vars['GIExtension']->value;?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->    

                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Fax Number</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" name="eR_FaxNumber" id="eR_FaxNumber" value="<?php echo $_smarty_tpl->tpl_vars['GIFax']->value;?>
"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="email" class="m-wrap span12" name="eR_Email" id="eR_Email" value="<?php echo $_smarty_tpl->tpl_vars['GIEmail']->value;?>
"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                        </div>

                        <h3 class="form-section">Referral Source Contact</h3>
                        <div class="row-fluid">
                           <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">First Name</label>
                                         <div class="controls">
                                                <input type="text" class="m-wrap span12" name="eR_SFirstName" id="eR_SFirstName" value="<?php echo $_smarty_tpl->tpl_vars['RSCFirstName']->value;?>
"> 
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                                <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Last Name</label>
                                         <div class="controls">
                                                <input type="text" class="m-wrap span12" name="eR_SLastName" id="eR_SLastName" value="<?php echo $_smarty_tpl->tpl_vars['RSCLastName']->value;?>
"> 
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email Alert 1</label>
                                    <div class="controls">
                                        <input type="email" class="m-wrap span12" name="eR_SEmailAlert1" id="eR_SEmailAlert1" value="<?php echo $_smarty_tpl->tpl_vars['RSCEAlert1']->value;?>
"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email Alert 2</label>
                                    <div class="controls">
                                        <input type="email" class="m-wrap span12" name="eR_SEmailAlert2" id="eR_SEmailAlert2" value="<?php echo $_smarty_tpl->tpl_vars['RSCEAlert2']->value;?>
"> 
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email Alert 3</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <input type="email" class="m-wrap span12" name="eR_SEmailAlert3" id="eR_SEmailAlert3" value="<?php echo $_smarty_tpl->tpl_vars['RSCEAlert3']->value;?>
"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Claim Adjuster</h3>
                        <div class="row-fluid">
                           <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">First Name</label>
                                         <div class="controls">
                                                <input type="text" class="m-wrap span12" name="eR_CAFirstName" id="eR_CAFirstName" value="<?php echo $_smarty_tpl->tpl_vars['CAFirstName']->value;?>
"> 
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Last Name</label>
                                         <div class="controls">
                                                 <input type="text" class="m-wrap span12" name="eR_CALastName" id="eR_CALastName" value="<?php echo $_smarty_tpl->tpl_vars['CALastName']->value;?>
">
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
                                        <input type="text" class="m-wrap span12 phone" name="eR_CAPhone" id="eR_CAPhone" maxlength="13" value="<?php echo $_smarty_tpl->tpl_vars['CAPhone']->value;?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_CAExtension" id="eR_CAExtension" value="<?php echo $_smarty_tpl->tpl_vars['CAExtension']->value;?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="email" class="m-wrap span12" name="eR_CAEmail" id="eR_CAEmail" value="<?php echo $_smarty_tpl->tpl_vars['CAEmail']->value;?>
">
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
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Employer Details</button>
                        </div>
                        <input type="hidden" name="LoginID" value="<?php echo $_smarty_tpl->tpl_vars['LoginID']->value;?>
"/>
                        <input type="hidden" name="EmployeeID" value="<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
"/>
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"/>
                    <!-- END FORM-->
                    </form>
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
assets/js/draggable-componenets.js"></script>
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
            // to fix chosen dropdown width in inactive hidden tab content
            $('#advance_form_hor').on('shown', function (e) {
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