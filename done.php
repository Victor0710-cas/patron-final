<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Work+Sans');
    body {
      font-family: 'Work Sans', sans-serif;
      margin: 0;
      padding: 0;
      background: url('images/Contact Pic.jpeg') no-repeat center center fixed;
      background-size: cover;
      color: #f0f0f0;
      text-align: center;
      padding: 50px 20px;
    }

    .thank-you-container {
      background: rgba(0, 0, 0, 0.7);
      color: #f0f0f0;
      padding: 40px;
      border-radius: 14px;
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.6);
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .contact-info {
      font-size: 1rem;
      color: #ddd;
    }

    .contact-info a {
      color: #f0f0f0;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    .back-button {
      background-color: #f0f0f0;
      color: black;
      padding: 10px 20px;
      border-radius: 4px;
      text-decoration: none;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .back-button:hover {
      background-color: #ddd;
    }
  </style>
</head>

<body>
  <div class="thank-you-container">
    <h1>Thank You for Your Purchase!</h1>
    <p>We have received your order. A confirmation email will be sent to your Gmail address once our team processes it.</p>
    <p>If you have any questions, feel free to contact us at <span class="contact-info"><a href=" info.patron.com@gmail.com"> info.patron.com@gmail.com</a></span>.</p>
    <a href="index.php" class="back-button">Back to Home</a>
  </div>
</body>
</html>
