<?php
include_once 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent - Patron Men's Grooming</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="icon" type="image/x-icon" href="images/Contact Pic.jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Basic Resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        /* Full-page Background Image */
        body {
            background: url('images/Contact Pic.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Centered Message Box */
        .message-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px 60px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }

        .message-container h1 {
            font-size: 48px;
            font-weight: 600;
            color: #444;
            margin-bottom: 20px;
        }

        .message-container p {
            font-size: 20px;
            color: #666;
            margin-bottom: 20px;
        }

        .message-container a {
            font-size: 18px;
            color: #444;
            text-decoration: none;
            font-weight: 600;
            border: 1px solid #444;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .message-container a:hover {
            background-color: #444;
            color: white;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <h1> message sent!</h1>
        <p>Thank you for reaching out to us. We will get back to you as soon as possible.</p>
        <p>If you need further assistance, feel free to <a href="contact.php">contact us again</a>.</p>
    </div>
</body>
</html>
