<?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM admin WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute(); // Eksekusi query insert
  $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Rumah Makan Seribu Rasa</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Menu Makanan</h3>
        <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            
            <label for="">Menu</label><br>
            <input type="text" name="menu" value="<?php echo $data['menu']; ?>"><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" value="<?php echo $data['harga']; ?>"><br>
            
            <label for="">Gambar</label><br>
            <input type="text" name="foto" class="form-text" value="<?php echo $data['foto']; ?>"><br>


            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>