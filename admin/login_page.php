<?php
session_start();
if (!empty($_SESSION['username'])) {
  header('Location: confirm.php');
} else {
  include 'putus.php';
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link href="../asset/css/application.min.css" rel="stylesheet">
  <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="../asset/css/floating-labels.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" method="POST" action="login.php">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    </div>
    <div class="form-label-group">
      <input type="text" class="form-control" name="username" required autofocus>
      <label>username</label>
    </div>
    <div class="form-label-group">
      <input type="password" name="password" class="form-control" required>
      <label>password</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
</body>

</html>