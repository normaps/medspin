<?php
  require 'connect.php';
  $conn = connectDB();
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "medspin";
  mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
  mysql_select_db($dbname) or die('database selection problem');
  
  if(isset($_POST['sekolah'])) {
    $sekolah = $_POST['sekolah'];
    $kota = $_POST['kota'];
    $metode = $_POST['metode_ujian'];
    $select = $_POST['lokasi'];
    if ($select){
      foreach ($select as $u){
        if($u == 'all') {
          echo 
          "<div class='alert alert-warning col-md-10' style='text-align: center; margin-top:10px;'>
            <strong>Warning!</strong> Mohon pilih lokasi
          </div>";
        } else {
          $lokasi = $u;
        }
      }
    }
    $sqllokasi = "SELECT id FROM WILAYAH WHERE nama = '$lokasi'";
    $resultlokasi = $conn->query($sqllokasi);
    $rowlokasi = $resultlokasi->fetch_assoc();
    $lokasi_id = $rowlokasi['id'];
    $totalmember = 3;
    $emailketua = '';
    $username = '';
    $sqlcurrent = "SELECT * FROM WILAYAH WHERE id = '$lokasi_id'";
    $resultcurrent = $conn->query($sqlcurrent);
    $rowcurrent = $resultcurrent->fetch_assoc();
    $current_no = $rowcurrent['Current_No'];
    $kode = $rowcurrent['Kode'];
    $nomor = '';
    $current_no++;
    $sql4 = "UPDATE WILAYAH SET current_no = $current_no WHERE id = '$lokasi_id'";
    if ($conn->query($sql4) === FALSE) {
      echo "Error: " . $sql4 . "<br>" . $conn->error;
    }
    if ($current_no > 99) {
      $nomor = $current_no;
    } else if ($current_no > 9) {
      $nomor = '0'.$current_no;
    } else {
      $nomor = '00'.$current_no;
    }
    $sql5 = "SELECT kode FROM METODE WHERE nama = '$metode'";
    $result5 = $conn->query($sql5);
    $row5 = $result5->fetch_assoc();
    $idmetode = $row5['kode'];
    if ('currdate' < 2016-08-02) {
      $username = $idmetode.'1600'.$kode.$nomor;
    } else {
      $username = $idmetode.'1601'.$kode.$nomor;
    }
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $length = 7;
    $password = '';
    for ($i = 0; $i < $length; $i++) {
      $password .= $chars[mt_rand(0, strlen($chars) - 1)];
    }
    require 'password.php';
    $password = encrypt('$password');
    $sqluser = "INSERT INTO USER (username,password,isAdmin) VALUES ('$username','$hash','')";
    if ($conn->query($sqluser) === FALSE) {
      echo "Error: " . $sqluser . "<br>" . $conn->error;
    }
    for ($i = 1; $i <= $totalmember; $i++) {
      $ketua = false;
      $nama = $_POST['nama'.$i.''];
      $email = $_POST['email'.$i.''];
      $telepon = $_POST['phone'.$i.''];
      $nis = $_POST['nis'.$i.''];
      if ($i == 1) {
        $ketua = true;
        $emailketua = $email;
      }
      $sqlmember = "INSERT INTO MEMBER (nama,nis,email,isketua,telepon) VALUES ('$nama','$nis','$email','$ketua','$telepon')";
      $sqlteam = "INSERT INTO TEAM (metode,lokasi_id,sekolah,registered_at,username,email,Kota,isApproved) VALUES ('$metode',$lokasi_id,'$sekolah',current_timestamp,'$username','$email','$kota','')";
      if ($conn->query($sqlmember) === FALSE) {
        echo "Error: " . $sqlmember . "<br>" . $conn->error;
      }
      if ($conn->query($sqlteam) === FALSE) {
        echo "Error: " . $sqlteam . "<br>" . $conn->error;
      }
    }
    $count = 0;
    foreach ($_FILES['uploadNIS']['name'] as $filename) {
      $tmp = $count + 1;
      $nama = $_POST['nama'.$tmp.''];
      $file = rand(1000,100000)."-".$nama."-KartuNIS"."-".$_FILES['uploadNIS']['name'][$count];
      $file_loc = $_FILES['uploadNIS']['tmp_name'][$count];
      $file_size = $_FILES['uploadNIS']['size'][$count];
      $file_type = $_FILES['uploadNIS']['type'][$count];
      $count++;
      $email = $_POST['email'.$count.''];
      $folder="uploads/";
      $new_size = $file_size/1024;  
      $new_file_name = strtolower($file);
      $final_file=str_replace(' ','-',$new_file_name);
      if(move_uploaded_file($file_loc,$folder.$final_file)) {
        $sql="INSERT INTO tbl_uploads(file,type,size, email) VALUES('$final_file','$file_type','$new_size', '$email')";
        mysql_query($sql);
      }
    }
    $count = 0;
    foreach ($_FILES['uploadFoto']['name'] as $filename) {
      $tmp = $count + 1;
      $nama = $_POST['nama'.$tmp.''];
      $file = rand(1000,100000)."-".$nama."-Foto"."-".$_FILES['uploadFoto']['name'][$count];
      $file_loc = $_FILES['uploadFoto']['tmp_name'][$count];
      $file_size = $_FILES['uploadFoto']['size'][$count];
      $file_type = $_FILES['uploadFoto']['type'][$count];
      $count++;
      $email = $_POST['email'.$count.''];
      $folder="uploads/";
      $new_size = $file_size/1024;  
      $new_file_name = strtolower($file);
      $final_file=str_replace(' ','-',$new_file_name);
      if(move_uploaded_file($file_loc,$folder.$final_file)) {
        $sql="INSERT INTO tbl_uploads(file,type,size,email) VALUES('$final_file','$file_type','$new_size', '$email')";
        mysql_query($sql);
      }
    }
    $file = rand(1000,100000)."-".$username."-Bayar"."-".$_FILES['uploadBayar']['name'];
    $file_loc = $_FILES['uploadBayar']['tmp_name'];
    $file_size = $_FILES['uploadBayar']['size'];
    $file_type = $_FILES['uploadBayar']['type'];
    $folder="uploads/";
    $new_size = $file_size/1024;  
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    if(move_uploaded_file($file_loc,$folder.$final_file)) {
      $sql="INSERT INTO bayar_uploads(file,type,size,username) VALUES('$final_file','$file_type','$new_size', '$username')";
      mysql_query($sql);
    }
    ?>
    <script>
      window.location.href = 'back.php';
    </script>
<?php
  }
?>
