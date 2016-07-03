<?php session_start();
  // if(!isset($_SESSION["userlogin"])){
  //   header('Location: login.php');
  // } else {
  //   if ($_SESSION["isAdmin"]==false) {
  //         header('Location: peserta_dashboard.php');
  //   }
  // }
require 'connect.php';
$conn = connectDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="MEDSPIN FK UNAIR 2016, Olimpiade Kedokteran Untuk Siswa SMA & Sederajat Se-Asia Tenggara Diselenggarakan Oleh FK UNAIR Pada 8, 21, & 22 November 2015"> 
  <meta name="keywords" content="Login Medspin FK UNAIR, Medspin 2016, Olimpiade Kedokteran, Medspin FK UNAIR 2016">
  <meta name="author" content="Gemma Adhatien & Norma Puspitasari">
  <meta charset="UTF-8"> 

  <title>ADMIN MEDSPIN FK UNAIR 2016</title>
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
  <div class="container-fluid">
    <div class="navbar-header" style="margin:10px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
      </button>
      <h5>MEDSPIN FK UNAIR 2016</h5>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
              <li style="margin:10px;">ADMIN</li>
              <li><a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<?php
  $username = $_GET['username'];
  if (isset($_GET['status'])) {
    $sqlstatus = "UPDATE team SET isApproved = true WHERE username='$username'";
    if ($conn->query($sqlstatus) === FALSE) {
      echo "Error: " . $sqlstatus . "<br>" . $conn->error;
    }
  }
  $sql = "SELECT * FROM team WHERE username='$username'";
  $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
  $metode = $sekolah = $waktu = $kota = $status = $provinsi = '';
  if ($result->num_rows > 0) { 
    //di fetch, ambil satu satu
    while ($data=mysqli_fetch_row($result)) {
      $metode = $data[0];
      if (strpos($metode, 'online')){
        $metode = 'online';
      } else {
        $metode = 'offline';
      }
      $lokasi_id = $data[1];
      $sekolah = $data[2];
      $waktu = $data[3];
      $kota = $data[6];
      $status = $data[7];
      $provinsi = $data[8];
    }
    if ($status == false) {
      $status = 'Not Approved';
    } else {
      $status = 'Approved';
    }
    $lokasi = '';
    $sql = "SELECT * FROM wilayah WHERE id='$lokasi_id'";
    $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    if ($result->num_rows > 0) { 
      while ($data=mysqli_fetch_row($result)) {
        $lokasi = $data[2];
      }
    }
    $sqlimg = "SELECT file FROM bayar_uploads WHERE username='$username'";
    $resultimg = mysqli_query($conn,$sqlimg) or die (mysqli_error($conn));
    $img = '';
    while ($rowimg = $resultimg->fetch_array()) {
      $img = $rowimg['file'];
    }
    echo "<table class='table table-responsive table-bordered table-striped'>
          <tbody style='background-color:#f5f5f0;'>
          <tr> <th> Nomor Peserta</th><td>: ".$username."</td></tr>
          <tr> <th> Sekolah</th><td>: ".$sekolah."</td></tr>
          <tr> <th> Kota</th><td>: ".$kota."</td></tr>
          <tr> <th> Provinsi</th><td>: ".$provinsi."</td></tr>
          <tr> <th> Metode Ujian</th><td>: ".$metode."</td></tr>
          <tr> <th> Lokasi </th><td>: ".$lokasi."</td></tr>
          <tr> <th> Status</th><td>: ".$status."</td></tr>
          <tr> <th> Bukti Bayar</th><td>: <a href='uploads/".$img."'>Download Bukti Bayar</a></td></tr>
          <tr> <th> Waktu Registrasi</th><td>: ".$waktu."</td></tr>
          </tody></table>
          <a href='admin.php'><button type='submit' class='btn btn-primary text-center' style='margin-right:10px;'> Back </button></a>
          <a href='detail.php?username=".$username."&status=1'><button type='submit' class='btn btn-primary text-center'> Approve </button></a><hr>";
  }
  $sql = "SELECT * FROM team WHERE username='$username'";
  $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
  $email = '';
  if ($result->num_rows > 0) { 
    //di fetch, ambil satu satu
    while ($data=mysqli_fetch_row($result)) {
      $email = $data[5];
      $sqlMember = "SELECT * FROM member WHERE email='$email'";
      $resultMember = mysqli_query($conn,$sqlMember) or die (mysqli_error($conn));
      $nama = $nis = $hp = "";
      if ($resultMember->num_rows > 0) { 
        //di fetch, ambil satu satu
        while ($dataMember=mysqli_fetch_row($resultMember)) {
          $nama  = $dataMember[0];
          $nis  = $dataMember[1];
          $ketua = $dataMember[3];
          $hp = $dataMember[4];
          echo '<center><div class="col-md-8" id="card" style="background-color:#f5f5f0; margin:20px; margin-left:15%; padding:10px; border-radius:10px;">
                
                <h3 class="media-heading" style="padding-top:5px;">'.$nama.'</h3>';
          if ($ketua==1) {
            echo "<small>Ketua</small>";
          } else{
            echo "<small>Anggota</small>";
          }
          $sqlimg = "SELECT file FROM tbl_uploads WHERE email='$email'";
          $resultimg = mysqli_query($conn,$sqlimg) or die (mysqli_error($conn));
          $img = $kartu = '';
          while ($rowimg = $resultimg->fetch_array()) {
            if (strpos($rowimg['file'], 'foto') == TRUE) {
              $img = $rowimg['file'];
            } else {
              $kartu = $rowimg['file'];
            }
          }
          echo '
                <hr>
                <table class="table table-responsive table-striped">
                <tr><th>NIS</th>
                <td>: '.$nis.'</td></tr>
                <tr><th>Email</th>
                <td>: '.$email.'</td></tr>
                <tr><th>No HP</th>
                <td>: '.$hp.'</td></tr>
                <tr><th>Foto</th>
                <td>: <a href="uploads/'.$img.'">Download Foto</td></tr>
                <tr><th>Katu Pelajar</th>
                <td>: <a href="uploads/'.$kartu.'">Download Kartu Pelajar</td></tr>
                </table>
                </div></center>';
        }
      }
    }
  }
?>
</div>
<?php
  require 'footer.php'
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>