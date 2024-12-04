<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patron Men's Grooming</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/short-logo.png">

    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="buy.css">
    <link rel="stylesheet" href="test-buy2.css">

    <!-- Additional Styling for Specific Page -->
    <?php
    if (basename($_SERVER['PHP_SELF']) == 'buy.php') {
        echo '<link rel="stylesheet" href="test-buy.css">';
    }
    ?>

    <style>
        /* Cart Styles */
        .cart-container {
            position: fixed;
            top: 80px;
            /* Adjust this if navbar height changes */
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
    </style>
</head>

<body class="container">

    <!-- Navbar -->
    <?php include_once 'nav.php'; ?>

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
    <section class="buy-header text-center py-4">
        <h2>Buy Now</h2>
        <h3>Discover Our Premium Products</h3>
    </section>

    <!-- Main Product Grid -->
    <div class="row">
        <!-- Product Cards -->
        <div class="col">
            <div class="wrapper">
                <div class="container containerBarber">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>Barber Cap</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>TrimPro4X</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>TrimPro4X</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>LuxeTrim Duo</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>LuxeTrim Duo</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>UNCS Hair Oil</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Product Cards as needed -->
        <!-- Repeat similar blocks for more products -->
    </div>
    <div class="row">
        <!-- Product Cards -->
        <div class="col">
            <div class="wrapper">
                <div class="container containerBarber">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>Barber Cap</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>TrimPro4X</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>TrimPro4X</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>LuxeTrim Duo</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>LuxeTrim Duo</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>UNCS Hair Oil</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Product Cards as needed -->
        <!-- Repeat similar blocks for more products -->
    </div>
    <div class="row">
        <!-- Product Cards -->
        <div class="col">
            <div class="wrapper">
                <div class="container containerBarber">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>Barber Cap</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>TrimPro4X</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>TrimPro4X</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>LuxeTrim Duo</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>LuxeTrim Duo</h1>
                                <p>6999</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>UNCS Hair Oil</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Width</th>
                                <th>Height</th>
                            </tr>
                            <tr>
                                <td>3000mm</td>
                                <td>4000mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Product Cards as needed -->
        <!-- Repeat similar blocks for more products -->
    </div>


    <!-- More Product Cards as needed -->
    <!-- Repeat similar blocks for more products -->
    </div>
    <!-- Footer -->
    <footer class="text-center py-3">
        <a href="https://stylustechnepal.com" target="_blank"></a>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-o+pMzZnY0lhgExbD1slOdcAA55ND6LtK5k2xHpyPQpykPd7NJ6Kk8k3KDdKGjig0" crossorigin="anonymous">
    </script>

    <script>
        const cart = [];

        // Update the cart UI
        const updateCart = () => {
            const cartItemsContainer = $('.cart-items');
            const cartTotal = $('.cart-total');
            const cartItemCount = $('#cartItemCount');
            cartItemsContainer.empty();
            let total = 0;

            cart.forEach((item, index) => {
                total += item.price;
                cartItemsContainer.append(`
                    <li class="cart-item">
                        <p>${item.name} - £${item.price}</p>
                        <span class="remove-item" data-index="${index}">&times;</span>
                    </li>
                `);
            });

            cartTotal.text(`Total: £${total}`);
            cartItemCount.text(cart.length);
        };

        // Add product to cart
        $('.buy').click(function () {
            const productName = $(this).siblings('.details').find('h1').text();
            const productPrice = parseInt($(this).siblings('.details').find('p').text().replace('£',
                ''));
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
    </script>
</body>

</html>