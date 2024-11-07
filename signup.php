<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patron Men's Grooming</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="images/short-logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
    .signup {
    background-image: url(images/background-blurred.png);
    background-position: center; /* Centers the image */
    filter: blur(0px); /* Adjust the blur amount as desired */
}
</style>
<body class="signup">
  <header>
    <div class="logo">Patron</div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="buy.html" class="book-btn">Buy Now</a></li>
      </ul>
    </nav>
  </header>
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-graduation-cap"></i>
      <h1>Signup for a Patron Account</h1>
      <p>Choose from an individual, commercial, or partnership account</p>
      <div class="btn-group">
        <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Login</a>
        <a class="btn-item" href="https://www.w3docs.com/quiz/#">Learn More</a>
      </div>
    </div>
    <form action="signup-includes/signup.inc.php" method="POST">
      <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <h2>Signup here</h2>
      </div>
      <div class="info">
        <input class="fname" type="uid" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <select>
          <option value="Account-Type" selected>Account type</option>
          <option value="Individual">Individual</option>
          <option value="Commercial">Commercial</option>
          <option value="Partnership">Barber Partnership</option>
        </select>
      </div>
      <div class="checkbox">
        <input type="checkbox" name="checkbox"><span>I agree to the <a href="policy.html">Privacy Poalicy for Patron BarberCap.</a></span>
      </div>
      <button type="submit" href="/">Submit</button>
    </form>
  </div>
</body>
</html>