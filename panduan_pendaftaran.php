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
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; PANDUAN PENDAFTARAN &laquo;</div><br/><br/><br/>


    

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";


 include("koneksi.php");
    $nim=$username;
    $qrykoreksi=mysql_query("select * from reg where nim='$nim' LIMIT 1");
    $dataku=mysql_fetch_object($qrykoreksi);


?>





<div id="header">PANDUAN PENDAFTARAN</div>
   
<div id="daftar">
<br/><br/>

<div  id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">

<p align="left">Untuk menyelesaikan pendaftaran. anda harus melalui 5 tahap, yaitu </p>

<p align="left">1. Mengisi formulir pendaftaran di menu<strong> pendaftaran</strong></p>

<p align="left">2. Melakukan upload foto di menu<strong> upload foto</strong></p>

<p align="left">3. Mencetak form pendaftaran di menu <strong>cetak form</strong></p>

<p align="left">4. Untuk peserta lomba <b>offline</b>, data hasil cetak form dibawa saat daftar ulang untuk ditukarkan dengan kartu peserta ujian</p>

<p align="left">5. Untuk peserta lomba <b>online</b>,data hasil cetak form disipan sebagai bukti telah melakukan pendaftaran</p>

<br/><br/><br/>

<p align="center"><strong>-Berikut akan dibahas secara rinci tahap demi tahap-</strong></p>
<br/>

<p>1. Setelah berhasil login, anda akan menemui tampilan seperti gambar berikut. Pertama anda harus mengisi formulir pendaftaran, caranya pada menu seperti gambar dibawah, klik <b>pendaftaran</b> 

<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.55.11.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.55.11.png" width="638" height="400" /></a></p>

<p>2. isi formulir sesuai biodata anda dan kelompok anda</p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.57.40.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.57.40.png" width="638" height="400" /></a></p>

<p>3. Setelah semua data anda isi, klik "LANJUT"</p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.58.51.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.58.51.png" width="638" height="400" /></a></p>

<p>4. Cek kembali data yang telah anda isikan. <b>data yang telah disimpan tidak bisa diubah!!!!!</b></p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.59.03.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.59.03.png" width="638" height="400" /></a></p>

<p>5. Jika sudah yakin dengan data yang anda isikan, klik "SIMPAN". dan klik "KEMBALI"</p>
<p><a href=""><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.59.13.png" width="638" height="400" /></a></p>


<p>6. Anda akan kembali ke halaman awal seperti gambar berikut. tahap selanjutnya yang harus anda lakukan adalah mengupload foto. caranya klik <strong>UPLOAD FOTO</strong></p>

<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.55.11.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.55.11.png" width="638" height="400" /></a></p>

<p>7. Klik foto yang ingin anda upload. disini saya contohkan untuk mengupload <B>foto ketua kelompok</B> terlebih dahulu. maka pada menu ini pilih <B>upload foto ketua</B></p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.00.12.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.00.12.png" width="638" height="400" /></a></p>

<p>8. Klik <B>pilih foto</B>, lalu browse foto yang ingin anda upload, lalu klik <B>open</B></p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.00.46.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.00.46.png" width="638" height="400" /></a></p>

<p>9. Tunggu sampai gambar muncul, jika gambar yang muncul sudah sesuai dengan apa yang anda ingin upload, klik "DISINI"</p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.10.25.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.10.25.png" width="638" height="400" /></a></p>

<p>10. Tunggu sampai foto berhasil disimpan lalu klik <B>kembali</B></p>
<p><a href=""><img title="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.10.34.png" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.10.34.png" width="638" height="400" /></a></p>

<p>11. Jika muncul notifikasi <b>Ukuran file terlalu besar, coba lagi</b>, maka file yang anda upload terlalu besar file-nya. anda bisa mengecilkannya dengan menggunakan beberapa aplikasi edit foto seperti <B>paint, photoshop, dan lain lain</B></p>
<p><a href=""><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.09.05.png" width="638" height="400" /></a></p>

<p>12. Ulangi langkah nomor 7 untuk mengupload semua sisa foto yang belum anda upload.</p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.00.12.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2022.00.12.png" width="638" height="400" /></a></p>

<p>13. Setelah mengupload semua foto, klik <b>kembali</b> untuk pergi ke halaman awal. disini langkah selanjutnya yang harus anda lakukan adalah mencetak form, oleh karena itu pada halaman awal klik <b>cetak form</b>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.55.11.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-06%2021.55.11.png" width="638" height="400" /></a></p>

<p>14. Pada halaman ini, anda bisa melihat semua data yang telah anda input. cek kembali data anda. karena data tidak bisa diubah, maka jika terjadi kesalahan dalam pengisian silahkan hubungi panitia. setelah selesai mengecek klik <b>cetak form</b> untuk mencetak data.
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-14%2000.22.27.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-14%2000.22.27.png" width="638" height="400" /></a></p>

<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-14%2000.40.49.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-14%2000.40.49.png" width="638" height="400" /></a></p>
<p><a href="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-14%2000.40.53.png"><img title="Tangkapan layar 2015-08-06 21.55.11" style="border-top: 0px; border-right: 0px; background-image: none; border-bottom: 0px; padding-top: 0px; padding-left: 0px; border-left: 0px; display: inline; padding-right: 0px" border="0" alt="Tangkapan layar 2015-08-06 21.55.11" src="https://dl.dropboxusercontent.com/u/52861151/bite%20sms/Tangkapan%20layar%202015-08-14%2000.40.53.png" width="638" height="400" /></a></p>

<p>15. Data hasil cetakan akan terdownload secara otomatis. print data tersebut. Untuk peserta lomba <b>offline</b>, data dibawa saat daftar ulang untuk ditukarkan dengan kartu peserta ujian. sedangkan untuk peserta lomba <b>online</b>, data disimpan sebagai bukti pendaftaran.


                         <div class="form-group">
                 <a href="http://medspinfkunair.com/registration/panduan.php" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
                </div>
                 
            
</div>

</div>

          </div>
        </div>
      </div>
    </div>

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
 