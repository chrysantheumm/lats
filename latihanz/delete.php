<?php

require_once 'koneksi.php';

$id = $_GET['id'];

mysqli_query($con, "DELETE FROM notes WHERE id = $id");

header("Location: index.php");
exit;
