<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patron Men's Grooming</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/short-logo.png">

    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buy.css">

    <!-- Additional Styling for Specific Page -->
    <?php
    if (basename($_SERVER['PHP_SELF']) == 'buy.php') {
        echo '<link rel="stylesheet" href="test-buy.css">';
    }
    ?>
</head>

<body class="container">

    <!-- Navbar -->
    <?php include_once 'nav.php'; ?>

    <!-- Header Section -->
    <section class="buy-header text-center py-4">
        <h2>Buy Now</h2>
        <h3>Discover Our Premium Products</h3>
    </section>

    <!-- Main Product Grid -->
    <div class="row gy-4">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Patron Hair Oil</h4>
                </div>
                <img src="images/hair oil-transp.jpeg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <p class="card-text">
                        Featuring soft foam cushioning and lightweight, woven fabric in the upper, the Jordan Proto-Lyte
                        is made for all-day, bouncy comfort. Lightweight woven fabric with real or synthetic leather
                        provides breathable support.
                    </p>
                    <h3 class="text-dark">$50</h3>
                    <button class="btn btn-dark w-100">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Repeat Cards as Needed -->
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Patron Hair Oil</h4>
                </div>
                <img src="images/hair oil-transp.jpeg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <p class="card-text">
                        Featuring soft foam cushioning and lightweight, woven fabric in the upper, the Jordan Proto-Lyte
                        is made for all-day, bouncy comfort. Lightweight woven fabric with real or synthetic leather
                        provides breathable support.
                    </p>
                    <h3 class="text-dark">$50</h3>
                    <button class="btn btn-dark w-100">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Add more product cards if necessary -->
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
