<?php
include "../template/connection.php";
$id = $_POST['id'];
$judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
$isi = mysqli_real_escape_string($mysqli, $_POST['isi']);

$sql = "UPDATE artikel SET title='$judul', article='$isi' WHERE artikel.id_article='$id'";

$query = mysqli_query($mysqli, $sql);
if ($query) {
    header('location: /');
} else {
    echo "gagal submit";
    echo mysqli_error($koneksi);
}