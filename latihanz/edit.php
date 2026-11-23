<?php

require_once 'koneksi.php';

$id = $_GET['id']; //ambil id dari database
$result = mysqli_query($con, "SELECT * FROM notes WHERE id = $id"); //ambil baris data sesuai id
$row = mysqli_fetch_assoc($result); //tampilkan data per baris

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //kirim data ke db dari form yang methodnya post
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    mysqli_query($con, "UPDATE notes SET judul = '$judul', konten= '$konten' WHERE id=$id");
    header("location: view.php?id=$id"); //setelah selesai, redirect ke halaman view
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?= $row['judul'] ?></title>
</head>
<body>
    <h2>Edit notes</h2>
    
    <form method='POST'>
        judul: <br>
        <input type='text' name='judul' value='<?= $row['judul']?>'> <br>

        konten: <br>
        <textarea type='text' name='konten' rows='10'> <?= $row['konten']?> </textarea> <br>

    <button type='submit'>Update</button>
    <a href='view.php'>Batal</a>
</body>
</html>