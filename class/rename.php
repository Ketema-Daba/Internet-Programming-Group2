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
?>
