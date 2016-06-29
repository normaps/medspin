<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=ubah_password.php');
}

include "koneksi.php";

?>
<html>
<head>
<title>Ubah Password Akun Registrasi MEDSPIN FK UNAIR 2015</title>


  <link href="css/ecf.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  
<style>
.add-photo-btn{
position:relative;
overflow:hidden;
cursor:pointer;
text-align:center;
background-color:#ccc;
color:#fff;
display:block;
width:300px;
height:31px;
float:left;
align:center;
border-radius:10px;
}

input.upload {
position:relative;
cursor:pointer;
opacity:0;
filter:alpha(opacity:0;);
border:1px solid #028fcc;
}
#header
{
  background:#028fcc;
  border:1px solid #028fcc;
  margin: 20px auto;
  width:680px;
  padding:10px;
  color:white;
  text-align:center;
  border-radius:20px;
  font-weight:700;
  margin-bottom:-5px;
}

#daftar{
  background:#transparent;
  margin:auto;
  width:700px;
  padding:10px;
  border-radius:10px;
  
}
.texbox{
   border:1px solid #ccc;
   height:25px;
}
.texarea{
   border:1px solid #ccc;
 
}
.btn{
    width:85px;
    height:30px;
    color:#099;
    font-weight:bold;
    margin-bottom:3px;
    }
.btn:hover{
   background:#333;
   color:#fff;
   font-weight:bold;
   cursor:pointer;
   border:2px solid #099;
   border-radius:4px;
    }
</style>


<script type="text/javascript">
function validasi_input(form){
  var mincar = 6;
  var maxcar = 10;
  if (form.passwordbaru.value.length < mincar){
    alert("Password Baru Harus Antara 6-10 Karakter!");
    form.passwordbaru.focus();
    return (false);
  }

 else if (form.passwordbaru.value.length > maxcar){
 alert("Password Baru Harus Antara 6-10 Karakter!");
    form.passwordbaru.focus();
    return (false);
}
   return (true);
}


</script>

<script language='JavaScript'>

var ajaxRequest;

function getAjax() //mengecek apakah web browser support AJAX atau tidak
{
try
{
// Opera 8.0+, Firefox, Safari
ajaxRequest = new XMLHttpRequest();
}
catch (e)
{
// Internet Explorer Browsers
try
{
ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)
{
try
{
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
// Something went wrong
alert("Your browser broke!");
return false;
}
}
}
}

function validasi (keyEvent,pilihan) //fungsi untuk mengambil nilai setiap huruf yang dimasukkan
{
keyEvent = (keyEvent) ? keyEvent: window.event;
input = (keyEvent.target) ? keyEvent.target: keyEvent.srcElement;
if (input.value) //jika input dimasukkan, masuk ke fungsi cekEmail
{
if (pilihan == 1)
{
cekPass("cekpass.php?password=1&input=" + input.value,1); //mengirim inputan ke file cekpass.php
}
else if (pilihan == 2)
{
pass = document.getElementById("pass").value; //mengambil nilai dari form password yang telah dicek
cekPass("cekpass.php?password=2&pass=" + pass + "&input=" + input.value,2); //mengirim inputan konfirmasi password
}
}
}

function cekPass(fileCek,keterangan) //fungsi untuk menampilkan hasil pengecekan
{
getAjax();
ajaxRequest.open("GET",fileCek);
ajaxRequest.onreadystatechange = function()
{
if (keterangan == 1)
{
document.getElementById("hasil").innerHTML = ajaxRequest.responseText; //hasil cek kekuatan password
}
else if (keterangan == 2)
{

document.getElementById("cocok").innerHTML = ajaxRequest.responseText; //hasil cek konfirmasi password
}
}
ajaxRequest.send(null);
}
</script>

</head>
<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);"> 
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; UBAH PASSWORD AKUN PENDAFTARAN ONLINE MEDSPIN 2015 &laquo;</div><br/><br/><br/>




<div id="header">UBAH PASSWORD</div>
   
<div id="daftar">
<br/><br/>

<form method="post" action="ubah_password_proses.php" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px;  ; border-radius:20px;" onsubmit="return validasi_input(this)" >

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> No Pendaftaran :
                      <input type="text" name="username" class="form-control" placeholder="Ketik nomor pendaftaran anda"  required="required">
                    </div>
                  </div>
</div>	

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
			  
                  <div class="col-sm-12">
                    <div class="form-group"> Password Lama :
                      <input type="password" name="passwordlama" class="form-control" placeholder="Ketik password lama anda" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Password Baru :
                      <input type="password" name="passwordbaru" id="pass" class="form-control" placeholder="Ketik password baru anda antara 6 - 10 Karakter" required="required" onkeyup="validasi(event,1)" ><div id="hasil" style="color:#028fcc"></div>
                    </div>
                  </div>
                 

</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Konfirmasi Password Baru :
                      <input type="password" name="konfirmasipassword" class="form-control" Placeholder="Ketik Konfirmasi Password Baru" required="required" onkeyup="validasi(event,2)"><div id="cocok" style="color:#028fcc"></div>
                    </div>
                  </div>
</div>


                 <div class="form-group">
                 <button type="submit"  class="btn-submit" style="border-radius:10px;" /><input type="hidden" name="change" >UBAH PASSWORD</input></button>
                </div>

			
                 <div class="form-group">
                 <a href="http://medspinfkunair.com/registration" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button></a>
                </div>

				</form></div>


 
<div class="footer-bottom" style="background:#028fcc; padding-top:10px; margin-bottom:0px; position:absolute; left:0px; right:0px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6" style="color:#fff">
            <p>&copy;  Medspin 2015 Web Developer Team</p>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
 