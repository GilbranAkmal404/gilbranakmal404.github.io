<?php 
   include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CREATE</title>
</head>

<body>
   <a href="read.php">KEMBALI KE READ</a>

   <H1>CREATE</H1>
   <form action="" method="POST">
      <table>
         <tr>
            <th>Nama</th>
            <th><input type="text" name="nama"></th>
         </tr>
         <tr>
            <th>Alamat</th>
            <th><input type="text" name="alamat"></th>
         </tr>
         <tr>
            <th>Jenis Kelamin</th>
            <th><input type="text" name="jenis kelamin"></th>
         </tr>
      </table>
      <input type="submit" name="submit">
   </form>
   <?php 
      if(isset($_POST['submit'])){
         $nama = $_POST['nama'];
         $alamat = $_POST['alamat'];
         $kelamin = $_POST['jenis kelamin'];

         $create = mysqli_query($conn,"INSERT INTO karyawan VALUES(
            null,
            '".$nama."',
            '".$alamat."',
            '".$kelamin."'
         )");

         if($create){
            ?>
            <script>
            alert("data berhasil ditambahkan");
            window.location=('read.php');
         </script>
            <?php
         } else {
            echo "gagal" . mysqli_error($conn);
         }
      }
   ?>

</body>

</html>