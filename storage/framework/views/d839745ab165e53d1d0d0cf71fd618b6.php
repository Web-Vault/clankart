<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>master view</title>

          <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">

          <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

          <!-- Bootstrap CSS -->
          <link href="<?php echo e(URL::to('/')); ?>/css/bootstrap.min.css" rel="stylesheet">

          <!-- Bootstrap JS -->
          <script src="<?php echo e(URL::to('/')); ?>/js/bootstrap.min.js"></script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


          <style>
                    * {
                              margin: 0;
                              padding: 0;
                              font-family: SuisseWorks, Georgia, "Times New Roman", Times, serif;
                    }

                    header {
                              width: 70%;
                              margin: auto;
                              height: 100px;
                              display: flex;
                              justify-content: space-around;
                    }

                    .link {
                              text-decoration: none;
                              color: #000;
                    }

                    .logo-img>a>img {
                              height: 70px;
                              margin: auto 30px;
                              width: auto;
                    }

                    .search {
                              width: max-content;
                              display: flex;
                              align-items: center;
                    }

                    .search>input {
                              width: 400px;
                              padding: 2.73% 1%;
                              font-size: 15px;
                    }

                    .search>button {
                              height: 53px;
                              font-size: 20px;
                              width: 120px;
                              background-color: #0083CA;
                    }

                    .search>button:hover {
                              background-color: #286090;
                    }

                    .account,
                    .cart {
                              display: flex;
                              flex-direction: column;
                              justify-content: center;
                              margin: auto 10px;
                              cursor: pointer;
                    }

                    .cart {
                              /* border: 1px solid black; */
                              width: 25px;

                    }

                    .footer-upper-part {
                              background-color: #deeafe;
                              width: 100%;
                    }

                    .footer-info {
                              display: flex;
                              flex-direction: column;
                              justify-content: center;
                              margin: 0 auto 50px;
                    }

                    .footer-info>h1 {
                              margin: 30px auto;
                              font-weight: 600;
                              letter-spacing: 1px;

                    }

                    .footer-info>p {
                              font-size: 18px;
                              width: 70%;
                              margin: auto;
                              margin-bottom: 50px;
                    }

                    .footer-img {
                              /* border: 1px solid black; */
                              display: flex;
                              justify-content: center;
                    }

                    .footer-img>img {
                              margin: auto;
                    }

                    .redirectors {
                              display: flex;
                              justify-content: space-evenly;
                    }

                    .first {
                              font-size: 20px;
                              font-weight: 600;
                              margin: 10px auto;
                    }

                    .part>ul>li {
                              list-style: none;
                              line-height: 25px;
                              font-size: 15px;
                    }

                    .social-icons {
                              display: flex;
                              justify-content: space-between;
                    }

                    .social-icons>img {
                              margin: 5px;
                    }

                    .concept {
                              display: flex;
                              justify-content: space-around;
                              padding: 20px 0 10px;
                    }

                    .concept-type {
                              display: flex;
                    }

                    .concept-info {
                              margin: 0 10px;
                    }

                    .concept-info>p {
                              margin: 0;
                              font-size: 20px;
                    }

                    .concept-info>p.info {
                              font-size: 13px;
                              margin: 10px 0;
                    }

                    .footer-text {
                              margin: 20px auto;
                              width: 70%;
                              font-size: 13px;
                              padding-bottom: 10px;
                    }

                    .copyright {
                              display: flex;
                              width: 70%;
                              justify-content: space-between;
                    }

                    .acc-options {
                              background-color: #fff;
                              height: 500px;
                              width: 350px;
                              overflow-y: scroll;
                              position: absolute;
                              margin-left: 70%;
                              z-index: 3;
                              display: none;
                    }

                    .profile {
                              display: flex;
                              justify-content: space-around;
                              padding-bottom: 2px;
                              height: 70px;
                              transition: 0.3s all ease;
                    }

                    .profile:hover {
                              background: #eee;
                              margin-left: 25px;
                    }

                    .profile-icon {
                              width: max-content;
                              width: 20%;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                    }

                    .profile-icon>img {
                              margin: auto;
                    }

                    .user-name {
                              /* border: 1px solid black; */
                              width: 80%;
                              padding: 10px;
                              display: flex;
                              justify-content: center;
                              justify-content: flex-start;
                              flex-direction: column;
                    }

                    .user-name>h3,
                    p {
                              margin: 0;
                    }

                    .user-name>p {
                              width: 100%;
                              height: max-content;
                              margin: auto;
                    }

                    /* 
                    
                    
                    media query 
                    
                    
                    
                    */
                    /* Responsive Styles */
                    @media (max-width: 1200px) {

                              /* Large Screens (Desktops) */
                              header {
                                        width: 95%;
                              }

                              .search>input {
                                        width: 300px;
                                        font-size: 14px;
                              }

                              .search>button {
                                        width: 90px;
                                        font-size: 14px;
                              }
                    }

                    @media (max-width: 992px) {

                              /* Medium Screens (Laptops, Tablets) */
                              .search {
                                        display: none;
                                        /* Hide search bar on medium and smaller screens */
                              }

                              .logo-img>a>img {
                                        height: 60px;
                              }
                    }

                    @media (max-width: 768px) {

                              /* Tablets and Small Laptops */
                              header {
                                        padding: 0 15px;
                              }

                              .logo-img>a>img {
                                        height: 50px;
                              }

                              .nav-icons img {
                                        width: 25px;
                                        height: 25px;
                              }

                              .account span,
                              .cart span {
                                        display: none;
                                        /* Hide text labels on smaller screens */
                              }
                    }

                    @media (max-width: 576px) {

                              /* Mobile Phones */
                              header {
                                        height: auto;
                                        flex-direction: row;
                                        padding: 0 10px;
                              }

                              .logo-img>a>img {
                                        height: 40px;
                              }

                              .nav-icons {
                                        gap: 15px;
                              }

                              .nav-icons img {
                                        width: 20px;
                                        height: 20px;
                              }
                    }

                    @media (max-width: 400px) {

                              /* Extra Small Mobile Phones */
                              .logo-img>a>img {
                                        width: 100px;
                                        height: auto;
                              }

                              .account img,
                              .cart img {
                                        width: 18px;
                                        height: 18px;
                              }
                    }

                    /*  */

                    @media (max-width: 768px) {
                              .nothing {
                                        border: 1px solid black;
                              }

                              .acc-options {
                                        height: max-content;
                                        overflow-y: hidden;
                                        display: none;
                                        top: 20;
                                        right: 0;
                                        margin: 0;
                                        transition: max-height 0.5s ease-in-out;
                                        z-index: 1000;
                                        display: flex;
                                        flex-direction: column;
                                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                                        border-bottom: 1px solid #ccc;
                              }

                              .acc-options.show {
                                        max-height: 500px;
                                        overflow-y: scroll;
                              }

                              .profile {
                                        justify-content: flex-start;
                                        padding: 10px 20px;
                                        height: auto;
                                        margin-left: 0;
                                        border-bottom: 1px solid #eee;
                              }

                              .profile:hover {
                                        background: #f8f8f8;
                              }

                              .profile-icon {
                                        width: 40px;
                                        height: 40px;
                              }

                              .profile-icon>img {
                                        width: 100%;
                                        height: auto;
                              }

                              .user-name {
                                        width: auto;
                                        padding: 0 10px;
                                        display: block;
                              }

                              .user-name>h3 {
                                        font-size: 16px;
                              }

                              .user-name>p {
                                        font-size: 14px;
                                        color: #666;
                              }

                              @media (max-width: 480px) {
                                        .profile {
                                                  padding: 8px 15px;
                                        }

                                        .profile-icon {
                                                  width: 35px;
                                                  height: 35px;
                                        }

                                        .user-name>h3 {
                                                  font-size: 14px;
                                        }

                                        .user-name>p {
                                                  font-size: 12px;
                                        }
                              }
                    }

                    /*  */

                    @media (max-width: 768px) {
                              .nothing {
                                        border: 1px solid black;
                              }

                              .footer-info>h1 {
                                        font-size: 24px;
                                        text-align: center;
                              }

                              .footer-info>p {
                                        font-size: 16px;
                                        width: 90%;
                                        margin-bottom: 30px;
                                        /* Reduce margin */
                              }

                              .footer-img {
                                        flex-direction: column;
                              }

                              .footer-img>img {
                                        width: 80%;
                                        height: auto;
                                        max-width: 300px;
                              }

                              .redirectors {
                                        flex-direction: column;
                                        align-items: center;
                              }

                              .redirectors .part {
                                        margin-bottom: 20px;
                                        text-align: center;
                              }

                              .part>ul {
                                        padding: 0;
                              }

                              .part>ul>li {
                                        line-height: 30px;
                                        font-size: 16px;
                              }

                              .social-icons {
                                        flex-direction: row;
                                        justify-content: center;
                                        margin-bottom: 20px;
                              }

                              .social-icons>img {
                                        width: 30px;
                                        height: 30px;
                                        margin: 10px;
                              }

                              .concept {
                                        flex-direction: column;
                                        align-items: center;
                                        padding: 10px 0;
                              }

                              .concept-info>p {
                                        font-size: 18px;
                              }

                              .concept-info>p.info {
                                        font-size: 14px;
                                        text-align: center;
                              }

                              .footer-text {
                                        width: 90%;
                                        text-align: center;
                              }

                              .copyright {
                                        flex-direction: column;
                                        width: 90%;
                                        align-items: center;
                                        text-align: center;
                                        margin-bottom: 20px;
                              }

                              @media (max-width: 480px) {
                                        .nothing {
                                                  border: 1px solid black;
                                        }

                                        .footer-info>h1 {
                                                  font-size: 20px;
                                        }

                                        .footer-info>p {
                                                  font-size: 14px;
                                        }

                                        .part>ul>li {
                                                  font-size: 14px;
                                        }

                                        .concept-info>p {
                                                  font-size: 16px;
                                        }

                                        .concept-info>p.info {
                                                  font-size: 12px;
                                        }

                                        .footer-img>img {
                                                  width: 90%;
                                                  max-width: 250px;
                                        }
                              }
                    }
          </style>

</head>

<script>
          document.addEventListener("DOMContentLoaded", function() {
                    var profileIcon = document.querySelector(".profile-icon");
                    var accOptions = document.querySelector(".acc-options");

                    profileIcon.addEventListener("click", function() {
                              accOptions.classList.toggle("show");
                    });
          });
</script>


<body>
          <div class="header">
                    <header class="d-flex align-items-center">
                              <div class="logo-img">
                                        <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="clanKart"></a>
                              </div>

                              <div class="search">
                                        <input type="text" class="rounded-0 form-control border-primary search-adverts" name="searchbar" id="searchbar">
                                        <button class="btn btn-primary border-primary d-none d-md-block border rounded-0 search-btn">Search</button>
                              </div>
                              <!-- <div class="sellbtn">
                                                  <a href="<?php echo e(URL::to('/')); ?>/post-ad" class="p-3 border-1 rounded-2">Sell Old Books</a>
                                        </div> -->

                              <div class="options d-flex">

                                        <div class="account" id="account-drop-down">
                                                  <svg height="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                            <title></title>
                                                            <g id="about">
                                                                      <path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"></path>
                                                                      <path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"></path>
                                                            </g>
                                                  </svg><span> My account </span>
                                        </div>

                                        <div class="cart">
                                                  <a class="link" href="<?php echo e(URL::to('/')); ?>/cart">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                      <circle cx="9" cy="21" r="1"></circle>
                                                                      <circle cx="20" cy="21" r="1"></circle>
                                                                      <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                            </svg><br><span>Cart</span>
                                                  </a>
                                        </div>
                              </div>


                    </header>
          </div>

          <main>

                    <div class="acc-options  border" id="acc-options">
                              <a class="link" href="<?php echo e(URL::to('/')); ?>/profile">
                                        <div class="profile" style="border-bottom: 1px solid #555; height: 80px; padding: 5px 0;">
                                                  <div class="profile-icon">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/default-profile.png" alt="profile" style="border: 3px solid #0083CA;border-radius: 50%;padding: 5px;">
                                                  </div>
                                                  <div class="user-name">
                                                            <h3 class="fs-3">Welcome, Aryan!</h3>
                                                            <p class="opacity-75 fs-6">Visit your profile...</p>
                                                  </div>
                                        </div>
                              </a>

                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/books.png" alt="categories">
                                        </div>
                                        <a class="link" href="<?php echo e(URL::to('/')); ?>/book">
                                                  <div class="user-name">
                                                            <p class="opacity-75 fs-5"><a class="link" href="books"> Browse Top Categories </a></p>
                                        </a>
                              </div>
                    </div>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/ads">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/ads.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">My Ads</p>
                                        </div>
                              </div>
                    </a>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/my-orders">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/orders.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">My Orders</p>
                                        </div>
                              </div>
                    </a>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/my-selling-orders">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/selling orders.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">My Selling Orders</p>
                                        </div>
                              </div>
                    </a>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/chats">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/chats.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">My Chats</p>
                                        </div>
                              </div>
                    </a>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/wishlist">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/wishlist.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">My Wishlist</p>
                                        </div>
                              </div>
                    </a>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/how-it-works">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/how it works.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">How It Works</p>
                                        </div>
                              </div>
                    </a>

                    <a class="link" href="<?php echo e(URL::to('/')); ?>/logout">
                              <div class="profile">
                                        <div class="profile-icon">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/logout.png" alt="categories">
                                        </div>
                                        <div class="user-name">
                                                  <p class="opacity-75 fs-5">Logout</p>
                                        </div>
                              </div>
                    </a>
                    </div>


                    <?php echo $__env->yieldContent('main-content'); ?>


          </main>

          <footer>
                    <div class="footer-upper-part ">
                              <div class="footer-info container">
                                        <h1>ClanKart community</h1>
                                        <p>We're not just another shopping website where you buy from professional sellers - we are a vibrant community of students, book lovers across India who deliver happiness to each other! </p>
                                        <div class="footer-img">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/footer_image.png" alt="">
                                        </div>
                              </div>
                    </div>

                    <div class="footer-links ">
                              <div class="redirectors container">
                                        <div class="part">
                                                  <ul>
                                                            <li class="first">About Us</li>
                                                            <li>About Us</li>
                                                            <li>Contact Us</li>
                                                            <li>Leave Us Feedback</li>
                                                            <li>Blog</li>
                                                  </ul>
                                        </div>
                                        <div class="part">
                                                  <ul>
                                                            <li class="first">Useful links</li>
                                                            <li>How it works ?</li>
                                                            <li>Clankart Teleport</li>
                                                            <li>Frequantly asked questions (FAQs)</li>
                                                            <li>Chat Guidelines</li>
                                                            <li>Term Of Use / Listing Policy / Privacy Policy</li>
                                                  </ul>
                                        </div>
                                        <div class="part">
                                                  <ul>
                                                            <li class="first">Stay connected</li>
                                                  </ul>
                                                  <span class="social-icons">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/facebook.png" alt="facebook">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/instagram.png" alt="instagram">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/youtube.png" alt="youtube">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/twitter.png" alt="twitter">
                                                  </span>
                                        </div>
                              </div>
                              <div class="concept container">
                                        <div class="concept-type Secure-Payment">
                                                  <div class="concept-icon">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/card.png" alt="">
                                                  </div>
                                                  <div class="concept-info">
                                                            <p>Secure Payment</p>
                                                            <p class="info">100% Secure Online Transaction</p>
                                                  </div>
                                        </div>
                                        <div class="concept-type Clankart-Trust">
                                                  <div class="concept-icon">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/certified.png" alt="">
                                                  </div>
                                                  <div class="concept-info">
                                                            <p>ClanKart Trust</p>
                                                            <p class="info">Money stored safely & is transferred to <br> the seller only after buyer confirmation</p>
                                                  </div>
                                        </div>
                                        <div class="concept-type Customer-Support">
                                                  <div class="concept-icon">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/support.png" alt="">
                                                  </div>
                                                  <div class="concept-info">
                                                            <p>Customer Support</p>
                                                            <p class="info">Friendly customer support</p>
                                                  </div>
                                        </div>
                              </div>
                              <hr class="container">
                              <div class="footer-text container">
                                        <p>Clankart is a free platform where you can buy second hand books at very cheap prices. Well at Clankart, you can also sell used books online in India for actual cash. Buy used books online like college books, school books, reading books, much more near you.</p>
                              </div>
                              <hr class="container">
                              <div class="copyright container">
                                        <p class="copyriight-claim">Copyright © 2024, <strong>Clankart™</strong> All Rights Reserved</p>
                                        <span class="social-icons">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/visa.png" alt="visa">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/mastercard.png" alt="mastercard">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/paytm.png" alt="paytm">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/paypal.png" alt="paypal">
                                        </span>
                              </div>
                    </div>
          </footer>
</body>

<script>
          const clickButton = document.querySelector('#account-drop-down');
          const dropDown = document.querySelector('#acc-options');

          clickButton.addEventListener('click', function() {
                    if (dropDown.style.display === 'none' || dropDown.style.display === '') {
                              dropDown.style.display = 'block';
                    } else {
                              dropDown.style.display = 'none';
                    }
          });
</script>

</html><?php /**PATH C:\laragon\www\extra-tasks-2\resources\views/master.blade.php ENDPATH**/ ?>