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





<div id="header">PANDUAN PENDAFTARAN</div>
   
<div id="daftar">
<br/><br/>

<form method="post" ction="test1.php" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">


<div class=WordSection1>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:60.6pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>BABAK
PENYISIHAN</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.15pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Online</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Hari, tanggal      : Minggu, 8 November
2015</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Waktu                : 07.00
– 14.00 WIB</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Tempat               : </span><span
lang=IN><a href="http://www.medspinfkunair.com"><i><span style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif";color:windowtext;
text-decoration:none'>www.medspinfkunair.com</span></i></a></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Peserta               : Siswa yang
memenuhi persyaratan dan telah melakukan pendaftaran Medspin Competition 2015
sesuai dengan prosedur yang telah ditetapkan</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.15pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Offline</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Hari, tanggal      : Minggu, 8 November
2015</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Waktu                :
07.00-14.00 WIB</span></p>

<p class=MsoNormal style='margin-left:63.8pt;text-align:justify;line-height:
150%'><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Tempat               :</span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;text-indent:
-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Fakultas Kedokteran Universitas
Airlangga Surabaya</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;line-height:150%'><i><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Jl.
Prof. Dr. Moestopo No. 47 Surabaya</span></i></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 5 Bandung</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Belitung No. 8
Bandung</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Banjarbaru</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Keruning No.3
Banjarbaru</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 2 Genteng-Banyuwangi</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Pandan- Kemiritan Genteng</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Blitar</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Ahmad Yani No.112
Blitar</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Bogor</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Ir.H.Djuanda No.16
Bogor</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN Model Terpadu Bojonegoro</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Raya Sukowati no. 00 Kapas,
Bojonegoro</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>8.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Denpasar</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Kamboja No. 4
Denpasar</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>9.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Gresik</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Arief Rahman Hakim No. 1 Gresik</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>10.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMANU MH Thamrin</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Bambu Wulung, Bambu Apus, Cipayung,
Jakarta Timur </span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>11.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 2 Jombang</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Dr. Wahidin Sudirohusodo No. 1
Jombang</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>12.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Jember</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Letjen Panjaitan
No. 55 Jember</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>13.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 2 Kediri</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl.Veteran No.7
Mojoroto, Kediri</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>14.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>MAN Lamongan</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Veteran No. 43
Lamongan)</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>15.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 2 Madiun</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Biliton 24, Madiun </span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>16.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMA Katolik Rajawali</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jalan Lamadukelleng No. 7, Makassar</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>17.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 3 Malang</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Sultan Agung Utara No. 7 Malang</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>18.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Mataram</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Pendidikan No. 21
Mataram</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>19.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Sooko-Mojokerto</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. R. Akhmad Basuni
No. 361 Sooko, Mojokerto</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>20.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 2 Nganjuk</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Anjuk Ladang No. 9 
Nganjuk</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>21.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 10 Padang</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>Jl. Situjuh, Padang              </span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>22.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Pamekasan</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Pramuka No 2
Pamekasan</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>23.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Bangil</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Bader No.3 Kalirejo, Bangil Pasuruan</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>24.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 8 Pekanbaru</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>Jl. Abdul Muis No. 14  Pekanbaru</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>25.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Kraksaan</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Imam Bonjol No.13
Kraksaan- Probolinggo</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>26.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 10 Samarinda</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jalan H.A.M.M Rifaddin RT 25, Harapan
Baru, Loa Janan Ilir, Kalimantan Timur 75132</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>27.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Sidoarjo</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>Jl. Jenggolo No.1 Sidoarjo</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>28.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Surakarta</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:92.15pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. Monginsidi No. 40
Surakarta</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>29.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Tuban</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. WR. Supratman 2 Tuban</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>30.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Kedungwaru-Tulungagung</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jl. Dr. Wahidin Sudirohusodo No. 12
Tulungagung</span></i></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>31.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>SMAN 1 Yogyakarta</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:.55pt;line-height:150%'><i><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Jl. H.O.S. Cokroaminoto
No. 10 Yogyakarta</span></i></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>32.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Malaysia</span></p>

<p class=MsoNormal style='margin-left:63.8pt;text-align:justify;line-height:
150%'><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Peserta               :
siswa yang memenuhi persyaratan dan telah melakukan pendaftaran Medspin
Competition 2015 sesuai dengan prosedur yang telah ditetapkan</span></p>

<p class=MsoNormal style='margin-left:63.8pt;text-align:justify;line-height:
150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Perempat
Final</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Hari, tanggal           :
Sabtu, 21 November 2015</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Waktu                     :
07.00 – 14.00 WIB</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Tempat                    :
Fakultas Kedokteran Universitas Airlangga Surabaya</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Peserta                    :
125 tim yang dinyatakan lolos babak penyisihan</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif";color:black'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif";color:black'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif";
color:black'>Semi Final</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Hari, tanggal           :
Sabtu, 21 November 2015</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Waktu                     :
14.00 - 17.15 WIB</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Tempat                    :
Fakultas Kedokteran Universitas Airlangga Surabaya</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Peserta                    :
50 tim yang dinyatakan lolos babak perempat final</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif";color:black'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif";color:black'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif";
color:black'>Final</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Hari, tanggal           :
Minggu, 22 November 2015</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Waktu                     :
07.00 – 13.00 WIB</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Tempat                    :
Fakultas Kedokteran Universitas Airlangga Surabaya</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Peserta                    :
15 tim yang dinyatakan lolos babak semi final</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif";color:black'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif";color:black'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif";
color:black'>Grand Final</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Hari, tanggal           :
Minggu, 22 November 2015</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:black'>Waktu                     :
13.00 – 16.30 WIB</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Tempat                    : Fakultas
Kedokteran Universitas Airlangga Surabaya</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Peserta                    : 5 tim yang
dinyatakan lolos babak final</span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;line-height:
150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>Peserta tiap babak diwajibkan mengikuti technical
meeting yang diselenggarakan oleh panitia sebelum setiap babak dimulai</span></i></p>

<p class=MsoNormal style='margin-left:1.0cm;text-align:justify;line-height:
150%'><i><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>&nbsp;</span></i></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:7.1pt;margin-bottom:.0001pt;text-align:center;
line-height:150%'><b><span lang=IN style='font-size:14.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Materi Lomba</span></b></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:7.1pt;margin-bottom:.0001pt;text-align:center;
line-height:150%'><b><span style='font-size:14.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoHeading7 style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;text-indent:-12.4pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:windowtext;font-style:normal'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif";
color:windowtext;font-style:normal'>Materi yang diperlombakan pada babak
penyisihan sesuai dengan kurikulum SMA kelas X, XI, XII dan <b>IPA kedokteran</b>
meliputi bidang studi :</span></p>

<p class=MsoHeading7 style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif";color:windowtext;font-style:normal'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif";
color:windowtext;font-style:normal'>Biologi dengan komposisi soal 30%</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Kimia dengan komposisi soal 30%</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Fisika dengan komposisi soal 30%</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:63.8pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>d.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>IPA kedokteran dengan komposisi soal 10%</span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;text-indent:
-15.2pt;line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Materi yang diperlombakan pada babak
quarter</span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'> </span><span lang=IN style='font-size:
12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>final </span><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>hingga</span><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
</span><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>grand
final </span><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'> sesuai dengan kurikulum SMA dan <b>IPA kedokteran</b>.</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif";color:red'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif";color:red'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpFirst align=center style='margin-top:0cm;
margin-right:0cm;margin-bottom:0cm;margin-left:35.45pt;margin-bottom:.0001pt;
text-align:center;line-height:150%'><b><span lang=IN style='font-size:14.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>Sistem Penilaian dan
Penyeleksian Lomba</span></b></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-18.0pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Babak
Penyisihan</span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Menggunakan perpaduan sistem grade dan
jatah pada penyeleksian peserta yang lolos ke babak perempat final.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-15.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Dalam penyeleksian babak penyisihan
peserta akan dibagi menjadi 7 (tujuh) regio, yaitu :</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>regio
A</span></b><b><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'> </span></b><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>yang
meliputi tempat seleksi Padang, Pekanbaru, Samarinda, dan Banjarmasin</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>regio
B </span></b><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>yang meliputi tempat seleksi Jakarta, Bogor,
Bandung, Solo, Yogyakarta</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>regio
C </span></b><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>yang meliputi tempat seleksi Surabaya, Malang,
Sidoarjo, Gresik, Mojokerto, Kediri</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>regio
D </span></b><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>yang meliputi tempat seleksi Tulungagung, Blitar,
Lamongan, Pamekasan, Tuban, dan Pasuruan</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>regio
E </span></b><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>yang meliputi tempat seleksi Jombang, Jember,
Probolinggo, Bojonegoro, Nganjuk, dan Madiun</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>regio
F </span></b><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>yang meliputi tempat seleksi Banyuwangi, Denpasar,
Mataram, Makassar, dan Regio Internasional.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-15.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pengertian sistem passing-grade adalah
sistem prioritas nilai berdasarkan urutan ranking yang tertinggi dari seluruh
wilayah perlombaan.</span><b><span lang=IN style='font-size:14.0pt;line-height:
150%;font-family:"Times New Roman","serif"'> </span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-15.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pengertian sistem jatah adalah sistem
perwakilan sebanyak 2 regu terbaik dari 31 kota wilayah pelaksanaan lomba dan 2
regu terbaik dari regio online internasional dan 2 regu terbaik regio online
internasional setelah sebelumnya dikurangi jumlah regu yang termasuk dalam
urutan passing-grade untuk masuk ke babak perempat final</span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
</span><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>(sebanyak
59 tim).</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-15.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Urutan pengambilan peserta yang lolos ke
babak perempat final yaitu:</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>59
tim dengan nilai terbaik dari <b>seluruh regio.</b></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Juara
1</span><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
dan 2 </span><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'> dari </span><span style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>3</span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>1
kota tempat pelaksanaan (62 tim) serta regio online internasional dan regio
online nasional.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><i><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Untuk
semifinal, tidak ada lagi sistem jatah untuk regio, semuanya berdasarkan murni
nilai terbaik untuk lolos ke semifinal secara adil</span></i></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Apabila pada akhir penilaian, terdapat
jumlah nilai yang sama <b>dan</b> kapasitas jumlah tim yang dapat lolos ke
babak selanjutnya sudah penuh, maka akan dipilih 1 tim yang berhak lolos ke
babak berikutnya dengan urutan kriteria sebagai berikut :</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Perhitungan
jumlah jawaban yang benar yang terbanyak.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Jumlah
jawaban yang benar pada soal-soal yang sudah diprioritaskan oleh panitia<b>.
(Dicari pemerataan nilai, jika ada 2 tim yg mendapatkan nilai sama dengan
jumlah benar yang sama, maka akan dibandingkan untuk nilai biologi, fisika,
kimia. Nilai yang lebih merata, akan diambil untuk lanjut ke babak quarter
final. Contohnya : tim A memperoleh nilai 70 untuk biologi, 20 untuk fisika,
dan 40 untuk kimia. Sedangkan tim B memperoleh nilai 40 untuk biologi, 40 untuk
fisika, dan 50 untuk kimia. Maka yang diloloskan adalah tim B)</b></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Jika
tidak ada perbedaan, maka akan diloloskan semua.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Dengan 2 sistem ini memungkinkan adanya
perwakilan dari tiap-tiap tempat pelaksanaan lomba untuk masuk ke babak
semifinal.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak penyisihan terdiri dari 100 soal
dengan waktu pengerjaan soal 100 menit.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>d.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Model soal adalah <b>multiple choice
question, Soal pilihan 1 2 3 4 dan Soal sebab-akibat.</b></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>e.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Sistem penilaian menggunakan system :</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Benar          +</span><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>4</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Salah           -</span><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>1</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:3.0cm;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Kosong       </span><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>0</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>f.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Jumlah total peserta yang lolos ke babak
perempat final sebanyak <b>125 tim</b></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><span class=MsoHyperlink><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif";color:windowtext;
text-decoration:none'>g.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Contoh model soal babak penyisihan dapat
di download pada website resmi Medspin FK Unair 2015: </span><span lang=IN><a
href="http://www.medspinfkunair.com"><i><span style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif";color:windowtext;
text-decoration:none'>www.medspinfkunair.com</span></i></a></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;line-height:150%'><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;text-indent:
-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak Perempat Final</span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Tiap peserta wajib datang jam 06.30 WIB
untuk daftar ulang, dilanjutkan dengan pembukaan secara resmi oleh panitia.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak quarterfinal ini terdiri dari fun
rally yang menuntut kerjasama, kesehatan jasmani, konsentrasi, srategi dan
intelektual serta terdapat teka-teki kedokteran yang menguji wawasan peserta
akan istilah kedokteran yang umum.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pada babak perempat final akan diadakan
rally yang terdiri dari 25 pos. Tiap pos dapat berisi soal biologi, fisika,
kimia,  IPA kedokteran, dan/atau soal games tentang materi kedokteran serta
aplikasinya.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>d.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pada babak perempat final juga akan
diberi serangkaian teka-teki berupa kalimat yang tersebar di antara 25 pos,
yang harus dipecahkan peserta untuk mendapat tambahan poin untuk babak ini.
Jawaban teka-teki berupa terminologi/ istilah kedokteran yang umum.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>e.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Muatan soal yang diberikan mencakup soal
cerita yang berisi pertanyaan biologi, fisika, kimia terintegrasi beserta IPA
kedokteran serta aplikasinya.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>f.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Dari babak ini akan diambil <b>50 tim</b></span><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
</span></b><b><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>terbaik</span></b><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
yg akan masuk babak semifinal.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;line-height:150%'><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;text-indent:
-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak Semifinal</span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak semifinal ini terdiri dari <b>2 </b></span><b><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>sesi</span></b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
yaitu sesi teori dan sesi praktikum.</span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:
-1.0cm;line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Sesi teori terdiri dari 10 soal yang
berdasar tema besar tertentu. Tiap soal akan terdiri dari 3 pertanyaan dari
masing-masing mata pelajaran yang saling terkait dan berhubungan dengan tema
besar.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:99.25pt;margin-bottom:.0001pt;text-align:justify;text-indent:-1.0cm;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>ii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Sesi praktikum terdiri dari 50 soal
praktikum kedokteran, berupa 25 soal visual anatomi dan 25 soal histologi.</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-21.25pt;line-height:150%'><span lang=IN style='font-family:"Times New Roman","serif"'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Dari babak semifinal akan diambil <b>15
tim terbaik</b> yang berhak masuk ke babak final berdasarkan nilai tertinggi.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><b><span lang=IN style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Babak
Final</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-21.25pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Tiap peserta wajib datang jam 06.30 WIB
untuk daftar ulang, dilanjutkan dengan pengarahan oleh panitia.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-21.25pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak final ini terdiri dari 2 sesi
yaitu sesi esai panjang dan sesi praktikum.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-18.0pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>i.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Sesi essay panjang terdiri dari 9 soal
yang terdiri dari 3 soal biologi, 3 soal fisika, dan 3 soal kimia.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-18.0pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>ii.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Sesi
praktikum terdiri dari 5 soal praktikum mengenai biologi, fisika, kimia,
keterampilan medik, dan pertolongan pertama gawat darurat.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-21.25pt;line-height:150%'><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>c.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Dari babak final akan diambil <b>5 tim
terbaik</b> berdasarkan nilai tertinggi yang berhak masuk ke babak grandfinal
untuk memperebutkan juara.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:49.65pt;margin-bottom:.0001pt;text-align:justify;
text-indent:-14.2pt;line-height:150%'><b><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></b><b><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Babak
Grand Final</span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Babak grandfinal merupakan babak
perebutan juara yang terdiri dari 2 bagian yaitu sesi presentasi dan cepat
tepat.</span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;text-indent:
-18.0pt;line-height:150%'><span lang=FR style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=SV style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pada </span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>sesi</span><span
lang=SV style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
presentasi, setiap tim diwajibkan membuat bahan presentasi berdasar </span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>kasus</span><span
lang=SV style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
yang didapat dan mempresentasikannnya, serta menjawab pertanyaan seputar presentasi
dari dewan juri.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=FR style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=FR style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pada</span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
sesi </span><span lang=FR style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman","serif"'>cepat te</span><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>pat</span><span
lang=FR style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>,
akan diberi</span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'> 50 </span><span lang=FR
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>pertanyaan
</span><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>yang
terbagi menjadi 3 bagian: pertanyaan wajib, pertanyaan wajib dan dapat dilempar
ke kelompok lain, serta pertanyaan rebutan</span><span lang=FR
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
yang dijawab oleh tim yang menekan </span><span lang=IN style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>tombol bel</span><span
lang=FR style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
pertama kali </span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=FR style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pertanyaan wajib berupa pertanyaan yang
pasti didapatkan semua kelompok </span><span lang=FR style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>dengan penambahan nilai
untuk jawaban benar</span><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'> namun</span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
</span><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>tanpa
</span><span lang=FR style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>pengurangan
nilai untuk jawaban </span><span lang=IN style='font-size:12.0pt;line-height:
150%;font-family:"Times New Roman","serif"'>pass atau </span><span lang=FR
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>salah</span><span
lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=FR style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>ii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pertanyaan wajib seperti pada poin (<b>e</b>.b.i)
diatas namun jika jawaban salah mendapat pengurangan nilai dan pertanyaan dapat
dilempar ke kelompok lain yang menekan tombol bel pertama kali setelah kelompok
penerima pertanyaan wajib menyatakan pass atau dinyatakan salah jawabannya oleh
juri.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:92.15pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=FR style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>iii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Pertanyaan rebutan</span><span lang=IN
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>
</span><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>yang
dijawab oleh tim yang menekan tombol bel pertama kali </span><span lang=FR
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>dengan
penambahan nilai untuk jawaban benar dan pengurangan nilai untuk jawaban salah.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:70.9pt;margin-bottom:.0001pt;text-align:justify;text-indent:-21.25pt;
line-height:150%'><span lang=SV style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>Nilai dari kedua sesi akan diakumulasi
untuk menentukan juar</span><span style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman","serif"'>a 1, 2,</span><span style='font-size:
12.0pt;line-height:150%;font-family:"Times New Roman","serif"'> </span><span
style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>3,
harapan 1, dan harapan 2</span><span lang=SV style='font-size:12.0pt;
line-height:150%;font-family:"Times New Roman","serif"'>.</span></p>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

</div>




                         <div class="form-group">
                 <a href="http://medspinfkunair.com/registration" > <button type="button" value="Send" class="btn-submit" style="border-radius:10px;"> KEMBALI</button>
                </div>
                 
            
</form>

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
 