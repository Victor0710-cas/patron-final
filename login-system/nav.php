<?php
session_start();
?>


<head>
  <meta charset="utf-8">
  <title>Here We Grow</title>
  <link rel="stylesheet" href="nav.css">
</head>
<body>
  <nav>
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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $('nav').addClass('black');
    // Change the logo image when navbar has the 'black' class
    $('#logo-img').attr('src', 'images/white-short.png');
  </script>
</body>