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
        /* Fullscreen Background */
        body {
            background-image: url('images/IMG_3735.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Card Styling */
        .card {
            background: none; /* Fully transparent background */
            border: none; /* Remove any borders */
            box-shadow: none; /* Remove default shadow */
            width: 250px; /* Adjust width for smaller cards */
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Carousel Styling */
        .carousel-inner img {
            object-fit: cover; /* Prevent stretching or empty space */
            width: 100%;
            height: 180px; /* Adjust height to fit card */
        }

        /* Remove Carousel Spacing */
        .carousel-item {
            background: none; /* Ensure no background */
        }

        /* Buttons and Controls */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
            border-radius: 50%;
            width: 1.5rem;
            height: 1.5rem;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Card Text and Content */
        .card-title {
            font-size: 1.1rem;
            font-weight: bold;
            text-align: center;
        }

        .card-text,
        .collapse-description {
            font-size: 0.9rem;
            text-align: center;
        }

        /* Add spacing between cards */
        .card-body {
            padding: 10px; /* Compact layout */
        }

        /* Header styling */
        h1 {
            color: white;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            margin-bottom: 40px;
        }
    </style>

    <?php include_once 'nav.php'; ?>
</head>

<body>
    <div class="container">
        <h1>Buy Now</h1>
        <div class="row gy-4 justify-content-center">
            <!-- Product Card -->
            <div class="col-auto">
                <div class="card h-100">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
                        <!-- Product Images -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/barber-cap-product.jpeg" class="d-block w-100" alt="Hair Oil Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/hair-oil-2.jpeg" class="d-block w-100" alt="Hair Oil Image 2">
                            </div>
                        </div>
                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Patron Hair Oil</h5>
                        <p class="card-text">Experience premium hair care with our nourishing hair oil, perfect for all hair types.</p>
                        <button class="btn btn-dark w-100 mb-2" data-bs-toggle="collapse" data-bs-target="#description1">
                            More Details
                        </button>
                        <div id="description1" class="collapse collapse-description">
                            This hair oil is enriched with natural ingredients that strengthen, nourish, and provide shine to your hair.
                        </div>
                        <h3 class="text-dark mt-3">$50</h3>
                        <button class="btn btn-dark w-100">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Additional Cards... -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
