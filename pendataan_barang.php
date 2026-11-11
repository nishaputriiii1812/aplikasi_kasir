<!DOCTYPE html>
<html>
<head>
    <title>Pendatanan Barang</title>
</head>
<body>
    <h2>Pendatanan Barang</h2>
    <form action="proses_pendataan.php" method="post">
        <label for="nama_barang">nama_barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required>
        <br><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" step="0.01" required>
        <br><br>
        <label for="stok"> Stok:</label>
        <input type="number" id="stok" name="stok" required>
        <br><br>
        <input type="submit" value="simpan">
    </form>

</body>
</html>