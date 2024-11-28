<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form & File Management</title>
    <link rel="stylesheet" href="../styles/style.css">
   
    <script>
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

        function readFile() {
            const filename = document.getElementById('filename').value;
            fetch(`read.php?filename=${filename}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('fileContent').textContent = data;
                });
        }

        function writeFile() {
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

        function renameFile() {
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

        function deleteFile() {
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
            <input type="text" id="first_name" name="first_name" required><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="Male" required>Male
            <input type="radio" id="female" name="gender" value="Female" required>Female
            <input type="radio" id="other" name="gender" value="Other" required>Other<br><br>

            <label>Subjects:</label>
            <select name="subjects[]" >
                <option value="Java">Java</option>
                <option value="OOP">OOP</option>
                <option value="HTML">HTML</option>
                <option value="PHP">PHP</option>
                <option value="Javascript">Javascript</option>
            </select><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <h1>File Management System</h1>
        
        <input type="file" id="file" name="file" required>
        <button type="button" onclick="uploadFile()">Upload File</button>
    
       <form  action="read.php" method="$_POST">
    <div class="file-operations">
        <input type="text" id="filename" placeholder="Enter file name">
        <button onclick="readFile()">Read File</button><br>
        <button onclick="writeFile()">Write to File</button><br>
        <button onclick="renameFile()">Rename File</button><br>
        <button onclick="deleteFile()">Delete File</button><br>
    </div>
            <button type="submit" >Register</button>
            
        </form>

    </div>
    
    <script src="javascript/script.js"></script>
</body>
</html>
