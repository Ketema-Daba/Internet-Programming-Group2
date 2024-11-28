<?php
if (isset($_POST['filename']) && isset($_POST['content'])) {
    $filename = 'uploads/' . basename($_POST['filename']);
    $content = $_POST['content'];

    file_put_contents($filename, $content, FILE_APPEND);
    echo "Content written to file.";
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 31106f68e5e6a9e516f390430a13d8800b727570
