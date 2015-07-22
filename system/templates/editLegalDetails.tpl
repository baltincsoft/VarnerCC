{extends file="index-main.tpl"}
{block name="body"}
<div class="span12">
    <div class="tab-content">
        <div class="active tab-pane ">
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Legal Details</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form id="add-LegalDetails" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}System/">
                        {if $msg}
                        <div class="alert alert-success">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Success!</strong>{$msg}
                        </div>
                        {/if}
                        {if $error_msg}
                            <div class="alert alert-error">
                                <button class="close" data-dismiss="alert"></button>
                                <strong>Error! </strong>{$error_msg}
                            </div>
                        {/if}
                        <h3 class="form-section">Injured Employee Attorney</h3>								 
                        <div class="row-fluid">
                           <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Law Firm</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Law Firm Name" id="IELawFirmName" name="IELawFirmName" value="{$IEALawFirmName}" onCopy="return false" onPaste="return false" autocomplete="off"/>
                                    </div>
                               </div>
                           </div>
                           <!--/span-->
                           </div>
                                <!--/row-->
                        <div class="row-fluid">
                                <div class="span5">
                                    <div class="control-group">
                                        <label class="control-label">First Name</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12" id="IEFirstName" name="IEFirstName" value="{$IEAFirstName}"/>
                                        </div>
                                    </div>
                                </div>
                                 <div class="span5">
                                    <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                                <input type="text" class="m-wrap span12" id="IELastName" name="IELastName" value="{$IEALastName}"/>
                                        </div>
                                    </div>
                                </div>
                         </div>
                         <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                            <input type="text" class="m-wrap span12" id="IEAddress" name="IEAddress" value="{$IEAAddress}" onCopy="return false" onPaste="return false" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="IECity" name="IECity" value="{$IEACity}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                              <div class="control-group">
                                     <label class="control-label" >State</label>
                                     <div class="controls">
                                        <Select class="m-wrap span12" id="IEState" name="IEState"/>
                                            {$IEAStatelist}
                                        </Select>
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
                                            <input type="text" class="m-wrap span12" id="IEZip" name="IEZip" value="{$IEAZip}"/>
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
                                        <input type="text" class="m-wrap span12 phone" id="IEPhone" name="IEPhone" value="{$IEABusinessPhone}" maxlength="13" onCopy="return false" onPaste="return false" autocomplete="off"> 
                                    </div>
                                </div>
                           </div>
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                       <input type="text" class="m-wrap span12" id="IEExtension" name="IEExtension" value="{$IEAExtension}"/>
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
                                        <input type="text" class="m-wrap span12 phone" id="IEFax" name="IEFax" value="{$IEAFaxNumber}" maxlength="13" onCopy="return false" onPaste="return false" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="IEMail" name="IEMail" value="{$IEAEmailAddress}" onCopy="return false" onPaste="return false" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h3 class="form-section">Defense Attorney</h3>								 
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Law Firm</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="DALawFirmName" name="DALawFirmName" value="{$DALawFirmName}" placeholder="Law Firm Name" onCopy="return false" onPaste="return false" autocomplete="off"/>
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
                                        <input type="text" class="m-wrap span12" id="DAFirstName" name="DAFirstName" value="{$DAFirstName}"/>
                                    </div>
                                </div>
                            </div>
                             <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="DALastName" name="DALastName" value="{$DALastName}"/>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="DAAddress" name="DAAddress" value="{$DAAddress}" onCopy="return false" onPaste="return false" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>
                         </div>

                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                            <input type="text" class="m-wrap span12" id="DACity" name="DACity" value="{$DACity}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <Select class="m-wrap span12" id="DAState" name="DAState">
                                            {$DAStatelist}
                                        </Select>
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
                                        <input type="text" class="m-wrap span12" id="DAZip" name="DAZip" value="{$DAZip}" />
                                    </div>
                                </div>
                            </div>
                                <!--/span-->
                        </div>
                         <!--/row-->
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Business Phone</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12 phone" id="DAPhone" name="DAPhone" value="{$DABusinessPhone}" maxlength="13" onCopy="return false" onPaste="return false" autocomplete="off"/> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Extension</label>
                                         <div class="controls">
                                                 <input type="text" class="m-wrap span12" id="DAExtansion" name="DAExtansion" value="{$DAExtension}" onCopy="return false" onPaste="return false" autocomplete="off"/>
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row-fluid">
                           <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Fax Number</label>
                                         <div class="controls">
                                                <input type="text" class="m-wrap span12 phone" id="DAFax" name="DAFax" value="{$DAFaxNumber}" maxlength="13" onCopy="return false" onPaste="return false" autocomplete="off"/>
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                                <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Email</label>
                                         <div class="controls">
                                                <input type="text" class="m-wrap span12" id="DAEmail" name="DAEmail" value="{$DAEmailAddress}" onCopy="return false" onPaste="return false" autocomplete="off"/> 
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
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Legal Details</button>
                        </div>
                        <input type="hidden" name="LoginID" value="{$LoginID}" />
                        <input type="hidden" name="EmployeeID" value="{$EmployeeID}" />
                        <input type="hidden" name="action" value="{$action}" />
                    </form>
                    <!-- END FORM-->                
                </div>
            </div>
        </div>
    </div>
</div>
{/block}