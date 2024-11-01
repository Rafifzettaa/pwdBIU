<!DOCTYPE html>
<html>
<head>
    <title>Toko Zetta</title>
</head>
<body>
   <center> <h1>Selamat Datang di Zetta Store</h1></center>
    <hr color="blue">
    <h2>Daftar Produk:</h2>
    <ul>
        <li>Sendal (Rp.10.000)</li>
        <li>Pisang (Rp 5,000)</li>
        <li>Susu (Rp 15,000)</li>
        <li>Roti (Rp 7,000)</li>
    </ul>

    <h2>Keranjang Belanja:</h2>
    <form action="toko_minimarket.php" method="post">
        Produk Toko: 
        <select name="produk">
            <option value="Sendal">Sendal</option>
            <option value="pisang">Pisang</option>
            <option value="susu">Susu</option>
            <option value="roti">Roti</option>
        </select>
        Jumlah: <input type="number" name="jumlah" min="1">
        <input type="submit" name="tambah" value="Tambah ke Keranjang">
        
    </form>

    <hr color="blue">
    <p></p>

</body>
</html>
