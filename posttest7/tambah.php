<?php

require "config.php";

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telpon = $_POST["telpon"];
    $alamat = $_POST["alamat"];

    $kirim = mysqli_query($db, "INSERT INTO praktikum (nama, email, telpon, alamat) VALUES('$nama', '$email', '$telpon', '$alamat')");


    if($kirim){
        echo"
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'indexx.php';
        </script>
        ";
    }else{
        echo"
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'formulir.php';
        </script>
        ";
    }
}
