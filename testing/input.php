<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Taekwondo</title>
</head>
<body>
    <h1>Selamat Datang dipendaftaran kejuaraan Taekwondo</h1>
    <form action="output.php" method="post">
        <table>
            <tr>
                <td>Masukan Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td>Masukan Usia Anda</td>
                <td>:</td>
                <td><input type="text" name="usia"></td>
            </tr>
            <tr>
                <td>Masukan Berat Badan Anda</td>
                <td>:</td>
                <td><input type="text" name="bb"></td>
            </tr>
            <tr>
                <td>Masukan Tingkatan Sabuk Anda</td>
                <td>:</td>
                <td><input type="text" name="ts"></td>
            </tr>
                </table>

        <input type="submit" name="lanjutkan" value="Lanjutkan">
        <input type="reset" value="Berhenti">
    </form>

</body>
</html>