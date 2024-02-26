<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network front page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="network_css/network_profile_loggedin.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="network_js/network_index.js" type="text/javascript"></script>
</head>
<body>

<div class="container-1">
    <div class="logo">Social network</div>
    <div class="input-group">
      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
      <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
    </div>
</div>

 <div class="container-2">
    <div class="background-image">

    </div>
  
  <div class="card">
      <img src="..." class="card-img-top" alt="profile-picture">
  </div>
  <div class="name">
    <p>Your name placeholder</p>
  </div>
  <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#" >Feed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#" >Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#" >Friends</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#" >Settings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#" >Logout</a>
  </li>
  </ul>
 </div>

<div class="container-3">
    <div class="friends-container">
      <ul class="list-group list-group-flush">
         <li class="list-group-item">An item</li>
         <li class="list-group-item">A second item</li>
         <li class="list-group-item">A third item</li>
         <li class="list-group-item">A fourth item</li>
         <li class="list-group-item">And a fifth one</li>
      </ul>
    </div>

    <div class="photo-container">
        <div class="photo">1</div>
        <div class="photo">2</div>
        <div class="photo">3</div>
        <div class="photo">4</div>
    </div>

    <div class="own-feed-container">
        <div class="post">Your personal post 1</div>
        <div class="post">Your personal post 2</div>
    </div>
</div>

</body>
</html>