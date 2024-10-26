<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <link rel="stylesheet" href="style.css">
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

            <label for="gender">Gender:</label>
        
            <div class="container">
        <h2>Select Your Courses</h2>
        <form action="process.php" method="POST">
            <label><input type="checkbox" name="courses[]" value="Mathematics"> Mathematics</label><br>
            <label><input type="checkbox" name="courses[]" value="Physics"> Physics</label><br>
            <label><input type="checkbox" name="courses[]" value="Chemistry"> Chemistry</label><br>
            <label><input type="checkbox" name="courses[]" value="Biology"> Biology</label><br>
            <label><input type="checkbox" name="courses[]" value="Computer Science"> Computer Science</label><br>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>
