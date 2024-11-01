<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Villa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Penyewaan Villa</h1>
    <form action="" method="post">
        <label for="nama">Nama Penyewa</label>
        <input type="text" name="nama" required><br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" required><br>

        <label for="tipe">Tipe Villa</label>
        <select name="tipe" required>
            <option value="standar">Standar</option>
            <option value="deluxe">Deluxe</option>
            <option value="superiior">superior</option>
        </select><br>

        <label for="lama_sewa">Lama Sewa (Hari)</label>
        <input type="number" name="lama_sewa" required>

        <input type="submit" name="submit" value="Hitung Total Harga">
    </form>

    <?php

        
       
        $hg = 0;
        $diskon = 0;
        $ttl= 0;
        $biaya = 0;
        $ttlHg = 0;

if (isset($_POST['submit'])) {
    //harga setiap tipe villa
    $tipe = $_POST['tipe'];
    $nm = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tipe = $_POST['tipe'];
    $lmSewa = $_POST['lama_sewa'];
    switch ($tipe){
        case('standar'):
            $hg = 100000;
            break;
        case('deluxe'):
            $hg = 150000;
            break;
        case('superior'):
            $hg = 200000;
            break;
        default:
        echo "tidak Valid";
        break;
    }

    //hitung harga sebelum diskon
    $ttl = $hg * $lmSewa;

    //diskon
    if ($lmSewa == 3){
        //diskon 10%
        $diskon = 0.10;
        $biaya = $ttl * $diskon;
        $ttlHg = $ttl - $biaya;
    } elseif (($lmSewa > 3) && ($lmSewa <=5)){
        //diskon 15%
        $diskon = 0.15;
        $biaya = $ttl * $diskon;
        $ttlHg = $ttl - $biaya;
    } elseif ($lmSewa >= 5){
        //diskon 25%
        $diskon = 0.25;
        $biaya = $ttl * $diskon;
        $ttlHg = $ttl - $biaya;
    } else {
        
    }
    //membuat function
    
        
        echo "Nama Penyewa : $nm <br>";
        echo "Alamat : $alamat";
        echo "Tipe Villa : $tipe";
        echo "Lama Sewa : $lmSewa hari";
        echo "Harga per Hari : Rp.$hg";
        echo "Total Harga : Rp. $ttlHg";
    

   

}
     
    ?>
</body>
</html>
<style>
    body{
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container{
    width: 500px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

h1{
    color: #333;
}

label{
    display: block;
    text-align: left;
}

input, select{
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

input[type="submit"]{
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover{
    background-color: #0056b3;
}
</style>