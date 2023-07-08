<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerima</title>
</head>

<body>
    <a href="form_penerima.php">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM Penerima");
    ?>
    <table>
        <thead>
            <tr>
                <th>Id_penerima</th>
                <th>Alamat</th>
                <th>No_hp</th>
                <th>Nama</th>
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
                                <td><?php echo $row['id_penerima'];?></td>
                                <td><?php echo $row['alamat'];?></td>
                                <td><?php echo $row['no_hp'];?></td>
                                <td><?php echo $row['nama'];?></td>
                                <td>Edit | Hapus</td>
                            </tr>
                            <?php
                }
            ?>   
            </tbody>
    </table>
</body>
</html>