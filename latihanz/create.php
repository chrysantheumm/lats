<?php 
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //kirim data ke db dari form yang methodnya post
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    mysqli_query($con, "INSERT INTO notes (judul, konten) VALUES ('$judul', '$konten')");
    header("location: index.php"); //setelah selesai, redirect ke halaman index
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah notes</title>
</head>
<body>
    <h2>Buat notes</h2>
    <form method='POST'>
        judul: <br>
        <input type='text' name='judul'> <br>

        konten: <br>
        <textarea type='text' name='konten' rows='10'></textarea> <br>

        <button type='submit'>simpan</button>
        <a href='index.php'>batal</a>
</body>
</html>