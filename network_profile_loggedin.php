<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network own profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="network_css/network_profile_loggedin.css" type="text/css">
    <link rel="stylesheet" href="network_css/network_chat.css" type="text/css">
    <script src="network_js/network_chat.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="network_js/network_logout.js" type="text/javascript"></script>
</head>
<body>

<!-- Confirmation Modal -->
<div id="confirmationModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span> <!-- &times; means exit x on display  -->
    <p>Are you sure you want to logout?</p>
    <button id="confirmLogoutBtn">Yes, Logout</button>
  </div>
</div>

<div class="container-1">
    <div class="logo">Social network</div>
    <div class="input-group">
      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
      <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
    </div>
</div>

 <div class="container-2">
    <div class="background-image"></div>
    <div class="card">
      <img src="..." class="card-img-top" alt="profile-picture">
    </div>
    <div class="name">
      <p>Your name placeholder</p>
    </div>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="network_home_loggedin.php" >Feed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#" id="logoutBtn">Logout</a>
      </li>
    </ul>
 </div>

<div class="container-3">
    <div class="friends-container">
      <ul class="list-group list-group-flush">
         <li class="list-group-item">An item (friend) <img src="..." class="card-img-top" alt="profile-picture"><span class="online-status"></span></li>
         <li class="list-group-item">A second item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">A third item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">A fourth item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">And a fifth one (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">An item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">A second item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">A third item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
         <li class="list-group-item">A fourth item (friend) <img src="..." class="card-img-top" alt="profile-picture"></li>
      </ul>
    </div>

    <div class="photo-container">
        <div class="photo"><img src="..." class="card-img-top" alt="profile-picture">1</div>
        <div class="photo"><img src="..." class="card-img-top" alt="profile-picture">2</div>
        <div class="photo"><img src="..." class="card-img-top" alt="profile-picture">3</div>
        <div class="photo"><img src="..." class="card-img-top" alt="profile-picture">4</div>
    </div>

      <div class="own-feed-container">
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
        <div class="post">Your personal post x</div>
      </div>
</div>

<button id="chatToggleBtn">Open Chats</button>
<div class="chat-menu" id="chatMenu">
    <div class="chat-menu-header">
        <h2>Chats</h2>
        <button id="chatCloseBtn">Close</button>
    </div>
    <div class="chat-menu-content">
        <ul>
            <!-- Example chat items -->
            <li>User 1</li>
            <li>User 2</li>
            <li>User 3</li>
            <li>User 4</li>
            <li>User 5</li>
        </ul>
    </div>
</div>

</body>
</html>