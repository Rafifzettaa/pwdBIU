<?php


session_start();




if (isset($_POST['tambah'])) {
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $harga = 0;

    if ($produk === 'pisang') {
        $harga = 5000;
    } elseif ($produk === 'susu') {
        $harga = 15000;
    } elseif ($produk === 'roti') {
        $harga = 7000;
    } elseif ($produk === 'Sendal') {
        $harga = 10000;
    } else {
        echo "<p>Produk tidak valid.</p>";
    }

    if ($harga > 0) {
        $subtotal = $harga * $jumlah;
        if (isset($_SESSION['keranjang'][$produk])) {
            $_SESSION['keranjang'][$produk] += $jumlah;
            
        } else {
        $_SESSION['keranjang'][$produk] = $jumlah;
        }
        $_SESSION['subtotal'] = $subtotal;
        $_SESSION['informasi_produk']= "Produk $produk sebanyak $jumlah telah ditambahkan ke keranjang belanja. Subtotal: Rp $subtotal";

        echo '<h2>**** Struk Pembayaran ****</h2>';
       
        echo "<p>Produk $produk sebanyak $jumlah telah ditambahkan ke keranjang belanja. Subtotal: Rp $subtotal</p>";
        echo "Pembayaran : <form method='post'><input type='number' name='bayar' size='30'> <input type='submit' name='jmluang' value='Bayar'></form>";
    }
}

if (isset($_POST['jmluang'])) {
    $uang = $_POST['bayar'];
     $total_belanja = 0;
    
    $informasi_produk = $_SESSION['informasi_produk'];

    if (isset($_SESSION['keranjang'])) {
        foreach ($_SESSION['keranjang'] as $item => $jumlah) {
            $harga_item = 0;

            if ($item === 'pisang') {
                $harga_item = 5000;
            } elseif ($item === 'susu') {
                $harga_item = 15000;
            } elseif ($item === 'roti') {
                $harga_item = 7000;
            } elseif ($item == 'Sendal') {
                $harga_item = 10000;
            }

            $subtotal_item = $harga_item * $jumlah;
            $total_belanja += $subtotal_item;
        }
    }

    echo '<center><h2>**** Struk Pembayaran ****</h2></center>';
    echo "Informasi Produk : $informasi_produk<br>";
    echo "<hr color='blue'>";
   
    $kembalian =$uang - $total_belanja;
    echo "<h2>Total Belanja: Rp. $total_belanja<br>";
    echo "Pembayaran: Rp. $uang<br>";
    echo "Sisa uang adalah: Rp. $kembalian</h2>";
    echo "<hr color ='blue'>";
}


?>






<!-- // $kembalian= $uang - $total_belanja;  //line 49-58 update
    // $_SESSION['total_belanja'] = $subtotal;
    // $_SESSION['kembalian'] = $kembalian;
    
    // echo '<h2>**** Struk Pembayaran ****</h2>';
    // echo "Informasi Produk: $informasi_produk<br>";
    // echo "Total Belanja   : Rp. {$_SESSION['$total_belanja']}<br>";
    // echo "Pembayaran        : Rp. $uang <br>";
    // echo "Sisa Uang adalah  : Rp. {$_SESSION['kembalian']}</p>"; -->
<!-- //next update
// if (isset($_SESSION['keranjang'])) {
//     echo "<h2>Isi Keranjang Belanja:</h2>";
//     echo "<ul>";
//     foreach ($_SESSION['keranjang'] as $item => $jumlah) {
//         $harga_item = 0;

//         if ($item === 'pisang') {
//             $harga_item = 5000;
//         } elseif ($item === 'susu') {
//             $harga_item = 15000;
//         } elseif ($item === 'roti') {
//             $harga_item = 7000;
//         } elseif ($item == 'Sendal'){
//             $harga_item = 10000;
//         }

//         $subtotal_item = $harga_item * $jumlah;
//         echo "<li>$item: $jumlah item (Subtotal: Rp $subtotal_item)</li>";
//         echo "<form method='post'><input type='hidden' name='hapus' value='$item'><input type='submit' name='hapus_item' value='Hapus'></form></li>";
//         echo "<form method='post'><input type='hidden' name='update' value='$item'>";
//         echo "<input type='number' name='jumlah_update' min='1' value='$jumlah'>";
//         echo "<input type='submit' name='update_item' value='Update'></form>";
//         echo "<form method='post'><input type='hidden' name='hapus' value='$item'>";
//          echo "<input type='submit' name='hapus_item' value='Hapus'></form></li>";
//     }
//     echo "</ul>";
   

//     if(isset($_POST['hapus_item'])){
//         $item_to_hapus = $_POST['hapus'];
//         unset($_SESSION['keranjang'][$item_to_hapus]);
//     }

//     if (isset($_POST['update_item'])) {
//         $item_to_update = $_POST['update'];
//         $new_quantity = $_POST['jumlah_update'];
        
//         if ($new_quantity > 0) {
//             $_SESSION['keranjang'][$item_to_update] = $new_quantity;
//         } else {
//             // Jika jumlah baru kurang dari atau sama dengan 0, hapus item dari keranjang.
//             unset($_SESSION['keranjang'][$item_to_update]);
//         }
//     }
// } -->