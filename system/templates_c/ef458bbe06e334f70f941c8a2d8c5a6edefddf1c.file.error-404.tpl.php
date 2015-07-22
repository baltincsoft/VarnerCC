<?php /* Smarty version Smarty 3.1.4, created on 2015-07-05 12:07:49
         compiled from "C:\xampp\htdocs\Varner Claims Consulting\system\templates\error-404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22738558b34b7db6d05-79049526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef458bbe06e334f70f941c8a2d8c5a6edefddf1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Varner Claims Consulting\\system\\templates\\error-404.tpl',
      1 => 1434334472,
      2 => 'file',
    ),
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1436123245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22738558b34b7db6d05-79049526',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_558b34b85f257',
  'variables' => 
  array (
    'SERVER_ACTUAL_PATH' => 0,
    'Name' => 0,
    'dshbrd_active' => 0,
    'emp_active' => 0,
    'emplyr_active' => 0,
    'EmployeeID' => 0,
    'lgl_active' => 0,
    'npd_active' => 0,
    'addnl_active' => 0,
    'srch_active' => 0,
    'IsAdmin' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558b34b85f257')) {function content_558b34b85f257($_smarty_tpl) {?><!DOCTYPE html>
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
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/data-tables/DT_bootstrap.css" />
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
			<li class="start <?php echo $_smarty_tpl->tpl_vars['dshbrd_active']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Dashboard">
                <i class="icon-user"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['emp_active']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Employee-Detail">
                <i class="icon-user"></i>
                <span class="title">Employee Detail</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['emplyr_active']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['EmployeeID']->value>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Employer-Detail">
                    <i class="icon-home"></i>
                    <span class="title">Employer Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#" class="popovers" data-trigger="hover" data-content="Due to Employee Creation First" data-original-title="Locked">
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
Legal-Detail">
                    <i class="icon-table"></i> 
                    <span class="title">Legal Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#" class="popovers" data-trigger="hover" data-content="Due to Employee Creation First" data-original-title="Locked">
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
Non-ProfitDetail">
                    <i class="icon-table"></i> 
                    <span class="title">Non-Profit Detail</span>
                    <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#" class="popovers" data-trigger="hover" data-content="Due to Employee Creation First" data-original-title="Locked">
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
Additional-Detail">
                        <i class="icon-table"></i> 
                        <span class="title">Additional Detail</span>
                        <span class="selected"></span>
                    </a>
                <?php }else{ ?>
                    <a href="#" class="popovers" data-trigger="hover" data-content="Due to Employee Creation First" data-original-title="Locked">
                        <i class="icon-table"></i> 
                        <span class="title">Additional Detail</span>
                        <span class="selected"></span>
                    </a>
                <?php }?>
            </li>
			<li class="">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Add-New-Insured-Employee">
                <i class="icon-user"></i>
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
			<?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value==1){?>
				<li class="">
					<a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
ExportFile">
					<i class="icon-download"></i>
					<span class="title">Export Records</span>
					<span class="selected"></span>
					</a>
				</li>
			<?php }?>
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
System">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    </ul>
                </div>
            </div>
            <div class="modal fade" id="view_iNotes" aria-hidden="true">
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
            <div class="modal fade" id="npCall-Log" aria-hidden="true" style="display:none;">
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
                                        <td style="width:7%">
                                            <input type="checkbox" class="m-wrap span8" id="followUP" value="1"/>
                                        </td>
                                        <td colspan='4'>
                                            <div class="controls">
                                                <input type="text" class="m-wrap span12" id='logDesc' style="margin:0px;" />
                                            </div>
                                        </td>
                                        <td style="width:24%">
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
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <!-- BEGIN BODY CONTENT -->
                
<div class="span12">
    <div class="row-fluid page-404">
        <div class="span5 number">
            404
        </div>
        <div class="span7 details">
            <h3>Opps, You're lost.</h3>
            <p>
                <?php if ($_smarty_tpl->tpl_vars['error_msg']->value){?>
                    <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>

                <?php }?>
            </p>
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
assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
assets/data-tables/DT_bootstrap.js"></script>
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
                $('#advance_form_hor').on('shown', function (e) {
                   App.initChosenSelect('#chosen_category');
                });

                // initiate layout and plugins
                App.setPage("table_managed");
                App.init();
                $('.phone').usphone();
                loadNotes(<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);
            });
            
	</script>
	<script>
		var callLogs=function()
		{
			var strPost = "EmployeeID="+<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
;
			Ajax_Call(strPost,"npCall-Log-Data","view_logs");
			$('#npCall-Log').modal('show');
		}
		var viewNotes=function()
		{
			var strPost = "EmployeeID="+<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
;
			Ajax_Call(strPost,"iNotes-Data","view_notes");
			$('#view_iNotes').modal('show');
		}
	</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html><?php }} ?>