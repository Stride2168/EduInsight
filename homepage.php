<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>  
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a  href="homepage.php"><img id="brain" src="images/brain.png"></a></li>
            <li><h1 id="title">EduInsight</h1></li>
            <li><a class="sidebar" href="homepage.php">Home</a></li>
            <li><a class="sidebar" href="sections.php">Sections</a></li>
            <li><a class="sidebar" href="grades.php">Grades</a></li>
            <li><a class="sidebar" href="settings.php">Settings</a></li>
            <li><a class="User" href="page2.php">User</a></li>
            <li><a class="logout"  href="LOGIN.php">Logout</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>DASHBOARD:</h1>
        <div class="greeting" id="greetingMessage"></div>
        <div class="container">
          
            <p class="card">No. Of Students:<br><span class="highlight">200 students</span>
            </p>
            <p class="card">No. Of Sections:<br><span class="highlight">4 sections</span>
            </p>
            <p class="card">No. Of Failed Students:<br><span class="highlight">3 students</span>
            </p>
        </div>
    </div>
    <script>
      // Function to check if the user has already visited today
      function hasVisitedToday() {
        const lastVisit = localStorage.getItem('lastVisitDate');
        const today = new Date().toDateString();

        return lastVisit === today;
    }

    // Function to mark that the user has visited today
    function markVisitedToday() {
        const today = new Date().toDateString();
        localStorage.setItem('lastVisitDate', today);
    }

    // Display greeting if the user hasn't visited today
    if (!hasVisitedToday()) {
        const now = new Date();
        const hours = now.getHours();
        let greeting;

        if (hours < 12) {
            greeting = 'Good morning!';
        } else if (hours < 18) {
            greeting = 'Good afternoon!';
        } else {
            greeting = 'Good evening!';
        }

        document.getElementById('greetingMessage').innerText = greeting;

        // Mark that the user has visited today
        markVisitedToday();
    }
        window.addEventListener('load', function () {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Optionally, check if the user has the correct role
if ($_SESSION['role'] !== 'admin') {
    // Redirect to an error or access denied page if role does not match
    header("Location: error.html");
    exit();
}
?>

<!-- Admin page content here -->
