<?php
$input = $_GET['input']; //menangkap password yang diinput oleh user
$cek = $_GET['password']; //menangkap nilai apakah untuk input password atau konfirmasi
$pass = $_GET['pass']; //menangkap nilai dari form password yang diisi

if ( $cek == 1 ) //untuk melakukan pengecekan kekuatan password
{
if (ereg("^[[:punct:]]+[[:alnum:]]",$input) || ereg("^[[:alnum:]]+[[:punct:]]",$input) )
{
echo "Kekuatan Password : Kuat";
}
else if (ereg("^[[:alnum:]]",$input))
{
echo "Kekuatan Password : Sedang";
}
else
{
echo "Kekuatan Password : Lemah";
}
}

else if ( $cek == 2 ) //untuk melakukan pengecekan konfirmasi password
{
if ($pass == $input) echo "Password Cocok";
else echo "Password Tidak Cocok";
}
?>