<?php
<<<<<<< HEAD
// $host = 'localhost';


$host = '127.0.0.1'; // Use IP to avoid DNS resolution issues
$port = 3307;        // Specify the port if it's not the default 3306
$db = 'learning_platform';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db, $port);

// $conn = new mysqli($host, $user, $pass, $db);
=======
$host = 'localhost';
$db = 'learning_platform';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
>>>>>>> 31106f68e5e6a9e516f390430a13d8800b727570

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $subjects = implode(", ", $_POST['subjects']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_name = basename($_FILES["file"]["name"]);
        $file_path = "uploads/" . $file_name;
        move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);
    } else {
        $file_path = null;
    }

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone_number, gender, subjects, email, password_hash, file_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $phone_number, $gender, $subjects, $email, $password, $file_path);

    if ($stmt->execute()) {
        header("Location: learning_website.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 31106f68e5e6a9e516f390430a13d8800b727570
