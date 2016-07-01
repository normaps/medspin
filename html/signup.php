<!DOCTYPE html>
<?php
    require 'connect.php';
    $conn = connectDB();
?>
<head>
  <meta name="description" content="MEDSPIN FK UNAIR 2015=6, Olimpiade Kedokteran Untuk Siswa SMA & Sederajat Se-Asia Tenggara Diselenggarakan Oleh FK UNAIR Pada 8, 21, & 22 November 2015"> 
  <meta name="keywords" content="Login Medspin FK UNAIR, Medspin 2015, Olimpiade Kedokteran, Medspin FK UNAIR 2016">
  <meta name="author" content="Gemma Adhatien & Norma Puspitasari">
  <meta charset="UTF-8"> 

  <title>PENDAFTARAN ONLINE MEDSPIN FK UNAIR 2016</title>
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

<div clas="row" style=" font-size:20; font-weight:700; color:white;  background-color:#028fcc; padding:20px 50px; top:0; left:0; right:0; text-align:center;">
  <h2>PENDAFTARAN ONLINE MEDSPIN 2016</h2>
</div>
<div class="row" style="margin:0 auto; padding:20px;">
  <?php 
    echo '<form role="form" method="post" action="upload.php" style="" enctype="multipart/form-data">';
  ?>
    <div style="clear:both; margin:auto;" id="data_peserta">
      <div class="row">
        <div class="card col-md-4" style="border: 4px solid #bdbdbd;">
          <div class="card-header" style=" text-align:center;">
            <h4 class="card-title">Peserta #1</h4>
            <h6 class="card-subtitle text-muted">Ketua</h6>
          </div>
          <div class="card-block">
            <div class="form-group">
              <label for="nama">Nama Lengkap:</label>
              <input class="form-control" name="nama1" placeholder="Masukkan Nama Lengkap Peserta #1" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email1" placeholder="Masukkan Email Peserta #1" required>
            </div>
            <div class="form-group">
              <label for="nis">NIS:</label>
              <input class="form-control" name="nis1" placeholder="Masukkan NIS Peserta #1" required>
            </div>
            <div class="form-group">
              <label for="phone">No HP:</label>
              <input class="form-control" name="phone1" placeholder="Nomor HP Peserta #1" required>
            </div>
            <div class="form-group">
              <label for="uploadFoto">Pas Foto 3x4</label>
              <input type="file" name="uploadFoto[]" required>
              <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
            </div>
            <div class="form-group">
              <label for="uploadKartu">Kartu Pelajar</label>
              <input type="file" name="uploadNIS[]" required>
              <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
            </div>
          </div>
        </div>
        <div class="card col-md-4" style="border: 4px solid #bdbdbd;">
          <div class="card-header" style="text-align:center;">
            <h4 class="card-title">Peserta #2</h4>
            <h6 class="card-subtitle text-muted">Anggota</h6>
          </div>
          <div class="card-block">
            <div class="form-group">
              <label for="nama">Nama Lengkap:</label>
              <input class="form-control" name="nama2" placeholder="Masukkan Nama Lengkap Peserta #2" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email2" placeholder="Masukkan Email Peserta #2" required>
            </div>
            <div class="form-group">
              <label for="nis">NIS:</label>
              <input class="form-control" name="nis2" placeholder="Masukkan NIS Peserta #2" required>
            </div>
            <div class="form-group">
              <label for="phone">No HP:</label>
              <input class="form-control" name="phone2" placeholder="Nomor HP Peserta #2" required>
            </div>
            <div class="form-group">
              <label for="uploadFoto">Pas Foto 3x4</label>
              <input type="file" name="uploadFoto[]" required>
              <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
            </div>
            <div class="form-group">
              <label for="uploadKartu">Kartu Pelajar</label>
              <input type="file" name="uploadNIS[]" required>
              <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
            </div>
          </div>
        </div>
        <div class="card col-md-4" style="border: 4px solid #bdbdbd;">
          <div class="card-header" style="text-align:center;">
            <h4 class="card-title">Peserta #3</h4>
            <h6 class="card-subtitle text-muted">Anggota</h6>
          </div>
          <div class="card-block">
            <div class="form-group">
              <label for="nama">Nama Lengkap:</label>
              <input class="form-control" name="nama3" placeholder="Masukkan Nama Lengkap Peserta #3" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email3" placeholder="Masukkan Email Peserta #3" required>
            </div>
            <div class="form-group">
              <label for="nis">NIS:</label>
              <input class="form-control" name="nis3" placeholder="Masukkan NIS Peserta #3" required>
            </div>
            <div class="form-group">
              <label for="phone">No HP:</label>
              <input class="form-control" name="phone3" placeholder="Nomor HP Peserta #3" required>
            </div>
            <div class="form-group">
              <label for="uploadFoto">Pas Foto 3x4</label>
              <input type="file" name="uploadFoto[]" required>
              <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
            </div>
            <div class="form-group">
              <label for="uploadKartu">Kartu Pelajar</label>
              <input type="file" name="uploadNIS[]" required>
              <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="col-sm-8 col-sm-offset-2" style="margin-top:10px;">
        <div class="panel panel-default" id= "card-info" style="background-color:#eeeeee;">
          <div class="panel-body">
            <div class='col-sm-8 col-sm-offset-2' id="sign_up_form">
              <div class="form-group">
                <label for="sekolah">Asal Sekolah:</label>
                <input class="form-control" name="sekolah" placeholder="Masukkan nama sekolah Anda" required>
              </div>
              <div class="form-group">
                <label for="sekolah">Kota Asal:</label>
                <input class="form-control" name="kota" placeholder="Masukkan kota asal sekolah Anda" required>
              </div>
              <div class="form-group">
                <label for="select_lokasi">Lokasi:</label>
                <select class="form-control" name="lokasi[]" id="lokasi">
                  <option value='all'>Pilih Lokasi</option>
                  <?php
                    $sql2 = "SELECT DISTINCT nama FROM wilayah";
                    $result2 = mysqli_query ($conn, $sql2);
                    while($row = mysqli_fetch_assoc($result2)){
                      if ($row['nama'] != 'Surabaya Humas') {
                        echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';
                      }
                    }
                  ?>
                </select>
              </div>
              <div id="panwil">
                <div class="radio">
                  <label><input type="radio" name="metode_ujian" value="offline_panwil" required>Ujian offline</label>
                </div>
              </div>
              <div class="radio">
                <label><input type="radio" name="metode_ujian" value="online_panwil" required>Ujian online</label>
              </div>
              <script>
                function loadMorePost(){
                  $('#update').html("");
                  $.ajax({
                  url: "api-panwil.php", 
                  method: "GET",
                  data: {'lokasi': $('#lokasi').val()},
                  dataType: "json",
                  }).done(function(data){
                    if (data[0] == false) {
                      $('#panwil').html('<div class="radio">' +
                            '<label>'+ '<input type="radio" name="metode_ujian" value="offline" disabled>' + 'Ujian offline tidak tersedia</label>' +
                          '</div>');
                    } else {
                      $('#panwil').html('<div class="radio">' +
                            '<label>'+ '<input type="radio" name="metode_ujian" value="offline_panwil" required>' + 'Ujian offline</label>' +
                          '</div>');
                    }
                  }).fail(function(){
                    alert('error');
                  });
                }
                $(document).ready(function(){
                  $('#lokasi').on('change', loadMorePost);
                });
              </script>
              <div class="form-group">
                <label for="uploadBayar">Upload Bukti Pembayaran</label>
                <input type="file" name="uploadBayar" required>
                <p class="label-control help-block" style="font-size:12px;">Max 1 MB</p>
              </div>
              <div class="text-center">
                <button type="submit" name= "btn-upload"class="btn btn-primary">DAFTAR</button>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
<?php
  require 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
