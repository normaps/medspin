<?php
  session_start();
  if(isset($_SESSION["userlogin"])){
    if ($_SESSION["isAdmin"]==false){
     header("Location: peserta_dashboard.php");
    } else {
      header("Location: admin_dashboard.php");
    }
  }
?>
<!--References : http://scele.cs.ui.ac.id/mod/resource/view.php?id=74239-->
<?php
  $resp = "";

  if(isset($_POST["username"])){
    require 'connect.php';
    $conn = connectDB();

    $user = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

    if ($result->num_rows > 0) { //jika username dan password sesuai yang ada pada database
      session_start();
      $_SESSION["userlogin"] = $_POST["username"];
      while ($dataUser=mysqli_fetch_row($result))
      {
         if ($dataUser[2]==1) {
          $_SESSION["isAdmin"] = true;
          header('Location: admin_dashboard.php');          
         } else {
          $_SESSION["isAdmin"] = false;
          header('Location: peserta_dashboard.php');
         }
      }      
    } else { //jika username tidak ada pada database
      $resp = "invalid username or password";
    } 

  }

?>

<html>
<head>
<meta name="description" content="MEDSPIN FK UNAIR 2016, Olimpiade Kedokteran Untuk Siswa SMA & Sederajat Se-Asia Tenggara Diselenggarakan Oleh FK UNAIR Pada 8, 21, & 22 November 2015">
<meta name="keywords" content="Login Medspin FK UNAIR, Medspin 2016, Olimpiade Kedokteran, Medspin FK UNAIR 2016">
<meta name="author" content="Gemma Adhatien & Norma Puspitasari">
<meta charset="UTF-8"> 

<title>LOGIN Medspin FK UNAIR 2016</title>
  <link href="css/ecf.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

</head>


<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);">

 <div style=" font-size:20; font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0; text-align:center;">LOG IN MEDSPIN FK UNAIR 2016</div>

<div style="margin:148px  auto; text-align:center; padding:30; border:1px solid #ccc; width:350px; border-radius:10px; background:#fff;">
<form method="post">
<div class="row  wow fadeInUp" style="color:#eee; text-align:center; margin-bottom:10px; background-color:#028fcc; margin-top:-30px; margin-left:-30px; margin-right:-30px; margin-bottom:30px; padding-top:20px; padding-bottom:10px; ">
                  <div class="col-sm-12" style="font-size:17; font-weight:700; font-color:#ccc;">
                   LOGIN
                  </div>
</div>


<div class="row  wow fadeInUp" style="text-align:center;">
                  <div class="col-sm-12">
                   <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                  </div>
</div>
<br/>
<div class="row  wow fadeInUp" style="text-align:center;">
                  <div class="col-sm-12">
                   <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                  </div>
</div>

<div class="row  wow fadeInUp" style="text-align:center;">                 
                  <div class="col-sm-12">
<button type="submit" class="btn-submit" style="border-radius:10px;"><b>Login</b></button>
                  </div>


</div>
<p align="right"><font color="#red"><?php echo $resp;?></font></p>
<p align="right"><font color="#0000ff"><a href="http://medspinfkunair.com/registration/lupa_pasword.php" target="_blank">Lupa password ?</a></font></p>
<p><font color="#0000ff"></font></p>


<div class="row  wow fadeInUp" style="color:#eee; text-align:center; margin-bottom:111px; background-color:#028fcc; margin-top:30px; margin-left:-30px; margin-right:-30px; margin-bottom:-100px; padding-top:20px; padding-bottom:15px; ">
                 Belum punya akun? <a href="http://medspinfkunair.com/id/#carpen-online-id" target="_blank"><font color="#00ff00">Baca panduan di sini</font></a>
</div>






</div>



</form>



    <div class="footer-bottom" style="background:#028fcc; padding-top:10px; margin-bottom:0px; position:absolute; left:0px; right:0px; bottom:0px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6" style="color:#fff">
            <p>&copy;  Newbeez</p>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

</body>
</html>

