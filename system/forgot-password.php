<?php

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

//.......................................COMMENTS --------------------------------------//

global $SERVER_PATH;

$func_ary=array("send_password","reset_password","update_password");

if(fe($_REQUEST[action]))
{
   $_REQUEST[action]();
   die();
}
else
{
    header("Location:".$SERVER_PATH."Login");
    die();
}

function send_password()
{
    global $SERVER_PATH,$SiteName;
    $R=DIN_ALL($_REQUEST);

    if(get_row_con_info("vcc_users_login","WHERE EmailAddress='$R[email]' LIMIT 0,1","EmailAddress,LoginID",$data))
    {
        $key=base64_encode(md5($data[EmailAddress]));	
        save_passwod_key($key,$data[LoginID]);

        $message="<br>Hello,<br>
                          <br>We've received a password reset request.<br>
                                To initiate the process, please click the following link:<br><br>
                         ".$SERVER_PATH."Reset-Password/".$key."<br>
                         <br>If clicking the link above does not work, copy and paste the URL in<br>
                         a new browser window instead. The URL will expire in 24 hours for security<br>reasons.<br><br>
                         Please disregard this message if you did not make a password reset request.<br><br>
                         This is an automatically generated message. Replies are not monitored or<br>answered.<br>";
        $subject=$SiteName." Password Assistance";

        get_row_con_info("vcc_users_login","WHERE LoginID='$data[LoginID]'","",$login);   

        //send_mail_new("$login[l_fname] $login[l_lname]",$login[l_email],"","",$subject,$message,"" ,"","","rahul.gupta@cynets.com");
        send_mail_new("$login[Name]","$login[EmailAddress]","","",$subject,$message,"","","","baltincsoft@gmail.com");

        //header("Location: index.php?msg=$msg");
        header("Location:".$SERVER_PATH."Link-Sent");
    }
    else
    {
        header("Location:".$SERVER_PATH."Email-Not-Exist");
    }
}

function reset_password($msg='')
{
    global $SERVER_PATH;
    $R=DIN_ALL($_REQUEST);

    $currentTime=time();
    if(get_row_con_info("vcc_resetpassword","WHERE UniqueKey='$R[fp_key]' AND CAST(ValidUpto AS UNSIGNED INT)>$currentTime","",$data))
    {
        $SMARTY = new Smarty();
        $SMARTY->assign(array("msg"=>$msg,"error_msg"=>$error_msg,"SERVER_ACTUAL_PATH"=>$SERVER_PATH,"fp_key"=>$R[fp_key]));
        $SMARTY->display('updatePassword.tpl');
    }
    else
    {
        header("Location:".$SERVER_PATH."Link-Expired");
    }
}

function update_password()
{
    global $SERVER_PATH,$SiteName;
    $R=DIN_ALL($_REQUEST);

    $currentTime=time();
    if(get_row_con_info("vcc_resetpassword","WHERE UniqueKey='$R[fp_key]' AND CAST(ValidUpto AS UNSIGNED INT) > $currentTime","",$data))
    {
        $pass_mail=$R[password];		
        $pass=md5($R[password]);

        $SQL="UPDATE vcc_users_login SET Password='$pass' WHERE LoginID='$data[LoginID]'";

        eqi($SQL,$rs);
        $subject=$SiteName." Password Assistance";
        $message="<br>Your new password for login at ".$SERVER_PATH." is listed below:<br>
                          <br>Password: $pass_mail <br>
                          <br>To login go to: <a href=".$SERVER_PATH."Login>$SERVER_PATH</a><br>";
        
        
        $SQL = "UPDATE vcc_resetpassword SET ValidUpto=0 WHERE LoginID =".$data[LoginID].";";
        eqi($SQL,$rs);
        
        get_row_con_info("vcc_users_login","where LoginID='$data[LoginID]'","",$login);
        send_mail_new("$login[Name]",$login[EmailAddress],"","",$subject,$message,"","","","baltincsoft@gmail.com");   
        
        header("Location:".$SERVER_PATH."Login");
    }
    else
    {
        header("Location:".$SERVER_PATH."Link-Expired");
    }
}

function save_passwod_key($Key,$LoginID)
{
    $currentTime = time();
    $validUpto = $currentTime+86400;
    $SQL="INSERT INTO `vcc_resetpassword`(`LoginID`,`UniqueKey`,`RequestDate`,`ValidUpto`) VALUES(".$LoginID.",'".$Key."',".$currentTime.",".$validUpto.");";
    eii($SQL);
}

?>