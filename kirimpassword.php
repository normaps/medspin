<html>
<head>



<title>Data Registrasi Pendaftar MEDSPIN FK UNAIR 2015</title>

<link rel="alternate" media="print" href="cetak_form.php" />

<script>
function printWindow(){
bV = parseInt(navigator.appVersion)
if (bV >= 4) window.print()
}
</script>

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

</head>



<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);"> 
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; PENGIRIMAN PASSWORD BARU &laquo;</div><br/><br/><br/>


    

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";




include "koneksi.php";

$username = $_POST['username'];
$email = $_POST['email'];

function randomPassword()
{
// function untuk membuat password random 6 digit karakter

$digit = 6;
$karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

srand((double)microtime()*1000000);
$i = 0;
$pass = "";
while ($i <= $digit-1)
{
$num = rand() % 32;
$tmp = substr($karakter,$num,1);
$pass = $pass.$tmp;
$i++;
}
return $pass;
}

// membuat password baru secara random -> memanggil function randomPassword
$newPassword = randomPassword();

// perlu dibuat sebarang pengacak
$pengacak  = "NDJS3289JSKS190JISJI";

// mengenkripsi password dengan md5() dan pengacak
$newPasswordEnkrip = md5($newPassword);

// mencari alamat email si user
$query = "SELECT * FROM user WHERE (username = '$username' AND email = '$email')";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$alamatEmail = $data['email'];

// title atau subject email
$title  = "New Password";

// isi pesan email disertai password
$pesan  = "Nomer Pendaftaran Anda : ".$username.". \nPassword Anda yang baru adalah ".$newPassword;

// header email berisi alamat pengirim
$header = "From: admin@medspinfkunair.com";

// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);

// cek status pengiriman email
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE user SET password = '$newPasswordEnkrip' WHERE username = '$username'";
    $hasil = mysql_query($query);

    if ($hasil) echo "<span style='text-align:center; margin-top:200; font-size:25;'></span><br/><a href=''><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>Password telah direset dan pasword baru telah dikirim ke $alamatEmail</button></a>"; 
    }
    
    
    
else echo " <span style='text-align:center; margin-top:200; font-size:25;'></span><br/><a href=''><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>NOMOR PENDAFTARAN ATAU EMAIL YANG ANDA KIRIMKAN SALAH ATAU BELUM TERDAFTAR</button></a>
";


?>


<div style='text-align:center; margin-top:200; font-size:25;'></div><br/><a href='http://registration.medspinfkunair.com'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button></a>



</body>
</html>
 