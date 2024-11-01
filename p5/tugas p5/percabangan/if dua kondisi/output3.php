<center><h2>- - - Hasil Penentuan Bilangan Ganjil - Genap - - - </h2></center>
<hr color="red">

<?php
$angka=$_POST['hitung'];

if($angka % 2 !=0){
    $hitung = '<h3>Angka Tersebut adalah Ganjil</h3>';
}
else {
    $hitung = '<h3>Angka Tersebut Adalah Genap</h3>';
}

echo '<h2>- - - Hasil Perhitungan Kalkulator - - -</h2>';
echo " <h2>**** Angka $angka ****</h2>";
echo "$hitung"
?>
<p>
<a href="tugas3.php"><<< INPUT LAGI</a>
<hr color="red">
<marquee  direction="right">
<i>- - - Perhitungan Kalkulator Khusus Ganjil - Genap - - -  </i>

</marquee>
