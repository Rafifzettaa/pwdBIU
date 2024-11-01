<?php
    $nm = $_POST['nm'];
    $usia = $_POST['usia'];
    $bb = $_POST['bb'];
    $ts= $_POST['ts'];
    $hargaKu= 0;
    $hargaKbb= 0;
    $hargaKts= 0;
    

    if (isset($_POST['lanjutkan'])) {

        //kategori usia
        if(($usia >= 13) && ($usia <= 50)){
           $kategori="Kategori Dewasa";
            $hargaKu = 10000;
        } 
        else {
            $kategori = "Kategori Anak-anak";
            $hargaKu = 5000;

        }

        //kategori berat badan
        if(($bb >= 0) && ($bb <= 35)){
            $hargaKbb = 5000;
        } elseif (($bb >= 35.99) && ($bb <= 40)){
            $hargaKbb = 10000;
        } elseif (($bb >= 41.99) && ($bb <= 45)){
            $hargaKbb = 15000;
        } elseif (($bb >= 45.99) && ($bb <= 50)){
            $hargaKbb = 15000;
        } elseif (($bb >= 50.99) && ($bb <= 55)){
            $hargaKbb = 20000;
        } elseif (($bb >= 55.99) && ($bb <= 60)){
            $hargaKbb = 25000;
        } elseif (($bb >= 60.99) && ($bb <= 65)){
            $hargaKbb = 30000;
        } elseif (($bb >= 65.99) && ($bb <= 70)){
            $hargaKbb = 35000;
        } elseif (($bb >= 70.99) && ($bb <= 75)){
            $hargaKbb = 40000;
        } elseif (($bb >= 75.99) && ($bb <= 80)){
            $hargaKbb = 45000;
        } else {
            $hargaKbb = '';
        }

        //kategori tingkatan sabuk
        $tkSabuk = $ts;

        switch ($tkSabuk){
            case 'Hijau':
                $hargaKts = 20000;
                break;
            case 'Biru':
                $hargaKts = 25000;
                break;
            case 'Merah':
                $hargaKts = 30000;
                break;
            case 'Hitam':
                $hargaKts = 35000;
                break;
            default:
                echo 'Tidak Tersedia!';
        }
    }

    //rumus menghitung harga pendaftaran
    $hrgDaftar = $hargaKu + $hargaKbb + $hargaKts;

    //output
    echo "<table>";
    echo "<tr>
        <th> Nama </th>
        <th> : </th>
        <td> $nm </td></tr><br>";
    echo "<tr>
        <th> Usia </th>
        <th> : </th>
        <td> $usia </td></tr><br>";
    echo "<tr>
        <th> Berat Badan</th>
        <th> : </th>
        <td> $bb </td></tr><br>";
    echo "<tr>
        <th> Tingkatan Sabuk </th>
        <th> : </th>
        <td> $ts </td></tr><br>";
    echo "<tr>
        <th> Harga Pendaftaran yang harus dibayar </th>
        <th> : </th>
        <td> $hrgDaftar </td></tr>";
    echo "<tr>
        <th>Kategori Perlombaan </th> 
        <th> : </th>
        <td> $kategori </td></tr>";
    echo "</table>";
    echo "Pembarayan menggunakan metode transfer Bank";
    ?>