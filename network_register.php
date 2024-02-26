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
  
  <h1 class="display-6">New users, register to our social network</h1>
</div>

<form class="row"> <!--This aligned 2 buttons vertically-->
  <div class="mb-3">
    <label for="birthday" class="form-label">Birthday</label>
    <input type="date" class="form-control" id="birthday" min="1900-01-01" max="2020-01-01">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select type="select" class="form-control" id="gender">
      <option selected disabled hidden></option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email">
  </div>
  <a type="submit" class="btn btn-primary" href="">Register</a>
  <a class="btn btn-secondary" href="network_index.php">Already got an account? Login instead</a>
</form>
</div>




</body>
</html>