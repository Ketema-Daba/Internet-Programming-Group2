function validateForm() {
    const fname = document.getElementById("first_name").value.trim();
    const lname = document.getElementById("last_name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const phone = document.getElementById("phone_number").value.trim();
    const fileInput = document.getElementById("file");

    // Patterns for validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    const phonePattern = /^[0-9]{10}$/;
    const namePattern = /^[a-zA-Z\s]{2,50}$/; // used for both fname and lname validation
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

    // First Name Validation
    if (!fname.match(namePattern)) {
        alert("First name must contain only alphabets and spaces, and be between 2 to 50 characters.");
        return false;
    }

    // Last Name Validation
    if (!lname.match(namePattern)) {
        alert("Last name must contain only alphabets and spaces, and be between 2 to 50 characters.");
        return false;
    }

    // Email Validation
    if (!email.match(emailPattern)) {
        alert("Invalid email address. Please provide a valid email (e.g., user@example.com).");
        return false;
    }

    // Phone Number Validation
    if (!phone.match(phonePattern)) {
        alert("Phone number must be exactly 10 digits (e.g., 1234567890).");
        return false;
    }

    // Password Validation
    if (!password.match(passwordPattern)) {
        alert("Password must be at least 8 characters long, with uppercase, lowercase, a number, and a special character.");
        return false;
    }

    // File Upload Validation
    if (!fileInput.files.length) {
        alert("Please upload a file.");
        return false;
    }

    const allowedFileTypes = ["image/jpeg", "image/png", "application/pdf", "text/plain"];
    const file = fileInput.files[0];
    const maxFileSize = 2 * 1024 * 1024; // 2MB

    if (!allowedFileTypes.includes(file.type)) {
        alert("Invalid file type. Allowed types are JPEG, PNG, PDF, and TXT.");
        return false;
    }

    if (file.size > maxFileSize) {
        alert("File size exceeds the 2MB limit.");
        return false;
    }

    // If all validations pass, allow the form to submit
    alert("Form submitted successfully!");
    return true; // Proceed with form submission
}

// Prevent form submission on button click for file operations
function preventFormSubmit(event) {
    event.preventDefault();
}

// Attach event listeners for file operation buttons
document.querySelectorAll('.file-operations button').forEach(button => {
    button.addEventListener('click', preventFormSubmit);
});

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
