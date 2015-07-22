<?PHP
error_reporting(0);
ini_set('max_execution_time','1800');
ini_set('max_upload_size','128M');	
ini_set('memory_limit','128M');
ini_set('session.use_only_cookies','1');
ini_set('session.hash_function','1');
ini_set('session.hash_bits_per_character','5');

date_default_timezone_set("America/New_York");

include_once("includes/ConfigFile.php");
init();

$func_ary=array("do_search","do_advancedSearch","show_register","do_signup","logout","add_employee","save_employee","add_employer"
				,"save_employer","add_legaldetails","save_legaldetails","add_npdetails","add_addndetails"
                ,"result_search","do_search","delete_record","logout");

global $SignIN;

if((fe($_REQUEST['action'])) || $_REQUEST['action']=="do_login")
{
   $_REQUEST['action']($_REQUEST['msg']);
   die();
}

function delete_record($msg="",$error_msg="")
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
	if($R[EmployeeID]!=NULL || $R[EmployeeID]!="")
	{
		if(delete_emp_record($R[EmployeeID]))
		{
			echo "Employee has been deleted";
		}
	}
}
function delete_emp_record($EmployeeID)
{
	$SQL = "DELETE FROM vcc_uploads WHERE EmployeeID = $EmployeeID";
	eqi($SQL,$rs);
	$SQL = "DELETE FROM vcc_notes WHERE EmployeeID = $EmployeeID";
	eqi($SQL,$rs1);
	$SQL = "DELETE FROM vcc_addndetails WHERE EmployeeID = $EmployeeID";
	eqi($SQL,$rs2);
	$SQL = "DELETE FROM vcc_legaldetails WHERE EmployeeID = $EmployeeID";
	eqi($SQL,$rs3);
	$SQL = "DELETE FROM vcc_npdetails WHERE EmployeeID = $EmployeeID";
	eqi($SQL,$rs4);
	$SQL = "DELETE FROM vcc_employer WHERE EmployeeID = $EmployeeID";
	eqi($SQL,$rs5);
	$SQL = "DELETE FROM vcc_iemployee WHERE IEmployeeID = $EmployeeID";
	eqi($SQL,$rs6);
	
	return true;
}
function do_search($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	$String="";
	$total=0;
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
	
	if($R[search]!=NULL || $R[search]!="")
	{
		$SQLQuery = "SELECT EMP.IEmployeeID,EMPR.EmployerID,EMP.VCCCaseNumber,CONCAT(EMP.IFirstName,' ',EMP.ILastName) AS EmployeeName
					,EMP.IEmailAddress,EMPR.GIEmployer FROM vcc_iemployee EMP LEFT JOIN vcc_employer EMPR 
					ON EMP.IEmployeeID = EMPR.EmployeeID WHERE 
					(INSTR(EMP.IFirstName,'$R[search]') > 0)
					OR
					(INSTR(EMP.ILastName,'$R[search]') > 0)
					OR
					(INSTR(EMP.VCCCaseNumber,'$R[search]') > 0)
					ORDER BY EMP.IEmployeeID;";
		//echo $SQLQuery;
		$total = eqi($SQLQuery,$rs);
		if(intval($total)>0)
		{
			while($data=mfai($rs))
			{
				if(intval($_SESSION[IsAdmin])==1)
				{
					$String .= '<div class="row-fluid portfolio-block">
								<div class="span3 portfolio-text">
									<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
									<div class="portfolio-text-info">
										<h4>Employee Name</h4>
										<p>'.$data[EmployeeName].'</p>
									</div>
								</div>
								<div class="span5">
									<div class="portfolio-info">
										VCC CASE NUMBER
										<span>'.$data[VCCCaseNumber].'</span>
									</div>
									<div class="portfolio-info">
										EMPLOYER NAME
										<p>'.$data[GIEmployer].'</p>
									</div>
									<div class="portfolio-info">
										EMPLOYEE EMAIL ADDRESS
										<p>'.$data[IEmailAddress].'</p>
									</div>
								</div>
								<div class="span2 portfolio-btn">
									<a href="'.$SERVER_PATH.'View-Employee-Detail/'.$data[IEmployeeID].'" class="btn bigicn-only" ><span>View/Edit</span></a>							
								</div>
								<div class="span2 portfolio-btn">
									<a onClick="deleteRecord('.$data[IEmployeeID].',1);" class="btn bigicn-only"><span>Delete Record</span></a>							
								</div>
							</div>';
				}
				else
				{
					$String .= '<div class="row-fluid portfolio-block">
								<div class="span3 portfolio-text">
									<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
									<div class="portfolio-text-info">
										<h4>Employee Name</h4>
										<p>'.$data[EmployeeName].'</p>
									</div>
								</div>
								<div class="span7">
									<div class="portfolio-info">
										VCC CASE NUMBER
										<span>'.$data[VCCCaseNumber].'</span>
									</div>
									<div class="portfolio-info">
										EMPLOYER NAME
										<p>'.$data[GIEmployer].'</p>
									</div>
									<div class="portfolio-info">
										EMPLOYEE EMAIL ADDRESS
										<p>'.$data[IEmailAddress].'</p>
									</div>
								</div>
								<div class="span2 portfolio-btn">
									<a href="'.$SERVER_PATH.'View-Employee-Detail/'.$data[IEmployeeID].'" class="btn bigicn-only" ><span>View/Edit</span></a>							
								</div>
							</div>';
				}
			}
		}
		else
		{
			$String = '<div class="span10 portfolio-text">
							<div class="portfolio-text-info">
								<h4>No Record Found</h4>
							</div>
						</div>';
		}
	}
	echo $String;
}
function do_advancedSearch($msg="",$error_msg="")
{
    global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	$String="";
	$total=0;
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
	$Condition = search_condition($R[SearchID]);
	
	if($R[search]!=NULL || $R[search]!="")
	{
		$SQLQuery = "SELECT EMP.IEmployeeID,EMPR.EmployerID,EMP.VCCCaseNumber,CONCAT(EMP.IFirstName,' ',EMP.ILastName) AS EmployeeName
					,EMP.IEmailAddress,EMPR.GIEmployer 
					FROM vcc_iemployee EMP 
					LEFT JOIN vcc_employer EMPR ON EMP.IEmployeeID = EMPR.EmployeeID 
					LEFT JOIN vcc_npdetails NP ON EMP.IEmployeeID = NP.EmployeeID 
					WHERE 1 $Condition
					ORDER BY EMP.IEmployeeID;";
		//echo $SQLQuery;
		$total = eqi($SQLQuery,$rs);
		if(intval($total)>0)
		{
			while($data=mfai($rs))
			{
				if(intval($_SESSION[IsAdmin])==1)
				{
					$String .= '<div class="row-fluid portfolio-block">
								<div class="span3 portfolio-text">
									<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
									<div class="portfolio-text-info">
										<h4>Employee Name</h4>
										<p>'.$data[EmployeeName].'</p>
									</div>
								</div>
								<div class="span5">
									<div class="portfolio-info">
										VCC CASE NUMBER
										<span>'.$data[VCCCaseNumber].'</span>
									</div>
									<div class="portfolio-info">
										EMPLOYER NAME
										<p>'.$data[GIEmployer].'</p>
									</div>
									<div class="portfolio-info">
										EMPLOYEE EMAIL ADDRESS
										<p>'.$data[IEmailAddress].'</p>
									</div>
								</div>
								<div class="span2 portfolio-btn">
									<a href="'.$SERVER_PATH.'View-Employee-Detail/'.$data[IEmployeeID].'" class="btn bigicn-only" ><span>View/Edit</span></a>							
								</div>
								<div class="span2 portfolio-btn">
									<a onClick="deleteRecord('.$data[IEmployeeID].',2);" class="btn bigicn-only"><span>Delete Record</span></a>							
								</div>
							</div>';
				}
				else
				{
					$String .= '<div class="row-fluid portfolio-block">
								<div class="span3 portfolio-text">
									<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
									<div class="portfolio-text-info">
										<h4>Employee Name</h4>
										<p>'.$data[EmployeeName].'</p>
									</div>
								</div>
								<div class="span7">
									<div class="portfolio-info">
										VCC CASE NUMBER
										<span>'.$data[VCCCaseNumber].'</span>
									</div>
									<div class="portfolio-info">
										EMPLOYER NAME
										<p>'.$data[GIEmployer].'</p>
									</div>
									<div class="portfolio-info">
										EMPLOYEE EMAIL ADDRESS
										<p>'.$data[IEmailAddress].'</p>
									</div>
								</div>
								<div class="span2 portfolio-btn">
									<a href="'.$SERVER_PATH.'View-Employee-Detail/'.$data[IEmployeeID].'" class="btn bigicn-only" ><span>View/Edit</span></a>							
								</div>
							</div>';
				}
			}
		}
		else
		{
			$String = '<div class="span10 portfolio-text">
							<div class="portfolio-text-info">
								<h4>No Record Found</h4>
							</div>
						</div>';
		}
	}
	echo $String;
}

function search_condition($SearchID)
{
	global $SERVER_PATH,$SignIN;
    $R=DIN_ALL($_REQUEST);
	$Condition = "";
    if(($_SESSION['UserID']<=0 || $_SESSION['UserID']=="") && $_SESSION['http_agent']!=$_SERVER['HTTP_USER_AGENT'])
    {
        header("Location:".$SignIN);
        die();
    }
	else
	{
		if($SearchID!=NULL || $SearchID!="" || intval($SearchID)>0)
		{
			Switch($SearchID)
			{
				Case 1:
					$Condition = "AND (INSTR(EMP.IFirstName,'$R[search]') > 0) OR (INSTR(EMP.ILastName, '$R[search]') > 0)";
				break;
				Case 2:
					$Condition = "AND (INSTR(NP.JobCode,'$R[search]') > 0)";
				break;
				Case 3:
					$Condition = "AND (INSTR(EMPR.GIEmployer,'$R[search]') > 0)";
				break;
				Case 4:
					$Condition = "AND (INSTR(EMP.VCCCaseNumber,'$R[search]') > 0)";
				break;
				Case 5:
					$Condition = "AND (INSTR(EMP.VCCEmployeeCode,'$R[search]') > 0)";
				break;
				Case 6:
					$Condition = "AND (INSTR(EMP.ClaimNumber,'$R[search]') > 0)";
				break;
				Case 7:
					$Condition = "AND (INSTR(NP.NonProfit,'$R[search]') > 0)";
				break;
				default:
					$Condition = "AND (INSTR(EMP.IFirstName,'$R[search]') > 0) OR (INSTR(EMP.ILastName, '$R[search]') > 0)";
				break;
			}
		}
	}
	return $Condition;
}

?>