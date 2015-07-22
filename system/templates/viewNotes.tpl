<div>
    <table width='100%' align='center'>
        {if $tot_note_rows>0}
        {foreach $Notes as $L}
	<tr>
            <td>{$L.Initial}</td>
            <td>{$L.LastUpdatedDate}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class='cl-container-tr-row'>
            <td colspan='3'>
                <div class="controls">
                    <input type="text" class="m-wrap span12" {$L.Color} id='description_{$L.NoteID}' value='{$L.NoteDescription}'/> 
                </div>
            </td>
            <td style="width:12%">
                <a href='#' class="btn green" onClick='javascript:updateNote({$L.NoteID},{$EmployeeID})'>Update</a>
            </td>
            <td style="width:10%">
                <a href='#' class="btn blue" onClick='javascript:deleteNote({$L.NoteID},{$EmployeeID})'>Delete</a>
            </td>
        </tr>
        {/foreach}
        {else}
            <tr>
                <td colspan="5">Notes not found</td>
            </tr>
        {/if}
            
    </table>
</div>