<?php

    $judulBuku = "Harry Potter And the Philosopher's Stone";
    $namaPeminjam = "Alice";
    $tanggalPeminjaman =  "2023-10-22";
    $tanggalnow = date ("Y-m-d");
    $tanggalPengembalian = strtotime($tanggalPeminjaman);
    $tanggalKembali =strtotime($tanggalnow);
    //fungsi strotime sendiri adalah mengkoversi unix time stamp ke string
    
    
    //konstanta tarifdenda dengan nilai 2500
   Define("TARIF_DENDA",2500);

   //judul program
    echo '<div class="bg">';
    echo  '<h2>Aplikasi Peminjaman Perpustakaan</h2>';
    echo "Buku $judulBuku telah dipinjam oleh  $namaPeminjam pada $tanggalPeminjaman";
    echo '<br>';
    echo '<br>';
    
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "Tipe data $judulBuku adalah : " .gettype($judulBuku);
    echo '<br>';
    echo "Tipe data dari variabel $namaPeminjam adalah : " .gettype($namaPeminjam);
    echo '<br>';
    echo "Tipe data dari variabel $tanggalPeminjaman adalah : " .gettype($tanggalPeminjaman);
    echo '<br>';
    echo '<br>';

 //menghitung selisih hari
    $PenguranganHari = floor(($tanggalKembali - $tanggalPengembalian) /(60 * 60 * 24));
    echo '<script>';
    echo "let_data_js = '$PenguranganHari';";
    echo '</script>';
    echo "<h3>Hari Terlambat: $PenguranganHari Hari</h3>";

   
    if(isset($_POST['hitung_denda'])){
        //keterlambatan dalam sehari
        
        $PenguranganHari = floor(($tanggalKembali - $tanggalPengembalian) /(60 * 60 * 24));
    
    
    //hitung jumlah denda
    $denda = $PenguranganHari * TARIF_DENDA;
    echo '<br>';
    echo '<br>';
    echo "<h4>Denda yang harus dibayar: $denda</h4>";
    echo '</div>';
}




   
//tujuan dibuatkaannya variabel $tanggalpeminjaman karena untuk mengetahui keterlambatan pengumpulannya
?>
<!-- CSS STYLE  + Membuat input button -->
<style>
    .bg {
        background-color: white;
        margin-right: 40%;
    }
    h2 {
        text-align: center;
    }
    body {
        
        background-color: aliceblue;
        font-family:monospace;
        font-size: large;
        background-image: url(../hero.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    input{
        width: 12%;
        height: 10%;
        background-color:forestgreen;
        font-size: medium;
        font-family: monospace;
        color: white;
        animation-duration: 0.8s;
    }
</style>
<form method="post">
   
<input type="submit" name="hitung_denda" value="Hitung Denda">
</form>