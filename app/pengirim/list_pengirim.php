<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengirim</title>
</head>

<body>
    <a href="form_pengirim.php">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM Pengirim");
    ?>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No_hp</th>
                <th>Id_pengirim</th>
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
                                <td><?php echo $row['nama'];?></td>
                                <td><?php echo $row['alamat'];?></td>
                                <td><?php echo $row['no_hp'];?></td>
                                <td><?php echo $row['id_pengirim'];?></td>
                                <td>Edit | Hapus</td>
                            </tr>
                            <?php
                }
            ?>   
            </tbody>
    </table>
</body>
</html>