function validateForm() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const phone = document.getElementById("phone_number").value;

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    const phonePattern = /^[0-9]{10}$/;

    if (!email.match(emailPattern)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }

    if (!phone.match(phonePattern)) {
        alert("Phone number must be 10 digits.");
        return false;
    }

    return true;
}

function uploadFile() {
    const formData = new FormData(document.getElementById('uploadForm'));
    fetch('class/upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => console.error('Error:', error));
}

function readFile() {
    const filename = document.getElementById('filename').value;
    fetch(`class/read.php?filename=${encodeURIComponent(filename)}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('fileContent').textContent = data;
        })
        .catch(error => console.error('Error:', error));
}

function writeFile() {
    const filename = document.getElementById('filename').value;
    const content = prompt("Enter content to write:");
    fetch('class/write.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `filename=${encodeURIComponent(filename)}&content=${encodeURIComponent(content)}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => console.error('Error:', error));
}

function renameFile() {
    const oldname = document.getElementById('filename').value;
    const newname = prompt("Enter new file name:");
    fetch('class/rename.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `oldname=${encodeURIComponent(oldname)}&newname=${encodeURIComponent(newname)}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => console.error('Error:', error));
}

function deleteFile() {
    const filename = document.getElementById('filename').value;
    fetch('class/delete.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `filename=${encodeURIComponent(filename)}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => console.error('Error:', error));
}
