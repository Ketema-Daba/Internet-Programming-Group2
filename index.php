<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <script src="script.js" defer></script>
    <script src="script1.js" defer></script>
    <script src="script2.js" defer></script>
</head>
<body>
    
    <h1>GROUP 2 Project</h1>
    <div class="container">
        <h2>User Registration Form</h2>
        <form action="process.php" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="mname">Middle Name:</label>
            <input type="text" id="mname" name="mname">

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
           <h2>Select Your Gender</h2>
           <label><input type="radio" name="gender" value="Male" required> Male</label><br>
           <label><input type="radio" name="gender" value="Female"> Female</label><br>
           <label><input type="radio" name="gender" value="Other"> Other</label><br>
            
            <h2>Select Your Courses</h2>
            <label><input type="checkbox" name="courses[]" value="C++"> C++</label>
            <label><input type="checkbox" name="courses[]" value="Java"> Java</label><br>
            <label><input type="checkbox" name="courses[]" value="Python"> Python</label>
            <label><input type="checkbox" name="courses[]" value="OOP"> OOP</label><br>
            <label><input type="checkbox" name="courses[]" value="DB"> Database</label>
            <label><input type="checkbox" name="courses[]" value="Js"> Javascript</label><br>
            <label><input type="checkbox" name="courses[]" value="PSAD"> SAD</label>
            <label><input type="checkbox" name="courses[]" value="Net"> Networking</label><br>
            <label><input type="checkbox" name="courses[]" value="And"> Android</label>
            <label><input type="checkbox" name="courses[]" value="Ip"> IP2</label><br>

            <h2>Select Your Country</h2>
            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="Ethiopia">Ethiopia</option>
                <option value="America">America</option>
                <option value="Europe">Europe</option>
                <option value="China">China</option>
            </select>
              <br><br>
              <div class="container">
        <h1>File Management System</h1>
        <form id="uploadForm" enctype="multipart/form-data">
            <input type="file" id="file" name="file" required>
            <button type="button" onclick="uploadFile()">Upload File</button>
        </form>

        <div class="file-operations">
            <input type="text" id="filename" placeholder="Enter file name">
            <button onclick="readFile()">Read File</button>
            <button onclick="writeFile()">Write to File</button>
            <button onclick="renameFile()">Rename File</button>
            <button onclick="deleteFile()">Delete File</button>
        </div>
        
        <pre id="fileContent"></pre>
    </div>
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>

</body>
</html>
