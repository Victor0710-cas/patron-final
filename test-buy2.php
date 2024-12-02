<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy - Patron Men's Grooming</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/short-logo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('images/IMG_3735.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-bottom: 1px solid #ddd;
            object-fit: cover;
            height: 200px;
            width: 100%;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
            color: #333;
        }

        .card-text {
            font-weight: 400;
            color: #555;
            margin-bottom: 15px;
        }

        .btn-more {
            color: #007bff;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-more:hover {
            text-decoration: underline;
        }

        .description {
            display: none;
            font-size: 0.9rem;
            color: #666;
        }

        .row {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
<?php
include_once 'nav.php';
?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card Template -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/product1-1.jpg" alt="Product Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 1</h5>
                        <p class="card-text">A short description of the product. <a class="btn-more"
                                data-target="desc1">Read more</a></p>
                        <p class="description" id="desc1">This is the full description of the product. It contains
                            detailed information about its features, benefits, and uses.</p>
                    </div>
                </div>
            </div>
            <!-- Repeat the above card for other products -->
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MGyJLO5yPOIcsge1IQF05pA3YADQ2NgOw8O9NbhOxOq9zR51FrWfC/CktoTeD7zN"
        crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script>
        document.querySelectorAll('.btn-more').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-target');
                const description = document.getElementById(targetId);
                const isExpanded = description.style.display === 'block';

                description.style.display = isExpanded ? 'none' : 'block';
                button.textContent = isExpanded ? 'Read more' : 'Read less';
            });
        });
    </script>
</body>

</html>
