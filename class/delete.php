<?php
if (isset($_POST['filename'])) {
    $filename = 'uploads/' . basename($_POST['filename']);

    if (unlink($filename)) {
        echo "File deleted successfully.";
    } else {
        echo "Error deleting file.";
    }
}
?>
