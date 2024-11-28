<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form & File Management</title>
    <link rel="stylesheet" href="../styles/style.css">
   
    <script>
        function validateForm() {
            const fname = document.getElementById("first_name").value.trim();
            const lname = document.getElementById("last_name").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();
            const phone = document.getElementById("phone_number").value.trim();
            const fileInput = document.getElementById("file");

            const emailPattern = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
            const phonePattern = /^[0-9]{10}$/;
            const namePattern = /^[a-zA-Z\s]{2,50}$/; // namePattern for both fname and lname
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

            alert("Form submitted successfully!");
            return true; // Allow form submission
        }

        function uploadFile(event) {
            event.preventDefault();
            const formData = new FormData(document.getElementById('uploadForm'));
            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            })
            .catch(error => console.error('Error:', error));
        }

        function readFile(event) {
            event.preventDefault();
            const filename = document.getElementById('filename').value;
            fetch(`read.php?filename=${filename}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('fileContent').textContent = data;
                });
        }

        function writeFile(event) {
            event.preventDefault();
            const filename = document.getElementById('filename').value;
            const content = prompt("Enter content to write:");
            fetch('write.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `filename=${filename}&content=${encodeURIComponent(content)}`
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            });
        }

        function renameFile(event) {
            event.preventDefault();
            const oldname = document.getElementById('filename').value;
            const newname = prompt("Enter new file name:");
            fetch('rename.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `oldname=${oldname}&newname=${newname}`
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            });
        }

        function deleteFile(event) {
            event.preventDefault();
            const filename = document.getElementById('filename').value;
            fetch('delete.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `filename=${filename}`
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="register.php" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
            <h1 class="regform">Registration Form</h1>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
            <small>Only alphabets and spaces allowed (2-50 characters).</small><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
            <small>Only alphabets and spaces allowed (2-50 characters).</small><br><br>

            <!-- Phone Number -->
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number" required><br><br>
            <small>Exactly 10 digits (e.g., 1234567890).</small><br><br>

            <!-- Gender -->
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="Male" required>Male
            <input type="radio" id="female" name="gender" value="Female" required>Female
            <input type="radio" id="other" name="gender" value="Other" required>Other<br><br>

            <!-- Subjects -->
            <label>Subjects:</label>
            <select name="subjects[]" multiple>
                <option value="Java">Java</option>
                <option value="OOP">OOP</option>
                <option value="HTML">HTML</option>
                <option value="PHP">PHP</option>
                <option value="Javascript">Javascript</option>
            </select><br><br>

            <!-- Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            <small>Example: user@example.com</small><br><br>

            <!-- Password -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter a strong password" required>
            <small>Must be at least 8 characters, including uppercase, lowercase, a number, and a special character.</small><br><br>

            <h1>File Management System</h1>
            <!-- File Upload -->
            <label for="file">Upload File:</label>
            <input type="file" id="file" name="file" required>
            <small>Allowed types: JPEG, PNG, PDF, TXT. Max size: 2MB.</small><br><br>

            <button type="button" onclick="uploadFile(event)">Upload File</button><br><br>

            <div class="file-operations">
                <input type="text" id="filename" placeholder="Enter file name"><br>
                <button onclick="readFile(event)">Read File</button><br>
                <button onclick="writeFile(event)">Write to File</button><br>
                <button onclick="renameFile(event)">Rename File</button><br>
                <button onclick="deleteFile(event)">Delete File</button><br>
            </div>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
