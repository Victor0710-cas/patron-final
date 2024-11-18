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
  body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
  }

  .signup {
    background-image: url(images/background-blurred.png);
    background-position: center;
    background-size: cover;
    filter: blur(0px);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .main-block {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 100vh;
    width: 100%;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  .title {
    text-align: center;
    margin-bottom: 20px;
  }

  .title h2 {
    margin: 0;
    font-size: 24px;
    color: #ffffff;;
  }

  .info input,
  .info select {
    width: 100%;
    margin: 10px 0;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
  }

  .checkbox {
    margin: 15px 0;
    font-size: 14px;
  }

  .checkbox a {
    color: #007BFF;
    text-decoration: none;
  }

  .checkbox a:hover {
    text-decoration: underline;
  }

  button {
    background: #333;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
  }

  button:hover {
    background: #555;
  }

  .title {
    color: #fff;
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
  <h1>Signup</h1>
  <div class="main-block">
    

    <form action="login-system/login.inc.php" method="POST">
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>LOGIN HERE</h2>
      </div>
      <div class="info">
        <input class="fname" type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">

       
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