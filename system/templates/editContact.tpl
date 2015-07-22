{extends file="index-main.tpl"}
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
				 <form action="#" class="form-horizontal">					
					<h3 class="form-section">General Information</h3>
					<div class="row-fluid">
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">First Name</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="First Name">
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Last Name</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="Last Name">
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
								<input type="text" class="m-wrap span12" placeholder="First Last Name">                             
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">E-Mail Address</label>
							 <div class="controls">
								<input type="text" class="m-wrap span12" placeholder="Email Address">                             
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
										<input type="text" class="m-wrap span12" >
									</div>
							</div>
						</div>
					<div class="span5">
						  <div class="control-group">
							 <label class="control-label">Contact Type</label>
							 <div class="controls">
							   <select class="m-wrap span12">
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
							   <select class="m-wrap span12">
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
								<input type="text" class="m-wrap span12"> 
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
								<textarea class="m-wrap span12"> </textarea>
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
								<input type="text" class="m-wrap span12"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Work Extension</label>
							 <div class="controls">
								 <input type="text" class="m-wrap span12">
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
								<input type="text" class="m-wrap span12"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label" >State</label>
							 <div class="controls">
								<input type="text"  class="m-wrap span12" placeholder="Change it to dropdown"> 
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
								<input type="text" class="m-wrap span12"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label" >Fax Number</label>
							 <div class="controls">
								<input type="text"  class="m-wrap span12"> 
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
								<input type="text" class="m-wrap span12" placeholder="Chee Kin">                                            
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Marital Status</label>
							 <div class="controls">
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
								<input type="text" class="m-wrap span12"> 
							 </div>
						  </div>
					   </div>
					   <!--/span-->
					   <div class="span5">
						  <div class="control-group">
							 <label class="control-label">Spouse Name</label>
							 <div class="controls">
								 <input type="text" class="m-wrap span12">
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
										<input id="placementDate" type="text" class="m-wrap span12 date-picker form-control" placeholder="MM/DD/YYYY"/>
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
								<textarea class="m-wrap span12"> </textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<h3 class="form-section">Spouse Interest</h3>
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <div class="controls">
								<textarea class="m-wrap span12"> </textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<h3 class="form-section">Children Names</h3>
					<div class="row-fluid">
					   <div class="span10">
						  <div class="control-group">
							 <div class="controls">
								<textarea class="m-wrap span12"> </textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="form-actions">
					   <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
					   <button type="button" class="btn">Cancel</button>
					</div>
				</form>
				 <!-- END FORM-->                
				</div>
			</div>
		</div>
	</div>
</div>
{/block}