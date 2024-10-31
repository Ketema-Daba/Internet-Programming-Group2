<?php
// Database connection parameters
$servername = "localhost"; // Change if your database server is different
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "user_registration"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $username = htmlspecialchars($_POST['username']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
    
    // Handle selected courses
    $courses = isset($_POST['courses']) ? implode(", ", $_POST['courses']) : '';

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (first_name, middle_name, last_name, username, phone, email, gender, country, courses) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $fname, $mname, $lname, $username, $phone, $email, $gender, $country, $courses);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo "Form not submitted correctly.";
}

$conn->close();
?>
