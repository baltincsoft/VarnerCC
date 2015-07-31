<div>
    <table width='100%' align='center'>
        {if $tot_note_rows>0}
        {foreach $Notes as $L}
		<tr>
            <td>{$L.Initial}</td>
            <td>{$L.LastUpdatedDate}</td>
            <td colspan="4"></td>
        </tr>
        <tr class='cl-container-tr-row'>
            <td>
                <input type="checkbox" class="m-wrap span12 zero" style="margin:0px;padding:0px;" id='followUP_{$L.NoteID}' value='{$L.FollowUpFlag}' {$L.FChecked}/> 
            </td>
            <td colspan="2" style="width:69.5%">
                <div class="controls">
                    <input type="text" class="m-wrap span12" onClick='javascript:addOrUpdateRecord({$L.NoteID})' id='logDesc_{$L.NoteID}' value='{$L.NoteDescription}' style="margin:0px;" /> 
                </div>
            </td>
			<td style="width:10%;" align="center">
                <a href="#" class="npdetail-button" onClick="javascript:popNpDetailInfo({$L.NoteID},{$EmployeeID})" data-dismiss="modal" data-toggle="modal" data-target="#view_npDetail" alt="Non Profit Detail" title="Non Profit Detail"><i class="icon-user"></i></a> 
				
            </td>
            <td>
                <a href='#' class="btn green" onClick='javascript:updateLog({$L.NoteID},{$EmployeeID})'>Update</a>
            </td>
            <td>
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