<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=panduan.php');
}



if($_SESSION['isAdmin']==true){
 $panel = "MENU ADMIN"  ;
 $url_panel = "http://medspinfkunair.com/cpanel/index.php/main/user"  ;
 $wellcome = "SELAMAT DATANG ADMIN MEDSPIN 2015";
}

else if ($_SESSION['guest']==true) {
$panel = "UBAH PASSWORD (LOCKED)" ;
$url_panel = ""  ;
 $wellcome = "SELAMAT DATANG DI PANEL PESERTA MEDSPIN 2015 <br/> ANDA MASUK SEBAGAI TAMU, BEBERAPA MENU KAMI NONAKTIFKAN";
}

else {
$panel = "UBAH PASSWORD" ;
$url_panel = "ubah_password.php"  ;
 $wellcome = "SELAMAT DATANG PESERTA MEDSPIN 2015 <br/> NOMOR PENDAFTARAN ANDA : $username";
}



?>

<html>
<head>
<title>Pendaftaran Medspin FK UNAIR 2015</title>
  <link href="css/ecf.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
<style>
body {
  height: 5;
  margin-top: 0px;
  padding: 120px;
  font: 400 1.4rem 'Lato', Verdana, Helvetica, sans-serif;
}

.fa {font-size:60;}

span button {
  margin: 20px auto;
  font-size: 2.0rem;
  padding: 30px;
  display: block;
  background-color: #009ac9;
  border: 1px solid transparent;
  color: #ffffff;
  font-weight: 10;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width:100%;
  border-radius:20px;
  font-weight:700;
}

span button:hover {
  background-color: #fefefe;
  color: #009ac9;
  border-color: #009ac9;
}

</style>
</head>
<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);">
<div class=>
 

<div style=" font-size:20; font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0; text-align:center;"><?php echo $wellcome; ?></div> 



<div class="row" style="width:99%;">
<div class="col-sm-6">

  <span>
<button type="button href="http://google.com" onclick="window.location.href='panduan_pendaftaran.php'"><li class="fa fa-book"></li></br>PANDUAN PENDAFTARAN</button>
  </span>

    <span>
<button type="button href="http://google.com" onclick="window.location.href='sistematika_perlombaan.php' "><li class="fa fa-tasks"></li></br>SISTIMATIKA PERLOMBAAN</button>
  </span>
 
</div>

<div class="col-sm-6" >



    <span>
<button type="button href="http://google.com" onclick="window.location.href='faq.php'"><li class="fa fa-question-circle"></li></br>FAQ</button>
  </span>

    <span>
<button type="button href="http://google.com" onclick="window.location.href='chats.php'"><li class="fa fa-phone"></li></br>HUBUNGI PANITIA</button>
  </span>
</div>
</div>

<div class="row" style="width:99%; ">
<div class="col-sm-12">
<span>
<button type="button href="http://google.com" onclick="window.location.href='index.php'""><li class="fa fa-arrow-circle-left"></li></br>KEMBALI</button>
</span>
</div>
</div>

</body>
</html>
