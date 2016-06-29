<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php?url=chats.php');
}
?>
<html>
<head>
<title>Hubungi Panitia Medspin 2015</title>
  <link href="css/ecf.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/preset.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <script src="js/jquery.js" type='text/javascript' ></script>
  
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

span button {
  margin: 20px auto;
  font-size: 2.0rem;
  padding: 5px;
  display: block;
  background-color: #009ac9;
  border: 1px solid transparent;
  color: #ffffff;
  font-weight: 10;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width:100%;
  border-radius:10px;
  font-weight:700;
}

span button:hover {
  background-color: #fefefe;
  color: #009ac9;
  border-color: #009ac9;
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
                <div align="center" style=" font-weight:700; color:white;  background-color:#028fcc; opacity:0.9; padding:20px 50px; position:absolute; top:0; left:0; right:0;">&raquo; HUBUNGI PANITIA MEDSPIN 2015 &laquo;</div><br/><br/><br/>




  
<div id="daftar">
<br/><br/>




<form method="post" enctype="multipart/form-data" id="main-contact-form" style="background:#fff; padding:20px; border-radius:20px;">


 <div class="form-group">
                  <button type="submit" class="btn-submit" style="border-radius:20px;">CONTACT PERSON PANITIA</input></button>
                </div>

	  <div class="container">
        
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
             <div class="col-sm-8">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
               
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span> Jl. Mayjend Prof. Dr. Moestopo 47 Surabaya, 60131 </li>
                  <li><i class="fa fa-phone"></i> <span> Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span> Maya (0857-3359-5221) & Apriliana (0858-5284-1340) </li>
                  <li><i class="fa fa-envelope"></i> <span> Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="medspinfkunair.com" target="_blank"><font color="#0000ff"> Medspinfkunair@gmail.com</font></a>
                  <li><i class="fa fa-globe"></i> <span> Website &nbsp;&nbsp;&nbsp;&nbsp;:<a href="medspinfkunair.com" target="_blank"><font color="#0000ff"> Medspinfkunair.com</font></a>
				  <li><i class="fa fa-facebook"></i> <span> Facebook &nbsp;&nbsp;:<a href="https://www.facebook.com/pages/Medspin-Airlangga/1612602842355803" target="_blank"><font color="#0000ff"> Medspin Airlangga</font></a>
				  <li><i class="fa fa-twitter"></i> <span> Twitter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<a href="https://www.twitter.com/medspin2015" target="_blank"><font color="#0000ff"> @medspin2015</font></a>
				  <li><i class="fa fa-instagram"></i> <span> Instagram &nbsp;:<a href="http://instagram.com/medspin2015" target="_blank"><font color="#0000ff"> @medspin2015</font></a>
				  <li><i class="fa fa-group"></i> <span> Line Page :</span> User ID : @CUG8195X</li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>


    <div class="form-group">
                  <button type="submit" class="btn-submit" style="border-radius:20px;">PUBLIC CHAT</input></button>
                </div>
<hr/>
<p><strong>Peraturan penggunaan public chat:</strong></p>

<ol>
  <li>Public chat digunakan untuk media berkomunikasi antar sesama peserta medspin 2015</li>

  <li>Peserta diwajibkan untuk saling menghargai sesama member</li>

  <li>peserta tidak diperkenankan menggunakan kata-kata kotor atau<strong> SARA</strong> yang bisa memicu adanya pertikaian</li>

  <li>Pelanggaran dari <strong>point no. 3 </strong>diatas akan dikenakan sanksi tegas berupa pemblokiran akun sehingga mengakibatkan tidak bisa mengikuti ujian <strong>Medspin 2015</strong></li>
</ol>

<p><strong>&#160;</strong></p>

<p><strong></strong></p>

<hr/>

<div style=" overflow: auto; height: 400px; ">

<?php
			//*koneksi ke database*//
			$Open = mysql_connect("localhost","k3085420_reg","m07t02r95");
				if (!$Open){
					die ("MySQL E !<br>");
				}
			$Koneksi = mysql_select_db("k3085420_medspin2015");
				if (!$Koneksi){
					die ("DBase E !");
				}
			$Tampil="SELECT * FROM chat ORDER BY waktu DESC LIMIT 99;";
			$query = mysql_query($Tampil);
			while (	$hasil = mysql_fetch_array ($query)) {
				$komen = stripslashes ($hasil['komen']);
				$waktu = stripslashes ($hasil['waktu']);
				$nama = stripslashes ($hasil['nama']);	


if ($_SESSION['guest']==true) {$pesan = "Guest tidak bisa mengirim pesan"; $readonly = "readonly"; }

else { $pesan = "Masukkan pesan anda"; $readonly = "";}


			?>	


			<style type="text/css">
				#atas {
					border-bottom-width: 1px;
					border-bottom-style: ridge;
					border-bottom-color: #CCC;
					margin-top: 1px;
					margin-right: 1px;
					margin-bottom: 2px;
					margin-left: 0px;
					padding-bottom: 1px;
					color: #0000ff;
				}
				#pesan {
			                padding-right: 1px;
					padding-left: 0px;
					margin-bottom: 10px;
					color: #080808;
				}
				.waktu {
					float: right;
					color: #871214;
					font-family: Arial;
					font-size: 9px;
				}
			</style>
			<?php
			echo"
				<div id='atas' > $hasil[nama] mengatakan :  <span class='waktu'>$hasil[waktu]</span></div>
				<div id='pesan' ;  width: 400px;> $hasil[komen] </div> <br/>";

			}
			?>
		</tbody>
	</table>  


</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
                     <B></B>
                    </div>
                  </div>
</div>

<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group"> Pesan anda
                      <input type="text" name="komen" class="form-control" <?php echo $readonly; ?>=""  placeholder="<?php echo $pesan; ?>" value="<?php echo $_POST['tgl_pendaftaran']; ?>">
                    </div>
                  </div>
</div>




                 <div class="form-group">
                  <button type="submit" class="btn-submit" style="border-radius:10px;"><input type="hidden" name="act" value="add">KIRIM</input></button>
                </div>

<hr/>

 

</form>

<div class="row" >
<div class="col-sm-12">
<span>

<button type="button href="http://google.com" onclick="window.location.href='index.php'""><li class="fa fa-arrow-circle-left"></li></br>KEMBALI</button>
</span>
</div>


</div>
</div>

</body>
</html>