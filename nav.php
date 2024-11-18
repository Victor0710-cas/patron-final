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
      <li><a href="about.php">about</a></li>
      <li><a href="contact.php">contact</a></li>
      <li><a href="buy.php">buy</a></li>
      <li><a href="login.php">log in</a></li>
      <li><a href="signup.php">sign up</a></li>
    </ul>
  </nav>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(window).on('scroll', function() {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
        $('#logo-img').attr('src', 'images/white-short.png');
      } else {
        $('nav').removeClass('black');
        $('#logo-img').attr('src', 'images/black-short.png');
      }
    });
  </script>
</body>
