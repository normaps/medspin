<?php
  require 'connect.php';
  $conn = connectDB();
  $namalokasi = $_GET['lokasi'];
  $sql3 = "SELECT isPanwil FROM Wilayah WHERE nama = '$namalokasi'";
  $result3 = $conn->query($sql3);
  $row3 = mysqli_fetch_all($result3);
  echo json_encode($row3);
?>