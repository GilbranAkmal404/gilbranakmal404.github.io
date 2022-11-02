<?php
    require "config.php";

    $result = mysqli_query($db, "SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DATABASE</title>
        <link rel="stylesheet" href="style5.css">
    </head>
    <body>
        <header>
            <h2>DATA KARYAWAN</h2>
        </header>

        <div class="list-table">
            <h3>Daftar Karyawan ITEMKU</h3>
            <a href="formulir.php" class="tambah">Tambah Karyawan</a>
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th nowrap>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th colspan="2">Actions</th>
                </tr>
<?php
   $i = 1;
   while($baris = mysqli_fetch_array($result)) {
    
?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$baris["nama"]?></td>
                    <td><?=$baris["email"]?></td>
                    <td><?=$baris["telpon"]?></td>
                    <td><?=$baris["alamat"]?></td>
                    <td><a href="update.php?id=<?=$baris["id"]?>">edit</a></td>
                    <td><a href="hapus.php?id=<?=$baris["id"]?>">hapus</a></td>
                </tr>
<?php
    $i++;
    }?>
            </table>
        </div>
        
    </body>
</html>