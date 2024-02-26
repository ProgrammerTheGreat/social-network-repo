<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network front page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="network_css/network_index.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="network_js/network_index.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
<div class="logo">Social network</div>
<div class="text-center">
  
  <!--<img src="network_images/test-logo.jpg" class="rounded" alt="brand-logo">-->
  <h1 class="display-6">Connect with your friends on a social network</h1>
</div>

<form class="row"> <!--This aligned 2 buttons vertically-->
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <a type="button" class="btn btn-primary" href="network_home_loggedin.php">Login</a>
  <a class="btn btn-secondary" href="network_register.php">Register your new account here</a>
</form>

</div>

</body>
</html>