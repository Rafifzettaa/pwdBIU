<head>
    <title>*****FORM INPUT***** </title>
</head>
<body>
    <form action="bukti03.php" method="post">
        <center>
        <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
        <h3>Pendaftaraan Anggota Secara Online</h3>
        <h5><i>Jl. Sejahtera no. 11  Bekasi Tenggara <br></i></h5>
        <hr color="red">
        </center><p><pre>
Nama Lengkap  : <input type="text" name="nama" size="35" maxlength="30"><br>
TTL           : <input type="text" name="tempatlahir" maxlength="20"> <select size="1" name="tanggallahir">
<?php
for($i=1;$i<=31;$i++)
{
    echo"<option value=$i>$i</option>";
}
?>

</select><select size="1" name="bulanlahir">
<option>Januari
<option>Februari
<option>Maret
<option>April
<option>Mei
<option>Juni
<option>Juli
<option>Agustus
<option>September
<option>Oktober
<option>November
<option>Desember

</select><input type="text" name="tahunlahir" size="10" maxlength="4" value="2009">

Jenis Kelamin : <input type="radio" name="jk" value="1">Laki - Laki<input type="radio" name="jk" value="p">Perempuan <br>
Alamat        : <textarea name="alamat"  cols="35" rows="3" wrap="on"></textarea><br>
No. Telp      : <input type="text" name="tlp" size="15" maxlength="15"><br>
    <input type="submit" value="KIRIM"> <input type="reset" value="BERSIH"> 
</pre>
    </form>
<hr color="red">
<marquee  direction="right">
<i>- - -  Pendaftaraan Anggota Perpustakaan secara Online - - - </i>

</marquee>
</body>