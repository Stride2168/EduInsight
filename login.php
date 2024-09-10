<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Login</title>
</head>
<body>
    <div class="icon"><img src="images/brain.png" alt="Brain Logo"></div>
   
    <h1>EduInsight</h1>
    <form action="login.php" method="post"> <!-- Use login.php to handle the form -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Please Enter your Username Here" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Please Enter your password Here" required>
        
        <button type="submit">Login</button>
    </form>
</body>
<script>
    window.addEventListener('load', function () {
        document.body.classList.add('loaded');
    });
</script>
</html>

<?php
session_start();

// Database connection variables
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "eduinsight";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Prepare and execute SQL query
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Store user information in session
            $_SESSION['username'] = $user;
            $_SESSION['role'] = $row['role'];

            // Redirect based on user role
            if ($row['role'] == 'admin') {
                header("Location: admin.php");
            } elseif ($row['role'] == 'teacher') {
                header("Location: homepage.php");
            } else {
                header("Location: error.html");
            }
            exit();
        } else {
            echo "Invalid username or password.";
            
        }
    } else {
        echo "Please enter both username and password.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>