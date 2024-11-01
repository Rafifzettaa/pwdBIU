<center>
        <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
        <h3>Pendaftaraan Anggota Secara Online</h3>
        <h5><i>Jl. Sejahtera no. 11  Bekasi Tenggara <br></i></h5>
        <hr color="red">
</center><p>
<pre>
<h2>***** Bukti Pendaftaraan ****</h2>
<?php
$nama =$_POST['nama'];
$tempat =$_POST['tempatlahir'];
$tgl =$_POST['tanggallahir'];
$bln =$_POST['bulanlahir'];
$thn =$_POST['tahunlahir'];
$jenis =$_POST['jk'];
$alamat =$_POST['alamat'];
$tlp =$_POST['tlp'];
echo"Tanggal Cetak  : ";
echo date("D - d/M/Y <p>");
echo"<br>";
echo"Nama Lengkap   : $nama<br>";
echo"TTL            : $tempat - $tgl/$bln/$thn<br>";
if($jenis=='1')
 $jk='Laki - Laki';
else
$jk='Perempuan';
echo"Jenis Kelamin  : $jk<br>";
echo"Alamat         : $alamat<br>";
echo"No Telepon     : $tlp<br>";
?>
</pre><p>
<a href="kasus03.php"><<< INPUT LAGI</a>
<hr color="red">
<marquee  direction="right">
<i>- - -  Pendaftaraan Anggota Perpustakaan secara Online - - - </i>

</marquee>
