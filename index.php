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
    <table class="table" id="dataTable" width="100%" cellspacing="0">
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
            <a href="hapusArtikel.php?id=<?= $artikel['id_article'] ?>" class="badge badge-danger">hapus</a>
            </td>
          </tr>
          <tr>
            <td>
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

</html>