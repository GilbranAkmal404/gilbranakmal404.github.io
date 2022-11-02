<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM karyawan WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telpon = $_POST['nohp'];
        $alamat = $_POST['alamat'];

        $update = mysqli_query($db, "UPDATE posttest7 SET nama='$nama', email='$email', telpon='$telpon', alamat='$alamat' WHERE id='$id'");

        if($update){
            header("Location:indexx.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <header>
        <h2>Data Karyawan</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data Karyawan</h3>
        <form action="" method="post">
            
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text" value=<?=$row['nama'];?>><br>
            
            <label for="">NIM</label><br>
            <input type="text" name="nim" class="form-text" value=<?=$row['nim'];?>><br>
            
            <label for="">Nomor HP</label><br>
            <input type="text" name="nohp" class="form-text" value=<?=$row['telpon'];?>><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10" value=<?=$row['alamat'];?>></textarea><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>