<?php

// --------------------------------------------- VARNAR CLAIMS CONSULTING --------------------------------------------------------- \\
$SERVER_PATH="http://localhost/";
$MAIN_PATH="C:/xampp/htdocs/Varner Claims Consulting/system/";
$UPLOAD_PATH=$MAIN_PATH."uploads/";
$VIEW_PATH=$SERVER_PATH."system/uploads/";
$SERVER_INCLUDE_PATH = $MAIN_PATH."includes/";

include_once($SERVER_INCLUDE_PATH."functions.php");
include_once($SERVER_INCLUDE_PATH."db_functions.php");
include_once($SERVER_INCLUDE_PATH.'libs/Smarty.class.php');
include_once($SERVER_INCLUDE_PATH."htmlMimeMail.php");

$SignIN="https://localhost/Login";

$FromMail="Varner Claims Consulting";

$AdminName="Admin";
$AdminMail="";

$AdminToName="";
$AdminToEmail="baltincsoft@gmail.com";

function ConnectDB()
{
    global $conni;
    $conni=mysqli_connect("localhost","root","","varnercc") or die("Error " .mysqli_error($conni));
    return $conni;
}

function init()
{
    session_name("VarnerCC");
    session_start();
    session_cache_limiter('none');
    if(!isset($_SESSION["AdminID"])) {$_SESSION["AdminID"]="";}
    if(!isset($_SESSION["UserID"])) {$_SESSION["UserID"]="";}
    ConnectDB();
}

?>
