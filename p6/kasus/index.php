<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Villa</title>
    <link rel="stylesheet" href="css\style.css">

</head>

<body>
    <div class="header">
        <h1>Penyewaan Villa</h1>
    </div>
    <div class="slideshow">
        <nav>
            <img class="slide" src="deluxe.jpg" alt="Gambar Villa">
            <img class="slide" src="Standar.jpg" alt="Gambar Villa">

            <p>Villa Termurah dan Ternyaman</p>
        </nav>
    </div>
    <div class="container">
        <form method="post">

            <label for="nama">Nama Penyewa</label><br>
            <input type="text" name="nama" required="">


            <label for="alamat">Alamat</label><br>
            <input type="text" name="alamat" required="">

            <label for="tipe"> Tipe Villa</label><br>
            <select name="tipe" required>
                <option value="Standar">Standar</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Superior">Superior</option>
            </select>

            <label for="lama_sewa">Lama lama_Sewa (hari)</label><br>
            <input type="number" name="lama_sewa" required="">

            <input type="submit" name="submit" value="Hitung Total Harga">
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $villa = $_POST['tipe'];



    switch ($villa) {
        case 'Standar':
            //ditentukan harga villa standar yaitu 100 ribu rupiah
            $harga_villa = 100.000;

            break;
        case 'Deluxe':
            //ditentukan harga villa Deluxe yaitu 150 ribu rupiah
            $harga_villa = 150.000;

            break;
        case 'Superior':
            //ditentukan harga villa Superior yaitu 200 ribu rupiah
            $harga_villa = 200.000;

            break;
        default:
            echo 'Villa Tidak Ditemukan';
            break;
    }

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $lama_nginap = $_POST['lama_sewa'];

    if ($lama_nginap <= 3) {
        $diskon =  0.10;
    } elseif ($lama_nginap > 3 && $lama_nginap <= 5) {
        $diskon =  0.15;
    } elseif ($lama_nginap > 5) {
        $diskon = 0.25;
    } else {
        $diskon = 0;
    }
    $total =  $harga_villa * $lama_nginap;
    $totalDiskon = $total * $diskon;
    $totalKeseluruhan = $total - $totalDiskon;


    echo "<div class='container'>";
    echo "<h1>Struk Pembayaran</h1>";
    echo "<table>";
    echo "<tr>
        <th> Nama Penyewa </th>
        <th> Alamat </th>
        <th> Tipe Villa </th>
        <th> Lama Sewa(hari)  </th>
        <th> Harga Per Hari  </th>
        <th> Total Harga  </th>
        <th> Potongan Diskon  </th>
        <th> Total Harga Setelah Diskon  </th></tr>";
    echo "<tr>
     <td> $nama </td>
    <td> $alamat </td>
    <td> $villa </td>
    <td> $lama_nginap </td>
    <td> Rp." . number_format($harga_villa, 3, '.', '') . " </td>
    <td> Rp." . number_format($total, 3, '.', '') . " </td>
    <td> " . ($diskon * 100) . " %</td>
    <td> Rp." . number_format($totalKeseluruhan, 3, '.', '') . " </td>

    </tr>";

    echo "</table>";
    echo "<br>";
    echo "<div class='tekan'>";
    echo "<form method='post'>
                <input type='submit' name='reset' value='Input Ulang'>
            </form>";
    echo "</div>";
    echo " </div>";
}
?>
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = 'block';
            } else {
                slide.style.display = 'none';
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Tampilkan slide pertama saat halaman dimuat
    showSlide(currentSlide);


    setInterval(nextSlide, 3000);
</script>

<style>
    .content {
        text-align: center;
        margin-top: 20px;

    }

    .content img {
        width: 20%;
        height: 20%;

    }

    .slideshow {
        position: relative;
        max-width: 100%;
        overflow: hidden;
        margin-top: 20px;
       
    }

    .slideshow nav p {
        font-weight: bold;
        color: #ddd
    }

    .slideshow nav  {
        padding-bottom: 1vh;
    }

    .slide {
        width: 100%;
        max-height: 250px;
        display: none;
    }

    .slide:first-child {
        display: block;
    }


    .header {

        padding: 10px;
        text-align: center;
    }

    .header h1 {
        color: #fff;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    .container {
        width: 80%;
        /* Lebar container yang diperluas */
        margin: 20px auto;
        /* Posisi tengah */
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }


    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #0056b3;
        background-size: cover;
        text-align: center;
        margin: 0;
        padding: 0;
    }



    h1 {
        color: #333;
    }

    label {
        display: block;
        text-align: left;
    }

    input,
    select {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .tekan {

        width: 20%;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px;
        border-radius: 12px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>