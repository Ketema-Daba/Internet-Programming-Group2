<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    // Check if file is a valid upload
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully: " . basename($_FILES["file"]["name"]);
    } else {
        echo "Error uploading file.";
    }
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 31106f68e5e6a9e516f390430a13d8800b727570
