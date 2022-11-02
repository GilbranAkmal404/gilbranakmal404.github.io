<!DOCTYPE html>
<html lang="en">
<head>
    <a href="webpage.php" >Home</a>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <header>
        <h2>Karyawan</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Karyawan Baru</h3>
        <form action="tambah.php" method="post">
            
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>
            
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text"><br>
            
            <label for="">Nomor HP</label><br>
            <input type="text" name="nohp" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10"></textarea><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>