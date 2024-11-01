<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Gaji Pegawai </title>
</head>
<body>
    <h1>Menghitung Gaji Pegawai </h1>
<div class="container">
    <form method="post">
       <label for="jumlah_kerja"> Masukkan jumlah jam kerja:</label> <input type="text" name="jam_kerja">
        <label for="upah"> Masukkan upah per jam: </label><input type="text" name="upah_per_jam">
        <input type="submit" value="Hitung Gaji">
    </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_kerja = $_POST["jam_kerja"];
        $upah_per_jam = $_POST["upah_per_jam"];
        $gaji = 0;

        if (is_numeric($jam_kerja) && is_numeric($upah_per_jam)) {
            echo "<h2>Gaji Pegawai</h2>";
            echo "Jumlah Jam Kerja: $jam_kerja jam<br>";
            echo "Upah per Jam: Rp. " . $upah_per_jam . " /jam<br>";

            echo "<h3>Rincian Gaji:</h3>";
            echo "<ul>";

            $total_jam_kerja = 0;
            while ($total_jam_kerja < $jam_kerja) {
                $gaji += $upah_per_jam;
                $total_jam_kerja++;
                echo "<li>Jam ke-" . $total_jam_kerja . ": Rp. " . $gaji . "</li>";
            }

            echo "</ul>";
            echo "<h3>Total Gaji: Rp." . $gaji . "</h3>";
        } else {
            echo "Masukkan angka yang valid.";
        }
    }
    ?>
</body>
</html>

<style>
 body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
            margin: 20px 0;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        h3 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
</style>