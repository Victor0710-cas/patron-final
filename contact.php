<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "your_email@example.com"; // Replace with your email
    $email_subject = "Contact Form Submission: $subject";
    $email_body = "
        Name: $name\n
        Email: $email\n
        Subject: $subject\n
        Message:\n$message
    ";

    $headers = "From: $email\r\nReply-To: $email";

    // Try sending the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect to message-sent.php upon successful submission
        header("Location: message-sent.php");
        exit();
    } else {
        // If the email fails to send, simulate the message being sent
        header("Location: message-sent.php?status=error");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Patron Men's Grooming</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="icon" type="image/x-icon" href="images/white-short.png">

    <link rel="icon" type="image/x-icon" href="images/white-short.png">
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
            background: url('images/slice.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000; 
            padding: 20px 50px;
            color: white;
        }

        .logo {
            font-size: 28px;
            font-weight: 600;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #888;
        }

        .book-btn {
            background-color: #444;
            padding: 10px 20px;
            border-radius: 30px;
            color: white;
        }

        .book-btn:hover {
            background-color: #333;
        }

        /* Contact Form Section */
        section#contact {
            padding: 80px 20px;
            max-width: 700px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 36px;
            font-weight: 600;
            color: #444;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-info p {
            font-size: 18px;
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: 600;
        }

        input, select, textarea {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #444;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }

        /* Footer Styles */
        footer {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            color: #ccc;
        }
    </style>
</head>
<body>
    <?php
    include_once 'login-system/nav.php';
    ?>

    <section id="contact">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <p>Have questions or need assistance? We're here to help! Reach out to us through the form below.</p>
            <p>Email: <a href="mailto:info.patron.com@gmail.com">info.patron.com@gmail.com</a></p>
            <p>Phone: <a href="tel:+1234567890">+1 (234) 567-890</a></p>
        </div>
        <form action="contact.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Subject</label>
            <select id="subject" name="subject" required>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Feedback">Feedback</option>
                <option value="Other">Other</option>
            </select>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Patron Men's Grooming. All rights reserved.</p>
    </footer>
</body>
</html>
