<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patron Men's Grooming</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="images/short-logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <?php
  if (basename($_SERVER['PHP_SELF']) == 'buy.php') {
      echo '<link rel="stylesheet" href="buy.css">';
  }
  ?>
</head>
<body>
  <?php include_once 'nav.php'; ?>

  <section class="buy-header text-center">
    <h2>Buy Now</h2>
    <h3>Discover Our Premium Products</h3>
  </section>

  <section id="services">
  <div class="container">
    <div class="service-list">
      <!-- Row 1 -->
      <div class="service-item">
        <img src="image1.jpg" alt="Product 1" class="service-image">
        <h3>Barber Cap</h3>
        <p>The cap that delivers precision haircuts effortlessly.</p>
        <div class="service-rating">★★★★★</div>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="service-item">
        <img src="image2.jpg" alt="Product 2" class="service-image">
        <h3>Shaving Kit</h3>
        <p>Ultimate grooming essentials for a perfect shave.</p>
        <div class="service-rating">★★★★★</div>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="service-item">
        <img src="image3.jpg" alt="Product 3" class="service-image">
        <h3>Styling Gel</h3>
        <p>Maintain your hairstyle with all-day hold.</p>
        <div class="service-rating">★★★★★</div>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="service-list">
      <div class="service-item">
        <img src="image4.jpg" alt="Product 4" class="service-image">
        <h3>Beard Oil</h3>
        <p>Keep your beard nourished and soft all day long.</p>
        <div class="service-rating">★★★★★</div>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="service-item">
        <img src="image5.jpg" alt="Product 5" class="service-image">
        <h3>Hair Spray</h3>
        <p>Stay styled with our lightweight spray.</p>
        <div class="service-rating">★★★★★</div>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="service-item">
        <img src="image6.jpg" alt="Product 6" class="service-image">
        <h3>Shampoo</h3>
        <p>Clean and refresh your hair with ease.</p>
        <div class="service-rating">★★★★★</div>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </div>
</section>

    

