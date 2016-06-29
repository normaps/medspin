<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=lihat_data.php');
}



if ($_SESSION['guest']==true) {

 $wellcome = "INI ADALAH HALAMAN PENGECEKAN DAN PERCETAKAN DATA YANG TELAH DIINPUT <BR/> ANDA MASUK SEBAGAI TAMU, DATA YANG DIINPUT TIDAK BISA DITAMPILKAN";
}

else {
 $wellcome = "BERIKUT ADALAH DATA YANG TELAH ANDA INPUT<br/>HUBUNGI PANITIA APABILA ADA KESALAHAN DATA";
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
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; CETAK FORM PENDAFTARAN ONLINE MEDSPIN 2015 &laquo;</div><br/><br/><br/>


    

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";


 include("koneksi.php");
    $nim=$username;
    $qrykoreksi=mysql_query("select * from reg where nim='$nim' LIMIT 1");
    $dataku=mysql_fetch_object($qrykoreksi);
    $qrykoreksi=mysql_query("select * from user where username='$nim' LIMIT 1");
    $dataku1=mysql_fetch_object($qrykoreksi);


?>





<div id="header"><?php echo $wellcome?></div>
   
<div id="daftar">
<br/><br/>

<form method="post" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px;  ; border-radius:20px;">

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12"> 
                    <div class="form-group"> Nomor Pendaftaran :
                      <input type="text" name="nim" value="<?php echo $username; ;?>" readonly="" class="form-control" placeholder="Nomor Pendaftaran" required="required">
                    </div>
                  </div>
</div>



<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Tanggal Pendaftaran :
                      <input type="text" name="tgl_pendaftaran" class="form-control" placeholder="Tanggal Pendaftaran" readonly="" value="<?php echo $dataku->tgl_pendaftaran?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nama Ketua Kelompok :
                      <input type="text" name="nama1" class="form-control" readonly="" value="<?php echo $dataku->nama1?>" placeholder="Nama Ketua Kelompok" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Induk Siswa (NIS) Ketua Kelompok :
                      <input type="text" name="nis1" class="form-control" readonly="" value="<?php echo $dataku->nis1?>" placeholder="NIS Ketua Kelompok" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nama Anggota I :
                      <input type="text" name="nama2" class="form-control" readonly="" value="<?php echo $dataku->nama2?>" placeholder="Nama Anggota I" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Induk Siswa (NIS) Anggota I :
                      <input type="text" name="nis2" class="form-control" placeholder="NIS Anggota I" readonly="" value="<?php echo $dataku->nis2?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nama Anggota II :
                      <input type="text" name="nama3" class="form-control" placeholder="Nama Anggota II" readonly="" value="<?php echo $dataku->nama3?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Induk Siswa (NIS) Anggota II :
                      <input type="text" name="nis3" class="form-control" placeholder="NIS Anggota II" readonly="" value="<?php echo $dataku->nis3?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Contact Person :
                      <input type="text" name="cp" class="form-control" placeholder="Nomor HP Aktif" readonly="" value="<?php echo $dataku->cp?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Asal Sekolah :
                      <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" readonly="" value="<?php echo $dataku->asal_sekolah?>"required="required">
                    </div>
                  </div>
</div>


<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Alamat Sekolah :
                      <input type="text" name="alamat_sekolah" readonly="" value="<?php echo $dataku->alamat_sekolah?>" class="form-control" placeholder="Alamat Sekolah" height:300px; required="required">
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Lokasi Ujian :
                      <input type="text" name="kota" class="form-control" readonly="" value="<?php echo $dataku->kota?>" placeholder="Kota" required="required">
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Alamat email :
                      <input type="text" name="kota" class="form-control" readonly="" value="<?php echo $dataku1->email?>" placeholder="Kota" required="required">
                    </div>
                  </div>
</div>


<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <B>&nbsp&nbsp&nbsp&nbsp&nbspFoto Peserta:</B>
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">

<div class="col-sm-4" >
<a href="<?php echo $dataku->photo?>"><img title="Foto Ketua Kelompok" style="border-left-width: 0px; border-right-width: 0px; background-image: none; border-bottom-width: 0px; padding-top: 0px; padding-left: 0px; display: inline; padding-right: 0px; border-top-width: 0px" border="0" alt="Foto Ketua Kelompok" src="<?php echo $dataku->photo?>" width="186" height="246" /></a>
</div>

<div class="col-sm-4" >
<a href="<?php echo $dataku->photo2?>"><img title="Foto Anggota I" style="border-left-width: 0px; border-right-width: 0px; background-image: none; border-bottom-width: 0px; padding-top: 0px; padding-left: 0px; display: inline; padding-right: 0px; border-top-width: 0px" border="0" alt="Foto Anggota I" src="<?php echo $dataku->photo2?>" width="186" height="246" /></a>
</div>

<div class="col-sm-4" >
<a href="<?php echo $dataku->photo3?>"><img title="Foto Anggota II" style="border-left-width: 0px; border-right-width: 0px; background-image: none; border-bottom-width: 0px; padding-top: 0px; padding-left: 0px; display: inline; padding-right: 0px; border-top-width: 0px" border="0" alt="Foto Anggota II" src="<?php echo $dataku->photo3?>" width="186" height="246" /></a>
</div>

</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <B>&nbsp</B>
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <B>&nbsp&nbsp&nbsp&nbsp&nbspScan NIS Peserta:</B>
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
<div class="col-sm-4" >
<a href="<?php echo $dataku->scan1?>"><img title="Foto Scan KTP Ketua" style="border-left-width: 0px; border-right-width: 0px; background-image: none; border-bottom-width: 0px; padding-top: 0px; padding-left: 0px; display: inline; padding-right: 0px; border-top-width: 0px" border="0" alt="Foto Scan KTP Ketua" src="<?php echo $dataku->scan1?>" width="186" height="200" /></a></div>

<div class="col-sm-4" >
<a href="<?php echo $dataku->scan2?>"><img title="Foto Scan KTP Anggota I" style="border-left-width: 0px; border-right-width: 0px; background-image: none; border-bottom-width: 0px; padding-top: 0px; padding-left: 0px; display: inline; padding-right: 0px; border-top-width: 0px" border="0" alt="Foto Scan KTP Anggota I" src="<?php echo $dataku->scan2?>" width="186" height="200" /></a></div>

<div class="col-sm-4" >
<a href="<?php echo $dataku->scan3?>"><img title="Foto Scan KTP Anggota II" style="border-left-width: 0px; border-right-width: 0px; background-image: none; border-bottom-width: 0px; padding-top: 0px; padding-left: 0px; display: inline; padding-right: 0px; border-top-width: 0px" border="0" alt="Foto Scan KTP Anggota II" src="<?php echo $dataku->scan3?>" width="186" height="200" /></a></div>
</div>


<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <B>&nbsp</B>
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" style="padding-left: 30px" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> 
                     *Jika gambar tidak bisa muncul, coba ganti internet provider anda. Beberapa internet provider seperti <B>Three</B> tidak bisa menampilkan foto yang telah anda upload
                    </div>
                  </div>
</div>


                 <div class="form-group">
                 <a href="http://medspinfkunair.com/registration/pdf/form/" target="_blank"> <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"><li class="fa fa-print"></li> CETAK FORM</button>
                </div>

			
                 <div class="form-group">
                 <a href="http://medspinfkunair.com/registration/"> <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button></a>
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
 