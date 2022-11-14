<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h2>Rumah Makan Seribu Rasa</h2>
        </header>

        <div class="list-table">
            <h3>Daftar Menu</h3>
            <a href="form_simpan.php" class="tambah">Tambah Menu</a><br><br>
            
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th nowrap>Menu</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM admin");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    
    echo "<td>".$data['menu']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td><img src='gambar/".$data['foto']."' width='100' height='100'></td>";
    
    
   
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>

            </table>
        </div>
        
    </body>
</html>