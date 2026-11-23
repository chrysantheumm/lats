<?php

require_once 'koneksi.php';

$id = $_GET['id']; //ambil id dari database
$result = mysqli_query($con, "SELECT * FROM notes WHERE id = $id"); //ambil baris data sesuai id
$row = mysqli_fetch_assoc($result); //tampilkan data per baris
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $row['judul'] ?></title>
</head>
<body>
    <a href='index.php'>Kembali</a>
    <h2> <?= $row['judul'] ?> </h2>
    <p><?= nl2br($row['konten']) ?></p>
    <a href='edit.php?id= <?= $row['id'] ?>'>Edit</a>
    <a href='delete.php?id= <?= $row['id'] ?>'>Hapus</a>
</body>
</html>
