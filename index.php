<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}



if($_SESSION['isAdmin']==true){
 $panel = "MENU ADMIN"  ;
 $panel1 = "CETAK SERTIFIKAT" ;
 $url_panel = "ubah_password.php"  ;
 $url_panel1 = "cetak_sertifikat.php"  ;
 $wellcome = "SELAMAT DATANG ADMIN MEDSPIN 2015";
}

else if ($_SESSION['guest']==true) {
$panel = "UBAH PASSWORD (LOCKED)" ;
$panel1 = "CETAK SERTIFIKAT (LOCKED)" ;
$url_panel = ""  ;
$url_panel1 = ""  ;
 $wellcome = "SELAMAT DATANG DI PANEL PESERTA MEDSPIN 2015 <br/> ANDA MASUK SEBAGAI TAMU, BEBERAPA MENU KAMI NONAKTIFKAN";
}

else {
$panel = "UBAH PASSWORD" ;
$panel1 = "CETAK SERTIFIKAT" ;
$url_panel = "ubah_password.php"  ;
$url_panel1 = "cetak_sertifikat.php"  ;
 $wellcome = "SELAMAT DATANG PESERTA MEDSPIN 2015 <br/> NOMOR PENDAFTARAN ANDA : $username";
}


?>

<html>
<head>
<meta name="description" content="Pendaftaran Online MEDSPIN FK UNAIR 2015, Olimpiade Kedokteran Untuk Siswa SMA & Sederajat Se-Asia Tenggara Diselenggarakan Oleh FK UNAIR Pada 8, 21, & 22 November 2015">
<meta name="keywords" content="Medspin FK UNAIR, Medspin 2015, Olimpiade Kedokteran, Medspin FK UNAIR 2015">
<meta name="author" content="Ega Candra Fauriza">
<meta charset="UTF-8"> 
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
<button type="button button href="http://google.com" onclick="window.location.href='panduan.php'""><li class="fa fa-book"></li></br>PANDUAN</button>
  </span>

  <span>
<button type="button href="http://google.com" onclick="window.location.href='pendaftaran.php'""><li class="fa fa-pencil-square"></li></br>PENDAFTARAN</button>
  </span>


  <span>
<button type="button  href="http://google.com" onclick="window.location.href='upload_foto.php'"><li class="fa fa-photo"></li></br>UPLOAD FOTO</button>
  </span>

 
</div>

<div class="col-sm-6" >

 <span>
<button type="button href="http://google.com" onclick="window.location.href='lihat_data.php'""><li class="fa fa-print"></li></br>CETAK FORM</button>
  </span>

  <span>
<button type="button href="http://google.com" onclick="window.location.href='<?php echo $url_panel1?>'"><li class="fa fa-graduation-cap"></li><br/><?php echo $panel1?></button>
  </span>

  <span>
<button type="button href="http://google.com" onclick="window.location.href='<?php echo $url_panel?>'"><li class="fa fa-lock"></li></br><?php echo $panel?></button>
  </span>
</div>
</div>

<div class="row" style="width:99%; ">
<div class="col-sm-12">
<span>
<button type="button href="http://google.com" onclick="window.location.href='logout.php'""><li class="fa fa-cog"></li></br>SIGN OUT </button>
</span>
</div>
</div>

</body>
</html>