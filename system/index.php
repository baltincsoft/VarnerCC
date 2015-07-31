<?PHP

error_reporting(0);
ini_set('max_execution_time','1800');
ini_set('max_upload_size','128M');	
ini_set('memory_limit','128M');
ini_set('session.use_only_cookies','1');
ini_set('session.hash_function','1');
ini_set('session.hash_bits_per_character','5');
ini_set('post_max_size','64M');
ini_set('upload_max_filesize','64M');
date_default_timezone_set("America/Los_Angeles");

include_once("includes/ConfigFile.php");
init();

$func_ary=array("show_login","do_login","do_signup","add_employee","save_employee","view_employee","update_employee","view_dashboard"
                ,"add_employer","save_employer","view_employer","update_employer","new_employer_detail","edit_employer_detail"
                ,"add_legaldetails","save_legaldetails","view_legaldetails","update_legaldetails","add_insured_employee"
                ,"add_npdetails","save_npdetails","view_npdetails","update_npdetails","assign_mail","update_preferences"
                ,"add_addndetails","save_addndetails","view_addndetails","update_addndetails","edit_nonprofit_detail"
                ,"add_contact","result_search","do_search","save_note","view_notes","update_note","delete_note","print_notes"
                ,"save_log","view_logs","update_log","delete_log","print_log","view_files","upload_file","delete_upload_file"
                ,"add_nonprofit_detail","search_employer","change_password","update_password","load_EmpNotes"
                ,"load_npdetail","export_data","export_employee_data","export_report","logout");

global $SignIN;

if((fe($_REQUEST['action'])) || $_REQUEST['action']=="do_login")
{
   $_REQUEST['action']($_REQUEST['msg']);
   die();
}
else
{
    if($_SESSION['UserID']<=0 || $_SESSION['UserID']=="")
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        view_dashboard();
        die();
    }
}
header("Location:".$SignIN);
die();

function show_login()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
  
    if($R['error_msg']!="")
    {
        $error_msg=$R['error_msg'];
    }
    
    if($_SESSION['UserID']>0 && $_SESSION['http_agent']==$_SERVER['HTTP_USER_AGENT'])
    {
        add_employee($_REQUEST['msg']);
        die();
    }
    
    $_SESSION['UserID']="";
    $_SESSION['http_agent']='';
    $_SESSION['TempUserID']='';
	
    header("Location:".$SignIN);
    die();
}

function do_login()
{
    global $SERVER_PATH,$SignIN;
    if(($_SESSION['UserID']>0) && $_SESSION['http_agent']==$_SERVER['HTTP_USER_AGENT'])
    {
        add_employee();
        die();
    }
    
    $R=DIN_ALL($_REQUEST);
    $Passwrd = md5($R['password']);
    
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $IPAddress = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $IPAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
    else 
    {
        $IPAddress = $_SERVER['REMOTE_ADDR'];
    }
    
    $SQLQuery = "SELECT CRD.LoginID,CRD.Name,CRD.IsAdmin From vcc_users_login CRD 
                 WHERE CRD.Password = '".$Passwrd."'
                 AND CRD.EmailAddress = '".strtolower($R['username'])."'";
    $Result=eqi($SQLQuery,$rs);
    $Output=mfai($rs);
    
    if(intval($Result)<=0)
    {
        header("Location:".$SERVER_PATH."LogFailure");
        die();
    }
    else
    {
        $SQLQuery = "UPDATE vcc_users_login CRD SET CRD.LastLoginDate = NOW(),CRD.IPAddress = '".$IPAddress."' WHERE CRD.LoginID=".$Output['LoginID'].";";
        eqi($SQLQuery,$rs);
    }

    $_SESSION['UserID']=$Output['LoginID'];
    $_SESSION['Name']=$Output['Name'];
	$_SESSION['IsAdmin'] = $Output['IsAdmin'];
    $_SESSION['http_agent']=$_SERVER['HTTP_USER_AGENT'];

    view_dashboard($_REQUEST['msg']);
    die();
}
function logout()
{
    global $SERVER_PATH,$SignIN;
    $_SESSION['UserID']="";
    $_SESSION['AdminID']="";
	$_SESSION['IsAdmin']="";
    session_destroy();
    
    header("Location:".$SignIN);
    die();
}

function do_signup()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $IPAddress = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $IPAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
    else 
    {
        $IPAddress = $_SERVER['REMOTE_ADDR'];
    }

    if(!(get_row_con_info("vcc_users_login","WHERE EmailAddress='".strtolower($R[email])."'","",$data)))
    {
        $Query = "INSERT INTO vcc_users_login(Name,EmailAddress,Password,IPAddress,CreatedDate)";
        if(!valid_inputs($R))
        {
                header("Location:".$SignIN);
                die();
        }

        $Query.= "VALUES('".str_replace("'","''",$R['username'])."','".strtolower($R['email'])."','".md5($R['password'])."','".$IPAddress."',NOW());";
        $CheckInsert=eii($Query);

        if(intval($CheckInsert)>0)
        {
                header("Location:".$SignIN);
                die();
        }
        else
        {
                header("Location:".$SignIN);
                die();
        }
    }
    else
    {
        header("Location:".$SERVER_PATH."EmailExist");
        die();
    }
}

function change_password($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#

    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"LoginID"=>$_SESSION['UserID'],"action"=>update_password
                          ,"IsAdmin"=>$_SESSION['IsAdmin'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"title"=>"Change Password","Name"=>$_SESSION['Name']));
    $SMARTY->display('changePassword.tpl');
}

function update_password($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if($R[nPassword]<>$R[cPassword])
    {
        change_password("","Your password does not match");
        die();
    }
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(get_row_con_info("vcc_users_login","WHERE Password='".md5($R['oldPassword'])."' AND LoginID = $R[LoginID]","",$data))
        {		
            $pass=md5($R[nPassword]);
            $SQL="UPDATE vcc_users_login SET Password='$pass' WHERE LoginID=$data[LoginID]";
            $UpCount=eqi($SQL,$rs);
            if(intval($UpCount)>0)
            {
                change_password(" Updated Successfully","");
                die();
            }
            else
            {
                change_password(""," Error while updating try again OR contact administrator to know more!");
                die();
            }
        }
        else
        {
            change_password("","Password does not match with our records !!");
            die();
        }
    }
}
function update_preferences($msg="",$error_msg='')
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
		$SQL="UPDATE vcc_users_login SET IsAssignment=$R[assignment],IsPlacement=$R[placement] WHERE LoginID=".$R[loginID].";";
		try{
			eqi($SQL,$rs);
			echo 'true';
			exit;
		}
		catch(Exception $ex){ echo 'error';exit;}		
    }
	echo 'false';
}
#################-------------------------------------- INJURED EMPLOYEE SECTION START --------------------------------------####################
function view_dashboard($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    $openRecords = array();
	$pendingRecords = array();
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
	else
	{
		if(intval($R['iUser'])>0 AND $R['iUser']!="" OR $R['iUser']!=NULL)
		{
			$loginID = $R['iUser'];
		}
		else
		{
			$loginID = $_SESSION['UserID'];
		}
	}
	get_row_con_info("vcc_users_login","WHERE LoginID=$loginID","",$userDetails);
	if(intval($_SESSION['IsAdmin'])==1)
	{
		$Query = "SELECT VCCCaseNumber,
					CONCAT(IFirstName,' ',ILastName) AS EmployeeName,
					DATE_FORMAT(InjuryDate,'%m/%d/%Y') AS InjuryDate,
					DATE_FORMAT(NPEarliestStartDate,'%m/%d/%Y') AS NPStartDate,
					GIEmployer AS EmployerName,
					DATE_FORMAT(PreCallDate,'%m/%d/%Y') AS PreCallDate,
					DATE_FORMAT(FollowUpDate,'%m/%d/%Y') AS FollowUpDate
					FROM vcc_iemployee VCE LEFT JOIN vcc_employer VCEP ON VCE.IEmployeeID = VCEP.EmployeeID
					LEFT JOIN vcc_initials VCI ON VCI.InitialID = VCE.PersonAssignedID
					WHERE CloseDate IS NOT NULL AND CloseDate <> STR_TO_DATE(now(),'%Y-%m-%d') AND CloseDate <> STR_TO_DATE('1970-01-01','%Y-%m-%d');";
		$totOpen = eqi($Query,$rs);
	}
	$Query = "SELECT VCCCaseNumber,
					CONCAT(IFirstName,' ',ILastName) AS EmployeeName,
					DATE_FORMAT(InjuryDate,'%m/%d/%Y') AS InjuryDate,
					DATE_FORMAT(NPEarliestStartDate,'%m/%d/%Y') AS NPStartDate,
					GIEmployer AS EmployerName,
					DATE_FORMAT(PreCallDate,'%m/%d/%Y') AS PreCallDate,
					DATE_FORMAT(FollowUpDate,'%m/%d/%Y') AS FollowUpDate
					FROM vcc_iemployee VCE LEFT JOIN vcc_employer VCEP ON VCE.IEmployeeID = VCEP.EmployeeID
					LEFT JOIN vcc_initials VCI ON VCI.InitialID = VCE.PersonAssignedID
					WHERE CloseDate IS NOT NULL AND CloseDate <> STR_TO_DATE(now(),'%Y-%m-%d') AND CloseDate <> STR_TO_DATE('1970-01-01','%Y-%m-%d') AND VCI.LoginID = ".$loginID.";";
    $Open = eqi($Query,$rs);
	if($Open > 0 )
	{
		while($data = mfai($rs))
		{
			array_push($openRecords,$data);
		}
	}
    
	$Query = "SELECT VCCCaseNumber,
                CONCAT(IFirstName,' ',ILastName) AS EmployeeName,
                GIEmployer AS EmployerName,
				ICity AS EmployeeCity,IZip AS EmployeeZipCode,
				VS.State AS EmployeeState
                FROM vcc_iemployee VCE 
				LEFT JOIN vcc_employer VCEP ON VCE.IEmployeeID = VCEP.EmployeeID
				LEFT JOIN vcc_initials VCI ON VCI.InitialID = VCE.PersonAssignedID 
				LEFT JOIN vcc_states VS ON VS.StateID = VCE.IStateID 
				WHERE CloseDate IS NOT NULL AND CloseDate <> STR_TO_DATE(now(),'%Y-%m-%d') AND CloseDate <> STR_TO_DATE('1970-01-01','%Y-%m-%d') AND VCI.LoginID = ".$loginID.";";
    $totPending = eqi($Query,$rs1);
	if($totPending > 0 )
	{
		while($data = mfai($rs1))
		{
			array_push($pendingRecords,$data);
		}
	}
	get_new_option_list("vcc_initials","LoginID","EmailAddress","$loginID",$UsersList,0,"WHERE LoginID <> 0 ORDER BY FirstName ASC","",0);
    $SMARTY = new Smarty();
	$SMARTY->assign($userDetails);
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"OpenRecords"=>$openRecords,"PendingRecords"=>$pendingRecords
						,"TotalOpen"=>$totOpen,"Open"=>$Open,"Pending"=>$totPending,"dshbrd_active"=>"active","title"=>"Dashboard"
						,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"IsAdmin"=>$_SESSION['IsAdmin'],"UsersList"=>$UsersList
                        ,"action"=>"view_dashboard","LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('dashboard.tpl');
}
function add_employee($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    $EmployeeRecords = array();
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    if(intval($_SESSION['EmployeeID'])>0 || $_SESSION['EmployeeID']!=NULL )
    {
        $sqlQuery = "SELECT *,DATE_FORMAT(NPEarliestStartDate,'%m/%d/%Y') AS NPEarliestStartDate,"
                ."DATE_FORMAT(InjuryDate,'%m/%d/%Y') AS InjuryDate,"
                ."DATE_FORMAT(RestrictionDate,'%m/%d/%Y') AS RestrictionDate,"
                ."DATE_FORMAT(NextDAppointment,'%m/%d/%Y') AS NextDAppointment,"
                ."DATE_FORMAT(RefreralDate,'%m/%d/%Y') AS RefreralDate,"
                ."DATE_FORMAT(ReOpenDate,'%m/%d/%Y') AS ReOpenDate,"
                ."DATE_FORMAT(DateAssigned,'%m/%d/%Y') AS DateAssigned,"
                ."DATE_FORMAT(PreCallDate,'%m/%d/%Y') AS PreCallDate,"
                ."DATE_FORMAT(FollowUpDate,'%m/%d/%Y') AS FollowUpDate,"
                ."DATE_FORMAT(CloseDate,'%m/%d/%Y') AS CloseDate "
                ."FROM vcc_iemployee WHERE IEmployeeID=".$_SESSION['EmployeeID'].";";
        eqi($sqlQuery,$rs);
        $EmployeeRecords = mfai($rs);
    }
    else
    {
        $EmployeeID=0;
        $_SESSION['EmployeeID']=$EmployeeID;
    }
    if(strstr($EmployeeRecords[LanguagesSpoken],","))
    {
        $LANGUAGE = explode(",",$EmployeeRecords[LanguagesSpoken]);
        foreach($LANGUAGE as $LANGUAGEOPT)
        {
            $EmployeeRecords[$LANGUAGEOPT."_SELECTED"] = "selected";
        }
    }
    else
    {
        $EmployeeRecords[$EmployeeRecords[LanguagesSpoken]."_SELECTED"] = "selected";
    }
	if($EmployeeRecords[IGender]!="")
	{
		$EmployeeRecords[$EmployeeRecords[IGender]."_SELECTED"] = "selected";
	}
    #################------------------------- Queries to Fetch Result -----------------------------####################
    get_new_option_list("vcc_states","StateID","State","$EmployeeRecords[IStateID]",$StateList,0,"WHERE StateID <> 0 ORDER BY State ASC","",0);
    get_new_option_list("vcc_states","StateID","State","$EmployeeRecords[StateJuridiction]",$JuridictionList,0,"WHERE StateID <> 0 ORDER BY State ASC","",0);
	get_new_option_list("vcc_placement_status","PlacementID","Placement","$EmployeeRecords[PresetContentID]",$PresetContentList,0,"WHERE PlacementID <>0 ORDER BY Placement ASC","",0);
    get_new_option_multi_list("vcc_initials","InitialID","Initial","EmailAddress","$EmployeeRecords[PersonAssignedID]",$PersonAssignedList,"WHERE InitialID <> 0 ORDER BY Initial ASC");
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#

    $SMARTY = new Smarty();
    $SMARTY->assign($EmployeeRecords);
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"emp_active"=>"active","title"=>"Add/Edit Injured Employee Detail"
                        ,"Statelist"=>$StateList,"JuridictionList"=>$JuridictionList,"EmployeeID"=>$_SESSION['EmployeeID']
                        ,"PersonAssigned"=>$PersonAssignedList,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"IsAdmin"=>$_SESSION['IsAdmin']
                        ,"action"=>"save_employee","PresetContentList"=>$PresetContentList,"LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('addInsuredEmployeeDetails.tpl');
}
function add_insured_employee($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	$_SESSION['EmployeeID']=0;
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
	else
	{
		add_employee();
		die();
	}
}
function save_employee($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #########################------------------------- BEGIN INSERT INJURED EMPLOYEE DETAIL RECORD -----------------------------########################
    $EmployeeID=func_add_update_employee($R,$_SESSION['EmployeeID'],$_SESSION['IsAdmin']);
    #################------------------------------ END INSERT INJURED EMPLOYEE DETAIL RECORD -----------------------------####################
	
    if(intval($EmployeeID)>0)
    {
        $_SESSION['EmployeeID']=$EmployeeID;
        add_employer("Employee details added","");
        die();
    }
    else
    {
        get_new_option_list("vcc_states","StateID","State","",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
        get_new_option_list("vcc_states","StateID","State","",$JuridictionList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
		get_new_option_list("vcc_placement_status","PlacementID","Placement","$data[PresetContentID]",$PresetContentList,0,"WHERE PlacementID <>0 ORDER BY Placement ASC","",0);
        get_new_option_multi_list("vcc_initials","InitialID","Initial","EmailAddress","",$PersonAssignedList,"WHERE InitialID <> 0 ORDER BY Initial ASC");
        #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#

        $SMARTY = new Smarty();
        $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"emp_active"=>"active","title"=>"Add/Edit Injured Employee Detail"
                                ,"Statelist"=>$StateList,"JuridictionList"=>$JuridictionList,"EmployeeID"=>$_SESSION['EmployeeID']
                                ,"PersonAssigned"=>$PersonAssignedList,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"PresetContentList"=>$PresetContentList
                                ,"action"=>"save_employee","LoginID"=>$_SESSION['UserID'],"IsAdmin"=>$_SESSION['IsAdmin']
                                ,"Name"=>$_SESSION['Name']));
        $SMARTY->display('addInsuredEmployeeDetails.tpl');
    }
}

function view_employee($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN,$js;
    $R=DIN_ALL($_REQUEST);
    
    $EmployeeRecords = array();
    $_SESSION['EmployeeID']=0;
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    $sqlQuery = "SELECT *,DATE_FORMAT(NPEarliestStartDate,'%m/%d/%Y') AS NPEarliestStartDate,"
                ."DATE_FORMAT(InjuryDate,'%m/%d/%Y') AS InjuryDate,"
                ."DATE_FORMAT(RestrictionDate,'%m/%d/%Y') AS RestrictionDate,"
                ."DATE_FORMAT(NextDAppointment,'%m/%d/%Y') AS NextDAppointment,"
                ."DATE_FORMAT(RefreralDate,'%m/%d/%Y') AS RefreralDate,"
                ."DATE_FORMAT(ReOpenDate,'%m/%d/%Y') AS ReOpenDate,"
                ."DATE_FORMAT(DateAssigned,'%m/%d/%Y') AS DateAssigned,"
                ."DATE_FORMAT(PreCallDate,'%m/%d/%Y') AS PreCallDate,"
                ."DATE_FORMAT(FollowUpDate,'%m/%d/%Y') AS FollowUpDate,"
                ."DATE_FORMAT(CloseDate,'%m/%d/%Y') AS CloseDate "
                ."FROM vcc_iemployee WHERE IEmployeeID=".$R['EmployeeID'].";";
    
    $Total = eqi($sqlQuery,$rs);
    if($Total>0)
    {
        while($data = mfai($rs))
        {
            if(strstr($data[LanguagesSpoken],","))
            {
                $LANGUAGE = explode(",",$data[LanguagesSpoken]);

                foreach($LANGUAGE as $LANGUAGEOPT)
                {
                    $data[$LANGUAGEOPT."_SELECTED"] = "selected";
                }
            }
            else
            {
                $data[$data[LanguagesSpoken]."_SELECTED"] = "selected";
            }
			if($data[IGender]!="")
            {
                $data[$data[IGender]."_SELECTED"] = "selected";
            }
			
            array_push($EmployeeRecords,$data);
            get_new_option_list("vcc_states","StateID","State","$data[IStateID]",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
            get_new_option_list("vcc_states","StateID","State","$data[StateJuridiction]",$JuridictionList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
			get_new_option_list("vcc_placement_status","PlacementID","Placement","$data[PresetContentID]",$PresetContentList,0,"WHERE PlacementID <>0 ORDER BY Placement ASC","",0);
            get_new_option_multi_list("vcc_initials","InitialID","Initial","EmailAddress","$data[PersonAssignedID]",$PersonAssignedList,"WHERE InitialID <> 0 ORDER BY Initial ASC");
        }
    }
	
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"emp_active"=>"active","title"=>"Edit/Update Injured Employee Detail"
                        ,"TotalRecord"=>$Total,"EmployeeRecord"=>$EmployeeRecords,"Statelist"=>$StateList
                        ,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"IsAdmin"=>$_SESSION['IsAdmin']
                        ,"JuridictionList"=>$JuridictionList,"PersonAssigned"=>$PersonAssignedList,"PresetContentList"=>$PresetContentList
                        ,"action"=>"update_employee","LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('editInsuredEmployeeDetails.tpl');
}

function update_employee($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #########################------------------------- BEGIN INSERT INJURED EMPLOYEE DETAIL RECORD -----------------------------########################
    if(intval($R['EmployeeID'])>0)
    {
        $EmployeeID=func_add_update_employee($R,$R['EmployeeID'],$_SESSION['IsAdmin']);
    }
    #################------------------------------ END INSERT INJURED EMPLOYEE DETAIL RECORD -----------------------------####################
	
    if(intval($EmployeeID)>0)
    {
        view_employee("Employee details updated","");
        die();
    }
    else
    {
        view_employee("","Error while updating.please contact administrator to know more !!");
        die();
    }
}
#################-------------------------------------- INJURED EMPLOYEE SECTION END --------------------------------------####################

#################----------------------------------------- EMPLOYEER SECTION START --------------------------------------####################

function add_employer($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            $sqlQuery = "SELECT * FROM vcc_employer WHERE EmployeeID=".$_SESSION['EmployeeID'].";";
            eqi($sqlQuery,$rs);

            $EmployerRecords = mfai($rs);
            #################------------------------- Queries to Fetch Result -----------------------------####################

            get_new_option_list("vcc_states","StateID","State","$EmployerRecords[GIStateID]",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
            get_new_option_list("vcc_reserverdemployerlist","EmployerID","Employer","$EmployerRecords[GIEmployer]",$EmployerList,0,"WHERE Employer <> '' ORDER BY Employer ASC","",0);

            #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#

            $SMARTY = new Smarty();
            $SMARTY->assign($EmployerRecords);
            $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"emplyr_active"=>"active","title"=>"Add/Edit Employer Detail"
                                ,"Statelist"=>$StateList,"EmployeeID"=>$_SESSION['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                                ,"EmployerList"=>$EmployerList,"action"=>"save_employer","LoginID"=>$_SESSION['UserID']
								,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
            $SMARTY->display('addEmployerDetails.tpl');
        }
        else
        {
            add_employee("","Error while inserting record try again OR contact administrator to know more !!");
            die();
        }
    }
}

function save_employer($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
            $EmployerID = func_add_update_employer($R,$_SESSION[EmployeeID]);
        }
        else
        {
            add_employee("","No Employee record found try again OR contact administrator to know more !!");
        }
    }
    #################------------------------- END INSERT EMPLOYER DETAIL RECORD -----------------------------####################

    if(intval($EmployerID)>0)
    {
        $msg="Employer details Added";
        add_employer($msg,"");
    }
    else
    {
        $error_msg = "Error while adding details please try again OR contact administrator to know more !!";
        add_employer("",$error_msg);
    }
}

function view_employer($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    $sqlQuery = "SELECT * FROM vcc_employer WHERE EmployeeID=".$R['EmployeeID'].";";
    eqi($sqlQuery,$rs);

    $EmployerRecords = mfai($rs);
    #################------------------------- Queries to Fetch Result -----------------------------####################
    
    get_new_option_list("vcc_states","StateID","State","$EmployerRecords[GIStateID]",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
    get_new_option_list("vcc_reserverdemployerlist","EmployerID","Employer","$EmployerRecords[GIEmployer]",$EmployerList,0,"WHERE Employer <> '' ORDER BY Employer ASC","",0);
    	
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($EmployerRecords);
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"emplyr_active"=>"active","title"=>"Edit/Update Employer Detail"
                        ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"EmployerList"=>$EmployerList,"action"=>"update_employer","LoginID"=>$_SESSION['UserID']
						,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('editEmployerDetails.tpl');
}

function update_employer($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #################------------------------- BEGIN INSERT EMPLOYER DETAIL RECORD -----------------------------####################
    
    $EmployerID = func_add_update_employer($R,$R[EmployeeID]);

    #################------------------------- END INSERT EMPLOYER DETAIL RECORD -----------------------------####################

    if(intval($EmployerID)>0)
    {
        $msg="Employer details Updated";
        view_employer($msg,"");
    }
    else
    {
        $error_msg = "Error while updating details please try again OR contact administrator to know more !!";
        view_employer("",$error_msg);
    }
}

#################----------------------------------------- EMPLOYEER SECTION END --------------------------------------####################
##################----------------------------------------- NON PROFIT DETAILS SECTION START --------------------------------------####################

function add_npdetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            $sqlQuery = "SELECT *,DATE_FORMAT(NPActStartDate,'%m/%d/%Y') AS NPActStartDate,"
                    ."DATE_FORMAT(NPProjStartDate,'%m/%d/%Y') AS NPProjStartDate,"
                    ."DATE_FORMAT(NPLastDateWorked,'%m/%d/%Y') AS NPLastDateWorked,"
                    ."DATE_FORMAT(NPPDate,'%m/%d/%Y') AS NPPDate,"
					."DATE_FORMAT(NPRDate,'%m/%d/%Y') AS NPRDate,"
					."DATE_FORMAT(NPStatusDate,'%m/%d/%Y') AS NPStatusDate,"
					."DATE_FORMAT(NPRTWDate,'%m/%d/%Y') AS NPRTWDate,"
					."DATE_FORMAT(NPReportTime,'%l:%i %p') AS NPReportTime "
                    ."FROM vcc_npdetails WHERE EmployeeID=".$_SESSION['EmployeeID'].";";
            eqi($sqlQuery,$rs);
            $NPRecords = mfai($rs);

			if(intval($NPRecords[DoNotCall])==1)
			{
				$makeRed = "style=color:red;";
			}
            #################------------------------- Queries to Fetch Result -----------------------------####################
            
            get_array_list("vcc_iemployee","ILatitude,ILongitude","WHERE IEmployeeID = ".$_SESSION['EmployeeID'],$Location);
			get_new_option_list("vcc_states","StateID","State","$NPRecords[NPPCState]",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
			get_non_profit_list("nonprofit",$Location,"$NPRecords[NonProfit]",$NonProfitList,"WHERE NonProfit <> '' AND longitude Between '".strval($Location['ILongitude']-1)."' AND '".strval($Location['ILongitude']+1)."' AND latitude Between '".strval($Location['ILatitude']-1)."' AND '".strval($Location['ILatitude']+1)."' OR NonProfitID IN('$NPRecords[NonProfit]') ORDER BY NonProfit ASC");
			get_new_option_list("vcc_outcome","OutComeID","OutCome","$NPRecords[NPStatus]",$NPOutComeList,0,"",0,1);
            #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#

            $SMARTY = new Smarty();
            $SMARTY->assign($NPRecords);
            $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"npd_active"=>"active",$NPRecords['NPStatus']."_SELECTED"=>"selected"
                                ,"title"=>"Add/Edit Non Profit Detail","Statelist"=>$StateList,"NPOutComeList"=>$NPOutComeList
                                ,"EmployeeID"=>$_SESSION['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                                ,"NPList"=>$NonProfitList,"action"=>"save_npdetails","LoginID"=>$_SESSION['UserID']
                                ,"makeRed"=>$makeRed,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
            $SMARTY->display('addNPDetails.tpl');
        }
        else
        {
            add_employee();
            die();
        }
    }
}

function save_npdetails($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            #################------------------------- BEGIN INSERT NON PROFIT DETAIL RECORD -----------------------------####################
            $NonProfitID = func_add_update_npdetails($R,$_SESSION['EmployeeID']);
            #################------------------------- END INSERT NON PROFIT DETAIL RECORD -----------------------------####################
        }
        else
        {
            add_employee("","");
            die();
        }
    }
    
    if(intval($NonProfitID)>0)
    {
        $msg="Non Profit details Added";
        add_npdetails($msg,"");
    }
    else
    {
        $error_msg = "Error while adding details please try again OR contact administrator to know more !!";
        add_npdetails("",$error_msg);
    }
}

function view_npdetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    $sqlQuery = "SELECT *,DATE_FORMAT(NPActStartDate,'%m/%d/%Y') AS NPActStartDate,"
                ."DATE_FORMAT(NPProjStartDate,'%m/%d/%Y') AS NPProjStartDate,"
                ."DATE_FORMAT(NPLastDateWorked,'%m/%d/%Y') AS NPLastDateWorked,"
                ."DATE_FORMAT(NPPDate,'%m/%d/%Y') AS NPPDate,"
                ."DATE_FORMAT(NPRDate,'%m/%d/%Y') AS NPRDate,"
				."DATE_FORMAT(NPStatusDate,'%m/%d/%Y') AS NPStatusDate,"
				."DATE_FORMAT(NPRTWDate,'%m/%d/%Y') AS NPRTWDate,"
				."DATE_FORMAT(NPReportTime,'%l:%i %p') AS NPReportTime "
                ."FROM vcc_npdetails WHERE EmployeeID=".$R['EmployeeID'].";";
    eqi($sqlQuery,$rs);
    $NPRecords = mfai($rs);
	
	if(intval($NPRecords[DoNotCall])==1)
	{
		$makeRed = "style=color:red;";
	}

    #################------------------------- Queries to Fetch Result -----------------------------####################
    get_array_list("vcc_iemployee","ILatitude,ILongitude","WHERE IEmployeeID = ".$R['EmployeeID'],$Location);
    get_new_option_list("vcc_states","StateID","State","$NPRecords[NPPCState]",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
    get_non_profit_list("nonprofit",$Location,"$NPRecords[NonProfit]",$NonProfitList,"WHERE NonProfit <> '' AND longitude Between '".strval($Location['ILongitude']-1)."' AND '".strval($Location['ILongitude']+1)."' AND latitude Between '".strval($Location['ILatitude']-1)."' AND '".strval($Location['ILatitude']+1)."' OR NonProfitID IN('$NPRecords[NonProfit]') ORDER BY NonProfit ASC");
	get_new_option_list("vcc_outcome","OutComeID","OutCome","$NPRecords[NPStatus]",$NPOutComeList,0,"",0,1);
    	
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($NPRecords);
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"npd_active"=>"active","title"=>"Edit/Update Non Profit Detail"
                        ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"NPList"=>$NonProfitList,"action"=>"update_npdetails","LoginID"=>$_SESSION['UserID'],$NPRecords['NPStatus']."_SELECTED"=>"selected"
                        ,"NPOutComeList"=>$NPOutComeList,"makeRed"=>$makeRed,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('editNPDetails.tpl');
}

function update_npdetails($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #################------------------------- BEGIN INSERT EMPLOYER DETAIL RECORD -----------------------------####################
    
    $NonProfitID = func_add_update_npdetails($R,$R[EmployeeID]);

    #################------------------------- END INSERT EMPLOYER DETAIL RECORD -----------------------------####################

    if(intval($NonProfitID)>0)
    {
        $msg="Non profit details Updated";
        view_npdetails($msg,"");
    }
    else
    {
        $error_msg = "Error while updating details please try again OR contact administrator to know more !!";
        view_npdetails("",$error_msg);
    }
}

##################----------------------------------------- NON PROFIT DETAILS SECTION END --------------------------------------####################
##################----------------------------------------- LEGAL DETAILS SECTION START --------------------------------------####################

function add_legaldetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            $sqlQuery = "SELECT * FROM vcc_legaldetails WHERE EmployeeID=".$_SESSION['EmployeeID'].";";
            eqi($sqlQuery,$rs);

            $LegalDetaiRecords = mfai($rs);
            #################------------------------- Queries to Fetch Result -----------------------------####################

            get_new_option_list("vcc_states","StateID","State","$LegalDetaiRecords[IEAState]",$IEAStateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
            get_new_option_list("vcc_states","StateID","State","$LegalDetaiRecords[DAState]",$DAStateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);

            #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#

            $SMARTY = new Smarty();
            $SMARTY->assign($LegalDetaiRecords);
            $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"lgl_active"=>"active","title"=>"Add/Edit Legal Detail"
                                ,"IEAStatelist"=>$IEAStateList,"DAStatelist"=>$DAStateList,"EmployeeID"=>$_SESSION['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                                ,"action"=>"save_legaldetails","LoginID"=>$_SESSION['UserID']
								,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
            $SMARTY->display('addLegalDetails.tpl');
        }
        else
        {
            add_employee();
            die();
        }
    }
}

function save_legaldetails($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
		die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
            $LegalID = func_add_update_legaldetails($R, $_SESSION['EmployeeID']);
            #################------------------------- END INSERT LEGAL DETAIL RECORD -----------------------------####################
        }
    }
    
    if(intval($LegalID)>0)
    {
        $msg="Legal details Added";
        add_legaldetails($msg,"");
    }
    else
    {
        $error_msg = "Error while adding details please try again OR contact administrator to know more !!";
        add_legaldetails("",$error_msg);
    }
}

function view_legaldetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    $sqlQuery = "SELECT * FROM vcc_legaldetails WHERE EmployeeID=".$R['EmployeeID'].";";
    eqi($sqlQuery,$rs);

    $LegalDetaiRecords = mfai($rs);
    #################------------------------- Queries to Fetch Result -----------------------------####################
    
    get_new_option_list("vcc_states","StateID","State","$LegalDetaiRecords[IEAState]",$IEAStateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
    get_new_option_list("vcc_states","StateID","State","$LegalDetaiRecords[DAState]",$DAStateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
    	
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($LegalDetaiRecords);
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"lgl_active"=>"active","title"=>"Edit/Update Legal Detail"
                        ,"IEAStatelist"=>$IEAStateList,"DAStatelist"=>$DAStateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"action"=>"update_legaldetails","LoginID"=>$_SESSION['UserID']
						,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('editLegalDetails.tpl');
}

function update_legaldetails($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #################------------------------- BEGIN FETCH LEGAL DETAIL RECORD -----------------------------####################
    $LegalDetailID = func_add_update_legaldetails($R,$R[EmployeeID]);
    #################------------------------- END FETCH LEGAL DETAIL RECORD -----------------------------####################

    if(intval($LegalDetailID)>0)
    {
        $msg="Legal details Updated";
        view_legaldetails($msg,"");
    }
    else
    {
        $error_msg = "Error while updating details please try again OR contact administrator to know more !!";
        view_legaldetails("",$error_msg);
    }
}

##################----------------------------------------- LEGAL DETAILS SECTION END --------------------------------------####################
##################----------------------------------------- ADDITIONAL DETAILS SECTION START --------------------------------------####################

function add_addndetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
            $sqlQuery = "SELECT *,DATE_FORMAT(ADDropOffDate,'%m/%d/%Y') AS ADDropOffDate,"
                ."DATE_FORMAT(ADDateDelivered,'%m/%d/%Y') AS ADDateDelivered,"
                ."DATE_FORMAT(ADFU_QTNP_Date,'%m/%d/%Y') AS ADFU_QTNP_Date,"
                ."DATE_FORMAT(ADFU_QTE_Date,'%m/%d/%Y') AS ADFU_QTE_Date,"
                ."DATE_FORMAT(ADFU_SOC_Date,'%m/%d/%Y') AS ADFU_SOC_Date "
                ."FROM vcc_addndetails WHERE EmployeeID=".$_SESSION['EmployeeID'].";";
            eqi($sqlQuery,$rs);

            $ADDNDetaiRecords = mfai($rs);

            $SMARTY = new Smarty();
            $SMARTY->assign($ADDNDetaiRecords);
            $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"addnl_active"=>"active","title"=>"Add Additional Detail"
                            ,"Statelist"=>$StateList,"action"=>"save_addndetails","SERVER_ACTUAL_PATH"=>$SERVER_PATH
                            ,"LoginID"=>$_SESSION['UserID'],"EmployeeID"=>$_SESSION['EmployeeID']
                            ,$ADDNDetaiRecords[ADShippingVendor]."_SELECTED"=>"selected"
                            ,$ADDNDetaiRecords[ADUndeliverable]."_SELECTED"=>"selected"
							,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
            $SMARTY->display('addAdditionDetails.tpl');
        }
        else
        {
            add_employee();
            die();
        }
    }
}

function save_addndetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($_SESSION['EmployeeID'])>0)
        {
            #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
            $AdditionalID = func_add_update_addndetails($R, $_SESSION['EmployeeID']);
            #################------------------------- END INSERT LEGAL DETAIL RECORD -----------------------------####################
        }
    }
    
    if(intval($AdditionalID)>0)
    {
        $msg="Additional details Added";
        add_addndetails($msg,"");
    }
    else
    {
        $error_msg = "Error while adding details please try again OR contact administrator to know more !!";
        add_addndetails("",$error_msg);
    }
}

function view_addndetails($msg="",$error_msg='')
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    $sqlQuery = "SELECT *,DATE_FORMAT(ADDropOffDate,'%m/%d/%Y') AS ADDropOffDate,"
                ."DATE_FORMAT(ADDateDelivered,'%m/%d/%Y') AS ADDateDelivered,"
                ."DATE_FORMAT(ADFU_QTNP_Date,'%m/%d/%Y') AS ADFU_QTNP_Date,"
                ."DATE_FORMAT(ADFU_QTE_Date,'%m/%d/%Y') AS ADFU_QTE_Date,"
                ."DATE_FORMAT(ADFU_SOC_Date,'%m/%d/%Y') AS ADFU_SOC_Date "
                ."FROM vcc_addndetails WHERE EmployeeID=".$R['EmployeeID'].";";
    eqi($sqlQuery,$rs);
    $ADDNDetaiRecords = mfai($rs);

    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($ADDNDetaiRecords);
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"addnl_active"=>"active","title"=>"Edit/Update Additional Detail"
                    ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                    ,"EmployerList"=>$EmployerList,"action"=>"update_addndetails","LoginID"=>$_SESSION['UserID']
                    ,$ADDNDetaiRecords[ADShippingVendor]."_SELECTED"=>"selected"
                    ,$ADDNDetaiRecords[ADUndeliverable]."_SELECTED"=>"selected","Name"=>$_SESSION['Name']));
    $SMARTY->display('editAdditionDetails.tpl');
}
function update_addndetails($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #################------------------------- BEGIN FETCH LEGAL DETAIL RECORD -----------------------------####################
    $AdditionalDetailID = func_add_update_addndetails($R,$R[EmployeeID]);
    #################------------------------- END FETCH LEGAL DETAIL RECORD -----------------------------####################

    if(intval($AdditionalDetailID)>0)
    {
        $msg="Additional details Updated";
        view_addndetails($msg,"");
    }
    else
    {
        $error_msg = "Error while updating details please try again OR contact administrator to know more !!";
        view_addndetails("",$error_msg);
    }
}

function view_files($msg="",$error_msg="")
{
    global $SERVER_PATH,$VIEW_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    $Upload=array();
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $SQL = "SELECT UploadID,FileName,UploadedDate FROM vcc_uploads "
                   ."WHERE EmployeeID=".$R[EmployeeID].";";
            $total = eqi($SQL,$rs);
            
            while($data=mfai($rs))
            {
                array_push($Upload,$data);
            }
        }
    }
    
    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"upd_active"=>"active","title"=>"Upload Document",
                        "EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"totalUploadFiles"=>$total,
                        "UploadArray"=>$Upload,"action"=>"upload_file","LoginID"=>$_SESSION['UserID'],
                        "ACTUAL_UPLOAD_PATH"=>$VIEW_PATH,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('uploadDocuments.tpl');
}
function delete_upload_file($msg="",$error_msg="")
{
	global $SERVER_PATH,$VIEW_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    $Upload=array();
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['UploadID'])>0)
        {
			$SQL = "DELETE FROM vcc_uploads WHERE UploadID=".$R[UploadID]." AND EmployeeID=".$R[EmployeeID];
			eqi($SQL,$rs);
            $SQL1 = "SELECT UploadID,FileName,UploadedDate FROM vcc_uploads "
                   ."WHERE EmployeeID=".$R[EmployeeID].";";
            $total = eqi($SQL1,$rs);
            
            while($data=mfai($rs))
            {
                array_push($Upload,$data);
            }
        }
    }
	$SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"upd_active"=>"active","title"=>"Upload Document",
                        "EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"totalUploadFiles"=>$total,
                        "UploadArray"=>$Upload,"action"=>"upload_file","LoginID"=>$_SESSION['UserID'],
                        "ACTUAL_UPLOAD_PATH"=>$VIEW_PATH,"IsAdmin"=>$_SESSION['IsAdmin'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('uploadDocuments.tpl');
}
function upload_file($msg="",$error_msg="")
{
    global $SERVER_PATH,$UPLOAD_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(intval($_FILES["eFileUpload"]["size"])>53000000)
	{
		view_files("","Size can not be more than 50MB.");
		die();
	}
	
	if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
	{
		header("Location:".$SignIN);
		die();
	}
	else
	{
		if(intval($R['EmployeeID'])>0)
		{
			$tmpName = $_FILES['eFileUpload']['tmp_name'];
			$FileName = $_FILES['eFileUpload']['name'];
			$DirectoryPath = $UPLOAD_PATH.$R['EmployeeID']."/";

			if(!file_exists($DirectoryPath))
			{
				if(mkdir($DirectoryPath,0775,true))
				{
					if(move_uploaded_file($tmpName,$DirectoryPath.$FileName))
					{
						$SQL = "INSERT INTO vcc_uploads(EmployeeID,FileName,UploadedDate) VALUES($R[EmployeeID],'".htmlentities($FileName)."',NOW());";
						$UploadID=eii($SQL);
						if(intval($UploadID)>0)
						{
							view_files("File uploaded successfully","");
							die();
						}
						else
						{
							view_files("","Error while uploading file please try again OR contact administrator to know more !!");
							die();
						}
					}
				}
				else
				{
					view_files("","Error while uploading file please try again OR contact administrator to know more !!");
					die();
				}
			}
			else
			{
				if(move_uploaded_file($tmpName,$DirectoryPath.$FileName))
				{
					$SQL = "INSERT INTO vcc_uploads(EmployeeID,FileName,UploadedDate) VALUES($R[EmployeeID],'$FileName',NOW());";
					$UploadID=eii($SQL);
					if(intval($UploadID)>0)
					{
						view_files("File uploaded successfully","");
						die();
					}
					else
					{
						view_files("","Error while uploading file please try again OR contact administrator to know more !!");
						die();
					}
				}
			}
		}
		else
		{
			view_files("","Error while uploading file please try again OR contact administrator to know more !!");
			die();
		}
	}
}

##################----------------------------------------- ADDITIONAL DETAILS SECTION END --------------------------------------####################
function cleanData(&$str)
{
	$str = preg_replace("/\t/", "\\t", $str);
	$str = preg_replace("/\r?\n/", "\\n", $str);
	if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
function export_data($msg="",$error_msg="")
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

	$flag = false;
	// filename for download
	$filename = "Records_".date('Ymd').".xls";

	header("Content-Disposition: attachment; filename=\"$filename\"");
	header("Content-Type: application/vnd.ms-excel");
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
		$SQL = "SELECT * FROM vcc_iemployee Emp
		LEFT JOIN vcc_employer Empl ON Empl.EmployeeID = Emp.IEmployeeID
		LEFT JOIN vcc_npdetails Np ON Np.EmployeeID = Emp.IEmployeeID
		LEFT JOIN vcc_legaldetails Ld ON Ld.EmployeeID = Emp.IEmployeeID
		LEFT JOIN vcc_addndetails Addn ON Addn.EmployeeID = Emp.IEmployeeID;";
		
		eqi($SQL,$rs);
		while($data=mfai($rs))
		{
			if(!$flag)
			{
			  // display field/column names as first row
			  echo implode("\t", array_keys($data)) . "\r\n";
			  $flag = true;
			}
			// escape tab characters
			$str = preg_replace("/\t/", "\\t", $str);

			// escape new lines
			$str = preg_replace("/\r?\n/", "\\n", $str);
			array_walk($data,'cleanData');
			echo implode("\t", array_values($data)) . "\r\n";
		}
	}
	exit;
}
function export_employee_data($msg="",$error_msg="")
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
		if(get_row_con_info("vcc_iemployee","WHERE IEmployeeID=".$R[EmployeeID],"",$employee))
		{
			$flag = false;
			$filename = "Sample.csv";

			header("Content-Disposition: attachment; filename=\"$filename\"");
			header('Content-Type: application/csv');
			//header("Content-Type: application/vnd.ms-excel");
			$SQL = "SELECT VCCCaseNumber,VCCEmployeeCode,IFirstName AS EmployeeFirstName,ILastName AS EmployeeLastName,IAddress AS EmployeeAddress,ST.State AS EmployeeState,IEmailAddress AS EmployeeEmail,
					IAge AS Age,IGender As Gender,IOccupation AS Occupation,IPhone AS EmployeePhone,IMobile As EmployeeMobile,ICity AS EmployeeCity,IZip AS EmployeeZip,
					LanguagesSpoken,NPEarliestStartDate,InjuryDate,InjuryType,ClaimNumber,StateJuridiction,AWWRate,CompRate,ALDRateHourly,
					ALDRateWeekly,RestrictionDate,IPhysician AS PhysicianBy,MedRestriction,NextDAppointment,PIWHoursWorked,TransportationIssue,
					TransIssueType,RefreralDate AS ReferralDate,ReOpenDate,PersonAssignedID,DateAssigned,PreCallDate,FollowUpDate,CloseDate,
					GIEReferralSource AS ReferralSource,GIEmployer,GIPlacementFee As PlacementFee,GISecondPlacementFee AS SecondPlacementFee,
					GIThirdPlacementFee AS ThirdPlacementFee,GIFirstName AS EmployerFirstName,GILastName AS EmployerLastName,GIAddress AS EmployerAddress,
					GICity AS City,GIStateID,GIZip AS Zip,GIBusinessPhone AS Phone,GIExtension AS EmployerExtension,GIFax AS EmployerFax,GIEmail AS EmployerEmail,
					RSCFirstName AS ReferralSourceFirstName,RSCLastName AS ReferralSourceLastName,RSCEAlert1 AS ReferralSourceEAlert1,
					RSCEAlert2 AS ReferralSourceEAlert2,RSCEAlert3 AS ReferralSourceEAlert3,CAFirstName AS ClaimAdjusterFirstName,
					CALastName AS ClaimAdjusterLastName,CAEmail As ClaimAdjusterEmail,CAPhone AS ClaimAdjusterPhone,CAExtension As ClaimAdjusterExtension,
					JobCode,NonProfit,DoNotCall,NPPCFirstName,NPPCLastName,NPPCAddress,NPPCCity,NPPCState,NPPCZip,NPPCPhone,NPPCExtension,NPPCFax,
					NPPCEmail,NPSCFirstName,NPSCLastName,NPSCPhone,NPSCExtension,NPSCEmail,NPReportTo,NPReportTitle,NPDressCode,NPPDate,
					NPRDate,NPReportTime,NPActStartDate,NPProjStartDate,NPLastDateWorked,NPWorkSchedule1,NPWorkSchedule2,NPWorkSchedule3,
					NPLocation2Name,NPLocation2Address,NPTotalWeeklyHours,NPStatus AS Outcome,NPTotalHoursWorked,NPTotalDaysWorked,NPDescription
					NPAddnInstructions,NPJobTask,IEALawFirmName AS LawFirmName,IEAFirstName As LawyerFirstName,IEALastName As LawyerLastName,
					IEAAddress As LawyerAddress,IEACity AS LawyerCity,IEAZip AS LawyerZip,IEABusinessPhone AS LawyerPhone,IEAExtension AS LawyerExtension,IEAFaxNumber AS LawyerFax,
					IEAEmailAddress AS LawyerEmail,DALawFirmName AS SecondaryFirmName,DAFirstName As LawyerSecondaryFirstName,DALastName As LawyerSecondaryLastName,
					DAAddress As LawyerSecondaryAddress,DACity As LawyerSecondaryCity,DAZip As LawyerSecondaryZip,DABusinessPhone AS LawyerSecondaryPhone,DAExtension AS LawyerSecondaryExtension,DAFaxNumber AS LawyerSecondaryFax,
					DAEmailAddress AS LawyerSecondaryEmail,ADDropOffDate,ADShippingVendor AS ShippingVendor,ADTrackingNumber As TrackingNumber,
					ADDateDelivered As DateDelivered,ADDeliveredTime,ADUndeliverable,ADReason As Reason,ADFU_QTNP,ADFU_QTE,ADFU_SOC,ADFU_QTNP_Date,
					ADFU_QTE_Date,ADFU_SOC_Date FROM vcc_iemployee Emp
					LEFT JOIN vcc_states ST ON ST.StateID = Emp.IStateID
					LEFT JOIN vcc_employer Empl ON Empl.EmployeeID = Emp.IEmployeeID
					LEFT JOIN vcc_npdetails Np ON Np.EmployeeID = Emp.IEmployeeID
					LEFT JOIN vcc_legaldetails Ld ON Ld.EmployeeID = Emp.IEmployeeID
					LEFT JOIN vcc_addndetails Addn ON Addn.EmployeeID = Emp.IEmployeeID
			WHERE IEmployeeID=".$R[EmployeeID].";";
			
			eqi($SQL,$rs);
			while($data=mfai($rs))
			{
				if(!$flag)
				{
				  // display field/column names as first row
				  echo implode(",", array_keys($data)) . "\r\n";
				  //echo implode("\t", array_keys($data)) . "\r\n";
				  $flag = true;
				}
				// escape tab characters
				//$str = preg_replace("/\t/", "\\t", $str);
				$str = preg_replace("/,/", "\\t", $str);

				// escape new lines
				$str = preg_replace("/\r?\n/", "\\n", $str);
				array_walk($data,'cleanData');
				//echo implode("\t", array_values($data)) . "\r\n";
				echo implode(",", array_values($data)) . "\r\n";
			}
		}
	}
	exit;
}
######################### ------------------- AJAX PART ----------------------#########################

######################### ------------------- NOTES SECTION START ----------------------#########################

function save_note($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $sqlQuery = "INSERT INTO vcc_notes(
                                    `InitialID`,
                                    `NoteDescription`,
                                    `EmployeeID`,
									`IsAdmin`,
                                    `CreatedDate`)
                                     VALUES(
                                    (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),
                                    '".htmlentities($R[Note])."',$R[EmployeeID],$R[IsAdmin],NOW());";
            $NoteID = eii($sqlQuery);
            if((int)$NoteID>0)
            {
                echo "Note has been successfully added";
            }
        }
    }
}
function update_note($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $sqlQuery = "UPDATE vcc_notes SET 
                            `InitialID`= (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),
                            `NoteDescription`='".htmlentities($R[Note])."',
                            `NoteFlag`=1,
                            `EmployeeID`=$R[EmployeeID],
                            `LastUpdatedDate`=NOW()
                        WHERE `NoteID`=$R[NoteID];";
            
            $NoteID = eqi($sqlQuery,$rs);
            if((int)$NoteID>0)
            {
                view_notes();
            }
        }
    }
}

function delete_note($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['NoteID'])>0)
        {
            $sqlQuery = "DELETE FROM vcc_notes WHERE `NoteID`=$R[NoteID];";
            
            $NoteID = eqi($sqlQuery,$rs);
            if((int)$NoteID>0)
            {
                view_notes();
            }
        }
    }
}

function view_notes($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    $Notes=array();
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $SQL = "SELECT NoteID,NoteDescription,IsAdmin,Initial,DATE_FORMAT(LastUpdatedDate,'%m-%d-%y, %h:%i %p') AS LastUpdatedDate FROM vcc_notes N LEFT JOIN vcc_initials I ON N.InitialID = I.InitialID "
                   ."WHERE EmployeeID=".$R[EmployeeID]." AND NoteFlag=1 ORDER BY LastUpdatedDate DESC;";
            $total = eqi($SQL,$rs);
            while($data=mfai($rs))
            {
				$data['Color']="style=margin:0px;";
				if($data['IsAdmin']==1)
				{
					$data['Color']="style=color:red;margin:0px;";
				}
                array_push($Notes,$data);
            }
        }
    }
    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"EmployeeID"=>$R[EmployeeID],"tot_note_rows"=>$total,"Notes"=>$Notes));
    echo $SMARTY->display('viewNotes.tpl');
}

function load_EmpNotes()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $FullText = "";
            $SQL = "SELECT N.NoteID,N.NoteDescription,N.IsAdmin,I.Initial,DATE_FORMAT(N.LastUpdatedDate,'%m-%d-%y, %h:%i %p') AS LastUpdatedDate FROM vcc_notes N LEFT JOIN vcc_initials I ON N.InitialID = I.InitialID "
                   ."WHERE N.EmployeeID=".$R[EmployeeID]." AND N.NoteFlag=1 ORDER BY LastUpdatedDate DESC;";
            eqi($SQL,$rs);
            
            while($data=mfai($rs))
            {
				$FullText.= trim($data[Initial]." - ".$data[LastUpdatedDate]." - ".$data[NoteDescription])."\r\n";
            }
        }
    }
    $SMARTY = new Smarty();
    $SMARTY->assign(array("FullText"=>$FullText));
    echo $SMARTY->display('loadNotes.tpl');
}

function load_npdetail()
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	$npDetail = array();

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $FullText = "";
            $SQL = "SELECT NonProfit,DoNotCall,NPPCFirstName,NPPCLastName,NPPCAddress,NPPCCity,NPPCZip,NPPCPhone,
					NPPCExtension,NPPCEmail,State FROM vcc_npdetails LEFT JOIN vcc_states ON NPPCState = StateID
					WHERE EmployeeID=".$R[EmployeeID].";";
            eqi($SQL,$rs);       
			$npDetail = mfai($rs);
        }
    }
    $SMARTY = new Smarty();
    $SMARTY->assign($npDetail);
    echo $SMARTY->display('npdetail.tpl');
}
function print_notes($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    $Notes=array();
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $SQL = "SELECT NoteDescription,FollowUpFlag,"
                    ."Initial,DATE_FORMAT(LastUpdatedDate,'%m-%d-%y, %h:%i %p') AS LastUpdatedDate "
                    ."FROM vcc_notes N LEFT JOIN vcc_initials I ON N.InitialID = I.InitialID "
                    ."WHERE N.EmployeeID=".$R[EmployeeID]." AND N.NoteFlag=1 ORDER BY LastUpdatedDate DESC;";
            $total = eqi($SQL,$rs);
            
            while($data=mfai($rs))
            {
                array_push($Notes,$data);
            }
        }
    }
    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"EmployeeID"=>$R[EmployeeID],"tot_note_rows"=>$total
                        ,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"Notes"=>$Notes));
    echo $SMARTY->display('printNotes.tpl');
}

######################################## NOTES SECTION END ##########################################

######################################## NON PROFIT CALL LOG SECTION #####################################

function save_log($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $sqlQuery = "INSERT INTO vcc_notes(
                        `InitialID`,
                        `NoteDescription`,
                        `NoteFlag`,
                        `FollowUpFlag`,
                        `EmployeeID`,
                        `CreatedDate`)
                         VALUES(
                        (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),
                        '".htmlentities($R[Log])."',0,$R[FollowUP],$R[EmployeeID],NOW());";
            
            $LogID = eii($sqlQuery);
            if((int)$LogID>0)
            {
                view_logs();
            }
        }
    }
}

function update_log($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $sqlQuery = "UPDATE vcc_notes SET 
                            `InitialID`= (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),
                            `NoteDescription`='".htmlentities($R[Log])."',
                            `NoteFlag`=0,
                            `FollowUpFlag`=$R[FollowUP],
                            `EmployeeID`=$R[EmployeeID],
                            `LastUpdatedDate`=NOW()
                        WHERE `NoteID`=$R[LogID];";
            
            $LogID = eqi($sqlQuery,$rs);
            if((int)$LogID>0)
            {
                view_logs();
            }
        }
    }
}

function delete_log($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['LogID'])>0)
        {
            $sqlQuery = "DELETE FROM vcc_notes WHERE `NoteID`=$R[LogID];";
            
            $LogID = eqi($sqlQuery,$rs);
            if((int)$LogID>0)
            {
                view_logs();
            }
        }
    }
}

function view_logs($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    $Notes=array();
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $SQL = "SELECT NoteID,NoteDescription,FollowUpFlag,Initial,DATE_FORMAT(N.LastUpdatedDate,'%m-%d-%y, %h:%i %p') AS LastUpdatedDate,
					NP.NonProfit,NP.NPPCFirstName,NP.DoNotCall,NP.NPPCCity,NP.NPPCPhone
					FROM vcc_notes N LEFT JOIN vcc_initials I ON N.InitialID = I.InitialID
					LEFT JOIN vcc_npdetails NP ON N.EmployeeID = NP.EmployeeID
					WHERE N.EmployeeID=".$R[EmployeeID]." AND N.NoteFlag=0
					ORDER BY FollowUpFlag DESC,LastUpdatedDate DESC;";
            
            $total = eqi($SQL,$rs);
            
            while($data=mfai($rs))
            {
                if(intval($data[FollowUpFlag])==1)
                {
                    $data[FChecked] = "checked";
                }
                array_push($Notes,$data);
            }
        }
    }
    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"EmployeeID"=>$R[EmployeeID]
                            ,"tot_note_rows"=>$total,"Notes"=>$Notes));
    echo $SMARTY->display('callLogs.tpl');
}

function print_log($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    $Notes=array();
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['EmployeeID'])>0)
        {
            $SQL = "SELECT NoteDescription,FollowUpFlag,"
                    ."Initial,DATE_FORMAT(LastUpdatedDate,'%m-%d-%y, %h:%i %p') AS LastUpdatedDate "
                    ."FROM vcc_notes N LEFT JOIN vcc_initials I ON N.InitialID = I.InitialID "
                    ."WHERE N.EmployeeID=".$R[EmployeeID]." AND N.NoteFlag=0 "
                    ."ORDER BY FollowUpFlag DESC,LastUpdatedDate DESC;";
            $total = eqi($SQL,$rs);
            
            while($data=mfai($rs))
            {
                if(intval($data[FollowUpFlag])==1)
                {
                    $data[FChecked] = "High";
                }
                else
                {
                    $data[FChecked] = "Low";
                }
                array_push($Notes,$data);
            }
        }
    }
    $SMARTY = new Smarty();
    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"EmployeeID"=>$R[EmployeeID],"tot_note_rows"=>$total
                        ,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"Notes"=>$Notes));
    echo $SMARTY->display('printLog.tpl');
}
######################################## END NON PROFIT CALL LOG SECTION #####################################
function assign_mail()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);

    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
        if(intval($R['PersonID'])>0 && intval($R['EmployeeID'])>0)
        {
            $Query = "UPDATE vcc_iemployee SET PersonAssignedID = $R[PersonID],PresetContentID = $R[PresetContentID] WHERE IEmployeeID = ".$R['EmployeeID'];
            eqi($Query,$rs);
            
            if(get_row_con_info("vcc_initials VCI LEFT JOIN vcc_iemployee VCE ON VCE.PersonAssignedID = VCI.InitialID LEFT JOIN vcc_placement_status VPS ON VCE.PresetContentID = VPS.PlacementID","WHERE VCE.IEmployeeID = $R[EmployeeID]","VCCCaseNumber,Placement,IFirstName,ILastName,FullName,EmailAddress",$Initials))
            {
                $subject = "New VCC Referral VCC Case # : ".$Initials[VCCCaseNumber];
                $message = "You have been assigned a new referral VCC Case # : ".$Initials[VCCCaseNumber]." for Employee $Initials[ILastName],$Initials[IFirstName] with $Initials[Placement]";
                send_mail_new($Initials[FullName],$Initials[EmailAddress],"VARNER CLAIMS CONSULTING","VCCDB@varnercc.com",$subject,$message,"","","","baltincsoft@gmail.com");
                $sqlQuery = "INSERT INTO vcc_notes(
                                    `InitialID`,
                                    `NoteDescription`,
                                    `EmployeeID`,
                                    `CreatedDate`)
                                     VALUES(
									 (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),'$Initials[EmailAddress] has been assigned for VCC Case # : $Initials[VCCCaseNumber] with $Initials[Placement]',$R[EmployeeID],NOW());";
                eii($sqlQuery);
                echo "mail sent";
            }
        }
        else
        {
            echo "select an appropriate value";
        }
    }
}
######################################## SEARCH DETAILS SECTION START ##########################################

function result_search($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
    $SMARTY = new Smarty();

    $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"srch_active"=>"active","title"=>"Search Record","action"=>"do_serach"
						  ,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    $SMARTY->display('searchresults.tpl');
}
######################################## END SEARCH DETAILS SECTION START ##########################################

######################################## TOGGLE EMPLOYER SECTION START ##########################################

function search_employer()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    if($R['empName']!="" || $R['empName']!=NULL)
    {
        get_new_option_list("vcc_reserverdemployerlist","EmployerID","Employer","",$EmployerList,0,"WHERE Employer <> '' AND ReferralSource IN('$R[empName]') ORDER BY Employer ASC");
        echo $EmployerList;
    }
}

function new_employer_detail()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    $EmployerDetail = array();
    
    if(intval($R['empID'])>0)
    {
        $sqlQuery = "SELECT * FROM vcc_reserverdemployerlist WHERE EmployerID=".$R[empID]." LIMIT 0,1;";
        eqi($sqlQuery,$rs);

        $EmployerDetail = mfai($rs);
    }
    
    get_new_option_list("vcc_states","StateID","State","$EmployerDetail[StateID]",$StateList,0,"WHERE StateID <>0 ORDER BY State ASC","",0);
    get_new_option_list("vcc_reserverdemployerlist","EmployerID","Employer","$R[empID]",$EmployerList,0,"WHERE Employer <> '' ORDER BY Employer ASC","",0);

    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($EmployerDetail);
    $SMARTY->assign(array("emplyr_active"=>"active","title"=>"Add Employer Detail","EmployerList"=>$EmployerList
                        ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"action"=>"save_employer","LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    echo $SMARTY->display('addAjaxCallEmployer.tpl');
}

function edit_employer_detail()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    
    $EmployerDetail = array();
    if(intval($R['empID'])>0)
    {
        $sqlQuery = "SELECT * FROM vcc_reserverdemployerlist WHERE EmployerID=".$R[empID]." LIMIT 0,1;";
        eqi($sqlQuery,$rs);

        $EmployerDetail = mfai($rs);
    }
    get_new_option_list("vcc_states","StateID","State","$EmployerDetail[StateID]",$StateList,0,"ORDER BY State ASC","",0);
    get_new_option_list("vcc_reserverdemployerlist","EmployerID","Employer","$R[empID]",$EmployerList,0,"WHERE Employer <> '' ORDER BY Employer ASC","",0);

    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($EmployerDetail);
    $SMARTY->assign(array("emplyr_active"=>"active","title"=>"Edit/Update Employer Detail","EmployerList"=>$EmployerList
                        ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"action"=>"update_employer","LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    echo $SMARTY->display('editAjaxCallEmployertab.tpl');
}

######################################## TOGGLE EMPLOYER SECTION END ##########################################

######################################## TOGGLE NONPROFIT SECTION START ##########################################

function search_nonprofit()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    if($R['empName']!="" || $R['empName']!=NULL)
    {
        get_new_option_list("vcc_reserverdemployerlist","EmployerID","Employer","",$EmployerList,0,"WHERE Employer <> '' AND ReferralSource IN('".$R['empName']."') ORDER BY Employer ASC","",0);
        if($EmployerList!="")
        {
            echo $EmployerList;
        }
    }
}

function add_nonprofit_detail()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    $NonProfitDetail = array();
    
    if(intval($R['NPID'])>0)
    {
        $sqlQuery = "SELECT * FROM nonprofit WHERE NonProfitID=".$R[NPID]." LIMIT 0,1;";
        eqi($sqlQuery,$rs);

        $NonProfitDetail = mfai($rs);
    }
    
    get_array_list("vcc_iemployee","ILatitude,ILongitude","WHERE IEmployeeID = ".$R['EmployeeID'],$Location);
    get_new_option_list("vcc_states","StateID","State","$NonProfitDetail[NPState]",$StateList,0,"ORDER BY State ASC","",0);
    get_non_profit_list("nonprofit",$Location,"$R[NPID]",$NonProfitList,"WHERE NonProfit <> '' AND longitude Between '".strval($Location['ILongitude']-1)."' AND '".strval($Location['ILongitude']+1)."' AND latitude Between '".strval($Location['ILatitude']-1)."' AND '".strval($Location['ILatitude']+1)."' ORDER BY NonProfit ASC","",0);
    
    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($NonProfitDetail);
    $SMARTY->assign(array("emplyr_active"=>"active","title"=>"Add Employer Detail","NPList"=>$NonProfitList
                        ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"action"=>"save_npdetails","LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    echo $SMARTY->display('addAjaxNPDetails.tpl');
}

function edit_nonprofit_detail()
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    
    
    $NonProfitDetail = array();
    if(intval($R['NPID'])>0)
    {
        $sqlQuery = "SELECT * FROM nonprofit WHERE NonProfitID=".$R[NPID]." LIMIT 0,1;";
        eqi($sqlQuery,$rs);

        $NonProfitDetail = mfai($rs);
    }
    
    
    get_array_list("vcc_iemployee","ILatitude,ILongitude","WHERE IEmployeeID = ".$R['EmployeeID'],$Location);
    get_new_option_list("vcc_states","StateID","State","$NonProfitDetail[NPState]",$StateList,0,"ORDER BY State ASC","",0);
    get_non_profit_list("nonprofit",$Location,"$R[NPID]",$NonProfitList,"WHERE NonProfit <> '' AND longitude Between '".strval($Location['ILongitude']-1)."' AND '".strval($Location['ILongitude']+1)."' AND latitude Between '".strval($Location['ILatitude']-1)."' AND '".strval($Location['ILatitude']+1)."' ORDER BY NonProfit ASC");
    

    #-------------------------------------------- Smarty Templates to Display ----------------------------------------------#
	
    $SMARTY = new Smarty();
    $SMARTY->assign($NonProfitDetail);
    $SMARTY->assign(array("emplyr_active"=>"active","title"=>"Edit/Update Employer Detail","NPList"=>$NonProfitList
                        ,"Statelist"=>$StateList,"EmployeeID"=>$R['EmployeeID'],"SERVER_ACTUAL_PATH"=>$SERVER_PATH
                        ,"action"=>"update_npdetails","LoginID"=>$_SESSION['UserID'],"Name"=>$_SESSION['Name']));
    echo $SMARTY->display('editAjaxNPDetails.tpl');
}

######################################## TOGGLE NONPROFIT SECTION END ##########################################

######################################## AJAX PART END ##########################################
function export_report($msg="",$error_msg='')
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
    
	if(intval($R['preference'])==1)
	{
		$filename = "AssignmentReport_".date('Ymd').".xls";
	}
	else
	{
		$filename = "PlacementReport_".date('Ymd').".xls";
	}

	header("Content-Disposition: attachment; filename=\"$filename\"");
	header("Content-Type: application/vnd.ms-excel");
	
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
    else
    {
		if(intval($R['preference'])==1)
		{
			$SQL = "SELECT VCCCaseNumber,CONCAT(IFirstName,' ',ILastName) AS EmployeeName,DATE_FORMAT(InjuryDate,'%m/%d/%Y') AS InjuryDate,
				DATE_FORMAT(NPEarliestStartDate,'%m/%d/%Y') AS NPStartDate,GIEmployer AS EmployerName,
				DATE_FORMAT(PreCallDate,'%m/%d/%Y') AS PreCallDate,DATE_FORMAT(FollowUpDate,'%m/%d/%Y') AS FollowUpDate
				FROM vcc_iemployee VCE LEFT JOIN vcc_employer VCEP ON VCE.IEmployeeID = VCEP.EmployeeID
				LEFT JOIN vcc_initials VCI ON VCI.InitialID = VCE.PersonAssignedID
				WHERE CloseDate IS NOT NULL AND CloseDate <> STR_TO_DATE(now(),'%Y-%m-%d') 
				AND CloseDate <> STR_TO_DATE('1970-01-01','%Y-%m-%d') AND VCI.LoginID = ".$R['userID'].";";
		}
		else
		{
			$SQL = "SELECT VCCCaseNumber,CONCAT(IFirstName,' ',ILastName) AS EmployeeName,GIEmployer AS EmployerName,
				ICity AS EmployeeCity,IZip AS EmployeeZipCode,VS.State AS EmployeeState
                FROM vcc_iemployee VCE LEFT JOIN vcc_employer VCEP ON VCE.IEmployeeID = VCEP.EmployeeID
				LEFT JOIN vcc_initials VCI ON VCI.InitialID = VCE.PersonAssignedID 
				LEFT JOIN vcc_states VS ON VS.StateID = VCE.IStateID 
				WHERE CloseDate IS NOT NULL AND CloseDate <> STR_TO_DATE(now(),'%Y-%m-%d') 
				AND CloseDate <> STR_TO_DATE('1970-01-01','%Y-%m-%d') AND VCI.LoginID = ".$R['userID'].";";
		}	
		eqi($SQL,$rs);
		while($data=mfai($rs))
		{
			if(!$flag)
			{
			  // display field/column names as first row
			  echo implode("\t", array_keys($data)) . "\r\n";
			  $flag = true;
			}
			// escape tab characters
			$str = preg_replace("/\t/", "\\t", $str);

			// escape new lines
			$str = preg_replace("/\r?\n/", "\\n", $str);
			array_walk($data,'cleanData');
			echo implode("\t", array_values($data)) . "\r\n";
		}
	}
	exit;
}

?>