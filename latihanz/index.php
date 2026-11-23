<?php

require_once 'koneksi.php';

$result = mysqli_query($con, "SELECT * FROM notes") //ambil semua data dari db

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notes</title>
</head>
<body>
    <h2>Latihan bikin notes</h2>
    <a href="create.php">Tambah notes</a>
    
    <?php if (mysqli_num_rows($result) === 0): //cek kondisi jumlah baris data    ?>
        <p>kosong</p>
    <?php else:
        while($row = mysqli_fetch_assoc($result)): //menampilkan tiap baris data selama masih ada (loop) ?>
        <div>
            <h3> <?= $row['judul'] ?> </h3>
            <p> <?= substr($row['konten'], 0, 50) //preview konten dengan substr 0-50 huruf ?>...</p>
            <a href="view.php?id= <?= $row['id'] //buka notes berdasarkan id ?>">buka</a>
        </div>
        <?php endwhile;
    endif; ?>

</body>
</html>