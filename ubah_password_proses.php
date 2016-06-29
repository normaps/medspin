<?php

session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=ubah_password_proses.php');
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
 </head> 
<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);">
<?php

require_once "koneksi.php";
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $passwordlama = md5($_POST['passwordlama']);
    $passwordbaru = $_POST['passwordbaru'];
	$konfirmasipassword = $_POST['konfirmasipassword'];
    $sql = "select * from user where username='$username' and password='$passwordlama'";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $updatepassword = "update user set password = md5('".$passwordbaru."') where username = '".$username."'";

$updatequery = mysql_query($updatepassword);

if($updatequery)

{


echo "<div style='text-align:center; margin-top:200; font-size:25;'>Password telah diganti menjadi $passwordbaru</div><br/><a href='http://medspinfkunair.com/registration/'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button></a>";

}
        }else{
            
            echo "<div style='text-align:center; margin-top:200; font-size:25; color:red;'>Username Atau Password Anda Salah !!!</div><br/><a href='http://medspinfkunair.com/registration'><button class='btn-submit' style='border-radius:10px; width:50%; margin:20px auto;'>KEMBALI</button>";
        }
    }
}

?>
</body>
</html>