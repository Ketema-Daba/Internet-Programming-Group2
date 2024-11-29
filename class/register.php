<?php
// Database connection details
$host = '127.0.0.1'; // Use IP to avoid DNS resolution issues
$port = 3307;        // Specify the port if it's not the default 3306
$db = 'learning_platform';
$user = 'root';
$pass = '';

// Create a connection
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $gender = $conn->real_escape_string($_POST['gender']);
    
    // Validate and process subjects
    if (isset($_POST['subjects']) && is_array($_POST['subjects'])) {
        $subjects = implode(", ", $_POST['subjects']);
    } else {
        $subjects = ""; // Set to an empty string if no subjects are selected
    }
    
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    
    // File upload handling
    $file_name = null;
    $file_path = null;
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $file_name = basename($_FILES["file"]["name"]);
        $file_path = "uploads/" . $file_name;

        // Check and create the uploads directory if not exists
        if (!is_dir("uploads")) {
            mkdir("uploads", 0755, true);
        }

        // Move the uploaded file
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) {
            echo "Error uploading file.";
            $file_path = null; // Set to null if file upload fails
        }
    }

    // Insert user and file data into the `users` table
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone_number, gender, subjects, email, password_hash, file_name, file_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $first_name, $last_name, $phone_number, $gender, $subjects, $email, $password, $file_name, $file_path);

    if ($stmt->execute()) {
        header("Location: learning_website.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
