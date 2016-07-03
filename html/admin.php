<?php session_start();
  // if(!isset($_SESSION["userlogin"])){
  //   header('Location: login.php');
  // } else {
  //   if ($_SESSION["isAdmin"]==false) {
  //         header('Location: peserta_dashboard.php');
  //   }
  // }
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
  <div class="page-header">
    <h3>LIST PESERTA MEDSPIN 2016</h3>
  </div>
<div class="row">
  <form role="form" method="get" action="admin.php"> 
      <div class="form-group col-md-4">
        <label for="select_lokasi">Lokasi:</label>
        <select class="form-control" name="lokasi">
          <option <?php if (!isset($_GET['lokasi']) || $_GET['lokasi']=='--All--'){ echo " selected"; $_GET['lokasi']='--All--';}?>>--All--</option>
          <?php 
            require 'connect.php';
            $conn = connectDB();
            $sqlLokasi = "SELECT DISTINCT nama FROM wilayah";
            $resultLokasi = mysqli_query($conn,$sqlLokasi) or die (mysqli_error($conn));            
            if ($resultLokasi->num_rows > 0) { 
              //di fetch, ambil satu satu
              while ($dataLokasi=mysqli_fetch_row($resultLokasi))
              {
                echo "<option ";
                if ($_GET['lokasi']==$dataLokasi[0]) echo " selected";
                echo ">".$dataLokasi[0]."</option>";
              }
            }
          ?>
        </select>
      </div>      
      <div class="col-md-4" style="margin-top:25px;">
        <button type="submit" class="btn btn-default" style="background-color:#FD2050;color:white;">LIHAT</button>
        <a href="admin.php"><button type="button" class="btn btn-default" style="background-color:#FD2050;color:white;">RESET</button></a>
      </div>
  </form>
</div>
<div class="row">            
          <?php
            $sqlLokasi2='';
            if(!isset($_GET['lokasi']) || ($_GET['lokasi']) =='--All--') {
              $sqlLokasi2 = "SELECT * FROM wilayah";
            } else {
              $lokasi = $_GET['lokasi'];
              $sqlLokasi2 = "SELECT * FROM wilayah WHERE nama='$lokasi'";            
            }
            $resultLokasi2 = mysqli_query($conn,$sqlLokasi2) or die (mysqli_error($conn)); 
            $lokasi_id=0;
            
            if ($resultLokasi2->num_rows > 0) {
              //di fetch, ambil satu satu
              while ($dataLokasi2=mysqli_fetch_row($resultLokasi2))
              {
                //bisa lebih dari 1, karena ada yang online ada yang offline
                $lokasi_id=$dataLokasi2[0];
                $nama_lokasi=$dataLokasi2[2];
                $sqlTable ="";
                if($lokasi_id==0) {
                  //all
                  $sqlTable = "SELECT * FROM team";
                } else {
                  $sqlTable = "SELECT * FROM team WHERE lokasi_id='$lokasi_id'"; //diambil yang offline dan online
                }
                 $resultTable = mysqli_query($conn,$sqlTable) or die (mysqli_error($conn)); 
                  if ($resultTable->num_rows > 0) {
                    echo '<div class="table-responsive">
                          <table class="table table-striped table table-responsive table table-bordered">
                            <thead class="thead-default">
                              <tr>
                                <th>Waktu Registrasi</th>
                                <th>Nama Ketua</th>
                                <th>Email Ketua</th>
                                <th>Telepon</th>
                                <th>Asal SMA</th>
                                <th>Lokasi</th>
                                <th>Metode</th>
                                <th>Status</th>
                                <th>View</th>
                              </tr>
                            </thead>
                            <tbody>'; 
                    //di fetch, ambil satu satu
                    while ($dataTable=mysqli_fetch_row($resultTable)) //
                    {
                      $username = $dataTable[4];
                      $metode='';
                      if ($dataTable[0]=='online_panwil') {
                        $metode="online";
                      } else if ($dataTable[0]=='offline_panwil') {
                        $metode="offline";
                      } else {
                        $metode= $dataTable[0];
                      }
                      //ambil status isApproved
                      $status = '';
                      if ($dataTable[7] == 0) {
                        $status = "Not Approved";
                      } else {
                        $status = "Approved";
                      }
                      $sqlKetua = "SELECT * FROM member WHERE email='$dataTable[5]'"; //email sudah dipastikan email ketua
                      $resultKetua = mysqli_query($conn,$sqlKetua) or die (mysqli_error($conn)); 
                      $namaKetua=$teleponKetua="";
                      while($dataKetua=mysqli_fetch_row($resultKetua)) {
                        if ($dataKetua[3] == 1) {
                          $namaKetua=$dataKetua[0];
                          $teleponKetua=$dataKetua[4];
                          echo '<tr>
                            <td>'.$dataTable[3].'</td> 
                            <td>'.$namaKetua.'</td>
                            <td>'.$dataTable[5].'</td>
                            <td>'.$teleponKetua.'</td>
                            <td>'.$dataTable[2].'</td>
                            <td>'.$nama_lokasi.'</td>
                            <td>'.$metode.'</td>
                            <td><b>'.$status.'</b></td>
                            <td><a href="detail.php?username='.$username.'"><button class="btn btn-primary">details</button></a></td>
                            </tr>';
                        } 
                      }
                  }
                }
              } //kalau gaada, berarti All
              } else {
                echo "<div class='alert alert-warning' style='text-align: center; margin-top:10px;'>
                  Mohon pilih lokasi yang diinginkan
                  </div>";  
              }           
          ?>
        </tbody>
      </table>
      </div>
</div>  
</div>
<?php
  require 'footer.php'
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>