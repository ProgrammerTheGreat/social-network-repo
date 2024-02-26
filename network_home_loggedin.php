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
    <title>Home - MySocialNetwork</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Include your CSS file here -->
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $loggedInUser; ?>!</h1>
        <nav>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h2>Friend's Posts</h2>
        <div class="post-container">
            <!-- Example post -->
            <div class="post">
                <p class="post-content">{{POST_CONTENT}}</p>
                <span class="post-info">Posted by: FriendUsername | Date: {{POST_TIMESTAMP}}</span>
            </div>
            <!-- End of example post -->

            <!-- Repeat the above structure for each post from friends -->
        </div>
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
