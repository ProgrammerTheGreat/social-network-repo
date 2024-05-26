<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network front page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="network_css/network_index.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="network_js/network_register.js" type="text/javascript"></script>
</head>
<body>
<?php
  require_once 'login.php';

  try {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }
/* This one might not work. Taken from the book.
  $query = "SELECT * FROM users";
  $result = $pdo->query($query);

  while ($row = $result->fetch())
  {
    echo 'User:  ' . htmlspecialchars($row['username']);
  } */

  /* function register (birthday, fullName, password, email){

  } */
  ?>
<div class="container">
<div class="logo">Social network</div>
<div class="text-center">
  <h1 class="display-6">New users, register to our social network</h1>
</div>

<form class="row" method="post" action="">
  <div class="mb-3">
    <label for="birthday" class="form-label">Birthday</label>
    <input type="date" class="form-control" id="birthday" min="1900-01-01" max="2024-01-01" required>
  </div>
  <div class="mb-3">
    <label for="fullname" class="form-label">Full name</label>
    <input type="text" class="form-control" id="fullname" required>
  </div>
  <div class="mb-3" req>
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" required>
  </div>
  <button class="btn btn-primary" href="network_profile_loggedin.php">Register</button>
  <a class="btn btn-secondary" href="network_index.php">Already got an account? Login instead</a>
</form>
</div>
</body>
</html>