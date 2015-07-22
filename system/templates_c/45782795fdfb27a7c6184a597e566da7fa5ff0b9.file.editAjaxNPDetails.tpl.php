<?php /* Smarty version Smarty 3.1.4, created on 2015-07-22 12:58:56
         compiled from ".\templates\editAjaxNPDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32355aff600492151-44686126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45782795fdfb27a7c6184a597e566da7fa5ff0b9' => 
    array (
      0 => '.\\templates\\editAjaxNPDetails.tpl',
      1 => 1436470805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32355aff600492151-44686126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'error_msg' => 0,
    'SERVER_ACTUAL_PATH' => 0,
    'NPjobCode' => 0,
    'doNotCall' => 0,
    'EmployeeID' => 0,
    'NPList' => 0,
    'NPFirst' => 0,
    'NPLast' => 0,
    'NPAddress' => 0,
    'NPCity' => 0,
    'Statelist' => 0,
    'NPZip' => 0,
    'NPPhone' => 0,
    'NPPhoneExt' => 0,
    'NPFax' => 0,
    'NPEmail' => 0,
    'NPsecondayrFirst' => 0,
    'NPsecondaryLast' => 0,
    'NPsecondaryPhone' => 0,
    'NPsecondaryExt' => 0,
    'NPsecondaryEmail' => 0,
    'npOutcomeDate' => 0,
    'NPJobTask2' => 0,
    'IsAdmin' => 0,
    'LoginID' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_55aff600f416b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aff600f416b')) {function content_55aff600f416b($_smarty_tpl) {?><div class="span12">
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
                                <a href="#" onClick="javascript:callLogs();" class="btn pull-right red">
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
                        <h3 class="form-section">For Office use</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Job Code</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="npJobCode"  name="npJobCode" placeholder="Job Code" value="<?php echo $_smarty_tpl->tpl_vars['NPjobCode']->value;?>
" />
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <div class="controls">                                                
                                        <label class="checkbox">
                                        <?php if ($_smarty_tpl->tpl_vars['doNotCall']->value==1){?>
                                            <input type="checkbox" name="npDndCall" id="npDndCall" checked/>Do Not Call
                                        <?php }else{ ?>
                                            <input type="checkbox" name="npDndCall" id="npDndCall" />Do Not Call
                                        <?php }?>                                                
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
                                    <div class="controls">
                                           <Select class="m-wrap span10" id="npNonProfit" name="npNonProfit" onChange="javascript:editNPDetails(this.value,<?php echo $_smarty_tpl->tpl_vars['EmployeeID']->value;?>
);">
                                            <?php echo $_smarty_tpl->tpl_vars['NPList']->value;?>

                                        </select>
                                        <button type="button" id="np-toggle" class="input-append btn green" onClick="javascript:dropdownnpToText();">Toggle</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="input-append btn green" onClick="javascript:loadJS();"> Load </button>
                           <!--/span-->
                        </div>
                        <h3 class="form-section">Primary Contact</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">First Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="nppcFirstName" id="nppcFirstName" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['NPFirst']->value;?>
">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="nppcLastName" id="nppcLastName" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['NPLast']->value;?>
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
                                                <input type="text" class="m-wrap span12" name="nppcAddress" id="nppcAddress" value="<?php echo $_smarty_tpl->tpl_vars['NPAddress']->value;?>
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
                                        <input type="text" class="m-wrap span12" name="nppcCity" id="nppcCity" value="<?php echo $_smarty_tpl->tpl_vars['NPCity']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="nppcState" id="nppcState">
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
                                        <input type="text" class="m-wrap span12" name="nppcZip" id="nppcZip" value="<?php echo $_smarty_tpl->tpl_vars['NPZip']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" name="nppcPhone" id="nppcPhone" maxlength="13" value="<?php echo $_smarty_tpl->tpl_vars['NPPhone']->value;?>
" />
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
                                        <input type="text" class="m-wrap span12" name="nppcExtension" id="nppcExtension" value="<?php echo $_smarty_tpl->tpl_vars['NPPhoneExt']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Fax</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" maxlength="13" name="nppcFax" id="nppcFax" value="<?php echo $_smarty_tpl->tpl_vars['NPFax']->value;?>
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
                                        <div class="input-icon left">
                                            <i class="icon-envelope"></i>
                                            <input type="email" class="m-wrap span12" placeholder="Email Address" name="nppcEmail" id="nppcEmail" value="<?php echo $_smarty_tpl->tpl_vars['NPEmail']->value;?>
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
                                        <input type="text" class="m-wrap span12" placeholder="First Name" name="npscFirstName" id="npscFirstName" value="<?php echo $_smarty_tpl->tpl_vars['NPsecondayrFirst']->value;?>
" />
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Last Name" name="npscLastName" id="npscLastName" value="<?php echo $_smarty_tpl->tpl_vars['NPsecondaryLast']->value;?>
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
                                        <input type="text" id="sPhone" name="sPhone" maxlength="13" class="m-wrap span12 phone" placeholder="Phone Number" value="<?php echo $_smarty_tpl->tpl_vars['NPsecondaryPhone']->value;?>
" /> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" id="sExtension" name="sExtension" class="m-wrap span12" placeholder="Extension" value="<?php echo $_smarty_tpl->tpl_vars['NPsecondaryExt']->value;?>
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
                                        <input type="text" id="sEmail" name="sEmail" class="m-wrap span12" placeholder="Email Address" value="<?php echo $_smarty_tpl->tpl_vars['NPsecondaryEmail']->value;?>
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
                                        <input type="text" class="m-wrap span12" name="npReportTo" id="npReportTo" value="" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npTitle" id="npTitle" value="" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Dress Code</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npDressCode" id="npDressCode"></textarea>
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
                                            <input id="placementDate" name="placementDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="reportDate" class="control-label">Report Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <input id="reportDate" name="reportDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
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
                                        <div class="input-append bootstrap-timepicker-component">
                                            <input id="reportTime" name="reportTime" class="m-wrap m-ctrl-small timepicker-default" type="text" placeholder="Pick Time"/>
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
                                            <input id="startDate" name="startDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
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
                                            <input id="reStartDate" name="reStartDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label for="projStartDate" class="control-label">Last Worked Date</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            <input id="npLastWorkedDate" name="npLastWorkedDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
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
                                        <input type="text" class="m-wrap span12" name="npwsWorkSchedule1" id="npwsWorkSchedule1" value="" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Work Schedule 2</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsWorkSchedule2" id="npwsWorkSchedule2" value="" /> 
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Work Schedule 3</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsWorkSchedule3" id="npwsWorkSchedule3" value="" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">NP2 Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="np2Name" id="np2Name" value="" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">NP2 Address,City,State,Zip</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="np2AddrComb" id="np2AddrComb" value="" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Total Weekly Hours</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsTotalWeeklyHours" id="npwsTotalWeeklyHours" value="" /> 
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
                                                <option value="None" selected>None</option>
                                                <option value="RTW FD">RTW FD</option>
                                                <option value="Declined">Declined</option>
                                                <option value="TTD">TTD</option>
                                                <option value="SX">SX</option>
                                                <option value="No Transportation">No Transportation</option>
                                                <option value="Alergy">Alergy</option>
                                                <option value="Religious Belief">Religious Belief</option>
                                                <option value="Release to NP">Release to NP</option>
                                                <option value="Restrictions Changed">Restrictions Changed</option>
                                                <option value="Settlement">Settlement</option>
                                                <option value="Unable to Accommodate">Unable to Accommodate</option>
                                                <option value="Stopped Reporting">Stopped Reporting</option>
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
                                            <?php if ($_smarty_tpl->tpl_vars['npOutcomeDate']->value!="00/00/0000"){?>
                                                <input id="npOutcomeDate" name="npOutcomeDate" value="<?php echo $_smarty_tpl->tpl_vars['npOutcomeDate']->value;?>
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
                                    <label class="control-label">Total Hours Worked</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsTHW" id="npwsTHW" value="" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Total Days Worked</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npwsTDW" id="npwsTDW" value=""> 
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
                                        <textarea class="m-wrap span12" name="npDescription" id="npDescription"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Non-Profit Additional Instructions</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npAddnInst" id="npAddInst"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="form-section">Job Task(format as shown on assignment letter)</h3>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npJobTask" id="npJobTask"></textarea>
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
                                        <textarea class="m-wrap span12"  style="height:150px" name="eNotes" id="eNotes"></textarea>
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
</div><?php }} ?>