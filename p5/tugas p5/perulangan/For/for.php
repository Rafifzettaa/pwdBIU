<!DOCTYPE html>
<html>
<head>
    <title>Program Input Daftar Barang</title>
</head>
<body>
    <center><h1>Program Input Barang</h1></center>
<div class="container">
    <form method="post">
        <h2>Input Informasi Barang</h2>
        Nama Barang: <input type="text" name="nama_barang[]">
        Harga Barang: <input type="text" name="harga_barang[]">
        Jumlah Terjual: <input type="text" name="jumlah_terjual[]">
        <input type="submit" value="Tambah Barang">
    </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama_barang"])) {
        $nama_barang = $_POST["nama_barang"];
        $harga_barang = $_POST["harga_barang"];
        $jumlah_terjual = $_POST["jumlah_terjual"];
        $total_pendapatan = 0;

        echo "<center><h2>Hasil Penjualan</h2></center>";
        echo "<table border='1'>";
        echo "<tr><th>NO</th><th>Nama Barang</th><th>Harga Barang</th><th>Jumlah Terjual</th><th>Total Pendapatan</th></tr>";

        for ($i = 0; $i < count($nama_barang); $i++) {
            $subtotal = $harga_barang[$i] * $jumlah_terjual[$i];
            $total_pendapatan += $subtotal;

            echo "<tr>";
            echo "<td>" . $i + 1 . "</td>";
            echo "<td>" . $nama_barang[$i] . "</td>";
            echo "<td>Rp. " . $harga_barang[$i] . "</td>";
            echo "<td>" . $jumlah_terjual[$i] . "</td>";
            echo "<td>Rp. " . $subtotal . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<center><h3>Total Pendapatan: Rp." . number_format($total_pendapatan,0,',','') . "</h3></center>";
    }
    ?>
</body>
</html>

<style>
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
   body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    width: 500px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
select,
input[type="number"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select {
    cursor: pointer;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #555;
}

.hasil {
    width: 500px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #333;
}

</style>