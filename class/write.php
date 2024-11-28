<?php
if (isset($_POST['filename']) && isset($_POST['content'])) {
    $filename = 'uploads/' . basename($_POST['filename']);
    $content = $_POST['content'];

    file_put_contents($filename, $content, FILE_APPEND);
    echo "Content written to file.";
}
?>
