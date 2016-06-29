<?php
$host = "localhost";
$user = "k3085420_reg";
$pass = "m07t02r95";
$db_name = "k3085420_medspin2015";
 
mysql_connect($host, $user, $pass) or die ("Ega CF : Maaf Koneksi Gagal Bro");
mysql_select_db($db_name) or die ("Ega CF : Maaf Database Not Found");
?>