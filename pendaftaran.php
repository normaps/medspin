<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=pendaftaran.php');
}




if ($_SESSION['guest']==true) {
$panel = "UBAH PASSWORD (LOCKED)" ;

 $wellcome = "INI ADALAH TEMPAT PESERTA MENGISI FORMULIR PENDAFTARAN <br/> ANDA MASUK SEBAGAI TAMU, ANDA BISA MENCOBA MENGISI FORMULIR INI";
}

else {
$panel = "UBAH PASSWORD" ;

 $wellcome = "PENGISIAN DATA FORMULIR HANYA BISA DILAKUKAN SEKALI<br/>ISILAH DATA DENGAN BENAR DAN HATI-HATI !!!";
}

?>

<html>
<head>
<title>Form Pendaftaran Medspin FK UNAIR 2015</title>
  <link href="css/ecf.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <script src="js/jquery.js" type='text/javascript' ></script>
  
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

    }
</style>

</head>
<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);"> 
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; FORM PENDAFTARAN ONLINE PESERTA MEDSPIN 2015 &laquo;</div><br/><br/><br/>



<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
    $nim=$username;
    $qrykoreksi=mysql_query("select * from reg where nim='$nim' LIMIT 1");
    $dataku=mysql_fetch_object($qrykoreksi);

   $qrykoreksi=mysql_query("select * from user where username='$nim' LIMIT 1");
    $dataku1=mysql_fetch_object($qrykoreksi);

$select1='<select name="kota" style="width:640px; border-radius:4px; height:48px;" onchange="changeValue();">
<option id="A"                  value="(anda belum mengisi lokasi uian)"> Pilih Lokasi Ujian </option>
<option id="Bandung" 		value="Bandung">Bandung</option>
<option id="Banjarmasin" 	value="Banjarmasin">Banjarmasin</option>
<option id="Banyuwangi"		value="Banyuwangi">Banyuwangi</option>
<option id="Blitar" 		value="Blitar">Blitar</option>
<option id="Bogor" 		value="Bogor">Bogor</option>
<option id="Bojonegoro" 	value="Bojonegoro">Bojonegoro</option>
<option id="Denpasar" 		value="Denpasar">Denpasar</option>
<option id="Gresik" 		value="Gresik">Gresik</option>
<option id="Jakarta" 		value="Jakarta">Jakarta</option>
<option id="Jember" 		value="Jember">Jember</option>
<option id="Jombang" 		value="Jombang">Jombang</option>
<option id="Kediri" 		value="Kediri">Kediri</option>
<option id="Lamongan" 		value="Lamongan">Lamongan</option>
<option id="Madiun" 		value="Madiun">Madiun</option>
<option id="Makassar" 		value="Makassar">Makassar</option>
<option id="Malang" 		value="Malang">Malang</option>
<option id="Mataram" 		value="Mataram">Mataram</option>
<option id="Mojokerto" 		value="Mojokerto">Mojokerto</option>
<option id="Nganjuk" 		value="Nganjuk">Nganjuk</option>
<option id="Padang" 		value="Padang">Padang</option>
<option id="Pamekasan" 		value="Pamekasan">Pamekasan</option>
<option id="Pasuruan" 		value="Pasuruan">Pasuruan</option>
<option id="Pekanbaru" 		value="Pekanbaru">Pekanbaru</option>
<option id="Probolinggo" 	value="Probolinggo">Probolinggo</option>
<option id="Samarinda" 		value="Samarinda">Samarinda</option>
<option id="Sidoarjo" 		value="Sidoarjo">Sidoarjo</option>
<option id="Solo" 		value="Solo">Solo</option>
<option id="Surabaya" 		value="Surabaya">Surabaya</option>
<option id="Tuban" 		value="Tuban">Tuban</option>
<option id="Tulungagung" 	value="Tulungagung">Tulungagung</option>
<option id="Yogyakarta" 	value="Yogyakarta">Yogyakarta</option>
<option id="Malaysia" 	value="Malaysia">Malaysia</option>

</select>';


$select2=' Lokasi Ujian: <input type="text" name="kota" value="online" readonly="" class="form-control"  required="required">';


if($_SESSION['online']==true){
 $select = $select2;
}

else {
$select = $select1;
}





if ($_POST['tca']=="dda"){
     $cekdata="select  nim from reg where nim='$nim'";
     $ada=mysql_query($cekdata)  or die(mysql_error());
     if(mysql_num_rows($ada)>0)
     { die("<div style='text-align:center; margin-top:200; font-size:25;'>MAAF DATA YANG TELAH DISIMPAN TIDAK BISA DIUBAH</div><br/><a href='http://medspinfkunair.com/registration'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button></a>"); }
    @mysql_query($sql_add); 
   echo'<script>maaf</script>';

}

 if (empty($dataku->tgl_pendaftaran)) {
    $dataku->tgl_pendaftaran = "Tanggal anda mengisi form ini";
  } else {
    $dataku->tgl_pendaftaran = $dataku->tgl_pendaftaran;
  }

  


?>





  

<div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
<div id="header"><?php echo $wellcome; ?></div>
<div id="daftar">
<br/><br/>

<form method="post" action="konfirmasi_pendaftaran.php" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">No Pendaftaran :
                      <input type="text" name="nim" value="<?php echo $username;?>" readonly="" class="form-control" placeholder="Nomor Pendaftaran" required="required">
                    </div>
                  </div>
</div>



<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Tanggal Pendaftaran :
                     
					 <select name="tgl_pendaftaran"  style="width:640px; border-radius:4px; height:48px;" onchange="changeValue();">
<option id="AA" value="<?php echo $dataku->tgl_pendaftaran;?>"><?php echo $dataku->tgl_pendaftaran;?></option>
<option id="10" value="10 Agustus 2015">10 Agustus 2015</option>
<option id="11" value="11 Agustus 2015">11 Agustus 2015</option>
<option id="12" value="12 Agustus 2015">12 Agustus 2015</option>
<option id="13" value="13 Agustus 2015">13 Agustus 2015</option>
<option id="14" value="14 Agustus 2015">14 Agustus 2015</option>
<option id="15" value="15 Agustus 2015">15 Agustus 2015</option>
<option id="16" value="16 Agustus 2015">16 Agustus 2015</option>
<option id="17" value="17 Agustus 2015">17 Agustus 2015</option>
<option id="18" value="18 Agustus 2015">18 Agustus 2015</option>
<option id="19" value="19 Agustus 2015">19 Agustus 2015</option>
<option id="20" value="20 Agustus 2015">20 Agustus 2015</option>
<option id="21" value="21 Agustus 2015">21 Agustus 2015</option>
<option id="22" value="22 Agustus 2015">22 Agustus 2015</option>
<option id="23" value="23 Agustus 2015">23 Agustus 2015</option>
<option id="24" value="24 Agustus 2015">24 Agustus 2015</option>
<option id="25" value="25 Agustus 2015">25 Agustus 2015</option>
<option id="26" value="26 Agustus 2015">26 Agustus 2015</option>
<option id="27" value="27 Agustus 2015">27 Agustus 2015</option>
<option id="28" value="28 Agustus 2015">28 Agustus 2015</option>
<option id="29" value="29 Agustus 2015">29 Agustus 2015</option>
<option id="30" value="30 Agustus 2015">30 Agustus 2015</option>
<option id="31" value="31 Agustus 2015">31 Agustus 2015</option>
<option id="s1" value="01 September 2015">01 September 2015</option>
<option id="s2" value="02 September 2015">02 September 2015</option>
<option id="s3" value="03 September 2015">03 September 2015</option>
<option id="s4" value="04 September 2015">04 September 2015</option>
<option id="s5" value="05 September 2015">05 September 2015</option>
<option id="s6" value="06 September 2015">06 September 2015</option>
<option id="s7" value="07 September 2015">07 September 2015</option>
<option id="s8" value="08 September 2015">08 September 2015</option>
<option id="s9" value="09 September 2015">09 September 2015</option>
<option id="s10" value="10 September 2015">10 September 2015</option>
<option id="s11" value="11 September 2015">11 September 2015</option>
<option id="s12" value="12 September 2015">12 September 2015</option>
<option id="s13" value="13 September 2015">13 September 2015</option>
<option id="s14" value="14 September 2015">14 September 2015</option>
<option id="s15" value="15 September 2015">15 September 2015</option>
<option id="s16" value="16 September 2015">16 September 2015</option>
<option id="s17" value="17 September 2015">17 September 2015</option>
<option id="s18" value="18 September 2015">18 September 2015</option>
<option id="s19" value="19 September 2015">19 September 2015</option>
<option id="s20" value="20 September 2015">20 September 2015</option>
<option id="s21" value="21 September 2015">21 September 2015</option>
<option id="s22" value="22 September 2015">22 September 2015</option>
<option id="s23" value="23 September 2015">23 September 2015</option>
<option id="s24" value="24 September 2015">24 September 2015</option>
<option id="s25" value="25 September 2015">25 September 2015</option>
<option id="s26" value="26 September 2015">26 September 2015</option>
<option id="s27" value="27 September 2015">27 September 2015</option>
<option id="s28" value="28 September 2015">28 September 2015</option>
<option id="s29" value="29 September 2015">29 September 2015</option>
<option id="s30" value="30 September 2015">30 September 2015</option>
<option id="o1" value="01 Oktober 2015">01 Oktober 2015</option>
<option id="o2" value="02 Oktober 2015">02 Oktober 2015</option>
<option id="o3" value="03 Oktober 2015">03 Oktober 2015</option>
<option id="o4" value="04 Oktober 2015">04 Oktober 2015</option>
<option id="o5" value="05 Oktober 2015">05 Oktober 2015</option>
<option id="o6" value="06 Oktober 2015">06 Oktober 2015</option>
<option id="o7" value="07 Oktober 2015">07 Oktober 2015</option>
<option id="o8" value="08 Oktober 2015">08 Oktober 2015</option>
<option id="o9" value="09 Oktober 2015">09 Oktober 2015</option>
<option id="o10" value="10 Oktober 2015">10 Oktober 2015</option>
<option id="o11" value="11 Oktober 2015">11 Oktober 2015</option>
<option id="o12" value="12 Oktober 2015">12 Oktober 2015</option>
<option id="o13" value="13 Oktober 2015">13 Oktober 2015</option>
<option id="o14" value="14 Oktober 2015">14 Oktober 2015</option>
<option id="o15" value="15 Oktober 2015">15 Oktober 2015</option>
<option id="o16" value="16 Oktober 2015">16 Oktober 2015</option>
<option id="o17" value="17 Oktober 2015">17 Oktober 2015</option>
<option id="o18" value="18 Oktober 2015">18 Oktober 2015</option>
<option id="o19" value="19 Oktober 2015">19 Oktober 2015</option>
<option id="o20" value="20 Oktober 2015">20 Oktober 2015</option>
<option id="o21" value="21 Oktober 2015">21 Oktober 2015</option>
<option id="o22" value="22 Oktober 2015">22 Oktober 2015</option>
<option id="o23" value="23 Oktober 2015">23 Oktober 2015</option>
<option id="o24" value="24 Oktober 2015">24 Oktober 2015</option>
<option id="o25" value="25 Oktober 2015">25 Oktober 2015</option>
<option id="o26" value="26 Oktober 2015">26 Oktober 2015</option>
<option id="o27" value="27 Oktober 2015">27 Oktober 2015</option>
<option id="o28" value="28 Oktober 2015">28 Oktober 2015</option>
<option id="o29" value="29 Oktober 2015">29 Oktober 2015</option>
<option id="o30" value="30 Oktober 2015">30 Oktober 2015</option>
<option id="o31" value="31 Oktober 2015">31 Oktober 2015</option>
<option id="n1" value="01 November 2015">01 November 2015</option>




</select>
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Nama Ketua Kelompok :
                      <input type="text" name="nama1" class="form-control" value="<?php echo $dataku->nama1?>" placeholder="Nama Ketua Kelompok" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Nomor Induk Siswa (NIS) Ketua Kelompok :
                      <input type="text" name="nis1" class="form-control" value="<?php echo $dataku->nis1?>" placeholder="NIS Ketua Kelompok" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Nama Anggota I
                      <input type="text" name="nama2" class="form-control" value="<?php echo $dataku->nama2?>" placeholder="Nama Anggota I" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Nomor Induk Siswa (NIS)Anggota 1 :
                      <input type="text" name="nis2" class="form-control" placeholder="NIS Anggota 1" value="<?php echo $dataku->nis2?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Nama Anggota II :
                      <input type="text" name="nama3" class="form-control" placeholder="Nama Anggota II" value="<?php echo $dataku->nama3?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Nomor Induk Siswa (NIS) Anggota 2 :
                      <input type="text" name="nis3" class="form-control" placeholder="NIS Anggota 2" value="<?php echo $dataku->nis3?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Contact Person : 
                      <input type="text" name="cp" class="form-control" placeholder="Nomor HP Aktif (+62xxxxxxxxxxx)" value="<?php echo $dataku->cp?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Asal Sekolah :
                      <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" value="<?php echo $dataku->asal_sekolah?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Alamat Sekolah :
                      <input type="text" name="alamat_sekolah" value="<?php echo $dataku->alamat_sekolah?>" class="form-control" placeholder="Alamat Sekolah" height:300px; required="required">
                    </div>
                  </div>
</div>


<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
			<?php echo $select ?>		 
					 
					 
                    </div>
                  </div>
</div>





<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">Alamat Email :
                      <input type="text" name="email" class="form-control" value="<?php echo $dataku1->email?>" placeholder="Alamat email (untuk pengembalian jika lupa password)" required="required">
                    </div>
                  </div>
</div>


                 <div class="form-group">
                  <button type="submit" class="btn-submit" style="border-radius:10px;"><input type="hidden" name="tca" value="dda">LANJUT</input></button>
                </div>


              <div class="form-group">
                 <a href="http://medspinfkunair.com/registration" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
                </div>
</form>
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