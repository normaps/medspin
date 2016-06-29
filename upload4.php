<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=upload4.php');
}


if ($_SESSION['guest']==true) {

 $wellcome = "ANDA MASUK SEBAGAI TAMU, ANDA TIDAK BISA MENYIMPAN FOTO";
}

else {
 $wellcome = "FOTO TELAH BERHASIL DISIMPAN";
}

?>

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
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; HALAMAN UPLOAD FOTO &laquo;</div><br/><br/><br/>


    

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";

include "koneksi.php";
//get the value from form update
 $no = $_GET['nama'];

//query for update data in database
 $query = "UPDATE reg SET scan2 = '$no' WHERE nim = '$username'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) { }



?>


<div style='text-align:center; margin-top:200; font-size:25;'><?php echo $wellcome?></div><br/><a href='http://registration.medspinfkunair.com/upload_foto.php'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button></a>


</body>
</html>
 