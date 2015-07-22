<?php /* Smarty version Smarty 3.1.4, created on 2015-07-05 13:04:46
         compiled from ".\templates\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7616557df2345d08c1-19191536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8a1a9118fc3b72ca81a5df97d01168c83423fd' => 
    array (
      0 => '.\\templates\\dashboard.tpl',
      1 => 1435947145,
      2 => 'file',
    ),
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1436123245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7616557df2345d08c1-19191536',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_557df234f3ce6',
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
<?php if ($_valid && !is_callable('content_557df234f3ce6')) {function content_557df234f3ce6($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="alert alert-block alert-info fade in">
        <button type="button" class="close" data-dismiss="alert"></button>
        <p>
            Varner Claims Consulting ,LLC
        </p>
        <h3 class="alert-heading" style="margin:10px 0px 0px 0px;">Welcome <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
 !</h3>
    </div>
	<?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value==1){?>
	<form id="checkUserList" name="checkUserList" method="POST" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Dashboard/">
	<div class="row-fluid">
		<div class="span12">
			<div class="control-group" style="margin:10px 0px;">
				<select data-placeholder="Select User" class="chosen span12" style="width:100%;" id="iUser" name="iUser" onchange="return validateUserList(this.value);">
					<?php echo $_smarty_tpl->tpl_vars['UsersList']->value;?>

				</select>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PORTLET-->   
			<div class="portlet box green">
				<div class="portlet-title">
					<h4><i class="icon-reorder"></i>Preferences</h4>
					<div class="tools">
					   <a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="row-fluid">
							<div class="span8">
								<div class="control-group" style="margin:0px;">
									<div class="controls" style="margin-left:10px;">
										<label class="checkbox">
											<?php if ($_smarty_tpl->tpl_vars['IsAssignment']->value==1){?>
												<input type="checkbox" name="uAssignment" id="uAssignment" checked/> Assignment
											<?php }else{ ?>
												<input type="checkbox" name="uAssignment" id="uAssignment" /> Assignment
											<?php }?>
										</label>
										<label class="checkbox">
											<?php if ($_smarty_tpl->tpl_vars['IsPlacement']->value==1){?>
												<input type="checkbox" name="uPlacement" id="uPlacement" checked/> Placement
											<?php }else{ ?>
												<input type="checkbox" name="uPlacement" id="uPlacement" /> Placement
											<?php }?>
										</label>
									</div>
								</div>
							</div>
							<div class="span4">
								<button type="button" class="btn green pull-right" onClick="return updatePreferences();"><i class="icon-ok"></i> Update Preferences </button>
							</div>
						</div>
					</form>
					<!-- END FORM-->  
				</div>
			</div>
		</div>
	</div>
	</form>
	<?php }?>
	<div class="row-fluid">
		<?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value==1){?>
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number">
						<?php echo $_smarty_tpl->tpl_vars['TotalOpen']->value;?>

					</div>
					<div class="desc">									
						Total Open Cases
					</div>
				</div>						
			</div>
		</div>
		<?php }?>
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number">
						<?php echo $_smarty_tpl->tpl_vars['Open']->value;?>

					</div>
					<div class="desc">									
						Open Cases
					</div>
				</div>						
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value==1){?>
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number"><?php echo $_smarty_tpl->tpl_vars['TotalOpen']->value;?>
</div>
					<div class="desc">Total Placements</div>
				</div>						
			</div>
		</div>
		<?php }?>
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number"><?php echo $_smarty_tpl->tpl_vars['Pending']->value;?>
</div>
					<div class="desc">Placements</div>
				</div>						
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value==1){?>
	<form name="dashboard" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['SERVER_ACTUAL_PATH']->value;?>
Export-Report">
		<div class="portlet box blue">
			<div class="portlet-title">
				<h4><i class="icon-globe"></i>OPEN CASE REPORT</h4>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="clearfix">
					<div class="btn-group pull-right">
						<button class="btn dropdown-toggle blue" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
						</button>
						<ul class="dropdown-menu">
							<!--<li><a href="#">Print</a></li>
							<li><a href="javascript:exportAssignmentReport(1,'pdf')">Save as PDF</a></li>-->
							<li><a href="javascript: exportAssignmentReport(1,'excel');">Export to Excel</a></li>
						</ul>
					</div>
				</div>
				<table class="table table-striped table-bordered table-hover" id="ocrTable">
					<thead class="blue">
						<tr>
							<th>VCC Case #</th>
							<th class="hidden-480">Employee Name</th>
							<th class="hidden-480">Employer Name</th>
							<th class="hidden-480">NP Start Date</th>
							<th class="hidden-480">NP Report Date</th>
							<th class="hidden-480">Pre-Call Date</th>
							<th class="hidden-480">Follow-Up Date</th>
							<th class="hidden-480">Non-Profit State</th>
							<th class="hidden-480">Job Task-IN</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($_smarty_tpl->tpl_vars['Open']->value>0){?>
						<?php  $_smarty_tpl->tpl_vars['OR'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OR']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OpenRecords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OR']->key => $_smarty_tpl->tpl_vars['OR']->value){
$_smarty_tpl->tpl_vars['OR']->_loop = true;
?>
							<tr class="odd gradeX">
								<td><?php echo $_smarty_tpl->tpl_vars['OR']->value['VCCCaseNumber'];?>
</td>
								<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['EmployeeName'];?>
</td>
								<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['EmployerName'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['NPStartDate'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['InjuryDate'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['PreCallDate'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['FollowUpDate'];?>
</td>
								<td class="center hidden-480"></td>
								<td class="center hidden-480"></td>
							</tr>
						<?php } ?>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<h4><i class="icon-globe"></i>PLACEMENT REPORT</h4>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="clearfix">
					<div class="btn-group pull-right">
						<button class="btn dropdown-toggle green" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
						</button>
						<ul class="dropdown-menu">
							<!--<li><a href="#">Print</a></li>
							<li><a href="javascript:exportAssignmentReport(2,'pdf')">Save as PDF</a></li>-->
							<li><a href="javascript: exportAssignmentReport(2,'excel');">Export to Excel</a></li>
						</ul>
					</div>
				</div>
				<table class="table table-striped table-bordered table-hover" id="prTable">
					<thead>
						<tr>
							<th>VCC Case #</th>
							<th class="hidden-480">Employee Name</th>
							<th class="hidden-480">Employer Name</th>
							<th class="hidden-480">Employee City</th>
							<th class="hidden-480">Employee State</th>
							<th class="hidden-480">Employee ZipCode</th>
							<th class="hidden-480">NP Database</th>
							<th class="hidden-480">Call-Log</th>
							<th class="hidden-480">Google Maps</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($_smarty_tpl->tpl_vars['Pending']->value>0){?>
						<?php  $_smarty_tpl->tpl_vars['PR'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PR']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PendingRecords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PR']->key => $_smarty_tpl->tpl_vars['PR']->value){
$_smarty_tpl->tpl_vars['PR']->_loop = true;
?>
							<tr class="odd gradeX">
								<td><?php echo $_smarty_tpl->tpl_vars['PR']->value['VCCCaseNumber'];?>
</td>
								<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeName'];?>
</td>
								<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployerName'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeCity'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeState'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeZipCode'];?>
</td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['VCCCaseNumber'];?>
</td>
								<td class="center hidden-480"><a href="#">View</a></td>
								<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['VCCCaseNumber'];?>
</td>
							</tr>
						<?php } ?>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['IsAssignment']->value==1){?>
			<div class="portlet box blue">
				<div class="portlet-title">
					<h4><i class="icon-globe"></i>OPEN CASE REPORT</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
						<a href="javascript:;" class="reload"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="clearfix">
						<div class="btn-group pull-right">
							<button class="btn dropdown-toggle blue" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
							</button>
							<ul class="dropdown-menu">
								<!--<li><a href="#">Print</a></li>
								<li><a href="javascript:exportAssignmentReport(1,'pdf')">Save as PDF</a></li>-->
								<li><a href="javascript: exportAssignmentReport(1,'excel');">Export to Excel</a></li>
							</ul>
						</div>
					</div>
					<table class="table table-striped table-bordered table-hover" id="ocrTable">
						<thead class="blue">
							<tr>
								<th>VCC Case #</th>
								<th class="hidden-480">Employee Name</th>
								<th class="hidden-480">Employer Name</th>
								<th class="hidden-480">NP Start Date</th>
								<th class="hidden-480">NP Report Date</th>
								<th class="hidden-480">Pre-Call Date</th>
								<th class="hidden-480">Follow-Up Date</th>
								<th class="hidden-480">Non-Profit State</th>
								<th class="hidden-480">Job Task-IN</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($_smarty_tpl->tpl_vars['Open']->value>0){?>
							<?php  $_smarty_tpl->tpl_vars['OR'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OR']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OpenRecords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OR']->key => $_smarty_tpl->tpl_vars['OR']->value){
$_smarty_tpl->tpl_vars['OR']->_loop = true;
?>
								<tr class="odd gradeX">
									<td><?php echo $_smarty_tpl->tpl_vars['OR']->value['VCCCaseNumber'];?>
</td>
									<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['EmployeeName'];?>
</td>
									<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['EmployerName'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['NPStartDate'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['InjuryDate'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['PreCallDate'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['OR']->value['FollowUpDate'];?>
</td>
									<td class="center hidden-480"></td>
									<td class="center hidden-480"></td>
								</tr>
							<?php } ?>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['IsPlacement']->value==1){?>
			<div class="portlet box green">
				<div class="portlet-title">
					<h4><i class="icon-globe"></i>PLACEMENT REPORT</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
						<a href="javascript:;" class="reload"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="clearfix">
						<div class="btn-group pull-right">
							<button class="btn dropdown-toggle green" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
							</button>
							<ul class="dropdown-menu">
								<!--<li><a href="#">Print</a></li>
								<li><a href="javascript:exportAssignmentReport(2,'pdf')">Save as PDF</a></li>-->
								<li><a href="javascript: exportAssignmentReport(2,'excel');">Export to Excel</a></li>
							</ul>
						</div>
					</div>
					<table class="table table-striped table-bordered table-hover" id="prTable">
						<thead>
							<tr>
								<th>VCC Case #</th>
								<th class="hidden-480">Employee Name</th>
								<th class="hidden-480">Employer Name</th>
								<th class="hidden-480">Employee City</th>
								<th class="hidden-480">Employee State</th>
								<th class="hidden-480">Employee ZipCode</th>
								<th class="hidden-480">NP Database</th>
								<th class="hidden-480">Call-Log</th>
								<th class="hidden-480">Google Maps</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($_smarty_tpl->tpl_vars['Pending']->value>0){?>
							<?php  $_smarty_tpl->tpl_vars['PR'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PR']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PendingRecords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PR']->key => $_smarty_tpl->tpl_vars['PR']->value){
$_smarty_tpl->tpl_vars['PR']->_loop = true;
?>
								<tr class="odd gradeX">
									<td><?php echo $_smarty_tpl->tpl_vars['PR']->value['VCCCaseNumber'];?>
</td>
									<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeName'];?>
</td>
									<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployerName'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeCity'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeState'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['EmployeeZipCode'];?>
</td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['VCCCaseNumber'];?>
</td>
									<td class="center hidden-480"><a href="#">View</a></td>
									<td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['PR']->value['VCCCaseNumber'];?>
</td>
								</tr>
							<?php } ?>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		<?php }?>
	<?php }?>
	<input type="hidden" name="userID" id="userID" value=""/>
	<input type="hidden" name="type" id="type" value=""/>
	<input type="hidden" name="preference" id="preference" value=""/>
	</form>
</div>
<script>
	function validateUserList(UserId) {
		
		if(UserId<=0 || UserId==null)
		{
			return false;
		}
		document.checkUserList.submit();
	}
	var updatePreferences = function(){
		var UserId = $('#iUser').val();
		var uAssignment = $("#uAssignment").is(':checked') ? 1 : 0;
		var uPlacement = $("#uPlacement").is(':checked') ? 1 : 0;
		if(uAssignment!=null || uPlacement!=null)
		{
			
			$.ajax({
				url: "http://localhost/system/index.php?action=update_preferences",
				type: 'POST',
				data:{
					loginID:UserId,
					assignment:uAssignment,
					placement:uPlacement},
				success: function(result) {
					if(result=='true')
					{
						jAlert("Updated Successfully.");
					}
				},
				error: function(error) {
					jAlert("Updation Failed.");
				}
			});
		}
	}
	var exportAssignmentReport = function(preferences,type){
		var userId = $('#iUser').val();
		if(userId>0)
		{
			$('#userID').val(userId);
			$('#preference').val(preferences);
			$('#type').val(type);
			document.dashboard.submit();
		}
		return false;
	}
</script>

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