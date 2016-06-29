<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=upload_foto_ketua.php');
}
?>

<html>
<head>
<title>Upload FOTO Pendaftar MEDSPIN FK UNAIR 2015</title>

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
position:center;
overflow:hidden;
cursor:pointer;
text-align:center;
background-color:#ccc;
color:#fff;
width:150px;
height:30px;
float:center;
align:center;
border-radius:10px;
}

.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
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


<div id="header">UPLOAD FOTO KETUA KELOMPOK</div>

<div id="daftar">
<br/><br/>

<form method="post" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">


   
  <div id="content" style="margin-top:10px;height:100%;">


   <form enctype="multipart/form-data" method="POST">



<div class="col-sm-3">

<label class="add-photo-btn">Piih Foto<span><input type="file" name="img" class="upload"/></span></label>

</div>



<div class="col-sm-9">
<p><B>Ketentuan Foto</B>:</p>

<p> 1. Foto berwarna atau hitam putih ukuran 3 x 4</p>

<p> 2. Foto harus berformat <strong>.JPG</strong></p>

<p> 3. Ukuran yang diperbolehkan maksimal <strong>1 Mb</strong></p>

<p> 4. Beberapa internet provider seperti <B>Three</B> tidak bisa digunakan untuk mengupload foto (gambar tidak bisa muncul)</p>

</div>

                 <div class="col-sm-12">
                  <button type="submit" class="btn-submit" style="border-radius:10px;"><input type="hidden" name="submit" value="Upload">Upload</button>
                </div>

   
   </form>





  
 <?
   if(isset($_POST['submit'])){
    $img=$_FILES['img'];
    if($img['name']==''){
     echo "<h2>An Image Please.</h2>";
    }else{
     $filename = $img['tmp_name'];
     $client_id="a718ac58d73bd43";//Your Client ID here
     $handle = fopen($filename, "r");
     $data = fread($handle, filesize($filename));
     $pvars   = array('image' => base64_encode($data));
     $timeout = 30;
     $curl    = curl_init();
     curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
     curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
     curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
     curl_setopt($curl, CURLOPT_POST, 1);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
     $out = curl_exec($curl);
     curl_close ($curl);
     $pms = json_decode($out,true);
     $url=$pms['data']['link'];
     if($url!=""){ 


echo "Cek foto anda, jika sudah benar klik <a href='upload.php?nama=$url'><B>DISINI</B></a>";

      echo "<img src='$url'/>";



     }

else{
      echo "<h2>Ukuran file terlalu besar, coba kembali</h2>";
      echo $pms['data']['error']['message'];
     }
    }
   }
   ?>
  </div>
  <style>
  input{
   border:none;
   padding:8px;
  }
  </style>


          <div class="form-group">
                 <a href="http://registration.medspinfkunair.com/upload_foto.php" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
                </div>      
          
            


   

</div>



 

 </body>
</html>