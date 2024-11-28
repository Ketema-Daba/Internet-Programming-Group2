<?php
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    $filePath = 'uploads/' . basename($filename); // Use basename to prevent directory traversal attacks

    // Check if the file exists before trying to read it
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        echo $content;
    } else {
        echo "Error: File does not exist.";
    }
} else {
    echo "Error: No filename provided.";
}
?>
