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
        <h3>Tambah Menu Baru</h3>
        <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
            
            <label for="">MAKANAN</label><br>
            <input type="text" name="menu" class="form-text"><br>
            
            <label for="">HARGA</label><br>
            <input type="text" name="harga" class="form-text"><br>
            
            <label for="">GAMBAR</label><br>
            <input type="file" name="foto" accept="image/*"><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>