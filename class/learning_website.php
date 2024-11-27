<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing Learning Website</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        /* Header */
        header {
            background: linear-gradient(to right, #4CAF50, #2E7D32);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #FFC107;
        }

        /* Hero Section */
        .hero {
            background: url('https://via.placeholder.com/1500x800') no-repeat center center/cover;
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .hero h1 {
            font-size: 4em;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .hero p {
            font-size: 1.5em;
            margin-bottom: 25px;
            max-width: 700px;
            line-height: 1.6;
        }
        .hero a {
            text-decoration: none;
            padding: 15px 30px;
            font-size: 1.2em;
            color: white;
            background-color: #FF5722;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .hero a:hover {
            background-color: #E64A19;
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            text-align: center;
            background: linear-gradient(to right, #2E7D32, #4CAF50);
            color: white;
            padding: 15px 0;
            font-size: 1em;
            margin-top: 20px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to the Amazing Learning Website!</h1>
    <nav>
        <a href="#home">Home</a>
        <a href="subjects.php">Subjects</a>
        <a href="contact us.php">Contact Us</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<section>
    <div class="hero">
        <h1>Welcome to E-Learning</h1>
        <p>Explore courses, enhance your skills, and achieve your learning goals anytime, anywhere.</p>
        <a href="subjects.php">Browse Courses</a>
        <a href="about.php">Learn More</a>
    </div>
</section>

<div class="footer">
    <p>&copy; 2024 E-Learning Platform. All rights reserved.</p>
</div>

</body>
</html>
