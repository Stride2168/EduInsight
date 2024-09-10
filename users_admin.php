<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <title>Grades</title>  
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="homepage.php" ><img id="brain" src="images/brain.png"></a></li>
            <li><h1 id="title">EduInsight</h1></li>
            <li><a class="sidebar" href="admin.php">Home</a></li>
            <li><a class="sidebar" href="sections_admin.php">Sections</a></li>
            <li><a class="sidebar" href="users_admin.php">users</a></li>
            <li><a class="sidebar" href="settings.php">Settings</a></li>
            <li><a class="User"href="page2.html">User</a></li>
            <li><a class="logout" href="LOGIN.php">Logout</a></li></ul>
    </div>
    <div id="content">
        <h1>Grades:</h1>
        <div class="w3-container w3-teal">
            <h5>My Page</h5>
        </div>
    </div>
    <script>
        // Wait for the page to fully load, then add the 'loaded' class to the body
        window.addEventListener('load', function () {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
