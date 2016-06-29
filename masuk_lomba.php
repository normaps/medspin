<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=masuk_lomba.php');
}
?>
<html>
<head>
<title>Penyisihan Medspin Online</title>
  <link href="../pq/css/ecf.min.css" rel="stylesheet">
  <link href="../pq/css/animate.min.css" rel="stylesheet"> 
  <link href="../pq/css/font-awesome.min.css" rel="stylesheet">
  <link href="../pq/css/lightbox.css" rel="stylesheet">
  <link href="../pq/css/main.css" rel="stylesheet">
  <link id="css-preset" href="../pq/css/preset.css" rel="stylesheet">
  <link href="../pq/css/responsive.css" rel="stylesheet">

<style>
.add-photo-btn{
position:relative;
overflow:hidden;
cursor:pointer;
text-align:center;
background-color:#ccc;
color:#fff;
display:block;
width:300px;
height:31px;
float:left;
align:center;
border-radius:10px;
}

input.upload {
position:relative;
cursor:pointer;
opacity:0;
filter:alpha(opacity:0;);
border:1px solid #028fcc;
}
#header
{
  background:#028fcc;
  border:1px solid #028fcc;
  margin:20px auto;
  width:680px;
  padding:10px;
  color:white;
  text-align:center;
  border-radius:20px;
  font-weight:700;
  margin-bottom:-5px;
}

#daftar{
  background:#transparent;
  margin:auto;
  width:700px;
  padding:10px;
  border-radius:10px;
  
}
.texbox{
   border:1px solid #ccc;
   height:25px;
}
.texarea{
   border:1px solid #ccc;
 
}
.btn{
    width:85px;
    height:90px;
    color:#099;
    font-weight:bold;
    margin-bottom:3px;
    }
.btn:hover{
   background:#333;
   color:#fff;
   font-weight:bold;
   cursor:pointer;
   border:2px solid #099;
   border-radius:4px;
    }
</style>

</head>
<body> 
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:7px 50px; position:absolute; top:0; left:0; right:0;">&raquo; HALAMAN INI UNTUK PESERTA LOMBA ONLINE MEDSPIN 2015 &laquo; <br/> BUKA KEMBALI HALAMAN INI PADA TANGGAL 8 NOVEMBER 2015 <br/></div><br/> 


</div>

</div>

<br/>
<br/>


				<center><img src="http://medspinfkunair.com/pq/images/comingsoon.png"></center>
			</p>


            
          <div class="col-sm-12">
                  <button type="button" onClick="javascript:history.back()" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
                </div>  



</body>
</html>