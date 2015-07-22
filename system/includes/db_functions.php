<?php

function func_add_update_employee($R,$EmployeeID,$IsAdmin)
{
    if(is_array($R[iLanguagesKnown]))
    {
        $LanguageSpoken = implode(",",$R[iLanguagesKnown]);
    }
    else
    {
        $LanguageSpoken = "";
    }
    $LonAndLat = curlGeoInformation($R[iAddress],$R[iCity],$R[iState]);
	get_row_con_info("vcc_iemployee","WHERE IEmployeeID=".$EmployeeID,"CloseDate",$Employee);
    if(intval($EmployeeID)==0 || $EmployeeID=="")
    {
        $SQL = "SELECT MAX(SUBSTRING(VCCCaseNumber,4,LENGTH(VCCCaseNumber)))+1 AS VCCCaseNumber FROM vcc_iemployee;";
        eqi($SQL,$rs);
        $OUTPUT = mfai($rs);
        if($OUTPUT['VCCCaseNumber']!= NULL)
        {
            $VCCCaseNumber = strval(date('y')."-".strval(str_pad($OUTPUT['VCCCaseNumber'], 5, '0', STR_PAD_LEFT)));
        }
        else
        {
            $VCCCaseNumber = strval(date('y')."-00001");
        }
        #########################------------------------- BEGIN INSERT INJURED EMPLOYEE DETAIL RECORD -----------------------------########################
        $SQLQuery = "INSERT INTO vcc_iemployee(
        `VCCCaseNumber`,
        `VCCEmployeeCode`,
        `IFirstName`,
        `ILastName`,
		`IAppartmentNumber`,
        `IAddress`,
        `IEmailAddress`,
        `IAge`,
        `IGender`,
        `IOccupation`,
        `IPhone`,
        `IMobile`,
        `ICity`,
        `IStateID`,
        `IZip`,
        `LanguagesSpoken`,
        `NPEarliestStartDate`,
        `InjuryDate`,
        `InjuryType`,
        `ClaimNumber`,
        `StateJuridiction`,
        `AWWRate`,
        `CompRate`,
        `ALDRateHourly`,
        `ALDRateWeekly`,
        `RestrictionDate`,
        `IPhysician`,
        `MedRestriction`,
        `NextDAppointment`,
        `PIWHoursWorked`,
        `TransportationIssue`,
        `TransIssueType`,
        `RefreralDate`,
        `ReOpenDate`,
        `PersonAssignedID`,
        `DateAssigned`,
        `PreCallDate`,
        `FollowUpDate`,
        `ILatitude`,
        `ILongitude`,
        `CloseDate`,
        `CreatedDate`)";
        $SQLQuery.=" VALUES('$VCCCaseNumber','$R[VCCEmployeeCode]','".htmlentities(ucfirst($R[iFirstName]))."','".htmlentities(ucfirst($R[iLastName]))."'"
							.",'".htmlentities(ucfirst($R[iAprtNum]))."','".htmlentities(ucfirst($R[iAddress]))."','$R[iEmail]'"
                            .",'$R[iAge]','$R[iGender]','$R[iOccupation]','$R[iPhone]','$R[iMobile]','".ucfirst($R[iCity])."'"
                            .",'$R[iState]','$R[iZip]','$LanguageSpoken'"
                            .",STR_TO_DATE('$R[npEarliestDate]','%m/%d/%Y'),STR_TO_DATE('$R[iDateOfInjury]','%m/%d/%Y')"
                            .",'".htmlentities($R[iInjuryType])."','$R[iClaimNumber]','$R[iStateJurd]','$R[npAWWRate]'"
                            .",'$R[npCompRate]','$R[npHourRateALD]','$R[npWeeklyALDRate]',STR_TO_DATE('$R[npDateOfRestriction]','%m/%d/%Y')"
                            .",'$R[npByPhysician]','$R[npMedicalRest]',STR_TO_DATE('$R[npNextDrApptDate]','%m/%d/%Y')"
                            .",'$R[iPreInjWeeklyHrsWorked]','$R[npTransIssues]','$R[npTransIssueType]'"
                            .",STR_TO_DATE('$R[npReferralDate]','%m/%d/%Y'),STR_TO_DATE('$R[npReOpenDate]','%m/%d/%Y')"
                            .",'$R[npPersonAssigned]',NOW(),STR_TO_DATE('$R[npPreCallDate]','%m/%d/%Y')"
                            .",STR_TO_DATE('$R[npFollowupDate]','%m/%d/%Y'),'".$LonAndLat[0]['lat']."','".$LonAndLat[0]['lon']."',"
                            ."STR_TO_DATE('$R[npCloseDate]','%m/%d/%Y'),NOW());";
        
        $EmployeeID=eii($SQLQuery);
        if(intval($EmployeeID)>0)
        {
            if(!intval($R[npPersonAssigned])>0)
            {
                $R[npPersonAssigned] = 14;
            }
            $noteQuery ="INSERT INTO vcc_notes(
						`InitialID`,
						`NoteDescription`,
						`EmployeeID`,
						`IsAdmin`,
						`CreatedDate`)
						 VALUES(
						(SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),'Employee has beed added',$EmployeeID,$IsAdmin,NOW());";
            eii($noteQuery);
            $subject = "New VCC Referral VCC Case # : ".$VCCCaseNumber;
            $message = "You have been assigned a new referral VCC Case # : ".$VCCCaseNumber." for Employee '".htmlentities(ucfirst($R[iLastName]))."','".htmlentities(ucfirst($R[iFirstName]))."'";
            send_mail_new("VCC MANAGEMENT","management@varnerclaimsconsulting.com","VARNER CLAIMS CONSULTING","VCCDB@varnercc.com",$subject,$message,"","","","baltincsoft@gmail.com");
        }
    }
    else if(intval($EmployeeID)>0) 
    {
        $UPDATESQLCOMMAND = "UPDATE vcc_iemployee SET
        `VCCCaseNumber` = '$R[VCCCaseNumber]',
        `VCCEmployeeCode` = '$R[VCCEmployeeCode]',
        `IFirstName` = '".htmlentities(ucfirst($R[iFirstName]))."',
        `ILastName` = '".htmlentities(ucfirst($R[iLastName]))."',
		`IAppartmentNumber` = '".htmlentities(ucfirst($R[iAprtNum]))."',
        `IAddress`='".htmlentities(ucfirst($R[iAddress]))."',
        `IEmailAddress`= '$R[iEmail]',
        `IAge` = '$R[iAge]',
        `IGender` = '$R[iGender]',
        `IOccupation` = '$R[iOccupation]',
        `IPhone` = '$R[iPhone]',
        `IMobile` = '$R[iMobile]',
        `ICity` = '".htmlentities(ucfirst($R[iCity]))."',
        `IStateID` = '$R[iState]',
        `IZip` = '$R[iZip]',
        `LanguagesSpoken` = '$LanguageSpoken',
        `NPEarliestStartDate` = STR_TO_DATE('$R[npEarliestDate]','%m/%d/%Y'),
        `InjuryDate` = STR_TO_DATE('$R[iDateOfInjury]','%m/%d/%Y'),
        `InjuryType` = '".htmlentities($R[iInjuryType])."',
        `ClaimNumber` = '$R[iClaimNumber]',
        `StateJuridiction` = '$R[iStateJurd]',
        `AWWRate` = '$R[npAWWRate]',
        `CompRate` = '$R[npCompRate]',
        `ALDRateHourly` = '$R[npHourRateALD]',
        `ALDRateWeekly` = '$R[npWeeklyALDRate]',
        `RestrictionDate` = STR_TO_DATE('$R[npDateOfRestriction]','%m/%d/%Y'),
        `IPhysician` = '$R[npByPhysician]',
        `MedRestriction` = '$R[npMedicalRest]',
        `NextDAppointment` = STR_TO_DATE('$R[npNextDrApptDate]','%m/%d/%Y'),
        `PIWHoursWorked` = '$R[iPreInjWeeklyHrsWorked]',
        `TransportationIssue` = '$R[npTransIssues]',
        `TransIssueType` = '$R[npTransIssueType]',
        `RefreralDate` = STR_TO_DATE('$R[npReferralDate]','%m/%d/%Y'),
        `ReOpenDate` = STR_TO_DATE('$R[npReOpenDate]','%m/%d/%Y'),
        `PersonAssignedID` = '$R[npPersonAssigned]',
        `DateAssigned` = NOW(),
        `PreCallDate` = STR_TO_DATE('$R[npPreCallDate]','%m/%d/%Y'),
        `FollowUpDate` = STR_TO_DATE('$R[npFollowupDate]','%m/%d/%Y'),
        `ILatitude`='".$LonAndLat[0]['lat']."',
        `ILongitude`='".$LonAndLat[0]['lon']."',
        `CloseDate` = STR_TO_DATE('$R[npCloseDate]','%m/%d/%Y'),
        `LastUpdatedDate` = NOW()
        WHERE IEmployeeID = $EmployeeID;";
        
        eqi($UPDATESQLCOMMAND,$rs);
    }
	
	if($EmployeeID>0)
	{
		$EarlierDate = DateTime :: createFromFormat('Y-m-d',$Employee[CloseDate]);
		$LatestDate = DateTime :: createFromFormat('m/d/Y',$R[npCloseDate]);
		if($R[npCloseDate]!="" AND $EarlierDate<$LatestDate)
		{
			$noteQuery = "INSERT INTO vcc_notes(
						`InitialID`,
						`NoteDescription`,
						`EmployeeID`,
						`CreatedDate`)
						 VALUES(
						 (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),
						 'Case Closed.',$EmployeeID,NOW());";	 
			eii($noteQuery);
		}
	}
    return $EmployeeID;
}

function func_add_update_employer($R,$EmployeeID)
{
	if(!is_numeric($R[eR_Employer]))
	{
		$SQL = "INSERT INTO `vcc_reserverdemployerlist`(
		`ReferralSource`,
		`Employer`,
		`PlacementFee`,
		`PlacementFee2`,
		`PlacementFee3`,
		`EmpFirstName`,
		`EmpLastName`,
		`EmpAddress`,
		`EmpCity`,
		`StateID`,
		`EmpZip`,
		`EmpPhone`,
		`EmpPhoneExt`,
		`FaxNumber`,
		`EmpEmail`,
		`ReferralSourceFirst`,
		`ReferralSourceLast`,
		`EmailAlert1`,
		`EmailAlert2`,
		`EmailAlert3`,
		`ClaimAdjFirst`,
		`ClaimAdjLast`,
		`ClaimAdjEmail`,
		`ClaimAdjPhone`,
		`ClaimAdjPhoneExt`,
		`CreatedDate`,
		`LastUpdatedDate`)";
		$SQL.="VALUES('".htmlentities($R[eR_RefferalSource])."','$R[eR_Employer]','$R[PlacementFee]','$R[PlacementFee2]','$R[PlacementFee3]'"
						.",'".htmlentities($R[eR_FirstName])."','".htmlentities($R[eR_LastName])."','".htmlentities($R[eR_Address])."'"
						.",'$R[eR_City]','$R[eR_State]','$R[eR_Zip]','$R[eR_BusinessPhone]','$R[eR_Extension]','$R[eR_FaxNumber]','$R[eR_Email]'"
						.",'".htmlentities($R[eR_SFirstName])."','".htmlentities($R[eR_SLastName])."','$R[eR_SEmailAlert1]','$R[eR_SEmailAlert2]'"
						.",'$R[eR_SEmailAlert3]','".htmlentities($R[eR_CAFirstName])."','".htmlentities($R[eR_CALastName])."','$R[eR_CAEmail]'"
						.",'$R[eR_CAPhone]','$R[eR_CAExtension]',NOW(),NOW());";
		
		$R[eR_Employer] = eii($SQL);
	}
	
    #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
    $Query = "SELECT EmployerID FROM vcc_employer WHERE EmployeeID=".$EmployeeID.";";
    eqi($Query,$rs);
    $Output = mfai($rs);
    if(intval($Output['EmployerID'])<=0 || $Output['EmployerID']==NULL)
    {
        $SQLQuery = "INSERT INTO vcc_employer(
        `GIEReferralSource`,
        `GIEmployer`,
        `GIPlacementFee`,
        `GISecondPlacementFee`,
        `GIThirdPlacementFee`,
        `GIFirstName`,
        `GILastName`,
        `GIAddress`,
        `GICity`,
        `GIStateID`,
        `GIZip`,
        `GIBusinessPhone`,
        `GIExtension`,
        `GIFax`,
        `GIEmail`,
        `RSCFirstName`,
        `RSCLastName`,
        `RSCEAlert1`,
        `RSCEAlert2`,
        `RSCEAlert3`,
        `CAFirstName`,
        `CALastName`,
        `CAEmail`,
        `CAPhone`,
        `CAExtension`,
        `EmployeeID`,
        `CreateDate`) ";
        $SQLQuery.="VALUES('".htmlentities($R[eR_RefferalSource])."','$R[eR_Employer]','$R[PlacementFee]','$R[PlacementFee2]','$R[PlacementFee3]'"
                           .",'".htmlentities($R[eR_FirstName])."','".htmlentities($R[eR_LastName])."','".htmlentities($R[eR_Address])."'"
                           .",'$R[eR_City]','$R[eR_State]','$R[eR_Zip]','$R[eR_BusinessPhone]','$R[eR_Extension]','$R[eR_FaxNumber]','$R[eR_Email]'"
                           .",'".htmlentities($R[eR_SFirstName])."','$R[eR_SLastName]','$R[eR_SEmailAlert1]','$R[eR_SEmailAlert2]'"
                           .",'$R[eR_SEmailAlert3]','".htmlentities($R[eR_CAFirstName])."','".htmlentities($R[eR_CALastName])."','$R[eR_CAEmail]','$R[eR_CAPhone]','$R[eR_CAExtension]',$EmployeeID,NOW());";
        
        $EmployerID = eii($SQLQuery);
    }
    else if(intval($Output['EmployerID'])>0) 
    {
        $UPDATESQLCOMMAND = "UPDATE vcc_employer SET
        `GIEReferralSource`= '".htmlentities($R[eR_RefferalSource])."',
        `GIEmployer` = '$R[eR_Employer]',
        `GIPlacementFee` = '$R[PlacementFee]',
        `GISecondPlacementFee` = '$R[PlacementFee2]',
        `GIThirdPlacementFee` = '$R[PlacementFee3]',
        `GIFirstName` = '".htmlentities($R[eR_FirstName])."',
        `GILastName` = '".htmlentities($R[eR_LastName])."',
        `GIAddress` = '".htmlentities($R[eR_Address])."',
        `GICity` = '".htmlentities($R[eR_City])."',
        `GIStateID` = '$R[eR_State]',
        `GIZip` = '$R[eR_Zip]',
        `GIBusinessPhone` = '$R[eR_BusinessPhone]',
        `GIExtension` = '$R[eR_Extension]',
        `GIFax` = '$R[eR_FaxNumber]',
        `GIEmail` = '$R[eR_Email]',
        `RSCFirstName` = '".htmlentities($R[eR_SFirstName])."',
        `RSCLastName` = '".htmlentities($R[eR_SLastName])."',
        `RSCEAlert1` = '$R[eR_SEmailAlert1]',
        `RSCEAlert2` = '$R[eR_SEmailAlert2]',
        `RSCEAlert3` = '$R[eR_SEmailAlert3]',
        `CAFirstName` = '$R[eR_CAFirstName]',
        `CALastName` = '$R[eR_CALastName]',
        `CAEmail` = '$R[eR_CAEmail]',
        `CAPhone` = '$R[eR_CAPhone]',
        `CAExtension` = '$R[eR_CAExtension]',
        `EmployeeID` = $EmployeeID,
        `LastUpdatedDate` = NOW()
         WHERE EmployerID = $Output[EmployerID];";

        $EmployerID = eqi($UPDATESQLCOMMAND,$rs);
    }
    return $EmployerID;
}

function func_add_update_npdetails($R,$EmployeeID)
{
    $NPDetailID=0;
    if(!is_numeric($R[npNonProfit]))
    {
        $R[npNonProfit] = func_add_new_npdetails($R);
    }
    #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
    $Query = "SELECT NPDetailID FROM vcc_npdetails WHERE EmployeeID=".$EmployeeID.";";
    eqi($Query,$rs);
    $Output = mfai($rs);
    if(intval($Output['NPDetailID'])<=0 || $Output['NPDetailID']==NULL)
    {
        $SQLQuery = "INSERT INTO vcc_npdetails(
        `JobCode`,
        `NonProfit`,
        `DoNotCall`,
        `NPPCFirstName`,
        `NPPCLastName`,
        `NPPCAddress`,
        `NPPCCity`,
        `NPPCState`,
        `NPPCZip`,
        `NPPCPhone`,
        `NPPCExtension`,
        `NPPCFax`,
        `NPPCEmail`,
        `NPSCFirstName`,
        `NPSCLastName`,
        `NPSCPhone`,
        `NPSCExtension`,
        `NPSCEmail`,
        `NPReportTo`,
        `NPReportTitle`,
        `NPDressCode`,
        `NPPDate`,
        `NPRDate`,
        `NPReportTime`,
        `NPActStartDate`,
        `NPProjStartDate`,
        `NPLastDateWorked`,
        `NPWorkSchedule1`,
        `NPWorkSchedule2`,
        `NPWorkSchedule3`,
        `NPLocation2Name`,
        `NPLocation2Address`,
        `NPTotalWeeklyHours`,
        `NPStatus`,
		`NPStatusDate`,
		`NPRTWDate`,
        `NPTotalHoursWorked`,
        `NPTotalDaysWorked`,
        `NPDescription`,
        `NPAddnInstructions`,
        `NPJobTask`,
		`NPJobTask2`,
        `EmployeeID`,
        `CreatedDate`)";
        $SQLQuery.=" VALUES('$R[npJobCode]','$R[npNonProfit]','$R[npDndCall]','".htmlentities($R[nppcFirstName])."'".",'".htmlentities($R[nppcLastName])."'"
                    .",'".htmlentities($R[nppcAddress])."','$R[nppcCity]','$R[nppcState]','$R[nppcZip]','$R[nppcPhone]'"
                    .",'$R[nppcExtension]','$R[nppcFax]','$R[nppcEmail]','".htmlentities($R[npscFirstName])."','$R[npscLastName]','$R[sPhone]'"
                    .",'$R[sExtension]','$R[sEmail]','$R[npReportTo]','$R[npTitle]','$R[npDressCode]',STR_TO_DATE('$R[placementDate]','%m/%d/%Y'),"
                    ."STR_TO_DATE('$R[reportDate]','%m/%d/%Y'),'".date('H:i:s', strtotime("$R[reportTime]"))."',STR_TO_DATE('$R[startDate]','%m/%d/%Y'),"
                    ."STR_TO_DATE('$R[reStartDate]','%m/%d/%Y'),STR_TO_DATE('$R[npLastWorkedDate]','%m/%d/%Y'),'$R[npwsWorkSchedule1]'"
                    .",'$R[npwsWorkSchedule2]','$R[npwsWorkSchedule3]','".htmlentities($R[np2Name])."','".htmlentities($R[np2AddrComb])."'"
                    .",'$R[npwsTotalWeeklyHours]','$R[npwsStatus]',STR_TO_DATE('$R[npOutcomeDate]','%m/%d/%Y'),STR_TO_DATE('$R[npRtwDate]','%m/%d/%Y')"
					.",'$R[npwsTHW]','$R[npwsTDW]','$R[npDescription]','$R[npAddnInst]'"
                    .",'$R[npJobTask]','$R[npJobTask2]',$EmployeeID,NOW());";
        
        $NPDetailID = eii($SQLQuery);
    }
    else if(intval($Output['NPDetailID'])>0) 
    {
        $UPDATESQLCOMMAND = "UPDATE vcc_npdetails SET
        `JobCode`='$R[npJobCode]',
        `NonProfit`='$R[npNonProfit]',
        `DoNotCall`='$R[npDndCall]',
        `NPPCFirstName`='".htmlentities($R[nppcFirstName])."',
        `NPPCLastName`='".htmlentities($R[nppcLastName])."',
        `NPPCAddress`='".htmlentities($R[nppcAddress])."',
        `NPPCCity`='$R[nppcCity]',
        `NPPCState`='$R[nppcState]',
        `NPPCZip`='$R[nppcZip]',
        `NPPCPhone`='$R[nppcPhone]',
        `NPPCExtension`='$R[nppcExtension]',
        `NPPCFax`='$R[nppcFax]',
        `NPPCEmail`='$R[nppcEmail]',
        `NPSCFirstName`='".htmlentities($R[npscFirstName])."',
        `NPSCLastName`='$R[npscLastName]',
        `NPSCPhone`='$R[sPhone]',
        `NPSCExtension`='$R[sExtension]',
        `NPSCEmail`='$R[sEmail]',
        `NPReportTo`='$R[npReportTo]',
        `NPReportTitle`='$R[npTitle]',
        `NPDressCode`='$R[npDressCode]',
        `NPPDate`= STR_TO_DATE('$R[placementDate]','%m/%d/%Y'),
        `NPRDate`= STR_TO_DATE('$R[reportDate]','%m/%d/%Y'),
        `NPReportTime`='".date('H:i:s', strtotime("$R[reportTime]"))."',
        `NPActStartDate`= STR_TO_DATE('$R[startDate]','%m/%d/%Y'),
        `NPProjStartDate`= STR_TO_DATE('$R[reStartDate]','%m/%d/%Y'),
        `NPLastDateWorked`= STR_TO_DATE('$R[npLastWorkedDate]','%m/%d/%Y'),
        `NPWorkSchedule1`='$R[npwsWorkSchedule1]',
        `NPWorkSchedule2`='$R[npwsWorkSchedule2]',
        `NPWorkSchedule3`='$R[npwsWorkSchedule3]',
        `NPLocation2Name`='".htmlentities($R[np2Name])."',
        `NPLocation2Address`='".htmlentities($R[np2AddrComb])."',
        `NPTotalWeeklyHours`='$R[npwsTotalWeeklyHours]',
        `NPStatus`='$R[npwsStatus]',
		`NPStatusDate`=STR_TO_DATE('$R[npOutcomeDate]','%m/%d/%Y'),
		`NPRTWDate`=STR_TO_DATE('$R[npRtwDate]','%m/%d/%Y'), 
        `NPTotalHoursWorked`='$R[npwsTHW]',
        `NPTotalDaysWorked`='$R[npwsTDW]',
        `NPDescription`='$R[npDescription]',
        `NPAddnInstructions`='$R[npAddnInst]',
        `NPJobTask`='$R[npJobTask]',
		`NPJobTask2`='$R[npJobTask2]',
        `EmployeeID`=$EmployeeID,
        `LastUpdatedDate` = NOW()
         WHERE NPDetailID = $Output[NPDetailID];";

        $NPDetailID = eqi($UPDATESQLCOMMAND,$rs);
    }
    return $NPDetailID;
}

function func_add_update_legaldetails($R,$EmployeeID)
{
    #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
    $Query = "SELECT LegalDetailID FROM vcc_legaldetails WHERE EmployeeID=".$EmployeeID.";";
    eqi($Query,$rs);
    $Output = mfai($rs);
    if(intval($Output['LegalDetailID'])<=0 || $Output['LegalDetailID']==NULL)
    {
        $SQLQuery = "INSERT INTO vcc_legaldetails(
	`IEALawFirmName`,
	`IEAFirstName`,
	`IEALastName`,
	`IEAAddress`,
	`IEACity`,
	`IEAState`,
	`IEAZip`,
	`IEABusinessPhone`,
	`IEAExtension`,
	`IEAFaxNumber`,
	`IEAEmailAddress`,
	`DALawFirmName`,
	`DAFirstName`,
	`DALastName`,
	`DAAddress`,
	`DACity`,
	`DAState`,
	`DAZip`,
	`DABusinessPhone`,
	`DAExtension`,
	`DAFaxNumber`,
	`DAEmailAddress`,
	`EmployeeID`,
	`CreatedDate`) ";
        $SQLQuery.="VALUES('".htmlentities($R[IELawFirmName])."','".htmlentities($R[IEFirstName])."','".htmlentities($R[IELastName])."'"
                    .",'".htmlentities($R[IEAddress])."','$R[IECity]','$R[IEState]','$R[IEZip]','$R[IEPhone]','$R[IEExtension]','$R[IEFax]'"
                    .",'$R[IEMail]','".htmlentities($R[DALawFirmName])."','".htmlentities($R[DAFirstName])."','".htmlentities($R[DALastName])."'"
                    .",'".htmlentities($R[DAAddress])."','$R[DACity]',$R[DAState],'$R[DAZip]','$R[DAPhone]'"
                    .",'$R[DAExtansion]','$R[DAFax]','$R[DAEmail]',$EmployeeID,NOW());";
        
        $LegalDetailID = eii($SQLQuery);
    }
    else if(intval($Output['LegalDetailID'])>0) 
    {
        $UPDATESQLCOMMAND = "UPDATE vcc_legaldetails SET
	`IEALawFirmName`='".htmlentities($R[IELawFirmName])."',
	`IEAFirstName`='".htmlentities($R[IEFirstName])."',
	`IEALastName`='".htmlentities($R[IELastName])."',
	`IEAAddress`='".htmlentities($R[IEAddress])."',
	`IEACity`='$R[IECity]',
	`IEAState`='$R[IEState]',
	`IEAZip`='$R[IEZip]',
	`IEABusinessPhone`='$R[IEPhone]',
	`IEAExtension`='$R[IEExtension]',
	`IEAFaxNumber`='$R[IEFax]',
	`IEAEmailAddress`='$R[IEMail]',
	`DALawFirmName`='".htmlentities($R[DALawFirmName])."',
	`DAFirstName`='".htmlentities($R[DAFirstName])."',
	`DALastName`='".htmlentities($R[DALastName])."',
	`DAAddress`='".htmlentities($R[DAAddress])."',
	`DACity`='$R[DACity]',
	`DAState`='$R[DAState]',
	`DAZip`='$R[DAZip]',
	`DABusinessPhone`='$R[DAPhone]',
	`DAExtension`='$R[DAExtansion]',
	`DAFaxNumber`='$R[DAFax]',
	`DAEmailAddress`='$R[DAEmail]',
	`EmployeeID`= $EmployeeID,
        `LastUpdatedDate` = NOW()
         WHERE LegalDetailID = $Output[LegalDetailID];";

        $LegalDetailID = eqi($UPDATESQLCOMMAND,$rs);
    }
    return $LegalDetailID;
}

function func_add_update_addndetails($R,$EmployeeID)
{
    $DetailID=0;
    #################------------------------- BEGIN INSERT LEGAL DETAIL RECORD -----------------------------####################
    $Query = "SELECT DetailID FROM vcc_addndetails WHERE EmployeeID=".$EmployeeID.";";
    eqi($Query,$rs);
    $Output = mfai($rs);
	
    if(intval($Output['DetailID'])<=0 || $Output['DetailID']==NULL)
    {
        $SQLQuery = "INSERT INTO vcc_addndetails(
		`ADDropOffDate`,
		`ADShippingVendor`,
		`ADTrackingNumber`,
		`ADDateDelivered`,
		`ADDeliveredTime`,
		`ADUndeliverable`,
		`ADReason`,
		`ADFU_QTNP`,
		`ADFU_QTE`,
		`ADFU_SOC`,
		`ADFU_QTNP_Date`,
		`ADFU_QTE_Date`,
		`ADFU_SOC_Date`,
		`EmployeeID`,
		`CreatedDate`) ";
        $SQLQuery.="VALUES(STR_TO_DATE('$R[aDropOffDate]','%m/%d/%Y'),'".htmlentities($R[aShippingVendor])."','".htmlentities($R[aTrackingNumber])."'"
                .",STR_TO_DATE('$R[aDateDelievered]','%m/%d/%Y'),'$R[aTimeDelievered]','$R[aUnbeliverable]'"
                .",'".htmlentities($R[aReason])."','$R[aquesNP]','$R[aQuesEmp]','$R[aQA]'"
                .",STR_TO_DATE('$R[aquesNPDate]','%m/%d/%Y'),STR_TO_DATE('$R[aQuesEmpDate]','%m/%d/%Y')"
                .",STR_TO_DATE('$R[aQADate]','%m/%d/%Y'),$EmployeeID,NOW());";
        
        $DetailID = eii($SQLQuery);
    }
    else if(intval($Output['DetailID'])>0) 
    {
        $UPDATESQLCOMMAND = "UPDATE vcc_addndetails SET
		`ADDropOffDate`=STR_TO_DATE('$R[aDropOffDate]','%m/%d/%Y'),
		`ADShippingVendor`='".htmlentities($R[aShippingVendor])."',
		`ADTrackingNumber`='".htmlentities($R[aTrackingNumber])."',
		`ADDateDelivered`=STR_TO_DATE('$R[aDateDelievered]','%m/%d/%Y'),
		`ADDeliveredTime`='$R[aTimeDelievered]',
		`ADUndeliverable`='$R[aUnbeliverable]',
		`ADReason`='".htmlentities($R[aReason])."',
		`ADFU_QTNP`='$R[aquesNP]',
		`ADFU_QTE`='$R[aQuesEmp]',
		`ADFU_SOC`='$R[aQA]',
		`ADFU_QTNP_Date`=STR_TO_DATE('$R[aquesNPDate]','%m/%d/%Y'),
		`ADFU_QTE_Date`=STR_TO_DATE('$R[aQuesEmpDate]','%m/%d/%Y'),
		`ADFU_SOC_Date`=STR_TO_DATE('$R[aQADate]','%m/%d/%Y'),
		`EmployeeID`= $EmployeeID,
        `LastUpdatedDate` = NOW()
        WHERE DetailID = $Output[DetailID];";
        
        $DetailID = eqi($UPDATESQLCOMMAND,$rs);
    }
	if($DetailID>0 AND $EmployeeID>0)
	{
		if(($R[aQA]==true || $R[aQA]==1) AND $R[aQADate]!="" AND $R[aQADate]<= date('m/d/Y') )
		{
			$noteQuery = "INSERT INTO vcc_notes(
						`InitialID`,
						`NoteDescription`,
						`EmployeeID`,
						`CreatedDate`)
						 VALUES(
						 (SELECT InitialID FROM vcc_initials WHERE LoginID=$_SESSION[UserID]),
						 'QA Completed.',$EmployeeID,NOW());";
			eii($noteQuery);
		}
	}
    return $DetailID;
}

function func_add_new_npdetails($R)
{
    $LonAndLat = curlGeoInformation($R[nppcAddress],$R[nppcCity],$R[nppcState]);
    $SQL = "INSERT INTO `nonprofit`("
            ."`NPjobCode`,`NonProfit`,`doNotCall`,`NPFirst`,`NPLast`,`NPAddress`,"
            ."`NPCity`,`NPState`,`NPZip`,`latitude`,`longitude`,`NPPhone`,`NPPhoneExt`,`NPFax`,`NPEmail`,"
            ."`NPsecondayrFirst`,`NPsecondaryLast`,`NPsecondaryPhone`,`NPsecondaryExt`,`NPsecondaryEmail`,"
            ."`schedule1`,`schedule2`,`schedule3`,`np2Name`,`np2CompAddress`,`totalWeeklyHours`,`dressCode`,"
            ."`NPdescription`,`NPaddInfo`,`status`) ";
    $SQL.=" VALUES('$R[npJobCode]','$R[npNonProfit]','$R[npDndCall]','".htmlentities($R[nppcFirstName])."',"
            ."'".htmlentities($R[nppcLastName])."','".htmlentities($R[nppcAddress])."','$R[nppcCity]','$R[nppcState]',"
            ."'$R[nppcZip]','".$LonAndLat[0]['lat']."','".$LonAndLat[0]['lon']."','$R[nppcPhone]','$R[nppcExtension]',"
            ."'$R[nppcFax]','$R[nppcEmail]','".htmlentities($R[npscFirstName])."','".htmlentities($R[npscLastName])."',"
            ."'$R[sPhone]','$R[sExtension]','$R[sEmail]','$R[npwsWorkSchedule1]','$R[npwsWorkSchedule2]',"
            ."'$R[npwsWorkSchedule3]','".htmlentities($R[np2Name])."','".htmlentities($R[np2AddrComb])."',"
            ."'$R[npwsTotalWeeklyHours]','$R[npDressCode]','$R[npDescription]','$R[npAddnInst]','$R[npwsStatus]');";
    return $NonProfitID = eii($SQL);
}
?>