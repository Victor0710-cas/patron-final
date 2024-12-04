<?php
session_start();
?>


<head>
  <meta charset="utf-8">
  <title>Here We Grow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="nav.css">

</head>
<body class="container-fluid">
  <nav class="navbar-sticky container-fluid">
    <!-- Logo and Company Name Container -->
    <div class="logo-container logo">
      <img src="images/black-short.png" alt="logo" id="logo-img">
    </div>

    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    
    <ul>
      <li><a href="index.php">home</a></li>
      <li><a href="index.php#about">about</a></li>
      <li><a href="contact.php">contact</a></li>
      <li><a href="products.php">products</a></li>
      <li><a href="Testimonial.php">Testimonies</a></li>

      <!-- Dynamic Account Menu -->
      <?php if (isset($_SESSION['userUid'])): ?>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Account</a>
        <div class="dropdown-content">
          <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['userUid']); ?></p>
          <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
          <p><strong>Account Type:</strong> <?php echo htmlspecialchars($_SESSION['userType']); ?></p>
          <form action="login-system/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Log Out</button>
          </form>
        </div>
      </li>
     <?php else: ?>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Account</a>
        <div class="dropdown-content">
          <a href="login.php">Log In</a>
          <a href="signup.php">Sign Up</a>
        </div>
      </li>
      <?php endif; ?>
    </ul>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $('nav').addClass('black');
    // Change the logo image when navbar has the 'black' class
    $('#logo-img').attr('src', 'images/white-short.png');
  </script>
</body>