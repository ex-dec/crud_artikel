<?php
$judul = $_POST['judul'];
$isi = $_POST['isi'];


$sql = "INSERT INTO artikel (title, article)
        VALUE ('$judul', '$isi')";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('location: /');
} else {
    echo "gagal submit";
    echo mysqli_error($koneksi);
}
