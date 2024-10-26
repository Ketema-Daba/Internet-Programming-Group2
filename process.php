<?php
$servername = "localhost";  // MySQL server
$username = "root";          // MySQL username (default is usually 'root')
$password = "";              // MySQL password (leave blank if none is set)
$dbname = "internetprogramming"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
<h1>form </h1>
// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form input to prevent SQL injection
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $username = htmlspecialchars($_POST['username']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);

    // SQL query to insert data into the 'users' table
    $sql = "INSERT INTO users (fname, mname, lname, username, phone, gender)
            VALUES ('$fname', '$mname', '$lname', '$username', '$phone', '$gender')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
