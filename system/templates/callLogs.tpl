<div>
    <table width='100%' align='center'>
		<tr>
            <th style="width:4%;">Follow Up</th>
            <th style="width:15%">First Name</th>
			<th style="width:10%">Non Profit</th>
			<th style="width:10%">NP City</th>
			<th style="width:10%">NP Phone</th>
			<th colspan="2" style="width:35%">Log Description</th>
			<th style="width:7%;">Do Not Call</th>
			<th colspan="2" style="width:10%;">Action</th>
        </tr>
        {if $tot_note_rows>0}
        {foreach $Notes as $L}
		<tr>
            <td>{$L.Initial}</td>
            <td>{$L.LastUpdatedDate}</td>
            <td colspan="8"></td>
        </tr>
        <tr class='cl-container-tr-row'>
            <td style="width:4%;">
                <input type="checkbox" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_{$L.NoteID}' value='{$L.FollowUpFlag}' {$L.FChecked}/> 
            </td>
			<td style="width:15%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_{$L.NPPCFirstName}' value='{$L.NPPCFirstName}'/> 
            </td>
			<td style="width:10%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_{$L.NonProfit}' value='{$L.NonProfit}'/> 
            </td>
			<td style="width:10%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_{$L.NPPCCity}' value='{$L.NPPCCity}' /> 
            </td>
			<td style="width:10%">
                <input type="text" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_{$L.NPPCPhone}' value='{$L.NPPCPhone}'/> 
            </td>
            <td colspan='2' style="width:35%">
                <div class="controls">
                    <input type="text" class="m-wrap span12" onClick='javascript:addOrUpdateRecord({$L.NoteID})' id='logDesc_{$L.NoteID}' value='{$L.NoteDescription}' style="margin:0px;" /> 
                </div>
            </td>
			<td style="width:7%;">
                <input type="checkbox" class="m-wrap span12" style="margin:0px;padding:0px;" id='followUP_{$L.DoNotCall}' value='{$L.DoNotCall}' {$L.DChecked}/> 
            </td>
            <td style="width:5%">
                <a href='#' class="btn green" onClick='javascript:updateLog({$L.NoteID},{$EmployeeID})'>Update</a>
            </td>
            <td style="width:5%">
                <a href='#' class="btn red" onClick='javascript:deleteLog({$L.NoteID},{$EmployeeID})'>Delete</a>
            </td>
        </tr>
        {/foreach}
        {else}
            <tr>
                <td colspan="5">Logs not found</td>
            </tr>
        {/if}
            
    </table>
</div>