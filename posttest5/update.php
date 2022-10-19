<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UPDATE</title>
</head>

<body>
   <a href="read.php">KEMBALI KE READ</a>

   <H1>UPDATE</H1>
   <form action="" method="POST">
      <?php
      $tampil = mysqli_query($conn, "SELECT * FROM karyawan WHERE id = '" . $_GET['id_karyawan'] . "'");
      if (mysqli_num_rows($tampil) > 0) {
         while ($row = mysqli_fetch_array($tampil)) {
      ?>
            <table>
               <input type="text" name="id" value="<?php echo $row['id']; ?>">
               <tr>
                  <th>Nama</th>
                  <th><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></th>
               </tr>
               <tr>
                  <th>Alamat</th>
                  <th><input type="text" name="kelas" value="<?php echo $row['alamat']; ?>"></th>
               </tr>
               <tr>
                  <th>Jenis Kelamin</th>
                  <th><input type="text" name="jenis kelamin" value="<?php echo $row['jenis kelamin']; ?>"></th>
               </tr>
            </table>
      <?php
         }
      }
      ?>
      <input type="submit" name="submit" value="Update">
   </form>
   <?php
   if (isset($_POST['submit'])) {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $kelamin = $_POST['jenis kelamin'];

      $update = mysqli_query($conn, "UPDATE karyawan SET 
         nama = '$nama',
         alamat = '$alamat',
         jenis kelamin = '$kelamin'
         WHERE id = '$id'"
      );

      if ($update) {
   ?>
         <script>
            alert("data berhasil di update");
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