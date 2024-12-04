<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop Testimonials</title>
    <link rel="icon" type="image/x-icon" href="images/white-short.png">

    <style>
        /* General styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
        }

        /* Background image styling */
        .background {
            background:  url('images/slice.jpeg')no-repeat center center fixed;
            background-size: cover;
            filter: grayscale(100%);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        /* Testimonial container */
        .testimonial-container {
            padding: 20px;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black */
            border-radius: 8px;
            max-width: 800px;
            margin: 50px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        /* Testimonial form */
        .testimonial-form {
            margin-top: 20px;
        }

        .testimonial-form input, .testimonial-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
        }

        .testimonial-form button {
            padding: 10px 20px;
            background: #444;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
        }

        .testimonial-form button:hover {
            background: #222;
        }
    </style>
</head>
<body>
    <!-- Background Image -->
    <div class="background"></div>

    <!-- Testimonial Section -->
    <div class="testimonial-container">
        <h1>Customer Testimonials</h1>

        <!-- Display testimonials -->
        <div>
            <?php
            // Load testimonials from a file
            $file = 'testimonials.txt';
            if (file_exists($file)) {
                $testimonials = file($file, FILE_IGNORE_NEW_LINES);
                foreach ($testimonials as $testimonial) {
                    echo "<p>" . htmlspecialchars($testimonial) . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No testimonials yet. Be the first to share your experience!</p>";
            }
            ?>
        </div>

        <!-- Add a new testimonial -->
        <form class="testimonial-form" action="add_testimonial.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <textarea name="message" rows="4" placeholder="Your Testimonial" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<body>
    <?php
    include_once 'login-system/nav.php';
    ?>