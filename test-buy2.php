<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patron Men's Grooming</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/white-short.png">

    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="buy.css">
    <link rel="stylesheet" href="test-buy2.css">

    <style>
        /* Sticky Cart Styles */
        .cart {
            position: sticky;
            top: 70px; /* Adjust based on navbar height */
            right: 20px;
            z-index: 1000;
            background-color: #fff;
            border: 1px solid #ddd;
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
        }

        .remove-item {
            cursor: pointer;
            color: red;
        }

        .cart-total {
            font-weight: bold;
            margin-top: 15px;
            text-align: center;
        }

        body {
            position: relative;
        }

        .cart-container {
            position: fixed;
            top: 70px;
            right: 20px;
            width: 300px;
        }
    </style>
</head>

<body class="container">

    <!-- Navbar -->
    <?php include_once 'nav.php'; ?>

    <!-- Sticky Cart -->
    <div class="cart-container">
        <div class="cart">
            <div class="cart-header">Your Cart</div>
            <ul class="cart-items"></ul>
            <div class="cart-total">Total: £0</div>
        </div>
    </div>

    <!-- Header Section -->
    <section class="buy-header text-center py-4">
        <h2>Buy Now</h2>
        <h3>Discover Our Premium Products</h3>
    </section>

    <!-- Main Product Grid -->
    <div class="row">
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
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
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
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
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
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
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more product cards -->
    </div>
    <div class="row">
        <div class="col">
            <div class="wrapper">
                <div class="container">
                    <div class="top"></div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
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
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
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
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
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
                                <h1>Chair</h1>
                                <p>£250</p>
                            </div>
                            <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
                        </div>
                        <div class="right">
                            <div class="done"><i class="material-icons">done</i></div>
                            <div class="details">
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class="remove"><i class="material-icons">clear</i></div>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <!-- Details about the product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more product cards -->
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
        const updateCart = () => {
            const cartItemsContainer = $('.cart-items');
            const cartTotal = $('.cart-total');
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
        };

        $('.buy').click(function () {
            const productName = $(this).siblings('.details').find('h1').text();
            const productPrice = parseInt($(this).siblings('.details').find('p').text().replace('£', ''));
            cart.push({ name: productName, price: productPrice });
            updateCart();
        });

        $(document).on('click', '.remove-item', function () {
            const index = $(this).data('index');
            cart.splice(index, 1);
            updateCart();
        });
    </script>
</body>

</html>
