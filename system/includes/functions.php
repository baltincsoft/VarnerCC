<?php
####################################################

function valid_inputs($data)
{
    if($data['username']=="" || $data['email']=="" || $data['password']=="" || $data['rpassword']=="")
    {
        return false;
    }
    else if($data['password'] != $data['rpassword'])
    {
        return false;
    }
    return true;
}

function fe($fnm)
{
    global $func_ary;
    return in_array($fnm,$func_ary);
}

function get_new_option_list($table,$id_col,$val_col,$sel_id,&$option,$show_all=0,$con="",$show_select=1,$select_option=' ----- PLEASE SELECT ----- ')
{
    $SQL = "SELECT * FROM $table $con ";
    $tot = eqi($SQL,$rs);
    $ss=0;
    if($tot>0)
    {
        while($data = mfai($rs))
        {
            if($data[$id_col]==$sel_id){$sel="selected";$ss=1;}
            $option.="<option value=\"$data[$id_col]\" $sel>$data[$val_col]</option>";
            $sel="";
        }
        $sel="";
        if($ss==0 and $show_all==1)
        {
            $sel="selected";
            $ss=1;
        }
        if($show_all==1)
        {
            $option="<option value=\"\"$sel>".All."</option>".$option;
        }
        if($show_all==2)
        {
            $option="<option value=\"0\" selected>".$select_option."</option>".$option;
        }
        else if ($ss==0 AND $show_select==1)
        {
            $option="<option value=\"0\" selected>".$select_option."</option>".$option;
        }
    }
    else 
    {
        $option="<option value=\"0\" selected>"." -------- BLANK -------- "."</option>".$option;
    }
}

function get_array_list($table,$val_col,$con="",&$data)
{
    $SQL = "SELECT $val_col FROM $table $con LIMIT 0,1";
    eqi($SQL,$rs);
    $data = mfai($rs);
}

function get_new_option_multi_list($table,$id_col,$val_col,$val_col2,$sel_id,&$option,$con="",$show_select=1,$select_option='Please Select')
{
    $SQL = "SELECT * FROM $table $con ";
    eqi($SQL,$rs);
    $ss=0; 
    while($data = mfai($rs))
    {
        if($data[$id_col]==$sel_id)
        {
                $sel="selected";
                $ss=1;
        }
        $option.="<option value=\"$data[$id_col]\" $sel>".$data[$val_col]."-".$data[$val_col2]."</option>";
        $sel="";
    }
	
    if($ss==0 AND $show_select==1)
    {
        $option="<option value=\"0\" selected>".$select_option."</option>".$option;
    }
}

###################################
function DIN_ALL($ary)
{
	if(is_array($ary))
	{
		if(count($ary))
		{
			foreach($ary as $k=>$v)
			{
				$ary[$k]=DIN($v);
			}
		}
		return $ary;
	}
}
#################################
//for storage to database
function DIN($input)
{ 
    global $conni;
    if(is_array($input))
    {
        return DIN_ALL($input);
    }
    $input = trim($input); 
    if(!get_magic_quotes_gpc())
    { 		
        return mysqli_real_escape_string($conni,htmlentities($input));
    }
    return mysqli_real_escape_string($conni,htmlentities($input));
}
###################################
function get_value_ary($table,$col,$con="",$is_print=0)
{
    $ary=array();
    if($col=="" OR $col==NULL)
    {
        $col="*";
    }
    
    $SQL = "SELECT $col FROM $table $con";
    eqi($SQL,$rs,$is_print);
    while($data=mfai($rs))
    {
	array_push($ary,$data[$col]);
    }
    return $ary;
}
###################################
function get_value_ary_distinct($table,$col,$con="")
{
    $ary=array();
    $SQL = "SELECT DISTINCT($col) FROM $table $con";
    eqi($SQL,$rs);
    while($data=mfai($rs))
    {
		array_push($ary,$data[$col]);
    }
    return $ary;
}

function get_row_con_info($tab_name,$con,$cols,&$row,$show_err=1,$print_sql=0)
{
    if($cols=="")
    {
        $cols="*";
    }
    $SQL = "SELECT $cols FROM $tab_name $con ";
    if($print_sql==1)
    {
        print "$SQL<br>";
    }
    eqi($SQL,$rs);
    if($rs)
    {
        $row=mfai($rs);
        return mysqli_num_rows($rs);
    }
    return 0;
}

#####################################################
function make_round($num)
{
    return @number_format($num,2,".",",");
}
#################################
function DOUT($output,$use_hsc=0)
{ 
    $output = @ltrim($output); 
    $output=@htmlspecialchars_decode($output);
    if($use_hsc)
    {
        $output=@htmlspecialchars(stripslashes($output));
    }
    else
    {
        $output=@stripslashes($output);
    }
    return $output;
}
#################################
function DOUT_ALL($output,$use_hsc=0)
{
    if($output)
    {
	foreach($output as $k=>$v)
	{
	    $output[$k]=DOUT($v,$use_hsc);
	}
    }
    return $output; 
}

#################################
function get_row_count($tab_name,$con,$print=0)
{
    $SQL = "SELECT count(*) FROM $tab_name $con";
    if($print==1)
    {
		print $SQL."<br>";
    }
    $count=eqi($SQL,$rs);
    if($rs)
    {
        if(intval($count)>0)
        {
            return $count;
        }
        return 0;
    }
    return 0;
}
#######################################
#displays the message and then die :-0
function kill($msg)
{
    die("<center><h3>$msg</h3></center>");
}

function eqi($Sql,&$rs,$print=0)
{
    global $conni;
    if($print==1)
    {
	print $sql."<br>";
    } 
    $rs=mysqli_query($conni,$Sql);
    $rows=mysqli_affected_rows($conni);
    if(mysqli_error($conni)!='')
    {
	error_page(mysqli_error($conni),"Database Error");
	die();
    }
    //$rs->free_result;
    //$conni->next_result();
    return $rows;
}

function eii($sql,$print=0)
{
    if($print==1)
    {
	print $sql."<br>";
    }
    global $conni;
    mysqli_query($conni,$sql);
    $id=  mysqli_insert_id($conni);
    if(mysqli_error($conni)!='')
    {
        error_page(mysqli_error($conni),"Database Error");
        die();
    }	
    return $id;
}

function mfai($rs)
{
    $data=mysqli_fetch_assoc($rs);
    return DOUT_ALL($data);
}
######################################################
function nr($rs)
{
    return mysqli_num_rows($rs);
}
#################################
function get_row_info($tab_name,$col,$row_id,&$row,$show_err=1)
{
    global $conni;
    $SQL = "SELECT * FROM $tab_name where $col='$row_id'";
#    print $SQL."<br>";
    $rs=mysqli_query($SQL) or die($SQL);
    if(mysqli_error($conni)!='')
    {
        error_page(mysqli_error($conni),"Database Error");
        die();
    }	
    if(mysqli_num_rows($rs)==0 and $show_err==1)
    {
        kill("Invalid Row id Id#$row_id for table $tab_name");
    }
    $row=mysqli_fetch_assoc($rs);
    return mysqli_num_rows($rs);
}
################################################
function grc($tab_name,$con,$print=0)
{
    return get_row_count($tab_name,$con,$print);
}

################################################################
function get_my_option_list($table,$id_col,$val_col1,$val_col2,$sel_id,&$option,$show_all=0,$con="",$show_select=1,$show_None=0)
{
    $SQL = "SELECT * FROM $table $con";
    eqi($SQL,$rs);	
    $ss=0;
    while($data = mfai($rs))
    {
        if($data[$id_col]==$sel_id)
        {
            $sel="selected";
            $ss=1;
        }
        $option.="<option value=\"$data[$id_col]\" $sel>$data[$val_col1] $data[$val_col2]</option>";
        $sel="";
    }
    $sel="";
    if($ss==0 AND $show_all==1)
    {
        $sel="selected";
        $ss=1;
    }
    if($show_all==1)
    {
        $option="<option value=\"-2\"$sel>".All."</option>".$option;
    }
    if ($ss==0 AND $show_select==1)
    {
        $option="<option value=\"-1\" selected>Please Select</option>".$option;
    }
	if($ss==0 AND $show_None==1)
	{
		$option="<option value=\"0\" selected>None</option>".$option;
	}
}

function remove_dollar_sign($data)
{
    foreach($data as $index=>$fl)
    {
        if($fl!='')
        {
            $fl=trim($fl);
            if(substr($fl,0,1)=='$')
            {
                $data[$index]=substr($fl,1,strlen($fl)-1);
            }
        }
    }	
    return $data;
}

function error_page($error_msg='',$title='Page Not Found')
{
    global $SERVER_PATH,$MAIN_PATH;
    $R=DIN_ALL($_REQUEST);

    if($_REQUEST[fatal]) 
    {
        $title="Fatal Error";
        $error_msg=$_REQUEST[fatal];
    }

    $smarty= new Smarty;
    $smarty->assign(array("msg"=>$msg,"LoginID"=>$_SESSION['UserID'],"error_msg"=>$error_msg,"title"=>$title,
                          "SERVER_ACTUAL_PATH"=>$SERVER_PATH));

    /*if($title!='Page Not Found')					 
    {
        global $SiteName;
        send_mail_new("Bhavneet","baltincsoft@gmail.com",$SiteName,"","Error in Cron: $title ",$error_msg);						 
    }*/
    $smarty->display($MAIN_PATH.'templates/error-404.tpl');
}
function catchFatalErrors($p_OnOff='On')
{ 
    global $Server_View_Path;
    ini_set('display_errors','On'); 
    $phperror='<div id="phperror" style="display:none">'; 
    ini_set('error_prepend_string',$phperror); 
    $phperror='</div><form name="catcher" action="'.$Server_View_Path.'error_page" method="post" ><input type="hidden" name="fatal"  value=""></form> <script> document.catcher.fatal.value = document.getElementById("phperror").innerHTML; document.catcher.submit();</script>'; 
    ini_set('error_append_string',$phperror); 
}

function send_mail_new($to_name,$to_email,$from_name="",$from_email="",$subject="",$message , $mail_type="" , $att_ids="" , $bcc_email="", $cc_email="",$reply="",$f_type="" )
{
  
   //require_once 'swift/lib/swift_required.php';
	global $Site_Name;   
	global $AdminName;
	global $AdminMail;
	global $AdminToName;
	global $AdminToEmail;
	global $USESENDGRID;
	
	if($from_name=="")	{	    $from_name=$AdminName;	}
	if($from_email=="")	{	    $from_email=$AdminMail;	}
	if($to_name=="")	{	    $to_name=$AdminToName;	}
	if($to_email=="")	{	    $to_email=$AdminToEmail;	}
	$message = str_replace("\\n","\\r\\n",$message);
	$from="$from_name <$from_email>";
	$to="$to_name <$to_email>";
	if($USESENDGRID==0)
	{
                $headers  = "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\n";   
                $headers .= "From: $from\n";
                if($reply)
                        $headers .= "Reply-To: $reply \n";
                if($cc_email)
                        $headers .= "CC: $cc_email \n"; 
                $headers .="BCC: ".$bcc_email; 
                if($att_ids!="" && $f_type!='')
                {
                        $mail = new htmlMimeMail();

                        $mail->setSubject($subject);
                        //$mail->setText($message);
                        $mail->setHtml($message);
                        $mail->setFrom($from);
                        if($cc_email)
                                $mail->setCc($cc_email);
                        if($bcc_email)	
                                $mail->setBcc($bcc_email);
                        if($reply)	
                        {
                                $mail->setHeader("Return-Path",$reply);
                                $mail->setHeader("Reply-To", $reply);
                        }
                        $result = $mail->send(array($to));
                        //print $result;
           }
           else
           {
                        @mail($to, $subject, $message, $headers);
           }
	}
	else
	{
	
		global $Sendgrid_Email,$Sendgrid_Pass;	
		$transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 25)
		->setUsername($Sendgrid_Email)
		->setPassword($Sendgrid_Pass);
		
		//Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);
		$orig_msg = $message;
		//Create a message
		$message = Swift_Message::newInstance($subject)
		->setFrom(array($from_email => $from_name))
		->setTo(array($to_email=>$to_name));
	
		$message->setSender($from_email);
		$message->setBody($orig_msg, 'text/html');
		if($reply)
			$message->setReplyTo($reply);
		if($cc_email)
		{
			$message->setCc($cc_email);
		}
		if($bcc_email)
		{	
			$message->addBcc($bcc_email);	
		}
		//Send the message
		$result = $mailer->send($message);
	}
}
function nomantimNormalize($address)
{
    $highway="/(\s|\A)(highway|hwy|Hwy)\.?(\s|\z) (\d+)/i";
    $street="/(\s|\A)(st|ST|St|street)\.?(\s|\z)/";
    $avenue="/(\s|\A)(ave|ave|avenue)\.?(\s|\z)/";
    $boulevard="/(\s|\A)(blvd|blvd|Blvd)\.?(\s|\z)/";
    $road="/(\s|\A)(rd|Rd)\.?(\s|\z)/";
    $direction['s']="/(\s|\A)(s|S)\.?(\s|\z)/";
    $direction['n']="/(\s|\A)(n|N)\.?(\s|\z)/";
    $direction['e']="/(\s|\A)(e|E)\.?(\s|\z)/";
    $direction['w']="/(\s|\A)(w|W)\.?(\s|\z)/";
    $direction['ne']="/(\s|\A)(ne|NE|Ne)\.?(\s|\z)/";
    $direction['nw']="/(\s|\A)(nw|NW|Nw)\.?(\s|\z)/";
    $direction['se']="/(\s|\A)(se|SE|Se)\.?(\s|\z)/";
    $direction['sw']="/(\s|\A)(sw|SW|Sw)\.?(\s|\z)/";
    $dir['s']=" South ";
    $dir['n']=" North ";
    $dir['w']=" West ";
    $dir['e']=" East ";
    $dir['ne']=" Northeast ";
    $dir['nw']=" Northwest ";
    $dir['se']=" Southeast ";
    $dir['sw']=" Southwest ";
	
    $address=preg_replace($highway,"$4/US ",strtolower($address));
    $address=preg_replace($street," Street ",strtolower($address));
    $address=preg_replace($avenue," Avenue ",strtolower($address));
    $address=preg_replace($boulevard," Boulevard ",strtolower($address));
    $address=preg_replace($direction, $dir,strtolower($address));
    $address=preg_replace($road," Road",strtolower($address));

    return $address;
	
    //write test cases for these to check them out. Especially something like "First St" or "State St"
    //UPDATE: Tested and verified. See JBTest.php for details and applicable unit tests.
}
function curlGeoInformation($Address,$City,$StID,$provider="Nomantim") 
{
    if(intval($StID)>0)
    {
        $Query = "SELECT State FROM vcc_states WHERE StateID = ".$StID.";";
        eqi($Query,$rs);
        $Out = mfai($rs);
    }
    //needs further testing
    //UPDATE: Tested and verified.
    $ch = curl_init(); 
    $resultSet=array();

    curl_setopt($ch,CURLOPT_RETURNTRANSFER , TRUE); // return value instead of direct output.
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, FALSE);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 5);
    
    if($provider=="Nomantim") 
    {
        $Address=nomantimNormalize($Address);
        //nomantim is very finicky. in the ?q format it uses '+'. The structured format requires "%20"
        //replace spaces with url equivalent for both street name and city. That ensures that a city such as Los Angeles will be processed correctly.
        $url="http://nominatim.openstreetmap.org/search/".trim(str_replace(" ","%20",$Address))."/".rtrim(str_replace(" ","%20",$City))."?format=json&addressdetails=1&limit=1";
        //  echo("<br/>".$url."<br/>");
    }
    //echo $url."</br>";
    curl_setopt($ch, CURLOPT_URL, $url); //uncomment
    $resultSet=curl_exec($ch);//uncomment
    //$resultSet=curl_exec($ch);//uncomment
    if(empty($resultSet)||$resultSet=="[]") 
    {
        $url="http://nominatim.openstreetmap.org/search/".trim(str_replace(" ","%20",$Address))."?format=json&addressdetails=1&limit=1";
        curl_setopt($ch, CURLOPT_URL, $url); //uncomment
        // echo("<br/>".$url."<br/>");
        $resultSet=curl_exec($ch);
        ////uncomment
        //echo($resultSet);
    }    
    if(empty($resultSet)||$resultSet=="[]") 
    {
        $url="http://maps.googleapis.com/maps/api/geocode/json?address=".trim(str_replace(" ","+",$Address)).",+".rtrim(str_replace(" ","+",$City)).",+".rtrim(str_replace(" ","+",$Out['State']));
        curl_setopt($ch, CURLOPT_URL, $url); //uncomment
        // echo("<br/>".$url."<br/>");
        $resultSet=curl_exec($ch);//uncomment
        //echo($resultSet);
    }
    curl_close($ch);//uncomment
    //print_r($resultSet);
    return json_decode($resultSet,true);
}

function get_non_profit_list($table,$empLocation,$sel_id,&$option,$con="",$show_select=1,$select_option='----- BLANK ----',$optimalDistance=50.00)
{
    $R=6371;
    $ss=0;
    $theta1=deg2rad($empLocation['ILatitude']);
    $SQL = "SELECT * FROM $table $con ";
    eqi($SQL,$rs);
    while($data = mfai($rs))
    {
        $theta2=deg2rad($data['latitude']);
        $changeTheta=deg2rad($data['latitude']-$empLocation['ILatitude']);
        $changeDelta=deg2rad($data['longitude']-$empLocation['ILongitude']);
        $a=sin($changeTheta/2)*sin($changeTheta/2)+cos($theta1)*cos($theta2)*sin($changeTheta/2)*sin($changeDelta/2);

        $c=2*atan2(sqrt($a),sqrt(1-$a));
        $distance=$R*$c;
        
        if(round($distance,2)>$optimalDistance)
        {
			if($data[NonProfitID]!=$sel_id)
			{
				continue;
			}
        }
        if($data[NonProfitID]==$sel_id)
        {
            $sel="selected";
            $ss=1;
        }
        $option.="<option value=\"$data[NonProfitID]\" $sel>".$data[NonProfit]." - ".round($distance,2)."</option>";
        $sel="";
    }
	
    if($ss==0 AND $show_select==1)
    {
        $option="<option value=\"0\" selected>".$select_option."</option>".$option;
    }
}

?>
