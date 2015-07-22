{extends file="index-main.tpl"}
{block name="body"}
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
                    <form id="add-Employer" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}System/">
                    <h3 class="form-section">General Information</h3>								 
                        <div class="row-fluid">
                            <div class="span5">
                                 <div class="control-group">
                                     <label class="control-label">Referral Source</label>
                                     <div class="controls">
                                         <input type="text" class="m-wrap span12" placeholder="Referral Source" name="eR_RefferalSource" id="eR_RefferalSource" value="{$GIEReferralSource}" onBlur="javascript:findEmployer();">
                                     </div>
                                 </div>
                            </div>
                            <div class="span6">
                                 <div class="control-group">
                                     <label class="control-label">Employer</label>
                                     <div class="controls" id="replace-Toggler">
                                         <Select class="m-wrap span9" name="eR_Employer" id="eR_Employer" onChange="javascript:fillEmployerDetails(this.value,{$EmployeeID});">
                                            {$EmployerList}
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
                                        <input type="text" class="m-wrap span12" placeholder="Placement Fee" id="PlacementFee" name="PlacementFee" onCopy="return false" onPaste="return false" autocomplete="off"  value="{$GIPlacementFee}"/>                             
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">2nd Placement Fee</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="2nd Placement Fee" id="PlacementFee2" name="PlacementFee2" onCopy="return false" onPaste="return false" autocomplete="off" value="{$GISecondPlacementFee}"/>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">3rd Placement Fee</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="3rd Placement Fee" id="PlacementFee3" name="PlacementFee3" onCopy="return false" onPaste="return false" autocomplete="off" value="{$GIThirdPlacementFee}"/> 
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
                                        <input type="text" class="m-wrap span12" name="eR_FirstName" id="eR_FirstName" value="{$GIFirstName}">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Last Name</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_LastName" id="eR_LastName" value="{$GILastName}">
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_Address" id="eR_Address" value="{$GIAddress}">
                                    </div>
                                </div>
                            </div>
                         </div>

                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_City" id="eR_City" value="{$GICity}">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" name="eR_State" id="eR_State">
                                            {$Statelist}
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
                                        <input type="text" class="m-wrap span12" name="eR_Zip" id="eR_Zip" value="{$GIZip}">
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
                                        <input type="text" class="m-wrap span12 phone" name="eR_BusinessPhone" id="eR_BusinessPhone" maxlength="13" value="{$GIBusinessPhone}"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_Extension" id="eR_Extension" value="{$GIExtension}">
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
                                        <input type="text" class="m-wrap span12 phone" name="eR_FaxNumber" id="eR_FaxNumber" value="{$GIFax}"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="email" class="m-wrap span12" name="eR_Email" id="eR_Email" value="{$GIEmail}"> 
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
                                                <input type="text" class="m-wrap span12" name="eR_SFirstName" id="eR_SFirstName" value="{$RSCFirstName}"> 
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                                <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Last Name</label>
                                         <div class="controls">
                                                <input type="text" class="m-wrap span12" name="eR_SLastName" id="eR_SLastName" value="{$RSCLastName}"> 
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
                                        <input type="email" class="m-wrap span12" name="eR_SEmailAlert1" id="eR_SEmailAlert1" value="{$RSCEAlert1}"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Email Alert 2</label>
                                    <div class="controls">
                                        <input type="email" class="m-wrap span12" name="eR_SEmailAlert2" id="eR_SEmailAlert2" value="{$RSCEAlert2}"> 
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
                                            <input type="email" class="m-wrap span12" name="eR_SEmailAlert3" id="eR_SEmailAlert3" value="{$RSCEAlert3}"> 
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
                                                <input type="text" class="m-wrap span12" name="eR_CAFirstName" id="eR_CAFirstName" value="{$CAFirstName}"> 
                                         </div>
                                  </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                  <div class="control-group">
                                         <label class="control-label">Last Name</label>
                                         <div class="controls">
                                                 <input type="text" class="m-wrap span12" name="eR_CALastName" id="eR_CALastName" value="{$CALastName}">
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
                                        <input type="text" class="m-wrap span12 phone" name="eR_CAPhone" id="eR_CAPhone" maxlength="13" value="{$CAPhone}">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Extension</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="eR_CAExtension" id="eR_CAExtension" value="{$CAExtension}">
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
                                        <input type="email" class="m-wrap span12" name="eR_CAEmail" id="eR_CAEmail" value="{$CAEmail}">
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
                            <button type="button" onClick="javascript:iNewNote({$EmployeeID},0,{$IsAdmin});" class="btn green pull-left" style="margin-right:10px"> Add Notes</button>
                            <button type="button" onClick="javascript:viewNotes();" class="btn green pull-left" style="margin-right:10px">View Notes</button>
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Employer Details</button>
                        </div>
                        <input type="hidden" name="LoginID" value="{$LoginID}"/>
                        <input type="hidden" name="EmployeeID" value="{$EmployeeID}"/>
                        <input type="hidden" name="action" value="{$action}"/>
                    <!-- END FORM-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{/block}