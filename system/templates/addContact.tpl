{extends file="index.tpl"}
{block name="body"}
<div class="span12">
	<div class="tab-content">
		<div class="active tab-pane ">
			<div class="portlet box blue">
			  <div class="portlet-title">
				 <h4><i class="icon-reorder"></i>Add Contact</h4>
				 <div class="tools">
					<a href="javascript:;" class="collapse"></a>
				 </div>
			  </div>
			  <div class="portlet-body form">
				 <!-- BEGIN FORM-->
					<form id="add-Contact" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}Root">
					<h3 class="form-section">General Information</h3>
					<div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">First Name</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="First Name" name="cFirstName" id="cFirstName">
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Last Name</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="Last Name" name="cLastName" id="cLastName">
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>
						<div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Full Name</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="First Last Name" name="cFullName" id="cFullName">                             
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">E-Mail Address</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="Email Address" name="cEmailAddress" id="cEmailAddress">                             
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>
					<!--/row-->
					<div class="row-fluid">
						<div class="span5">
							<div class="control-group">
								<label class="control-label">Job Title</label>
									<div class="controls">
										<input type="text" class="m-wrap span12" name="cJobTitle" id="cJobTitle">
									</div>
							</div>
						</div>
					<div class="span5">
						  <div class="control-group">
							 <label class="control-label">Contact Type</label>
							 <div class="controls">
							   <select class="m-wrap span12" name="cContactType" id="cContactType">
											<option value="Buyer">Buyer</option>
											<option value="Seller">Seller</option>
							   </select>
							 </div>
						  </div>
					 </div>
					 </div>
					<div class="row-fluid">
					   <!--/span-->
					  <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Salutation Type</label>
							 <div class="controls">
							   <select class="m-wrap span12" name="cSalutationType" id="cSalutationType">
											<option value="">-Select Your Title-</option>
											<option value="Mr.">Mr.</option>
											<option value="Mrs.">Mrs.</option>
											<option value="Miss">Miss</option>
											<option value="Ms.">Ms.</option>
											<option value="Dr.">Dr.</option>
											<option value="Prof.">Prof.</option>
											<option value="Rev.">Rev.</option>
											<option value="Other">Other</option>
							   </select>
							 </div>
						  </div>
					 </div>
					   
					</div>
					<!--/row-->
							  
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <label class="control-label">Company Name</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" name="cCompanyName" id="cCompanyName"> 
							 </div>
						  </div>
					   </div>
						<!--/span-->
					</div>
					 <!--/row-->
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <label class="control-label">Company Description</label>
							 <div class="controls">
								<textarea class="m-wrap span12" name="cCompanyDescription" id="cCompanyDescription"> </textarea>
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
								<input type="text" class="m-wrap span12" name="cBusinessPhone" id="cBusinessPhone"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Work Extension</label>
							 <div class="controls">
								 <input type="text" class="m-wrap span12" name="cWorkExtension" id="cWorkExtension">
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>
					 <div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">City</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" name="cCity" id="cCity"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label" >State</label>
							 <div class="controls">
								<input type="text"  class="m-wrap span12" placeholder="Change it to dropdown" name="cState" id="cState"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>       
					 <div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Postal Code</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" name="cPostalCode" id="cPostalCode"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label" >Fax Number</label>
							 <div class="controls">
								<input type="text"  class="m-wrap span12" name="cFaxNamber" id="cFaxNamber"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>       
					<h3 class="form-section">Other Details</h3>
				  <div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Referred By</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="Chee Kin" name="cReferredBy" id="cReferredBy">                                            
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Marital Status</label>
							 <div class="controls" name="cMartialStatus" id="cMartialStatus">
								<select class="m-wrap span12">
											<option value="">-Select-</option>
											<option value="Buyer">Single</option>
											<option value="Seller">Married</option>
							   </select>
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>
					<div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Hometown</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" name="cHomeTown" id="cHomeTown"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Spouse Name</label>
							 <div class="controls">
								 <input type="text" class="m-wrap span12" name="cSpouseName" id="cSpouseName">
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					</div>
					<div class="row-fluid">
						<div class="span5">
							<div class="control-group">
								<label for="placementDate" class="control-label">Birth Date</label>
								<div class="controls">
									<div class="input-group">
										<div class="input-append date date-picker" data-date="01-01-1970" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
										<input id="cBirthDate" name="cBirthDate" class="m-wrap m-ctrl-medium date-picker form-control" size="16" type="text" placeholder="MM-DD-YYYY"/><span class="add-on"><i class="icon-calendar"></i></span>
									 </div>
									</div>
								</div>
							</div>
					  </div>
					</div>
					<!--/row-->
					<h3 class="form-section">Contact Interest</h3>
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <div class="controls">
								<textarea class="m-wrap span12" name="cContactInterest" id="cContactInterest"> </textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<h3 class="form-section">Spouse Interest</h3>
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <div class="controls">
								<textarea class="m-wrap span12" name="cSpouseInterest" id="cSpouseInterest"> </textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<h3 class="form-section">Children Names</h3>
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <div class="controls">
								<textarea class="m-wrap span12" name="cChildrenNames" id="cChildrenNames"> </textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<h3 class="form-section">Notes</h3>
						<div class="row-fluid">
							<div class="span10">
								<div class="control-group">
									<div class="controls">
										<textarea class="m-wrap span12" name="cNotes" id="cNotes"> </textarea>
									</div>
								</div>
							</div>
						</div>
					<div class="form-actions">
					   <button type="submit" class="btn green pull-left" style="margin-right:10px"> Add Notes</button>
					   <button type="submit" class="btn green pull-left" style="margin-right:10px">View Notes</button>
					   <button type="submit" class="btn green pull-left" style="margin-right:10px">Upload Documents</button>
					   <button type="submit" class="btn blue pull-right" ><i class="icon-ok"></i> Save Details</button>
					</div>
					<input type="hidden" name="action" value="add_contact" />
				</form>
				 <!-- END FORM-->                
				</div>
			</div>
		</div>
	</div>
</div>
{/block}