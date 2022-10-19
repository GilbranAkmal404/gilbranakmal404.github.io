<?php 
   include('database.php');

   if(isset($_GET['id_karyawan'])){
      $delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= '".$_GET['id_karyawan']."'");

      if($delete){
         ?>
            <script>
            alert("data berhasil dihapus");
            window.location=('read.php');
            </script>
         <?php
      }
   }
?>
