{extends file="index-main.tpl"}
{block name="body"}
<div class="span12">
    <div class="tab-content">
        <div class="active tab-pane ">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Edit Additional Details</h4>
                    <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    {if $msg}
                        <div class="alert alert-success">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Success!</strong>{$msg}
                        </div>
                    {/if}
                    {if $error_msg}
                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Error!</strong>{$error_msg}
                        </div>
                    {/if}
                              
                    <!-- BEGIN FORM-->
                    <form id="add-AdditionalDetails" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}System/">
                        <h3 class="form-section">Shipping Information</h3>								 
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Drop Off Date</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                {if $ADDropOffDate!="00/00/0000"}
                                                    <input id="aDropOffDate" name="aDropOffDate" value="{$ADDropOffDate}" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/>
                                                {else}
                                                    <input id="aDropOffDate" name="aDropOffDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/>
                                                {/if}
                                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Shipping Vendor</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="aShippingVendor" id="aShippingVendor">
                                            <option value="FED" {$FED_SELECTED}>FedEx</option>
                                            <option value="UPS" {$UPS_SELECTED}>UPS</option>
                                            <option value="USP" {$USP_SELECTED}>USPS</option>
                                            <option value="OTH" {$OTH_SELECTED}>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Tracking Number</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Tracking Number" name="aTrackingNumber" id="aTrackingNumber" value="{$ADTrackingNumber}"/>                             
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Check Status</label>
                                    <div class="controls">
                                        <a href="https://www.google.com?TrackingNumber={$ADTrackingNumber}" class="m-wrap span12" name="aCheckStatus" id="aCheckStatus" target="_blank">Tracking</a>
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="placementDate" class="control-label">Date Delivered</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                            {if $ADDateDelivered!="00/00/0000"}
                                                <input id="aDateDelievered" name="aDateDelievered" value="{$ADDateDelivered}" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/>
                                            {else}
                                                <input id="aDateDelievered" name="aDateDelievered" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/>
                                            {/if}
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >Time Delivered</label>
                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker-component">
                                            <input name="aTimeDelievered" id="aTimeDelievered" value="{$ADDeliveredTime}" class="m-wrap m-ctrl-small timepicker-default" type="text" placeholder="Time Delivered" />
                                            <span class="add-on"><i class="icon-time"></i></span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>       
                        <!--/row-->
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Undeliverable</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="aUnbeliverable" id="aUnbeliverable" >
                                            <option value="No" selected>No</option>
                                            <option value="Y" {$Y_SELECTED}>Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Reason:</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="aReason" id="aReason">{$ADReason}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
						   
                        <h3 class="form-section">Follow-Up</h3>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                        {if $ADFU_QTNP==1}
                                            <input type="checkbox" name="aquesNP" id="aquesNP" checked/>Questionnaire to Non-Profit
                                        {else}
                                            <input type="checkbox" name="aquesNP" id="aquesNP" />Questionnaire to Non-Profit
                                        {/if}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Date:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                {if $ADFU_QTNP_Date!="00/00/0000"}
                                                    <input id="aquesNPDate" name="aquesNPDate" value="{$ADFU_QTNP_Date}" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/>
                                                {else}
                                                    <input id="aquesNPDate" name="aquesNPDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/>
                                                {/if}
                                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                     
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                        {if $ADFU_QTE==1}
                                            <input type="checkbox" name="aQuesEmp" id="aQuesEmp" checked/>Questionnaire to Employee
                                        {else}
                                            <input type="checkbox" name="aQuesEmp" id="aQuesEmp" />Questionnaire to Employee
                                        {/if}
                                        </label>  
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Date:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                {if $ADFU_QTE_Date!="00/00/0000"}
                                                    <input id="aQuesEmpDate" name="aQuesEmpDate" value="{$ADFU_QTE_Date}" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="aQuesEmpDate" name="aQuesEmpDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <!--/span-->                                       
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                        {if $ADFU_SOC==1}
                                            <input type="checkbox" name="aQA" id="aQA" checked/>Quality Assurance
                                        {else}
                                            <input type="checkbox" name="aQA" id="aQA" />Quality Assurance
                                        {/if}
                                        
                                        </label>  
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Date:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <div class="input-append date date-picker" data-date="today();" data-date-format="mm/dd/yyyy" data-date-viewmode="days">
                                                {if $ADFU_SOC_Date!="00/00/0000"}
                                                    <input id="aQADate" name="aQADate" value="{$ADFU_SOC_Date}" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="aQADate" name="aQADate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->                                       
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
                            <button type="button" onClick="javascript:iNewNote({$EmployeeID},0,{$IsAdmin});" class="btn green pull-left" style="margin-right:10px"> Add Notes</button>
                            <button type="button" onClick="javascript:viewNotes();" class="btn green pull-left" style="margin-right:10px">View Notes</button>
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Additional Details</button>
                        </div>
                        <input type="hidden" name="LoginID" value="{$LoginID}"/>
                        <input type="hidden" name="EmployeeID" value="{$EmployeeID}"/>
                        <input type="hidden" name="action" value="{$action}" />
                    </form>
                    <!-- END FORM-->              
                </div>
            </div>
        </div>
    </div>
</div>
{/block}