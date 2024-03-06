<?php
// Assume that you have already started the session and fetched necessary user data like username, friends list, etc.
// You will also need to include the necessary files for database connection and user authentication.
// For simplicity, I'll include static placeholders where dynamic data should be fetched.
$loggedInUser = "JohnDoe"; // Placeholder for logged-in user's username
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - feed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="network_css/network_home_loggedin.css" type="text/css">
    <link rel="stylesheet" href="network_css/network_chat.css" type="text/css">
    <script src="network_js/network_logout.js" type="text/javascript"></script>
    <script src="network_js/network_chat.js" type="text/javascript"></script>
</head>
<body>

<!-- Confirmation Modal -->
<div id="confirmationModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span> <!--!!!&times; means exit x on display !!!-->
    <p>Are you sure you want to logout?</p>
    <button id="confirmLogoutBtn">Yes, Logout</button>
  </div>
</div> 

    <header>
          <div class="logo">Social network</div>

          <div class="search-bar-container">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
            </div>
          </div>

          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="network_profile_loggedin.php">My profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Settings</a>
           </li>
           <li class="nav-item">
              <a class="nav-link active" aria-current="page" id="logoutBtn">Logout</a>
           </li>
          </ul>
    </header>
    
    <main>
        <div class="post-container">
            <h2>What would you like to post today?</h2>
            <form method="post" action="network_home_loggedin.php">
                <label for="post-a-post" type="textbox"></label>
                <textarea type="textbox" id="post-a-post" name="post-a-post" placeholder="Write your text here..."></textarea>
                <input type="submit" value="Post">
            </form>
        </div>
        <div class="post-view-container">
        <h2>Posts from the community</h2>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
        </div>
    </main>

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
