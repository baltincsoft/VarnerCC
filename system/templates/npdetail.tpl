<div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="table_css" style="padding:0px; margin:0px; line-height:25px;">            
		<tr>
		  <td height='10' colspan="4">&nbsp;</td>
		</tr>   
		<tr>
		  <td><strong>Non Profit: </strong></td>
		  <td align="left">{if $NonProfit!=""}{$NonProfit}{else}<font color="#FF0000">---</font>{/if}</td>
		  <td><strong>Non Profit FirstName: </strong></td>
		  <td align="left">{if $NPPCFirstName!=""}{$NPPCFirstName}{else}<font color="#FF0000">---</font>{/if}</td>
		</tr>
		<tr>
			<td><strong>Non Profit LastName: </strong></td>
			<td align="left">{if $NPPCLastName!=""}{$NPPCLastName}{else}<font color="#FF0000">---</font>{/if}</td>
			<td><strong>Non Profit Address: </strong></td>
			<td align="left">{if $NPPCAddress!=""}{$NPPCAddress}{else}<font color="#FF0000">---</font>{/if}</td>
		</tr>
		<tr>
		  <td><strong>Non Profit City: </strong></td>
		  <td align="left">{if $NPPCCity!=""}{$NPPCCity}{else}<font color="#FF0000">---</font>{/if}</td>
		  <td><strong>Non Profit State: </strong></td>
		  <td align="left">{if $State}{$State}{else}<font color="#FF0000">---</font>{/if}</td>
		</tr> 		
		<tr>
		  <td><strong>Non Profit PhoneNumber: </strong></td>
		  <td align="left">{if $NPPCPhone}{$NPPCPhone}{else}<font color="#FF0000">---</font>{/if}</td>
		  <td><strong>Non Profit Email : </strong></td>
		  <td align="left">{if $NPPCEmail}{$NPPCEmail}{else}<font color="#FF0000">---</font>{/if}</td>  
		</tr>  
		<tr>
		  <td><strong>Non Profit Zip: </strong></td>
		  <td align="left">{if $NPPCZip}{$NPPCZip} {else}<font color="#FF0000">---</font>{/if}</td>
		  <td><strong>Non Profit Do Not Call: </strong></td>
		  <td align="left">{if $DoNotCall =="0"}No{else if $DoNotCall =="1"}Yes{else}<font color="#FF0000">Other</font>{/if}</td>
		</tr>    
    </table>
</div>