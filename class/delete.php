<?php
if (isset($_POST['filename'])) {
    $filename = 'uploads/' . basename($_POST['filename']);

    if (unlink($filename)) {
        echo "File deleted successfully.";
    } else {
        echo "Error deleting file.";
    }
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 31106f68e5e6a9e516f390430a13d8800b727570
