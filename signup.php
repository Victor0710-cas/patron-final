<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patron Men's Grooming</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="icon" type="image/x-icon" href="images/short-logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
   .main-block {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding: 25px;
  background: rgba(0, 0, 0, 0.5); 
  }
  .left-part, form {
  padding: 25px;
  }
  .left-part {
  text-align: center;
  }
  .fa-graduation-cap {
  font-size: 72px;
  }
  form {
  background: rgba(0, 0, 0, 0.7); 
  }
  .title {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  }
  .info {
  display: flex;
  flex-direction: column;
  }
  input, select {
  padding: 5px;
  margin-bottom: 30px;
  background: transparent;
  border: none;
  border-bottom: 1px solid #eee;
  }
  input::placeholder {
  color: #eee;
  }
  option:focus {
  border: none;
  }
  option {
  background: black; 
  border: none;
  }
  .checkbox input {
  margin: 0 10px 0 0;
  vertical-align: middle;
  }
  .checkbox a {
  color: #26a9e0;
  }
  .checkbox a:hover {
  color: #85d6de;
  }
  .btn-item, button {
  padding: 10px 5px;
  margin-top: 20px;
  border-radius: 5px; 
  border: none;
  background-color: #444; 
  text-decoration: none;
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  }
  .btn-item {
  display: inline-block;
  margin: 20px 5px 0;
  }
  button {
  width: 100%;
  }
  button:hover, .btn-item:hover {
  background: #1b393b;
  }
  @media (min-width: 568px) {
  html, body {
  height: 100%;
  }
  .main-block {
  height: calc(100% - 50px);
  }
  .left-part, form {
  flex: 1;
  height: auto;
  }
  }

  .signup {
    background-image: url(images/background-blurred.png);
    background-position: center;
    /* Centers the image */
    filter: blur(0px);
    /* Adjust the blur amount as desired */
  }

    .signup-message {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 16px;
    margin: 20px auto;
    text-align: center;
    padding: 10px 20px;
    border-radius: 5px;
    max-width: 400px;
    width: 90%;
}

.signup-message.success {
    background-color: #d4edda; /* Light green for success */
    color: #155724;
    border: 1px solid #c3e6cb;
}

.signup-message.error {
    background-color: #f8d7da; /* Light red for errors */
    color: #721c24;
    border: 1px solid #f5c6cb;
}

  
</style>

<body class="signup">
  <header>
    <nav>
  <div class="logo">
      <img src="images/white-short.png" alt="logo" id="logo-img">
    </div>
    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    <ul>
      <li><a href="index.php">home</a></li>
      <li><a href="#about">about</a></li>
      <li><a href="contact.php">contact</a></li>
      <li><a href="buy.php">buy</a></li>
      <li><a href="login.php">log in</a></li>
      <li><a href="signup.php">sign up</a></li>
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
   
    <form action="login-system/signup.inc.php" method="POST">
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        
        <h2>Signup here</h2>
        <?php
    // Check for errors
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p class="signup-message" style="color: red;"> Please fill in all fields! </p>';
        }
        else if ($_GET['error'] == "invalidmailuid") {
            echo '<p class="signup-message" style="color: red;"> Invalid username and email! </p>';
        }
        else if ($_GET['error'] == "invaliduid") {
            echo '<p class="signup-message" style="color: red;"> Invalid username! </p>';
        }
        else if ($_GET['error'] == "invalidmail") {
            echo '<p class="signup-message" style="color: red;"> Invalid email </p>';
        }
        else if ($_GET['error'] == "passwordcheck") {
            echo '<p class="signup-message" style="color: red;"> Passwords do not match! </p>';
        }
        else if ($_GET['error'] == "usertaken") {
            echo '<p class="signup-message" style="color: red;"> Username already taken! </p>';
        }
    }

    // Check for successful signup
    else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
        echo '<p class="signup-message" style="color: green;">You have signed up successfully!</p>';
    }
    ?>
      </div>
      <div class="info">
        <input class="fname" type="text" name="uid" placeholder="Username (No space)">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">

        <select name="acc-type" required>
          <option value="" disabled selected>Account Type</option>
          <option value="Individual">Individual</option>
          <option value="Commercial">Commercial</option>
          <option value="Partnership">Barber Partnership</option>
        </select>
      </div>
      <div class="checkbox">
        <input type="checkbox" name="checkbox"><span>I agree to the <a href="policy.php">Privacy Poalicy for Patron
            BarberCap.</a></span>
      </div>
      <button type="submit" name="signup-submit">Submit</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(window).on('scroll', function() {
      if ($(wintdow).scrollTop()) {
        // When he user scrolls, add the 'black' class to the nav
        $('nav').addClass('black');
        // Change the logo image when navbar has the 'black' class
        $('#logo-img').attr('src', 'images/white-short.png');
      } else {
        // Remove the 'black' class and revert the logo to its original image
        $('nav').removeClass('black');
        $('#logo-img').attr('src', 'images/black-short.png');
      }
    });
</body>
</html>