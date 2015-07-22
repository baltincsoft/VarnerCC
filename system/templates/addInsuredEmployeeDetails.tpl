{extends file="index.tpl"}
{block name="body"}
<div class="span12">
    <div class="tab-content">
        <div class="active tab-pane ">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Add Employee Details</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN EMPLOYEE DETAILS MANAGER PANEL-->
					{if $EmployeeID>0}
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="pull-right">
                                <a href="{$SERVER_ACTUAL_PATH}Export-Employee/{$EmployeeID}" class="btn pull-right blue" target="_blank">
                                    <i class="icon-download icon-white"></i>
                                    <span>Download Employee CSV(.csv) File</span>
                                </a>
                            </div>
                        </div>
                    </div>
					{/if}
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
                    <!-- END EMPLOYEE DETAILS MANAGER PANEL-->
                    <!-- BEGIN FORM-->
                    <form id="add-IEmployee" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}System/">	
                        <h3 class="form-section">General Information</h3>								 
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">VCC Case#</label>
                                    <div class="controls">
                                            <input type="text" class="m-wrap span12" id="VCCCaseNumber" name="VCCCaseNumber" placeholder="VCC Case" value="{$VCCCaseNumber}" readonly/>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">VCC Employee Code</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" id="VCCEmployeeCode" name="VCCEmployeeCode" placeholder="Employee Code" value="{$VCCEmployeeCode}"/>
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
                                            {if $NPEarliestStartDate!="00/00/0000"}
                                                <input id="npEarliestDate" name="npEarliestDate" class="m-wrap m-ctrl-medium form-control span12" type="text" placeholder="MM/DD/YYYY" value="{$NPEarliestStartDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            {else}
                                                <input id="npEarliestDate" name="npEarliestDate" class="m-wrap m-ctrl-medium form-control span12" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                            {/if}
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
                                            <input type="text" class="m-wrap span12" id="iFirstName" name="iFirstName" placeholder="First Name" value="{$IFirstName}" />
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
                                            <input type="text" class="m-wrap span12" id="iLastName" name="iLastName" placeholder="Last Name" value="{$ILastName}">
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
                                            <input type="text" class="m-wrap span12" placeholder="Address" name="iAddress" id="iAddress" value="{$IAddress}">
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
                                            <input type="text" class="m-wrap span12" placeholder="Apartment Number" name="iAprtNum" id="iAprtNum" value="{$IAppartmentNumber}">
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
                                        <input type="text" class="m-wrap span12" id="iCity" name="iCity" placeholder="City" value="{$ICity}"> 
                                    </div>
                                </div>
                           </div>
                           <!--/span-->
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label" >State</label>
                                    <div class="controls">
                                        <select class="m-wrap span12" id="iSate" name="iState">
                                            {$Statelist}
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
                                        <input type="text" class="m-wrap span12" id="iZip" name="iZip" placeholder="Zip" value="{$IZip}">
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
                                            <input type="email" class="m-wrap span12" name="iEmail" id="iEmail" placeholder="Email" value="{$IEmailAddress}"> 
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
                                            <option value="M" {$M_SELECTED}>Male</option>
                                            <option value="F" {$F_SELECTED}>Female</option>
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
                                        <input type="text" class="m-wrap span12" placeholder="Occupation" id="iOccupation" name="iOccupation" value="{$IOccupation}">
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Age</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" placeholder="Age" id="iAge" name="iAge" value="{$IAge}">
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
                                            <input type="text" class="m-wrap span12 phone" placeholder="Phone" name="iPhone" id="iPhone" maxlength="13" value="{$IPhone}">
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
                                            <input type="text" class="m-wrap span12 phone" placeholder="Mobile" name="iMobile" id="iMobile" maxlength="13" value="{$IMobile}">
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
                                                <option value="US" {$US_SELECTED}>English(US)</option>
                                                <option value="UK" {$UK_SELECTED}>English(UK)</option>
                                                <option value="French" {$French_SELECTED}>French</option>
                                                <option value="Irish" {$Irish_SELECTED}>Irish</option>
                                                <option value="Mandarin" {$Mandarin_SELECTED}>Mandarin</option>
                                                <option value="Russian" {$Russian_SELECTED}>Russian</option>
                                                <option value="Spanish" {$Spanish_SELECTED}>Spanish</option>
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
                                                {if $InjuryDate!="00/00/0000"}
                                                    <input id="iDateOfInjury" name="iDateOfInjury" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$InjuryDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="iDateOfInjury" name="iDateOfInjury" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Claim Number</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="iClaimNumber" id="iClaimNumber" placeholder="Claim Number" value="{$ClaimNumber}"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label">Injury Type</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="iInjuryType" id="iInjuryType" placeholder="Injury Type">{$InjuryType}</textarea>
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
                                            {$JuridictionList}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Pre-Injury Weekly Hours Worked</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="iPreInjWeeklyHrsWorked" id="iPreInjWeeklyHrsWorked" value="{$PIWHoursWorked}" />
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
                                            <input type="text" class="m-wrap span12" name="npAWWRate" id="npAWWRate" value="{$AWWRate}" placeholder="0.00"/> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--/span-->
                           <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Comp Rate</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npCompRate" id="npCompRate" value="{$CompRate}"  placeholder="0.00"/>
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
                                        <input type="text" class="m-wrap span12" name="npHourRateALD" id="npHourRateALD" value="{$ALDRateHourly}"> 
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Weekly ALD Rate</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="npWeeklyALDRate" id="npWeeklyALDRate" value="{$ALDRateWeekly}">
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
                                                {if $RestrictionDate!="00/00/0000"}
                                                    <input id="npDateOfRestriction" name="npDateOfRestriction" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$RestrictionDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npDateOfRestriction" name="npDateOfRestriction" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
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
                                                {if $NextDAppointment!="00/00/0000"}
                                                    <input id="npNextDrApptDate" name="npNextDrApptDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$NextDAppointment}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npNextDrApptDate" name="npNextDrApptDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
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
                                        <input type="text" class="m-wrap span12" name="npByPhysician" id="npByPhysician" value="{$IPhysician}" placeholder="By Physician"/>
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
                                        <textarea class="m-wrap span12" name="npMedicalRest" id="npMedicalRest">{$MedRestriction}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10">
                                <div class="control-group">
                                <label class="control-label">Trans Issue Type</label>
                                    <div class="controls">
                                        <textarea class="m-wrap span12" name="npTransIssueType" id="npTransIssueType">{$TransIssueType}</textarea>
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
                                                {if $RefreralDate!="00/00/0000"}
                                                    <input id="npReferralDate" name="npReferralDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$RefreralDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npReferralDate" name="npReferralDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
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
                                                {if $ReOpenDate!="00/00/0000"}
                                                    <input id="npReOpenDate" name="npReOpenDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$ReOpenDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npReOpenDate" name="npReOpenDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label class="control-label">Preset Content:</label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <Select type="text" class="m-wrap span12" name="npPresetContent" id="npPresetContent">
                                                {$PresetContentList}
                                            </Select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid hidden">
                            <div class="span10">
                                <div class="control-group" id="Add_LoadNotes">
                                    <label class="control-label">Others</label>
                                    <div class="controls">
                                        <input type="text" class="m-wrap span12" name="otherReason" id="otherReason" value="{$otherReason}" placeholder="OTHER PRESET CONTENT"/>
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
                                            <Select type="text" class="m-wrap span12" name="npPersonAssigned" id="npPersonAssigned" onchange="javascript:sendEmailToAssignee(this.value,{$EmployeeID});">
                                                {$PersonAssigned}
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
                                                {if $PreCallDate!="00/00/0000"}
                                                    <input id="npPreCallDate" name="npPreCallDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$PreCallDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npPreCallDate" name="npPreCallDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
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
                                                {if $FollowUpDate!="00/00/0000"}
                                                    <input id="npFollowupDate" name="npFollowupDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$FollowUpDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npFollowupDate" name="npFollowupDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
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
                                                {if $CloseDate!="00/00/0000"}
                                                    <input id="npCloseDate" name="npCloseDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY" value="{$CloseDate}"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {else}
                                                    <input id="npCloseDate" name="npCloseDate" class="m-wrap m-ctrl-medium form-control span12" size="16" type="text" placeholder="MM/DD/YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
                                                {/if}
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
                        {if $EmployeeID>0}
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
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Update Employee Details</button>
                        </div>
                        {else}
                        <div class="form-actions">
                            <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Add Employee Details</button>
                        </div>
                        {/if}
                        <input type="hidden" name="LoginID" value="{$LoginID}"/>
                        <input type="hidden" name="EmployeeID" value="{$EmployeeID}"/>
                        <input type="hidden" name="action" value="{$action}"/>
                    </form>
                 <!-- END FORM-->                
                </div>
            </div>
        </div>
    </div>
</div>
{/block}