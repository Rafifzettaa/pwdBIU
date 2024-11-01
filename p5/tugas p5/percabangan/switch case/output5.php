<head>
    <title>Hasil Konversi Nama Bulan ke Jumlah Hari</title>
</head>
    <hr color="orange">
    <center>
        <h2>Hasil Konversi Nama Bulan ke Jumlah Hari</h2>
    </center>
    <hr color="orange">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bulan = $_POST["bulan"];

        // Menggunakan switch case untuk mengkonversi nama bulan menjadi jumlah hari
        $jumlah_hari = 0;
        switch ($bulan) {
            case "Januari":
            case "Maret":
            case "Mei":
            case "Juli":
            case "Agustus":
            case "Oktober":
            case "Desember":
                $jumlah_hari = 31;
                break;
            case "April":
            case "Juni":
            case "September":
            case "November":
                $jumlah_hari = 30;
                break;
            case "Februari":
                $jumlah_hari = 28;
                break;
            default:
                echo "Bulan yang Anda pilih tidak valid.";
                break;
        }

        if ($jumlah_hari > 0) {
            echo "<h2>Jumlah hari dalam bulan $bulan adalah $jumlah_hari hari.</h2>";
        }
    }

    ?>
    <a href="case.php">
        <<< INPUT LAGI</a>
            <hr color="orange">
            <marquee direction="right">
                <i>- - - Hasil Konversi Nama Bulan ke Jumlah Hari - - - </i>
                <hr color="orange">
