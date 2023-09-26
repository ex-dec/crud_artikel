<?php
include "../template/connection.php";
$id = $_GET['id'];
$query = "select * from artikel where id_article='$id'";
$getArticle = mysqli_query($mysqli, $query);
$artikel = mysqli_fetch_assoc($getArticle);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update artikel</title>
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Update artikel</a>
        </nav>
    </div>
    <div class="container">
        <form method="POST" action="u_artikel.php" enctype="multipart/form-data">
            <input type="text" name="id" value="<?= $artikel['id_article']?>" hidden>
            <div class="form-group">
                <label for="Judul">Judul artikel</label>
                <input class="form-control" type="text" name="judul" value="<?= $artikel['title']?>">
            </div>
            <div class="form-group">
                <label for="Dateline">Isi artikel</label>
                <textarea class="form-control" id="isi" rows="3" name="isi"><?= $artikel['article']?></textarea>
            </div>
            </br>
            <button class="btn btn-md btn-primary btn-block" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>