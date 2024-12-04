<?php
error_reporting(E_ERROR);

session_start();

// Check if the user is logged in
$is_logged_in = isset($_SESSION['userUid']) && !empty($_SESSION['userUid']);
$account_type = isset($_SESSION['userType']) ? $_SESSION['userType'] : ''; // Retrieve the account type
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patron Men's Grooming</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/white-short.png">

    <!-- CSS Files -->
    
    <!-- External Stylesheets -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="test-buyy5.css">

    <link rel="stylesheet" href="buy.css">

    <style>
        /* Cart Styles */
        .cart-container {
            position: fixed;
            top: 80px;
            right: 20px;
            z-index: 1000;
        }

        .cart {
            background-color: #fff;
            border: 1px solid #000;
            border-radius: 8px;
            padding: 15px;
            max-width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cart-header {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 10px;
            text-align: center;
            color: #000;
        }

        .cart-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .cart-item p {
            margin: 0;
            color: #000;
        }

        .remove-item {
            cursor: pointer;
            color: red;
        }

        .cart-total {
            font-weight: bold;
            margin-top: 15px;
            text-align: center;
            color: #000;
        }

        .cart-icon {
            font-size: 1.8rem;
            background-color: black;
            color: white;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
        }

        .cart-details {
            display: none;
            background-color: white;
            position: absolute;
            top: 40px;
            right: 0;
            width: 300px;
            padding: 15px;
            border: 1px solid black;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cart-details.active {
            display: block;
        }

        .checkout-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
        }

        body {
            position: relative;
        }

        .login-message {
            color: red;
            font-size: 1.2rem;
            text-align: center;
            margin-top: 20px;
        }

        h3{
            color: #FFFFFF
        }
    </style>

    <?php
    if (basename($_SERVER['PHP_SELF']) == 'buy.php') {
        echo '<link rel="stylesheet" href="test-buy.css">';
    }
    ?>
</head>

<body class="container-fluid">

    <!-- Navbar -->
    <?php include_once 'login-system/nav.php'; ?>

    <!-- Check if user is logged in -->
    <?php if (!$is_logged_in): ?>
    <div class="login-message">
        <p>Please log in to view and purchase products.</p>
    </div>
    <?php else: ?>

    <!-- Sticky Cart Icon -->
    <div class="cart-container">
        <div class="cart-icon" id="cartIcon">
            <span id="cartItemCount">0</span>
            <i class="material-icons">shopping_cart</i>
        </div>
        <div class="cart-details" id="cartDetails">
            <div class="cart-header">Your Cart</div>
            <ul class="cart-items"></ul>
            <div class="cart-total">Total: £0</div>
            <a href="checkoutinfo.php" class="checkout-btn">Checkout</a>
        </div>
    </div>

    <!-- Header Section -->
    <section class="buy-header text-center py-4 container-fluid">
        <h2>Buy Now</h2>
        <h3>Discover Our Premium Products</h3>
    </section>

    <!-- Main Product Grid -->


    <!-- Individual -->
    <?php if ($account_type === 'Individual' || $account_type === 'premium'): ?>
    <div class="row container-fluid">
        <div class="col ">
            <div class="wrapper">
                <div class="container containerTrimPro ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>TrimProXPlus</h2>
                                <p>$124.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>Advance cutting technology razor that senses your mood through subtle skin and pulse
                                analysis, then adjusts its cutting pressure and speed for a relaxing experience.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerNoseTrim ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h3>LuxeTrim Duo</h3>
                                <p>$124.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>Uses advanced AI to create a 3D map of your nasal passages and trims every hair
                                without missing a spot—even in hard-to-reach areas.</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerCap ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>BarberCapPlus</h2>
                                <p>$499.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>The magnum opus of our company. Equip the Barbercap to experience a variety of hair
                                styles. </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col">
            <div class="wrapper">
                <div class="container containerBalm ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>Unc's Beard Balm</h2>
                                <p>$89.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>
                                Keep your beard in style longer by using our beard balm. This Balm comes directly from
                                the fountain of youth to reduce graying
                            </h3>

                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col ">
            <div class="wrapper">
                <div class="container containerGel ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h3>Unc's Shaving Gel</h3>
                                <p>$89.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>
                                This shaving gel will leave your skin feeling smooth and refreshed. This shaving gel is
                                proven to be non irritant
                                and will not cause razor burn.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerBrush">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>Beard Brush</h2>
                                <p>$249.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>
                                This beard brush is made from the finest materials and is designed to help you style
                                your beard with ease, comfort, and cleanliness.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col">
            <div class="wrapper">
                <div class="container containerCream ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>Facial Moisurizing Cream</h2>
                                <p>$89.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>Give your face the nourishment it deserves with our rich and hydrating facial cream.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerHairOil ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h3>Unc's Hair Oil</h3>
                                <p>$89.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>
                                Our hair oil is the perfect blend of nourishment and shine. Pure and natural chemiicals
                                that will leave your hair looking healthy and strong.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerBeardOil">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>Unc's Beard Oil</h2>
                                <p>$249.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>
                                Nourish your Beard with our premium beard oil. Made with the finest natural ingredients.

                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
    </div>
    <?php endif; ?>

    <!-- Commercial -->
    <?php if ($account_type === 'Commercial' || $account_type === 'free'): ?>

    <div class="row container-fluid">
        <div class="col">
            <div class="wrapper">
                <div class="container containerTrimPro ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>TrimProXLite</h2>
                                <p>$49.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>Advance cutting technology razor that senses your mood through subtle skin and pulse
                                analysis, then adjusts its cutting pressure and speed for a relaxing experience.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerCap ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>BarberCapLite</h2>
                                <p>$299.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>The magnum opus of our company. Equip the Barbercap to experience a variety of hair
                                styles. </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
    </div>
    <?php endif; ?>
    <!-- Partnership -->
    <?php if ($account_type === 'Partnership' || $account_type === 'free'): ?>
    <div class="row container-fluid" >
        <div class="col">
            <div class="wrapper">
                <div class="container containerTrimPro ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>TrimProX</h2>
                                <p>$89.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>Advance cutting technology razor that senses your mood through subtle skin and pulse
                                analysis, then adjusts its cutting pressure and speed for a relaxing experience.
                            </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerNoseTrim ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h3>LuxeTrim DuoLite</h3>
                                <p>$89.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>Uses advanced AI to create a 3D map of your nasal passages and trims every hair
                                without missing a spot—even in hard-to-reach areas.</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container containerCap ">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h2>BarberCap</h2>
                                <p>$349.99</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="material-icons">info_outline</i></div>
                        <div class="contents">
                            <h3>The magnum opus of our company. Equip the Barbercap to experience a variety of hair
                                styles. </h3>
                        </div>
                    </div>
                </div>
            </div> <!-- Add more product cards if necessary -->
        </div>
    </div>
    <?php endif; ?>



    <?php endif; ?>

    <!-- Footer -->
    <footer>
        <p>© 2024 Patron Men's Grooming. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-o+pMzZnY0lhgExbD1slOdcAA55ND6LtK5k2xHpyPQpykPd7NJ6Kk8k3KDdKGjig0" crossorigin="anonymous">
    </script>

    <script>
        let cart = JSON.parse(localStorage.getItem('cart')) || []; // Load from localStorage or initialize

        // Update the cart UI
        const updateCart = () => {
            const cartItemsContainer = $('.cart-items');
            const cartTotal = $('.cart-total');
            const cartItemCount = $('#cartItemCount');
            cartItemsContainer.empty();
            let total = 0;

            cart.forEach((item, index) => {
                total += item.price;
                cartItemsContainer.append( <
                    li class = "cart-item" >
                    <
                    p > $ {
                        item.name
                    } - £$ {
                        item.price.toFixed(2)
                    } < /p> <
                    span class = "remove-item"
                    data - index = "${index}" > & times; < /span> <
                    /li>
                );
            });

            cartTotal.text(Total: £$ {
                total.toFixed(2)
            });
            cartItemCount.text(cart.length);

            // Save the cart to local storage
            localStorage.setItem('cart', JSON.stringify(cart));
        };

        // Add product to cart
        $('.buy').click(function () {
            const productName = $(this).siblings('.details').find('h2, h3').text().trim(); // Adjust selector
            const productPrice = parseFloat($(this).siblings('.details').find('p').text().replace('$', ''));

            cart.push({
                name: productName,
                price: productPrice
            });

            updateCart();
        });

        // Remove product from cart
        $(document).on('click', '.remove-item', function () {
            const index = $(this).data('index');
            cart.splice(index, 1);
            updateCart();
        });

        // Toggle cart details visibility
        $('#cartIcon').click(function () {
            $('#cartDetails').toggleClass('active');
        });

        // Close cart if clicked outside
        $(document).click(function (event) {
            if (!$(event.target).closest('.cart-container').length) {
                $('#cartDetails').removeClass('active');
            }
        });

        // Load cart on page load
        $(document).ready(() => {
            updateCart();
        });
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>