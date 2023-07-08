<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penerima</title>
</head>
<body>
    <form action="controller_paket.php" method="post"></form>
    <div>
        <label for="id_penerima">Id_penerima</label>
        <input type="text" name="id_penerima" id="id_penerima">
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
    </div>
    <div>
        <label for="no_hp">No_hp</label>
        <input type="text" name="no_hp" id="no_hp">
    </div>
    <div>
        <label for="nama barang">Nama Barang</label>
        <input type="text" name="nama barang" id="nama barang">
    </div>
    <div>
        <label for="tanggal">Tanggal</label>
        <input type="text" name="tanggal" id="tanggal">
    </div>
    <div>
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga">
    </div>
    <div>
        <input type="submit" value="Simpan Data">
    </div>
</body>
</html>