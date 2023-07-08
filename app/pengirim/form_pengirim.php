<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengirim</title>
</head>
<body>
    <form action="controller_prodi.php" method="post"></form>
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
    </div>
    <div>
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" id="no_hp">
    </div>
    <div>
        <label for="id_pengirim">Id Pengirim</label>
        <input type="password" name="id_pengirim" id="id_pengirim">
    </div>
    <div>
        <input type="submit" value="Simpan Data">
    </div>
</body>
</html>