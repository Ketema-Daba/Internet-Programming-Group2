<?php
if (isset($_POST['oldname']) && isset($_POST['newname'])) {
    $oldName = 'uploads/' . basename($_POST['oldname']);
    $newName = 'uploads/' . basename($_POST['newname']);

    if (rename($oldName, $newName)) {
        echo "File renamed successfully.";
    } else {
        echo "Error renaming file.";
    }
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 31106f68e5e6a9e516f390430a13d8800b727570
