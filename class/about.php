<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Language Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #444;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .course-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .course-card h3 {
            margin: 10px 0;
            font-size: 1.5em;
            color: #007bff;
        }
        .course-card p {
            font-size: 1em;
            margin: 10px 0;
            line-height: 1.5;
            color: #555;
        }
        .course-card a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .course-card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Programming Language Courses</h1>
        <div class="grid">
            <div class="course-card">
                <h3>Python</h3>
                <p>Python is a versatile, high-level programming language widely used for web development, data analysis, artificial intelligence, scientific computing, and automation. This course will take you from the basics of Python syntax to advanced concepts like object-oriented programming and frameworks like Django and Flask.</p>
                <a href="#python">Learn More</a>
            </div>
            <div class="course-card">
                <h3>JavaScript</h3>
                <p>JavaScript is the backbone of web development, powering interactivity and dynamic content on websites. This course covers everything from DOM manipulation and event handling to modern frameworks like React, Angular, and Vue.</p>
                <a href="#javascript">Learn More</a>
            </div>
            <div class="course-card">
                <h3>Java</h3>
                <p>Java is a robust, object-oriented language commonly used for building enterprise applications, Android apps, and large-scale backend systems. Learn Java fundamentals, advanced programming techniques, and how to use tools like Spring and Hibernate.</p>
                <a href="#java">Learn More</a>
            </div>
            <div class="course-card">
                <h3>C++</h3>
                <p>C++ is known for its performance and is widely used in game development, systems programming, and applications requiring high-speed computations. Master C++ concepts like pointers, data structures, and memory management.</p>
                <a href="#cpp">Learn More</a>
            </div>
            <div class="course-card">
                <h3>C#</h3>
                <p>C# is a modern programming language designed by Microsoft for building Windows applications, games with Unity, and enterprise software. This course covers the .NET framework, LINQ, and Windows Forms.</p>
                <a href="#csharp">Learn More</a>
            </div>
            <div class="course-card">
                <h3>Ruby</h3>
                <p>Ruby is a dynamic, easy-to-learn language known for its simplicity and its web development framework, Ruby on Rails. Learn how to create web applications rapidly and efficiently.</p>
                <a href="#ruby">Learn More</a>
            </div>
            <div class="course-card">
                <h3>PHP</h3>
                <p>PHP is a server-side scripting language used to develop dynamic and interactive websites. Learn how to build websites, integrate databases, and use popular CMS platforms like WordPress.</p>
                <a href="#php">Learn More</a>
            </div>
            <div class="course-card">
                <h3>Swift</h3>
                <p>Swift is Apple’s powerful programming language for developing iOS and macOS applications. This course covers Swift basics, building user interfaces, and submitting apps to the App Store.</p>
                <a href="#swift">Learn More</a>
            </div>
            <div class="course-card">
                <h3>Kotlin</h3>
                <p>Kotlin is a modern, concise programming language that’s officially supported for Android development. Learn how to build Android apps, work with APIs, and use Kotlin’s powerful features.</p>
                <a href="#kotlin">Learn More</a>
            </div>
            <div class="course-card">
                <h3>Go</h3>
                <p>Go, developed by Google, is a fast and efficient language for modern software development. This course covers Go basics, concurrency, and building scalable backend systems.</p>
                <a href="#go">Learn More</a>
            </div>
            <!-- Add additional courses in the same format -->
        </div>
    </div>
</body>
</html>
