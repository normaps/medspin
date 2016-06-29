<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}
?>
<html>
<head>
<title>Data Registrasi Pendaftar MEDSPIN FK UNAIR 2015</title>

<link rel="alternate" media="print" href="cetak_form.php" />

<script>
function printWindow(){
bV = parseInt(navigator.appVersion)
if (bV >= 4) window.print()
}
</script>

  <link href="css/ecf.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  
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
  margin: 20px auto;
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
    height:30px;
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
<body style="background:url(http://medspinfkunair.com/pq/images/bg-w.png);"> 
				<div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; PANDUAN PENDAFTARAN &laquo;</div><br/><br/><br/>


    

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";


 include("koneksi.php");
    $nim=$username;
    $qrykoreksi=mysql_query("select * from reg where nim='$nim' LIMIT 1");
    $dataku=mysql_fetch_object($qrykoreksi);


?>





<div id="header">SISTEMATIKA PERLOMBAAN</div>
   
<div id="daftar">
<br/><br/>

<div  id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">      
		<h2 class="lang-id"><li class="fa fa-tasks"></li> TAHAP PERLOMBAAN</h2>
		<h2 class="lang-en hide"><li class="fa fa-tasks"></li> ROUNDS OF THE COMPETITION</h2>
          <div class="our-skills wow fadeInDown lang-id" data-wow-duration="1000ms" data-wow-delay="300ms">
		  <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Babak Penyisihan</p>
			  <p>8 November 2015, Kota Masing-Masing & Online</p>
			  <p>Berupa soal pilihan ganda (Multiple Choice Questions) yang dilaksanakan dengan ujian tulis (langsung) dan online pada waktu yang sudah ditentukan.</p>
			  

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Babak Perempat Final</p>
			  <p>21 November 2015, FK UNAIR Surabaya</p>
			  <p>Berupa Fun Rally dan teka-teki kedokteran di lingkungan Fakultas Kedokteran Universitas Airlangga.</p>

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Babak Semifinal</p>
			  <p>21 November 2015, FK UNAIR Surabaya</p>
			  <p>Berupa soal praktikum kedokteran dan soal teori biologi,fisika,kimia terkait kedokteran yang dilaksanakan di Fakultas Kedokteran Universitas Airlangga.</p>

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Babak Final</p>
			  <p>22 November 2015, FK UNAIR Surabaya</p>
			  <p>Berupa praktikum biologi,fisika,kimia,kedokteran dan teori essay panjang di Fakultas Kedokteran  Universitas Airlangga.</p>

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Babak Grand Final</p>
			  <p>22 November 2015, FK UNAIR Surabaya</p>
			  <p>Berupa studi kasus, presentasi, dan cepat tepat di Fakultas Kedokteran Universitas Airlangga.</p>

            </div>
          </div>
		  
		            <div class="our-skills wow fadeInDown lang-en hide" data-wow-duration="1000ms" data-wow-delay="300ms">
		  <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Preliminary Round</p>
			  <p>8 November 2015, Many Locations & Online</p>
			  <p>Consists of multiple choice questions that hold in two ways, those are offline examination (directly) and online at the scheduled time.</p>

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Quarter-finals</p>
			  <p>21 November 2015, Medical Faculty Of Airlangga University Surabaya</p>
			  <p>Consists of fun rally and medical puzzle which takes place at Fakultas Kedokteran Universitas Airlangga (Medical School of Airlangga University).</p>

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Semi-finals</p>
			  <p>21 November 2015, Medical Faculty Of Airlangga University Surabaya</p>
			  <p>Consists of medical-related practical quiz and medical-related theoretical of physics, chemistry, biology which takes place at Fakultas Kedokteran Universitas Airlangga (Medical School of Airlangga University).</p>

            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Finals</p>
			  <p>22 November 2015, Medical Faculty Of Airlangga University Surabaya</p>
			  <p>Consists of physics, chemistry, biology practical quiz and long essay problems which takes place at Fakultas Kedokteran Universitas Airlangga (Medical School of Airlangga University).</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="80">80%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Grand Finals</p>
			  <p>22 November 2015, Medical Faculty Of Airlangga University Surabaya.</p>
			  <p>Consists of case study, presentation, and quick-precise quiz which takes place at Fakultas Kedokteran Universitas Airlangga (Medical School of Airlangga University).</p>

            </div>
          </div>
		  


                         <div class="form-group">
                 <a href="http://medspinfkunair.com/registration/panduan.php" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
                </div>
                 
            


</div>
</div>
          </div>
        </div>
      </div>
    </div>

<div class="footer-bottom" style="background:#028fcc; padding-top:10px; margin-bottom:0px; position:absolute; left:0px; right:0px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6" style="color:#fff">
            <p>&copy;  Medspin 2015 Web Developer Team</p>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
 