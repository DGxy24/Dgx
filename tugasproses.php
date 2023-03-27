<?php 
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];

echo" Bilangan 1 =" .$no1. "<br>";
echo" Bilangan 2 =" .$no2. "<br>";

$tambah = $no1 + $no2 ; 
$kali = $no1 * $no2 ; 
$kurang = $no1 - $no2 ; 
$bagi = $no1 / $no2 ; 
echo"================ <br>";
echo " Hasil Tambah = $no1 + $no2 = $tambah<br>";
echo " Hasil Pengurangan =$no1 - $no2 = $kurang<br>";
echo " Hasil Perkalian =$no1 x $no2 = $kali<br>";
echo " Hasil Pembagian =$no1 / $no2 = $bagi<br>";
//()
//{}
//[]
?>