var Ajax_Call = function(actionString,actionID,action)
{
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById(actionID).innerHTML=xmlhttp.responseText;
            //alert(xmlhttp.responseText);
        }
    }
    xmlhttp.open("POST","http://localhost/system/index.php?action="+action+"&"+actionString,true);
    xmlhttp.send();
}

var loadNotes = function(EmployeeID)
{
    var strPost = "EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"Add_LoadNotes","load_EmpNotes");
}

var findEmployer = function()
{
    var srch = document.getElementById('eR_RefferalSource').value;
    var strPost = "empName="+srch;
    Ajax_Call(strPost,"eR_Employer","search_employer");
}
    
var fillEmployerDetails = function(ID,EmployeeID)
{
    var strPost = "empID="+ID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"employerEdit","edit_employer_detail");
}

function emprDetails(ID,EmployeeID)
{
    var strPost = "empID="+ID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"employerAdd","new_employer_detail");
}

var npDetails = function(ID,EmployeeID)
{
    var strPost = "NPID="+ID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"ADD-NPAJAXADD","add_nonprofit_detail");
}

var editNPDetails = function(ID,EmployeeID)
{
    var strPost = "NPID="+ID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"ADD-EditNP","edit_nonprofit_detail");
}

var sendEmailToAssignee = function(PersonID,EmployeeID)
{
	var presetContentID = document.getElementById('npPresetContent').value;
    if(EmployeeID<=0)
    {
        document.getElementById('eAssigneeMsg').innerHTML = "You have not any employee yet";
        return false;
    }
	if(presetContentID<=0)
	{
		document.getElementById('eAssigneeMsg').innerHTML = "Please select a preset content";
        return false;
	}
    var strPost = "PersonID="+PersonID+"&PresetContentID="+presetContentID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"eAssigneeMsg","assign_mail");
    loadNotes(EmployeeID);
}

var iNewNote = function(EmployeeID,isEmployeeTag,IsAdmin)
{
    var strPost;
    var Notes = document.getElementById('eNotes').value;
	Notes = Notes.replace('#','\#');
    if(Notes=="")
    {
        alert("Notes can not be blank");
        return false;
    }
    if(isEmployeeTag===1)
    {
        var InitalID = document.getElementById('npPersonAssigned').value;
        if(InitalID<=0)
        {
            alert("Please Select a Person to Assign");
            return false;
        }
    }
    strPost = "Note="+Notes+"&EmployeeID="+EmployeeID+"&IsAdmin="+IsAdmin;
    Ajax_Call(strPost,"eNotesMsg","save_note");
    loadNotes(EmployeeID);
}

var addNewLog = function(EmployeeID)
{
    var Log = document.getElementById('logDesc').value;
    document.getElementById('logMsg').innerHTML = "";
    if(Log=="")
    {
        document.getElementById('logMsg').innerHTML = "Value can not be blank";
        return false;
    }
    var FollowUp = document.getElementById('followUP').checked;
    jQuery("#logDesc").val('');
    document.getElementById('followUP').checked=false;
    var strPost = "Log="+Log+"&FollowUP="+FollowUp+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"npCall-Log-Data","save_log");
}

var updateLog = function(LogID,EmployeeID)
{
    var Log = document.getElementById('logDesc_'+LogID).value;
    var FollowUp = document.getElementById('followUP_'+LogID).checked;
    var strPost = "Log="+Log+"&FollowUP="+FollowUp+"&LogID="+LogID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"npCall-Log-Data","update_log");
}

var deleteLog = function(LogID,EmployeeID)
{
    var strPost = "LogID="+LogID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"npCall-Log-Data","delete_log");
}

var updateNote = function(NoteID,EmployeeID)
{
    var Note = document.getElementById('description_'+NoteID).value;
    var strPost = "Note="+Note+"&NoteID="+NoteID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"iNotes-Data","update_note");
}

var deleteNote = function(NoteID,EmployeeID)
{
    var strPost = "NoteID="+NoteID+"&EmployeeID="+EmployeeID;
    Ajax_Call(strPost,"iNotes-Data","delete_note");
}

var dropdownToText = function() 
{
    document.getElementById("replace-Toggler").innerHTML = "<input type='text' class='m-wrap span9' id='eR_Employer' name='eR_Employer' placeholder='Employer Name'/>";
}

var dropdownnpToText = function()
{
    document.getElementById("np-toggle").innerHTML = "<input type='text' class='m-wrap span9' id='npNonProfit' name='npNonProfit' placeholder='Non Profit'/>";
}
var clearData = function()
{
	$('input[type="text"]').val('');
	$('input[type="email"]').val('');
	$('input[type="textarea"]').val('');
}