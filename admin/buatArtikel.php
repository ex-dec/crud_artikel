<?php
include "../template/connection.php";
$judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
$isi = mysqli_real_escape_string($mysqli, $_POST['isi']);


$sql = "INSERT INTO artikel (id_article, title, article)
        VALUE (NULL,'$judul', '$isi')";

$query = mysqli_query($mysqli, $sql);
if ($query) {
    header('location: /');
} else {
    echo "gagal submit";
    echo mysqli_error($koneksi);
}