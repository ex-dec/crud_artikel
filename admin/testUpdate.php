<?php
include "template/connection.php";
$id = 6;
$judul = 'artikel 3';
$isi = 'test';

$sql = "UPDATE artikel SET title='$judul', article='$isi' WHERE id_article = '$id'";

$query = mysqli_query($mysqli, $sql);
if ($query) {
    header('location: /');
} else {
    echo "gagal submit";
    echo mysqli_error($koneksi);
}