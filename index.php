Here's a basic PHP application:<?php
// Simple PHP Application

// Function to greet the user
function greet($name) {
  return "Hello, " . htmlspecialchars($name) . "!";
}

// Get the user's name from the query string, or use a default
$name = isset($_GET['name']) ? $_GET['name'] : "World";

// Output the greeting
$greeting = greet($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 80%;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $greeting; ?></h1>
        <p>This is a simple PHP application.</p>
        <p>You can add your name to the URL like this: <code>?name=YourName</code></p>
        <p>For example: <a href="?name=John">?name=John</a></p>
    </div>
</body>
</html>
