<!DOCTYPE html>
<html>
<head>
    <title>Contoh Pemilihan Gambar dengan Input Select</title>
</head>
<body>
    <h1>Pilih Gambar</h1>
    <form method="post">
        <label for="input">Pilih gambar:</label>
        <select name="input">
            <option value="Standar">Gambar A</option>
            <option value="b">Gambar B</option>
        </select>
        <input type="submit" value="Tampilkan Gambar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];

        if ($input == 'Standar' || $input == 'b') {
            $gambar = $input . '.jpg';

            if (file_exists($gambar)) {
                echo "<h2>Gambar yang Anda pilih:</h2>";
                echo "<img src='$gambar' alt='$input'>";
            } else {
                echo "<p>Gambar tidak ditemukan.</p>";
            }
        } else {
            echo "<p>Silakan pilih gambar yang valid.</p>";
        }
    }
    ?>
</body>
</html>
