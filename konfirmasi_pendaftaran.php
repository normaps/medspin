<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=konfirmasi_pendaftaran.php');
}




if ($_SESSION['guest']==true) {

 $wellcome = "INI ADALAH MENU KONFIRMASI<br/>DATA YANG TELAH DISIMPAN TIDAK BISA DIUBAH !!!";
$simpan = "SIMPAN (LOCKED)";
$act = "";
$act1 = "";
}

else {

 $wellcome = "CEK KEMBALI DATA ANDA<br/>DATA YANG TELAH DISIMPAN TIDAK BISA DIUBAH !!!";
$simpan = "SIMPAN";
$act = "act";
$act1 = "act1";
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
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; KONFIRMASI FORM PENDAFTARAN ONLINE PESERTA MEDSPIN 2015 &laquo;</div><br/><br/><br/>




<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";

$geje=$_POST['email'];

    $nim=$username;
    $qrykoreksi=mysql_query("select * from reg where nim='$nim' LIMIT 1");
    $dataku=mysql_fetch_object($qrykoreksi);



if ($_POST['act']=="add"){
    $sql_add="INSERT INTO reg (nim,tgl_pendaftaran,nama1,nis1,nama2,nis2,nama3,nis3,cp,asal_sekolah,alamat_sekolah,kota,photo) VALUES ("
    ."'".$_POST['nim']."',
    '".$_POST['tgl_pendaftaran']."',
    '".$_POST['nama1']."',
    '".$_POST['nis1']."',
    '".$_POST['nama2']."',
    '".$_POST['nis2']."',
    '".$_POST['nama3']."',
    '".$_POST['nis3']."',
    '".$_POST['cp']."',
    '".$_POST['asal_sekolah']."',
    '".$_POST['alamat_sekolah']."',
 '".$_POST['kota']."',
    '".$_POST['photo']."') ";

     $cekdata="select  nim from reg where nim='$nim'";
     $ada=mysql_query($cekdata)  or die(mysql_error());
     if(mysql_num_rows($ada)>0)
     { die("<div style='text-align:center; margin-top:200; font-size:25;'>DATA ANDA TELAH DISIMPAN DAN TIDAK BISA DIUBAH</div><br/><a href='http://medspinfkunair.com/registration/'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button></a>"); }
    @mysql_query($sql_add); 
   //echo'<script>;window.location ="tampil_anggota.php"</script>';

}

if ($_POST['act1']=="add1"){
$sql_add1 = "UPDATE user SET email = '$geje' WHERE username = '$username'";
 @mysql_query($sql_add1);
}



if ($_POST['tca']=="dda"){
     $cekdata="select  nim from reg where nim='$nim'";
     $ada=mysql_query($cekdata)  or die(mysql_error());
     if(mysql_num_rows($ada)>0)
     { die("<div style='text-align:center; margin-top:200; font-size:25;'>MAAF ANDA TIDAK BISA MENGUBAH DATA YANG TELAH ANDA SIMPAN SEBELUMNYA</div><br/><a href='http://medspinfkunair.com/registration'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button></a>"); }
    @mysql_query($sql_add); 
   echo'<script>maaf</script>';

}
?>

<?php
    if ($_POST['upload'] )
     {
     $user=$_POST['c'];
     //$filename=basename($_FILES["file"]["name"]);
     
     $tmp=$_FILES["file"]["tmp_name"];
      $extension = explode("/", $_FILES["file"]["type"]);
      $name=$user.".".$extension[1];
     
    move_uploaded_file($tmp, "upload/" . $user.".".$extension[1]);
     }  
    
 ?>
  

<div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
<div id="header"><?php echo $wellcome;?></div>
<div id="daftar">
<br/><br/>

<form method="post" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Pendaftaran :
                      <input type="text" name="nim" value="<?php echo $username;?>" readonly="" class="form-control" placeholder="Nomor Pendaftaran" required="required">
                    </div>
                  </div>
</div>



<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Tanggal Pendaftaran :
                      <input type="text" name="tgl_pendaftaran" readonly="" class="form-control"  placeholder="Tanggal Pendaftaran (tanggal anda mengisi form ini)" value="<?php echo $_POST['tgl_pendaftaran']; ?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nama Ketua Kelompok :
                      <input type="text" name="nama1" class="form-control" readonly="" value="<?php echo $_POST['nama1']; ?>" placeholder="Nama Ketua Kelompok" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Induk Siswa (NIS) Ketua Kelompok :
                      <input type="text" name="nis1" class="form-control" readonly="" value="<?php echo $_POST['nis1']; ?>" placeholder="Nomor Induk Siswa (NIS) Ketua Kelompok" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nama Anggota I :
                      <input type="text" name="nama2" class="form-control" readonly="" value="<?php echo $_POST['nama2']; ?>" placeholder="Nama Anggota I" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Induk Siswa (NIS) Anggota I :
                      <input type="text" name="nis2" class="form-control" readonly="" placeholder="Nomor Induk Siswa (NIS)" value="<?php echo $_POST['nis2']; ?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nama Anggota II :
                      <input type="text" name="nama3" class="form-control" readonly="" placeholder="Nama Anggota II" value="<?php echo $_POST['nama3']; ?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Nomor Induk Siswa (NIS) Anggota II :
                      <input type="text" name="nis3" class="form-control" readonly="" placeholder="Nomor Induk Siswa (NIS)" value="<?php echo $_POST['nis3']; ?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Contact Person :
                      <input type="text" name="cp" class="form-control" readonly="" placeholder="Nomor HP Aktif (+62xxxxxxxxxxx)" value="<?php echo $_POST['cp']; ?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Asal Sekolah :
                      <input type="text" name="asal_sekolah" readonly="" class="form-control" placeholder="Asal Sekolah" value="<?php echo $_POST['asal_sekolah']; ?>" required="required">
                    </div>
                  </div>
</div>
<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Alamat Sekolah :
                      <input type="text" name="alamat_sekolah" readonly="" value="<?php echo $_POST['alamat_sekolah']; ?>" class="form-control" placeholder="Alamat Sekolah" height:300px; required="required">
                    </div>
                  </div>
</div>


<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Lokasi Ujian :
                      <input type="text" name="kota" class="form-control" readonly="" value="<?php echo $_POST['kota']; ?>" placeholder="Kota (Regio)" required="required">
                    </div>
                  </div>
</div>


<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Alamat Email :
                      <input type="text" name="email" readonly="" value="<?php echo $_POST['email']; ?>" class="form-control" placeholder="Alamat Sekolah" height:300px; required="required">
                    </div>
                  </div>
</div>

                 <div class="form-group">
                  <button type="submit" class="btn-submit" style="border-radius:10px;"><input type="hidden" name="<?php echo $act; ?>" value="add"><input type="hidden" name="<?php echo $act1; ?>" value="add1"><?php echo $simpan; ?></input></button>
                </div>


            
                
                 <div class="form-group">
                 <a href="http://medspinfkunair.com/registration/pendaftaran.php" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
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