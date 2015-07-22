{extends file="index.tpl"}
{block name="body"}
<div class="span12">
    <div class="alert alert-block alert-info fade in">
        <button type="button" class="close" data-dismiss="alert"></button>
        <p>
            Varner Claims Consulting ,LLC
        </p>
        <h3 class="alert-heading" style="margin:10px 0px 0px 0px;">Welcome {$Name} !</h3>
    </div>
	{if $IsAdmin==1}
	<form id="checkUserList" name="checkUserList" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}Dashboard/">
	<div class="row-fluid">
		<div class="span12">
			<div class="control-group" style="margin:10px 0px;">
				<select data-placeholder="Select User" class="chosen span12" style="width:100%;" id="iUser" name="iUser" onchange="return validateUserList(this.value);">
					{$UsersList}
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
											{if $IsAssignment==1}
												<input type="checkbox" name="uAssignment" id="uAssignment" checked/> Assignment
											{else}
												<input type="checkbox" name="uAssignment" id="uAssignment" /> Assignment
											{/if}
										</label>
										<label class="checkbox">
											{if $IsPlacement==1}
												<input type="checkbox" name="uPlacement" id="uPlacement" checked/> Placement
											{else}
												<input type="checkbox" name="uPlacement" id="uPlacement" /> Placement
											{/if}
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
	{/if}
	<div class="row-fluid">
		{if $IsAdmin==1}
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number">
						{$TotalOpen}
					</div>
					<div class="desc">									
						Total Open Cases
					</div>
				</div>						
			</div>
		</div>
		{/if}
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number">
						{$Open}
					</div>
					<div class="desc">									
						Open Cases
					</div>
				</div>						
			</div>
		</div>
		{if $IsAdmin==1}
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number">{$TotalOpen}</div>
					<div class="desc">Total Placements</div>
				</div>						
			</div>
		</div>
		{/if}
		<div class="span3 responsive" data-tablet="span6" data-desktop="span6">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number">{$Pending}</div>
					<div class="desc">Placements</div>
				</div>						
			</div>
		</div>
	</div>
	{if $IsAdmin==1}
	<form name="dashboard" method="POST" action="{$SERVER_ACTUAL_PATH}Export-Report">
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
						{if $Open >0}
						{foreach $OpenRecords as $OR}
							<tr class="odd gradeX">
								<td>{$OR.VCCCaseNumber}</td>
								<td class="hidden-480">{$OR.EmployeeName}</td>
								<td class="hidden-480">{$OR.EmployerName}</td>
								<td class="center hidden-480">{$OR.NPStartDate}</td>
								<td class="center hidden-480">{$OR.InjuryDate}</td>
								<td class="center hidden-480">{$OR.PreCallDate}</td>
								<td class="center hidden-480">{$OR.FollowUpDate}</td>
								<td class="center hidden-480"></td>
								<td class="center hidden-480"></td>
							</tr>
						{/foreach}
						{/if}
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
						{if $Pending >0}
						{foreach $PendingRecords as $PR}
							<tr class="odd gradeX">
								<td>{$PR.VCCCaseNumber}</td>
								<td class="hidden-480">{$PR.EmployeeName}</td>
								<td class="hidden-480">{$PR.EmployerName}</td>
								<td class="center hidden-480">{$PR.EmployeeCity}</td>
								<td class="center hidden-480">{$PR.EmployeeState}</td>
								<td class="center hidden-480">{$PR.EmployeeZipCode}</td>
								<td class="center hidden-480">{$PR.VCCCaseNumber}</td>
								<td class="center hidden-480"><a href="#">View</a></td>
								<td class="center hidden-480">{$PR.VCCCaseNumber}</td>
							</tr>
						{/foreach}
						{/if}
					</tbody>
				</table>
			</div>
		</div>
	{else}
		{if $IsAssignment==1}
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
							{if $Open >0}
							{foreach $OpenRecords as $OR}
								<tr class="odd gradeX">
									<td>{$OR.VCCCaseNumber}</td>
									<td class="hidden-480">{$OR.EmployeeName}</td>
									<td class="hidden-480">{$OR.EmployerName}</td>
									<td class="center hidden-480">{$OR.NPStartDate}</td>
									<td class="center hidden-480">{$OR.InjuryDate}</td>
									<td class="center hidden-480">{$OR.PreCallDate}</td>
									<td class="center hidden-480">{$OR.FollowUpDate}</td>
									<td class="center hidden-480"></td>
									<td class="center hidden-480"></td>
								</tr>
							{/foreach}
							{/if}
						</tbody>
					</table>
				</div>
			</div>
		{/if}
		{if $IsPlacement==1}
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
							{if $Pending >0}
							{foreach $PendingRecords as $PR}
								<tr class="odd gradeX">
									<td>{$PR.VCCCaseNumber}</td>
									<td class="hidden-480">{$PR.EmployeeName}</td>
									<td class="hidden-480">{$PR.EmployerName}</td>
									<td class="center hidden-480">{$PR.EmployeeCity}</td>
									<td class="center hidden-480">{$PR.EmployeeState}</td>
									<td class="center hidden-480">{$PR.EmployeeZipCode}</td>
									<td class="center hidden-480">{$PR.VCCCaseNumber}</td>
									<td class="center hidden-480"><a href="#">View</a></td>
									<td class="center hidden-480">{$PR.VCCCaseNumber}</td>
								</tr>
							{/foreach}
							{/if}
						</tbody>
					</table>
				</div>
			</div>
		{/if}
	{/if}
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
{/block}