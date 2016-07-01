<?php
  require 'connect.php';
  $conn = connectDB();
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "medspin";
  mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
  mysql_select_db($dbname) or die('database selection problem');
  
if(isset($_POST['btn-upload'])) {
      $telepon = $_POST['phone'];
      $sekolah = $_POST['sekolah'];
      $alamat_sekolah = $_POST['alamat_sekolah'];
      $metode = $_POST['metode_ujian'];
      //$metode = 'online_panwil';
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
      $sqlcurrent = "SELECT current_no, kode FROM WILAYAH WHERE id = '$lokasi_id' AND metode = '$metode'";
      $resultcurrent = $conn->query($sqlcurrent);
      $rowcurrent = $resultcurrent->fetch_assoc();
      $current_no = $rowcurrent['current_no'];
      $kode = $rowcurrent['kode'];
      $nomor = '';
      $current_no++;
      $sql4 = "UPDATE WILAYAH SET current_no = $current_no WHERE id = '$lokasi_id' AND metode = '$metode'";
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
      $hash = crypt($password, $username);
      $sqluser = "INSERT INTO USER (username,password,isAdmin) VALUES ('$username','$hash','')";
      if ($conn->query($sqluser) === FALSE) {
        echo "Error: " . $sqluser . "<br>" . $conn->error;
      }
      for ($i = 1; $i <= $totalmember; $i++) {
        $ketua = false;
        $nama = $_POST['nama'.$i.''];
        $email = $_POST['email'.$i.''];
        $ttl = $_POST['ttl'.$i.''];
        $nis = $_POST['nis'.$i.''];
        if ($i == 1) {
          $ketua = true;
          $emailketua = $email;
        }
        $sqlmember = "INSERT INTO MEMBER (nama,nis,ttl,email,isketua) VALUES ('$nama','$nis','$ttl','$email','$ketua')";
        $sqlteam = "INSERT INTO TEAM (telepon,metode,lokasi_id,sekolah,alamat_sekolah,registered_at,username,email) VALUES ('$telepon','$metode',$lokasi_id,'$sekolah','$alamat_sekolah',current_timestamp,'$username','$email')";
        if ($conn->query($sqlmember) === FALSE) {
          echo "Error: " . $sqlmember . "<br>" . $conn->error;
        }
        mysql_query($sqlteam);
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
     // new file size in KB
      $new_size = $file_size/1024;  
     // new file size in KB
     
     // make file name in lower case
      $new_file_name = strtolower($file);
     // make file name in lower case
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
     // new file size in KB
      $new_size = $file_size/1024;  
     // new file size in KB
     
     // make file name in lower case
      $new_file_name = strtolower($file);
     // make file name in lower case
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
     // new file size in KB
      $new_size = $file_size/1024;  
     // new file size in KB
     
     // make file name in lower case
      $new_file_name = strtolower($file);
     // make file name in lower case
     $final_file=str_replace(' ','-',$new_file_name);
      if(move_uploaded_file($file_loc,$folder.$final_file)) {
        $sql="INSERT INTO bayar_uploads(file,type,size,username) VALUES('$final_file','$file_type','$new_size', '$username')";
        mysql_query($sql);
      }
      ?>
      <script>
        //window.location.href = 'payment.php';
      </script>
<?php
  }
?>