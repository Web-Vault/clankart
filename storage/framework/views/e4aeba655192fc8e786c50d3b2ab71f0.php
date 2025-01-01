<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy and Sell Old Books Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .hero {
            margin: 50px auto;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .hero-part {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }

        .sld-img {
            height: 400px;
            width: auto;
            margin: auto;
            display: block;
        }

        .carousel-caption {
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
        }



        .carousel-caption h3,
        .carousel-caption p {
            color: white;
        }

        .section-title {
            margin-top: 50px;
            margin-bottom: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .section-subtitle {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #555;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            flex: 1;
            min-width: 300px;
            max-width: 22rem;
            margin: 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            height: 150px;
            object-fit: contain;
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .card-text {
            color: #777;
        }

        .section {
            padding: 50px 0;
            background-color: #e6f0ff;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    
    <?php $__env->startSection('main-content'); ?>

    <div class="hero">
        <div class="hero-part">
            <!-- Empty part for future content or design -->
        </div>
        <div class="hero-part">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-target="#carouselExampleDark" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-target="#carouselExampleDark" data-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="1000">
                        <img src="<?php echo e(URL::to('/')); ?>/images/vector-illustration-retro-style-hand-giving-money-other-hand.png" class="d-block w-auto sld-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Sell Old Books On ClanKart</h3>
                            <p>Well, you can sell your old used books very easily on Clankart for actual cash.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="<?php echo e(URL::to('/')); ?>/images/cash-delivery-concept.png" class="d-block w-auto sld-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Purchase Old Books On ClanKart</h3>
                            <p>Well, you can buy second hand books very easily on Clankart.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <p class="section-title text-center">How To Sell On <strong>Clankart™</strong></p>
            <p class="section-subtitle text-center">Well, you can sell your old used books very easily on Clankart for actual cash. Earning money by selling your old books is just 3 steps away from you :)</p>
            <div class="card-container">
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <img class="w-50 mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/images/seller-adve.svg" alt="">
                        <h3 class="card-title text-center">Post an ad for selling used books</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Post an ad on Clankart describing your book details to sell your old books online.</p>
                    </div>
                </div>

                <div class="card border-info mb-3">
                    <div class="card-header">
                        <img class="w-50 mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/images/set-price.svg" alt="">
                        <h3 class="card-title text-center">Set the selling price for your books</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Set the price for your books at which you want to sell them.</p>
                    </div>
                </div>

                <div class="card border-info mb-3">
                    <div class="card-header">
                        <img class="w-50 mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/images/money-release.svg" alt="">
                        <h3 class="card-title text-center">Get paid into your UPI/Bank account</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">You will get money into your account once you receive an order for your book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <p class="section-title text-center">How To Purchase On <strong>Clankart™</strong></p>
            <p class="section-subtitle text-center">Well, you can buy second hand books very easily on Clankart. Saving some good amount of money by buying used (preloved) books is just 3 steps away from you :)</p>
            <div class="card-container">
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <img class="w-50 mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/images/search-item.svg" alt="">
                        <h3 class="card-title text-center">Select the used books you want</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Search from over thousands of used books listed on Clankart.</p>
                    </div>
                </div>

                <div class="card border-info mb-3">
                    <div class="card-header">
                        <img class="w-50 mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/images/buy.svg" alt="">
                        <h3 class="card-title text-center">Place the order by making payment to Clankart</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Then simply place the order by clicking on 'Buy Now' button.</p>
                    </div>
                </div>

                <div class="card border-info mb-3">
                    <div class="card-header">
                        <img class="w-50 mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/images/seller-ships.svg" alt="">
                        <h3 class="card-title text-center">Get the books delivered at your doorstep</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">The books will be delivered to you at your doorstep!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@pop
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/demo-index.blade.php ENDPATH**/ ?>