<center><h2>- - - Perhitungan Kalkulator Khusus Ganjil - - - </h2></center>
<hr color="red">

<?php
$ganjil=$_POST['ganjil'];

if($ganjil % 2 !=0){
    $angka = '<h3>Ini Adalah Angka Ganjil</h3>';
}

echo '<h2>- - - Hasil Perhitungan Kalkulator - - -</h2>';
echo " <h2>**** Angka $ganjil ****</h2>";
echo "$angka"
?>
<p>
<a href="if.php"></a>
<hr color="red">
<marquee  direction="right">
<i>- - - Perhitungan Kalkulator Khusus Ganjil - - -  </i>

</marquee>
