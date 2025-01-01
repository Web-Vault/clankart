

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Buy and sell old books online</title>

          <style>
                    .hero {
                              margin: 0 auto 50px;
                              padding: 10px 0;
                              width: 100%;
                              display: flex;
                              background: url('/images/big-image-books.png');
                    }

                    .hero-part {
                              width: 50%;
                    }

                    .sld-img {
                              height: 400px;
                              width: auto;
                              margin: auto;
                    }

                    .mt-100 {
                              margin-top: 100px;
                    }


                    .carousel-caption {
                              backdrop-filter: blur(5px);
                              background-color: rgba(0, 0, 0, 0.5);
                              padding: 10px;
                              border-radius: 10px;
                    }

                    .carousel-caption h3,
                    .carousel-caption p {
                              color: #fff;
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

                    /*  */

                    .big-buysell-buttons {
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                    }

                    .big-buy-button,
                    .big-sell-button {
                              width: 45%;
                              height: 230px;
                              padding: 20px;
                              border-radius: 10px;
                              text-align: center;
                              background-color: #e0e7ff;
                              /* Light blue background for buy button */
                              display: flex;
                              flex-direction: column;
                              justify-content: center;
                              align-items: center;
                              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                              transition: transform 0.3s ease;
                    }

                    .big-buy-button:hover,
                    .big-sell-button:hover {
                              transform: scale(1.05);
                    }

                    .big-sell-button {
                              background-color: #fff6cc;
                              /* Light yellow background for sell button */
                    }

                    .big-or-button {
                              font-size: 1.5em;
                              font-weight: bold;
                              padding: 20px;
                    }

                    a {
                              text-decoration: none;
                              color: inherit;
                    }

                    .icon {
                              width: 100px;
                              height: 100px;
                              margin-bottom: 20px;
                    }

                    .btn-text {
                              font-size: 15px;
                              font-weight: bold;
                              color: #333;
                              background-color: #ffffff;
                              border: 1px solid #ddd;
                              border-radius: 5px;
                              padding: 10px 10px;
                              cursor: pointer;
                              transition: background-color 0.3s ease;
                    }

                    .btn-text:hover {
                              background-color: #f1f1f1;
                    }

                    /* 
                    
                    
                    media query
                    
                    
                    */

                    @media (max-width: 1024px) {
                              .noting {
                                        border: 1px solid black;
                              }

                              .hero {
                                        flex-direction: column;
                                        text-align: center;
                                        background-position: center;
                                        background-size: cover;
                              }

                              .hero-part {
                                        width: 100%;
                              }

                              .sld-img {
                                        height: auto;
                                        width: 90%;
                              }

                              .section-title {
                                        font-size: 2rem;
                              }

                              .section-subtitle {
                                        font-size: 1rem;
                              }

                              .card-container {
                                        gap: 10px;
                              }

                              .card {
                                        min-width: 250px;
                              }

                              .card img {
                                        height: 120px;
                              }

                              .card-title {
                                        font-size: 1.25rem;
                              }

                              .card-text {
                                        font-size: 0.875rem;
                              }

                              .carousel {
                                        display: none;
                              }
                    }

                    @media (max-width: 768px) {
                              .nothing {
                                        border: 1px solid black;
                              }

                              .hero {
                                        padding: 20px 0;
                              }

                              .sld-img {
                                        height: auto;
                                        width: 100%;
                              }

                              .section-title {
                                        font-size: 1.75rem;
                              }

                              .section-subtitle {
                                        font-size: 0.875rem;
                              }

                              .card-container {
                                        flex-direction: column;
                                        align-items: center;
                              }

                              .card {
                                        min-width: 100%;
                                        max-width: 90%;
                                        margin: 10px 0;
                              }

                              .card img {
                                        height: 100px;
                              }

                              .card-title {
                                        font-size: 1.125rem;
                              }

                              .card-text {
                                        font-size: 0.75rem;
                              }
                    }

                    /*  */

                    @media (max-width: 1200px) {

                              .big-buy-button,
                              .big-sell-button {
                                        width: 47%;
                                        height: 220px;
                              }

                              .big-or-button {
                                        font-size: 1.4em;
                              }
                    }

                    /* Medium Screens (Laptops, Tablets) */
                    @media (max-width: 992px) {

                              .big-buy-button,
                              .big-sell-button {
                                        width: 48%;
                                        height: 210px;
                              }

                              .big-or-button {
                                        font-size: 1.3em;
                              }
                    }

                    /* Tablets and Small Laptops */
                    @media (max-width: 768px) {
                              .big-buysell-buttons {
                                        flex-direction: column;
                                        align-items: stretch;
                                        gap: 20px;
                              }

                              .big-buy-button,
                              .big-sell-button {
                                        width: 100%;
                                        height: 200px;
                              }

                              .big-or-button {
                                        display: none;
                              }
                    }

          </style>

</head>

<body>
          <?php $__env->startSection('main-content'); ?>

          <div class="hero">
                    <div class="hero-part d-flex align-items-center justify-content-center">
                              <div class="position-relative d-flex justify-content-center big-buysell-buttons">
                                        <div class="big-buy-button rounded border mx-2">
                                                  <a href="/books" class="d-flex rounded flex-column justify-content-center align-items-center p-3">
                                                            <img src="images/hand-books.svg" alt="Buy Used Books" class="icon">
                                                            <button class="btn-text">Buy Used Books</button>
                                                  </a>
                                        </div>

                                        <div class="big-or-button d-flex flex-center border rounded-5 p-2 bg-light mx-2 align-items-center justify-content-center text-dark">Or</div>

                                        <div class="big-sell-button rounded border mx-2">
                                                  <a href="/post-ad" class="d-flex rounded flex-column justify-content-center align-items-center p-3" title="Sell your used books online at great prices">
                                                            <img src="images/hand-money.svg" alt="Sell Old Books" class="icon">
                                                            <button class="btn-text">Sell Old Books</button>
                                                  </a>
                                        </div>
                              </div>
                    </div>

                    <div class="hero-part">
                              <div id="carouselExampleDark" class="carousel carousel-dark slide">
                                        <div class="carousel-indicators">
                                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                                        <div class="carousel-inner">
                                                  <div class="carousel-item active" data-bs-interval="1000">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/vector-illustration-retro-style-hand-giving-money-other-hand.png" class="d-block  sld-img" alt="...">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                      <h3>Sell Old Books On ClanKart</h3>
                                                                      <p>Well, you can sell your old used books very easily on Clankart for actual cash.</p>
                                                            </div>
                                                  </div>
                                                  <div class="carousel-item" data-bs-interval="2000">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/cash-delivery-concept.png" class="d-block  sld-img" alt="...">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                      <h3>Purchase Old Books On ClanKart</h3>
                                                                      <p>Well, you can buy second hand books very easily on Clankart.</p>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>
                    </div>
          </div>


          <div class="about py-5 mb-3" style="background-color: #deeafe;">
                    <div class="container mb-5">
                              <p class="section-title mt-100 mx-auto my-5 text-center fs-1">How To Sell On <strong>Clankart™</strong></p>
                              <p class="section-subtitle w-100 text-center mx-auto my-5 fs-4">Well, you can sell your old used books very easily on Clankart for actual cash.

                                        Earning money by selling your old books is just 3 steps away from you :)</p>

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

          <div class="about">
                    <div class="container mb-5">
                              <p class="section-title mt-100 mx-auto my-5 text-center fs-1">How To Purchase On <strong>Clankart™</strong></p>
                              <p class="section-subtitle w-100 text-center mx-auto my-5 fs-4">Well, you can buy second hand books very easily on Clankart.

                                        Saving some good amount of money by buying used (preloved) books is just 3 steps away from you :)</p>

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
</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks-2\resources\views/index.blade.php ENDPATH**/ ?>