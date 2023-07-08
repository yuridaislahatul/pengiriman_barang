<?php
require "../../config_database.php";
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket</title>
</head>

<body>
    <a href="form_paket.php">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM Paket");
    ?>
    <table>
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Berat</th>
                <th>Tujuan</th>
                <th>Nama Barang</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Act</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                    while($row = $query->fetch_array()){
                        ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $row['jenis'];?></td>
                                <td><?php echo $row['berat'];?></td>
                                <td><?php echo $row['tujuan'];?></td>
                                <td><?php echo $row['nama barang'];?></td>
                                <td><?php echo $row['tanggal'];?></td>
                                <td><?php echo $row['harga'];?></td>
                                <td>Edit | Hapus</td>
                            </tr>
                            <?php
                }
            ?>   
            </tbody>
    </table>
</body>
</html>