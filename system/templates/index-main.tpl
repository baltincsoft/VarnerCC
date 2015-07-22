<!DOCTYPE html>
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
   <link href="{$SERVER_ACTUAL_PATH}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/css/metro.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/css/style.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/css/style_responsive.css" rel="stylesheet" />
   <link href="{$SERVER_ACTUAL_PATH}assets/css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="{$SERVER_ACTUAL_PATH}assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/uniform/css/uniform.default.css" />
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
            <a class="brand" href="{$SERVER_ACTUAL_PATH}System/">
            <img src="{$SERVER_ACTUAL_PATH}assets/img/logo.gif" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="{$SERVER_ACTUAL_PATH}assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="{$SERVER_ACTUAL_PATH}assets/img/avatar.jpg" />
                  <span class="username"> {$Name}</span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="{$SERVER_ACTUAL_PATH}Change-Password"><i class="icon-user"></i> Change Password</a></li>
                     <li><a href="{$SERVER_ACTUAL_PATH}Logout"><i class="icon-key"></i> Log Out</a></li>
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
            <li class="start {$emp_active}">
                <a href="{$SERVER_ACTUAL_PATH}View-Employee-Detail/{$EmployeeID}">
                <i class="icon-user"></i>
                <span class="title">View Employee Detail</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="{$emplyr_active}">
                {if $EmployeeID>0}
                    <a href="{$SERVER_ACTUAL_PATH}View-Employer-Detail/{$EmployeeID}">
                    <i class="icon-home"></i>
                    <span class="title">View Employer Detail</span>
                    <span class="selected"></span>
                    </a>
                {else}
                    <a href="#">
                    <i class="icon-home"></i>
                    <span class="title">Employer Detail</span>
                    <span class="selected"></span>
                    </a>
                {/if}
            </li>
            <li class="{$lgl_active}">
                {if $EmployeeID>0}
                    <a href="{$SERVER_ACTUAL_PATH}View-Legal-Detail/{$EmployeeID}">
                    <i class="icon-table"></i> 
                    <span class="title">View Legal Detail</span>
                    <span class="selected"></span>
                    </a>
                {else}
                    <a href="#">
                    <i class="icon-table"></i> 
                    <span class="title">Legal Detail</span>
                    <span class="selected"></span>
                    </a>
                {/if}
            </li>
            <li class="{$npd_active}">
                {if $EmployeeID>0}
                    <a href="{$SERVER_ACTUAL_PATH}View-NP-Detail/{$EmployeeID}">
                    <i class="icon-table"></i> 
                    <span class="title">View Non-Profit Detail</span>
                    <span class="selected"></span>
                    </a>
                {else}
                    <a href="#">
                    <i class="icon-table"></i> 
                    <span class="title">Non-Profit Detail</span>
                    <span class="selected"></span>
                    </a>
                {/if}
            </li>
            <li class="{$addnl_active}">
                {if $EmployeeID>0}
                    <a href="{$SERVER_ACTUAL_PATH}View-Addition-Detail/{$EmployeeID}">
                    <i class="icon-table"></i> 
                    <span class="title">View Additional Detail</span>
                    <span class="selected"></span>
                    </a>
                {else}
                    <a href="#">
                    <i class="icon-table"></i> 
                    <span class="title">Additional Detail</span>
                    <span class="selected"></span>
                    </a>
                {/if}
            </li>
            <li class="">
                <a href="{$SERVER_ACTUAL_PATH}Employee-Detail">
                <i class="icon-table"></i> 
                <span class="title">Add New Employee</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="{$srch_active}">
                <a href="{$SERVER_ACTUAL_PATH}Search">
                <i class="icon-briefcase"></i>
                <span class="title">Search</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="{$upd_active}">
                <a href="{$SERVER_ACTUAL_PATH}Document/{$EmployeeID}">
                <i class="icon-upload"></i>
                <span class="title">Upload Documents</span>
                <span class="selected"></span>
                </a>
            </li>
            <li class="">
                <a href="{$SERVER_ACTUAL_PATH}Notes/{$EmployeeID}" target="_blank">
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
                     {$title}
                    </h3>
                    <ul class="breadcrumb">
                            <li>
                                    <i class="icon-home"></i>
                                    <a href="{$SERVER_ACTUAL_PATH}">Home</a>
                                    <span class="icon-angle-right"></span>
                            </li>
                            <li><a href="#">{$title}</a></li>
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
                                            <a href='#' class="btn green" onClick='javascript:addNewLog({$EmployeeID});'>New Log</a>
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
                {block name="body"}{/block}
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
   <script src="{$SERVER_ACTUAL_PATH}assets/js/jquery-1.8.3.min.js"></script>    
   <script src="{$SERVER_ACTUAL_PATH}assets/breakpoints/breakpoints.js"></script>       
   <script src="{$SERVER_ACTUAL_PATH}assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script src="{$SERVER_ACTUAL_PATH}assets/js/jquery.blockui.js"></script>
   <script src="{$SERVER_ACTUAL_PATH}assets/js/jquery.cookie.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="{$SERVER_ACTUAL_PATH}assets/js/excanvas.js"></script>
   <script src="{$SERVER_ACTUAL_PATH}assets/js/respond.js"></script>
   <![endif]-->
    
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="{$SERVER_ACTUAL_PATH}assets/js/app.js"></script>
    <script src="{$SERVER_ACTUAL_PATH}system/includes/sajax.js"></script>
    <script src="{$SERVER_ACTUAL_PATH}system/includes/Us-Phone.js"></script>
	<script src="{$SERVER_ACTUAL_PATH}assets/js/jquery.alerts.js"></script>
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
            loadNotes({$EmployeeID});
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
            loadNotes({$EmployeeID});
        }
    </script>
    <script>
        var viewNotes=function()
        {
            var strPost = "EmployeeID="+{$EmployeeID};
            Ajax_Call(strPost,"iNotes-Data","view_notes");
            $('#view_iNotes').modal('show');
        }
        var callLogs=function()
        {
            var strPost = "EmployeeID="+{$EmployeeID};
            Ajax_Call(strPost,"npCall-Log-Data","view_logs");
            $('#npCall-Log').modal('show');
        }
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>