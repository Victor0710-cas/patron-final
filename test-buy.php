<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patron Buy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,800&display=swap');

    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
        background: #000;
    }

    .container {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 900px;
        height: 600px;
        background: #fff;
        margin: 20px;
    }

    .container .imgBx {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
        background: #3a3a3a;
        transition: .3s linear;
    }

    .container .imgBx:before {
        position: absolute;
        top: 0px;
        left: 24px;
        color: #D3d3d3;
        opacity: 0.2;
        font-size: 5em;
        font-weight: 800;
    }

    .container .imgBx img {
        position: relative;
        width: 200vh;
        left: -50px;
        transition: .9s linear;
    }

    .container .details {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
        box-sizing: border-box;
        padding: 40px;
    }

    .container .details h2 {
        margin: 0;
        padding: 0;
        font-size: 2.4em;
        line-height: 1em;
        color: #444;
    }

    .container .details h2 span {
        font-size: 0.4em;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #999;
    }

    .container .details p {
        max-width: 85%;
        margin-left: 15%;
        color: #333;
        font-size: 15px;
        margin-bottom: 36px;
    }

    .container .details h3 {
        margin: 0;
        padding: 0;
        font-size: 2.5em;
        color: #a2a2a2;
        float: left;
    }

    .container .details button {
        background: #000;
        color: #fff;
        border: none;
        outline: none;
        padding: 15px 20px;
        margin-top: 5px;
        font-size: 16px;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: 600;
        border-radius: 40px;
        float: right;
    }

    .product-colors span {
        width: 26px;
        height: 26px;
        top: 7px;
        margin-right: 12px;
        left: 10px;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
        display: inline-block;
    }

    .black {
        background: #000;
    }

    .red {
        background: #D5212E;
    }

    .orange {
        background: #F18557;
    }

    .product-colors .active:after {
        content: "";
        width: 36px;
        height: 36px;
        border: 2px solid #000;
        position: absolute;
        border-radius: 50%;
        box-sizing: border-box;
        left: -5px;
        top: -5px;
    }

    /* responsive */
    @media (max-width: 1080px) {
        .container {
            height: auto;
        }

        .container .imgBx {
            padding: 40px;
            box-sizing: border-box;
            width: 100% !important;
            height: auto;
            text-align: center;
            overflow: hidden;
        }

        .container .imgBx img {
            left: initial;
            max-width: 100%;
        }

        .details {
            width: 100% !important;
            height: auto;
            padding: 20px;
        }

        .container .details p {
            margin-left: 0;
            max-width: 100%;
        }
    }

    footer {
        position: fixed;
        right: 16px;
        bottom: 12px;
    }

    footer a {
        color: #fff;
        text-decoration: none;
        font-size: 12px;
    }

    h1 {
        position: absolute;

    }
</style>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Product Card UI Design</title>

        <!-- Vendor Script -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    </head>

    <body class="container-fluid">
        <div class=" row">
            <div class="container col">
                <div class="imgBx">
                    <h1>Patron</h1>
                    <img src="images/hair oil-transp.jpeg" alt="Nike Jordan Proto-Lyte Image">

                </div>
                <div class="details">
                    <div class="content">
                        <h2>UNC'S Hair Oil <br>
                            <span>Grooming Collection</span>
                        </h2>
                        <p>
                            Featuring soft foam cushioning and lightweight, woven fabric in the upper, the Jordan
                            Proto-Lyte is
                            made for all-day, bouncy comfort.
                            Lightweight Breathability: Lightweight woven fabric with real or synthetic leather provides
                            breathable support.
                            Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                            Secure Traction: Exaggerated herringbone-pattern outsole offers traction on a variety of
                            surfaces.
                        </p>

                        <h3>$50</h3>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="container col">
                <div class="imgBx">
                    <img src="images/hair oil-transp.jpeg" alt="Nike Jordan Proto-Lyte Image">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>UNC'S Hair Oil <br>
                            <span>Grooming Collection</span>
                        </h2>
                        <p>
                            Featuring soft foam cushioning and lightweight, woven fabric in the upper, the Jordan
                            Proto-Lyte is
                            made for all-day, bouncy comfort.
                            Lightweight Breathability: Lightweight woven fabric with real or synthetic leather provides
                            breathable support.
                            Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                            Secure Traction: Exaggerated herringbone-pattern outsole offers traction on a variety of
                            surfaces.
                        </p>

                        <h3>$50</h3>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="container col">
                <div class="imgBx">
                    <img src="images/hair oil-transp.jpeg" alt="Nike Jordan Proto-Lyte Image">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>UNC'S Hair Oil <br>
                            <span>Grooming Collection</span>
                        </h2>
                        <p>
                            Featuring soft foam cushioning and lightweight, woven fabric in the upper, the Jordan
                            Proto-Lyte is
                            made for all-day, bouncy comfort.
                            Lightweight Breathability: Lightweight woven fabric with real or synthetic leather provides
                            breathable support.
                            Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                            Secure Traction: Exaggerated herringbone-pattern outsole offers traction on a variety of
                            surfaces.
                        </p>

                        <h3>$50</h3>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer>
            <a href="https://stylustechnepal.com" target="_blank">anuzbvbmaniac123@gmail.com</a>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

    </html>
</body>

</html>