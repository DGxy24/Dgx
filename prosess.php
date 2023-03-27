<?php 
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];
$tunjang= $no2 * 0.1;
$total = $no2 + $tunjang;

echo"<center>=================== <br>";
echo " Nama Anda    = $no1 <br>";
echo " Gaji Pokok   = $no2 <br>";
echo " Tunjangan    = $tunjang <br>";
echo " Gaji Total   = $total <br>";
echo"<center>=================== <br> </center>";

//()
//{}
//[]
?>