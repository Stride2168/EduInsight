<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'eduinsight_sections';  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the table (section) name and number of rows (students) from user input
$table_name = $_POST['table_name'];
$rows = intval($_POST['rows']);

// Build the SQL query to create the table with predefined columns
$query = "CREATE TABLE IF NOT EXISTS `$table_name` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255),
    middlename VARCHAR(255),
    lastname VARCHAR(255),
    gradeyear INT,
    age INT,
    email VARCHAR(255),
    address TEXT,
    gender VARCHAR(10)
);";

// Execute the query to create the table
if ($conn->query($query) === TRUE) {
    echo "Table '$table_name' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert the rows (students) into the table
for ($i = 1; $i <= $rows; $i++) {
    $firstname = $_POST["firstname_$i"];
    $middlename = $_POST["middlename_$i"];
    $lastname = $_POST["lastname_$i"];
    $gradeyear = intval($_POST["gradeyear_$i"]);
    $age = intval($_POST["age_$i"]);
    $email = $_POST["email_$i"];
    $address = $_POST["address_$i"];
    $gender = $_POST["gender_$i"];

    // Insert query for each row
    $insertQuery = "INSERT INTO `$table_name` (firstname, middlename, lastname, gradeyear, age, email, address, gender)
                    VALUES ('$firstname', '$middlename', '$lastname', $gradeyear, $age, '$email', '$address', '$gender')";

    // Execute the insert query
    if ($conn->query($insertQuery) === TRUE) {
        echo "Student $i added successfully to section '$table_name'.<br>";
    } else {
        echo "Error adding student $i: " . $conn->error . "<br>";
    }
}

// Close the connection
$conn->close();
?>
