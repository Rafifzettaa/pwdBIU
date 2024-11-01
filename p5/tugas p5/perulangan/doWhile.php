<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Tabungan </title>
</head>
<body>
    <h1>Menghitung Jumlah Hari Tabungan</h1>

    <form method="post">
        Masukkan target tabungan harian: <input type="text" name="target_tabungan">
        Masukkan jumlah tabungan harian: <input type="text" name="tabungan_harian">
        <input type="submit" value="Hitung Jumlah Hari">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_tabungan = $_POST["target_tabungan"];
        $tabungan_harian = $_POST["tabungan_harian"];
        $jumlah_hari = 0;
        $tabungan_total = 0;

        if (is_numeric($target_tabungan) && is_numeric($tabungan_harian) && $tabungan_harian > 0) {
            echo "<h2>Jumlah Hari Tabungan</h2>";
            echo "Target Tabungan Harian: Rp. " . $target_tabungan . "<br>";
            echo "Tabungan Harian: Rp. " . $tabungan_harian . "<br>";

            echo "<h3>Perkiraan Tabungan Harian:</h3>";
            echo "<ul>";

            do {
                $tabungan_total += $tabungan_harian;
                $jumlah_hari++;
                echo "<li>Hari ke-" . $jumlah_hari . ": Tabungan total = Rp. " . $tabungan_total . "</li>";
            } while ($tabungan_total < $target_tabungan);

            echo "</ul>";
            echo "<h3>Jumlah Hari yang Dibutuhkan: " . $jumlah_hari . " hari</h3>";
        } else {
            echo "Masukkan angka yang valid dan pastikan tabungan harian lebih dari 0.";
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