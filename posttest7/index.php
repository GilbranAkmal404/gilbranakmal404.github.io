<!DOCTYPE html>
<html>
<body id="body">
<h2 align="center">Login Ke ITEMKU</h2>
<link rel="stylesheet" type="text/css"
href="style1.css">

<form method="post" action="" align="center">
  <label for="username">Username:</label><br>
  <input type="text" name="username"  ><br>
  
  <label for="nama">Nama:</label><br>
  <input type="text" name="nama"  ><br>

  <label for="email">Email:</label><br>
  <input type="text" name="email"  ><br>
  
  <label for="pass">Password:</label><br>
  <input type="password" name="password"  ><br>
  
  <label for="konpas">Konfirmasi Password:</label><br>
  <input type="password" name="konpassword"  ><br>
  
  <button type="submit" name="proseslogin">Login</button>
</form>

<?php
   if(isset($_POST['proseslogin'])){
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konpassword = $_POST['konpassword'];
    

    if($username=='HoneyBear404' and $nama=='Gilbran' and $email=='bijibesar00@gmail.com' and $password=='akutampan' and $konpassword=='akutampan'){
        echo "
             <script>
             alert('Anda Login')
             window.location.href='webpage.php';
             </script>
             ";
    }
    else{
        echo "
             <script>
             alert('Password atau Username yang Anda masukkan Salah!')
             window.location.href='index.php';
             </script>
             ";
    
   }


?>

<?php 
    }
?> 
</body>
</html>

