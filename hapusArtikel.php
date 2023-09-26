<?php
include "template/connection.php";
$id = $_GET['id'];
$query = "delete from artikel where id_article = $id";
$result = mysqli_query($mysqli,$query);
if ($result) {
    header('location:index.php');
}