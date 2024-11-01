<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <hr color="orange">
    <center><h2>Konversi Nama Bulan ke Jumlah Hari</h2></center>
    <hr color="orange">
    <h1>Pilhlah Satu Bulan Lalu Klik Konversi</h1>
    <form action="output5.php" method="post">
        <label for="bulan">Pilih bulan:</label>
        <select name="bulan" id="bulan">
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
        <input type="submit" value="Konversi">
    </form>
    <hr color="orange">
            <marquee direction="right">
                <i>- - - Hasil Konversi Nama Bulan ke Jumlah Hari - - - </i>
                <hr color="orange">
   
</body>
</html>