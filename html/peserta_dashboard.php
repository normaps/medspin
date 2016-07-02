<?php
  // belum ditangani kalau yang login adalah admin gabisa masuk peserta_dashboard
  session_start();
  if(!isset($_SESSION["userlogin"])){
    header('Location: login.php');
  } else {
    if ($_SESSION["isAdmin"]==true) {
          header('Location: admin_dashboard.php');
    }    
    $nomor_peserta =$_SESSION["userlogin"];
  }
  require 'connect.php';
  $conn = connectDB();
  //ambil data tim yang sedang login
  $sql = "SELECT DISTINCT * FROM team WHERE username='$nomor_peserta'";
  $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

  $telepon = $asal_sekolah = $kota = $lokasi_id = $metode = "";

  if ($result->num_rows > 0) { 
    //di fetch, ambil satu satu
    while ($datatim=mysqli_fetch_row($result))
    {
      $metode = $datatim[0];
      $lokasi_id = $datatim[1];
      $asal_sekolah = $datatim[2];
      $kota = $datatim[6]; //masih berbentuk nomor
      $status = $datatim[7];
    }
  }
  //ambil nama lokasi dengan id tertentu
  $sqlLokasi = "SELECT DISTINCT nama FROM wilayah WHERE id='$lokasi_id'";
  $resultLokasi = mysqli_query($conn,$sqlLokasi) or die (mysqli_error($conn));
  $lokasi="";
  if ($resultLokasi->num_rows > 0) {
    //di fetch, ambil satu satu
    while ($dataLokasi=mysqli_fetch_row($resultLokasi))
    {
      $lokasi = $dataLokasi[0];
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="MEDSPIN FK UNAIR 2015, Olimpiade Kedokteran Untuk Siswa SMA & Sederajat Se-Asia Tenggara Diselenggarakan Oleh FK UNAIR Pada 8, 21, & 22 November 2015"> 
  <meta name="keywords" content="Login Medspin FK UNAIR, Medspin 2015, Olimpiade Kedokteran, Medspin FK UNAIR 2015">
  <meta name="author" content="Gemma Adhatien & Norma Puspitasari">
  <meta charset="UTF-8"> 

  <title>PESERTA MEDSPIN FK UNAIR 2016</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <style type="text/css">
    *{
      font-family: 'Open Sans', sans-serif;
    }
  </style>
</head>
<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);">
<nav class="navbar navbar-inverse" style="color:white; background-color:#028fcc; border-color:#028fcc;">
 <div class="navbar-inner">
  <div class="container-fluid">
    <div class="navbar-header" style="margin:10px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
      </button>
      <h5>MEDSPIN FK UNAIR 2016</h5>
    </div>
    <div class="collapse navbar-collapse" role="navigation" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="peserta_dashboard.php" style="color:white;">Profil</a></li>
        <li><a href="peserta_infolomba.php" style="color:white;">Info Lomba</a></li>
        <li><a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</div>
</nav>
<div class="container">
  <div class="page-header">
    <h1>Welcome, <?php echo $nomor_peserta;?></h1>
  </div>
  <div class="col-md-6" style="text-align:left;">
    <div class="col-md-6">
        <b >Nomor Peserta: </b>
    </div>
    <div class="col-md-6">
        <p style="text-align:right" id='nomor_peserta'><?php echo $nomor_peserta;?></p>
    </div>
    <div class="col-md-6">
        <b>Asal Sekolah: </b>
    </div>
    <div class="col-md-6">
        <p style="text-align:right" id='sekolah'><?php echo $asal_sekolah;?></p>
    </div>
    <div class="col-md-6">
        <b>Kota:</b>
    </div>
    <div class="col-md-6">
        <p style="text-align:right" id='alamat'><?php echo $kota;?></p>
    </div>  
</div>
<div class="col-md-6" style="text-align:left;">
    <div class="col-md-6">
        <b>Metode Ujian:</b>
    </div>
    <div class="col-md-6">
        <p style="text-align:right" id='ujian'>
          <?php 
            if (strpos($metode, 'online') === true)
              echo "Online";
            else
              echo "Offline";
          ?>
        </p>
    </div>
    <div class="col-md-6">
        <b>Lokasi:</b>
    </div>
    <div class="col-md-6">
        <p style="text-align:right" id='lokasi'><?php echo $lokasi;?></p>
    </div>
    <div class="row">  
      <div class="col-md-6">
        <button class="btn btn-primary">Ubah Password</button>
      </div>
      <div class="col-md-6">
        <button class="btn btn-primary pull-right" style="text-align:right">Cetak Form</button>
      </div>
    </div>
  </div>
  <hr>
  <div class="row" style="clear:both; margin-left:13%; padding:10px;">
    <?php
      //ambil data member tim yang sedang login
      $sqlEmail = "SELECT email FROM team WHERE username='$nomor_peserta'";
      $resultEmail = mysqli_query($conn,$sqlEmail) or die (mysqli_error($conn));
      if ($resultEmail->num_rows > 0) { 
        //di fetch, ambil satu satu
        while ($dataEmail=mysqli_fetch_row($resultEmail))
        {
          $email = $dataEmail[0];
          //ambil data member tim yang sedang login
          $img = '';
          $sqlimg = "SELECT file FROM tbl_uploads WHERE email='$email'";
          $resultimg = mysqli_query($conn,$sqlimg) or die (mysqli_error($conn));
          while ($rowimg = $resultimg->fetch_array()) {
            if (strpos($rowimg['file'], 'foto') === true) {
              $img = $rowimg['file'];
              echo $img;
            }
          }
          $sqlMember = "SELECT * FROM member WHERE email='$email'";
          $resultMember = mysqli_query($conn,$sqlMember) or die (mysqli_error($conn));
          $nama = $nis = $hp = "";
          if ($resultMember->num_rows > 0) { 
            //di fetch, ambil satu satu
            while ($dataMember=mysqli_fetch_row($resultMember))
            {
              $nama  = $dataMember[0];
              $nis  = $dataMember[1];
              $ketua = $dataMember[3];
              $hp = $dataMember[4];
              echo '<div class="row col-md-3" id="card" style="background-color:white; padding:10px; margin:20px;border-radius:10px;">
                    <div class="row">
                      <center>
                      <img src="uploads/'.$img.'" name="peserta" width="140" height="140" border="0" class="img-circle">
                      <h3 class="media-heading">'.$nama.'</h3>';
              if ($ketua==1) {
                echo "<small>Ketua</small>";
              } else{
                echo "<small>Anggota</small>";
              }
              echo '</center></div>
                    <hr>
                    <div class="text-left">
                      <div><b>NIS:</b></div>
                      <div>'.$nis.'</div>
                      <div><b>Email:</b></div>
                      <div>'.$email.'</div>
                      <div><b>No HP:</b></div>
                      <div>'.$hp.'</div>
                    </div>
                    </div>';
            }
          }
        }
      }

    ?>   
  </div>
</div>
<?php
  require 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>

