<?php
include "template/connection.php";
$query = mysqli_query($mysqli, "SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal berita</title>
  <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">  
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">Portal Berita</a>
      <a href="buatArtikel.html"><button type="button" class="btn btn-primary btn-md">Membuat artikel</button></a>
    </nav>
  </div>
  <div class="container">
    <table class="table fixed" id="dataTable" width="100%" cellspacing="0">
      <tbody>
        <?php
        $i = 1;
        while ($artikel = mysqli_fetch_assoc($query)) {
        ?>
          <tr>
            <td>
              <h2><?= $artikel['title'] ?></h2>
            </td>
            <td>
            <a href="updateArtikel.php?id=<?= $artikel['id_article'] ?>" class="badge badge-secondary">update</a>
            </td>
            <td>
            <a href="hapusArtikel.php?id=<?= $artikel['id_article'] ?>" class="badge badge-danger">hapus</a>
            </td>
          </tr>
          <tr>
            <td height="20px">
              <p><?= $artikel['article'] ?></p>
            </td>
          </tr>
        <?php
          $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

<div class="container">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">@Krisna Wahyu Setyawan 2022</p>
  </footer>
</div>
</html>