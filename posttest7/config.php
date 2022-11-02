<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "posttest7";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("gagal terhubung ke server");
}