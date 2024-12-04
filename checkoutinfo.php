<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="images/white-short.png">

  <title>Payment Form</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Work+Sans');
    body {
      font-family: 'Work Sans', sans-serif;
      margin: 0;
      padding: 0;
      background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed;
      background-size: cover;
      color: #f0f0f0;
    }
    .container {
      max-width: 900px;
      margin: 50px auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
      padding: 20px;
    }
    .card, .receipt, .email-form {
      background: rgba(0, 0, 0, 0.8);
      color: #f0f0f0;
      border-radius: 14px;
      padding: 20px;
      box-shadow: 2px 10px 40px rgba(0, 0, 0, 0.6);
      flex: 1 1 300px;
    }
    .card input, .email-form input {
      width: 100%;
      margin-bottom: 15px;
      padding: 10px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #f0f0f0;
      color: #f0f0f0;
      font-size: 14px;
    }
    .card input:focus, .email-form input:focus {
      border-bottom: 1px solid #f0f0f0;
      outline: none;
    }
    .card .proceed, .email-form button {
      background: #f0f0f0;
      color: black;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      transition: transform 0.3s, box-shadow 0.2s;
    }
    .card .proceed:hover, .email-form button:hover {
      box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.3);
      transform: translateY(-2px);
    }
    .receipt {
      background: rgba(255, 255, 255, 0.9);
      color: black;
    }
    .receipt h2, .receipt h3 {
      color: black;
    }
    .logo-card {
      display: block;
      margin: 0 auto 20px;
      max-width: 80px;
    }
    h3 {
      text-align: center;
    }
    .hidden {
      display: none;
    }
    @media (max-width: 600px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
      .card, .receipt, .email-form {
        flex: 1 1 auto;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Credit Card Form -->
    <div class="card" id="card-form">
      <img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card" alt="Visa Logo">
      <label>Card Number:</label>
      <input id="card-number" type="text" class="cardnumber" placeholder="1234 5678 9101 1121">
      <label>Name:</label>
      <input id="card-name" type="text" class="name" placeholder="Edgar Pérez">
      <label class="toleft">CCV:</label>
      <input id="card-ccv" type="text" class="ccv" placeholder="321">
      <button class="proceed" onclick="validateCardForm()">Proceed</button>
    </div>

    <!-- Email Form (Initially hidden) -->
    <div class="email-form hidden" id="email-form">
      <h3>Enter Your Details</h3>
      <form action="done.php" method="POST">
        <input id="email-name" name="name" type="text" placeholder="Your Full Name" required>
        <input id="email-address" name="address" type="text" placeholder="Your Address" required>
        <input id="email" name="email" type="email" placeholder="Your Email" required>
        <button type="submit" id="submit-button">Submit</button>
      </form>
    </div>
  </div>

  <script>
    function validateCardForm() {
      // Get card details
      const cardNumber = document.getElementById('card-number').value.trim();
      const cardName = document.getElementById('card-name').value.trim();
      const cardCcv = document.getElementById('card-ccv').value.trim();
      
      // Check if all fields are filled out
      if (cardNumber && cardName && cardCcv) {
        // Hide card form and show email form
        document.getElementById('card-form').classList.add('hidden');
        document.getElementById('email-form').classList.remove('hidden');
      } else {
        // Alert if any field is missing
        alert('Please fill out all credit card details before proceeding.');
      }
    }
  </script>
</body>
</html>
