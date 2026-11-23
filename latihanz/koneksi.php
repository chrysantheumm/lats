<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan";

$con = mysqli_connect ($host, $user, $pass, $db); //koneksi

if (!$con) {
    die(mysqli_connect_error()); //kalau gagal muncul error
}
