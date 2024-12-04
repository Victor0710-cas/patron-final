
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patron Men's Grooming</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="icon" type="image/x-icon" href="images/white-short.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
  .main-block {
    display: flex;
    /* Use flexbox to arrange elements horizontally */
    justify-content: space-between;
    /* Space between the left part and the form */
    height: 100%;
    padding: 25px;
    background: rgba(0, 0, 0, 0.5);
  }

  .left-part {
    padding: 25px;
    text-align: center;
    flex: 1;
    /* Allow left part to take up equal space */
    display: flex;
    justify-content: center;
    /* Center content vertically */
    align-items: center;
    /* Center content horizontally */
    flex-direction: column;
  }

  .fa-graduation-cap {
    font-size: 72px;
  }

  form {
    background: rgba(0, 0, 0, 0.7);
    flex: 1;
    /* Allow the form to take up equal space */
    padding: 25px;
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

  input,
  select {
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

  .btn-item,
  button {
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

  button:hover,
  .btn-item:hover {
    background: #1b393b;
  }

  @media (min-width: 568px) {

    html,
    body {
      height: 100%;
    }

    .main-block {
      height: calc(100% - 50px);
    }
  }

  .signup {
    background-image: url(images/background-blurred.png);
    background-position: center;
    filter: blur(0px);
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
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
  }

  .signup-message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }
</style>
<body class="signup">
    <?php include_once 'login-system/nav.php'; ?>
    <br>
    <br>

    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-graduation-cap"></i>
            <h1>Login to your Patron account</h1>
            <p>Dont't have one? Signing up is fast and easy!</p>
            <div class="btn-group">
                <a class="btn-item" href="signup.php">Signup</a>
                <a class="btn-item" href="index.php#about">Learn More</a>
            </div>
        </div>

        <form action="login-system/login.inc.php" method="POST">
            <div class="title">
                <i class="fas fa-pencil-alt"></i>
                <h2>Login</h2>
                <?php
                // Check for errors
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signup-message error">Please fill in all fields!</p>';
                    } else if ($_GET['error'] == "nouser") {
                        echo '<p class="signup-message error">Username/email not found!</p>';
                    } else if ($_GET['error'] == "wrongpwd") {
                        echo '<p class="signup-message error">Incorrect password!</p>';
                    } else if ($_GET['error'] == "sqlerror") {
                        echo '<p class="signup-message error">Database error. Please try again later.</p>';
                    }
                }

                // Check for successful login
                else if (isset($_GET['login']) && $_GET['login'] == "success") {
                    echo '<p class="signup-message success">You have successfully logged in!</p>';
                }
                ?>
            </div>
            <div class="info">
                <input class="fname" type="text" name="mailuid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <button type="submit" name="login-submit">Submit</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Check for successful login
 if (window.location.href.indexOf('login=success') > -1) {
                // Send AJAX request to reload the nav.php content
                $.ajax({
                    url: 'login-system/nav.php', 
                    type: 'GET',
                    success: function(data) {
                        // Replace the existing navbar content with the updated one
                        $('nav').html(data); 
                    }
                });
            }
        });
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>


</html>