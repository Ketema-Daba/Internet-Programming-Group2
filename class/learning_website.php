<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing Learning Website</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        nav {
            margin: 15px 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        section {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        h1, h2 {
            margin: 0;
        }
        h2 {
            color: #4CAF50;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to the Amazing Learning Website!</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="subjects.php">Subjects</a>
        <a href="contact.php">Contact Us</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="container">
    <section>
        <h2>Explore Our Subjects</h2>
        <p>We offer a wide range of subjects to enhance your learning experience:</p>
        <ul>
            <li><strong>Java</strong>: Learn the fundamentals and advanced concepts.</li>
            <li><strong>OOP</strong>: Dive into Object-Oriented Programming principles.</li>
            <li><strong>HTML</strong>: Understand the structure of web pages.</li>
            <li><strong>PHP</strong>: Server-side scripting for dynamic web applications.</li>
            <li><strong>JavaScript</strong>: Enhance your web pages with interactivity.</li>
        </ul>
    </section>
</div>

<footer>
    <p>&copy; 2024 Amazing Learning Website. All rights reserved.</p>
</footer>

</body>
</html>