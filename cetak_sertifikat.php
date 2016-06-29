<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
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
<a href="http://medspinfkunair.com/registration/pdf/form/sertif_anggota1.php" target="blank"><button><li class="fa fa-print" ></li></br>SERTIFIKAT ANGGOTA 1</button></a>
  </span>

  
</div>

<div class="col-sm-6" >

 <span>
<a href="http://medspinfkunair.com/registration/pdf/form/sertif_anggota2.php" target="blank"><button><li class="fa fa-print"></li></br>SERTIFIKAT ANGGOTA 2</button></a>
  </span>


</div>
</div>

<div class="row" style="width:99%; ">
<div class="col-sm-12">
<span>
<a href="http://medspinfkunair.com/registration/pdf/form/sertif_ketua.php" target="blank"><button><li class="fa fa-print"></li></br>SERTIFIKAT KETUA</button></a>
</span>
</div>
</div>

</body>
</html>