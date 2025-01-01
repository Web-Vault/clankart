

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Cart | ClanKart</title>

          <style>
                    .container {
                              width: 60%;
                              /* border-radius: 8px; */
                              overflow: hidden;
                              padding: 20px;
                              display: flex;
                    }

                    .product-img {
                              width: 30%;
                    }

                    .image-section {
                              text-align: center;
                              margin-bottom: 20px;
                    }

                    .image-section img {
                              width: 70%;
                              border-radius: 8px;
                              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }

                    .image-thumbnails {
                              display: flex;
                              justify-content: center;
                              margin-top: 10px;
                    }

                    .image-thumbnails img {
                              width: 15%;
                              margin: 0 5px;
                              border-radius: 8px;
                              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                              cursor: pointer;
                              transition: transform 0.3s ease;
                    }

                    .image-thumbnails img:hover {
                              transform: scale(1.1);
                    }

                    /*  */

                    .content {
                              padding: 20px;
                              border-top: 1px solid #e0e0e0;
                              width: 70%;
                    }

                    .content h1 {
                              font-size: 28px;
                              margin: 0;
                              color: #333;
                    }

                    .content .price {
                              font-size: 24px;
                              color: #e60023;
                              margin: 10px 0;
                    }

                    .content .old-price {
                              text-decoration: line-through;
                              color: #888;
                              margin-left: 10px;
                              font-size: 18px;
                    }

                    .content .availability {
                              color: #28a745;
                              margin: 10px 0;
                              font-weight: bold;
                    }

                    .content .info {
                              font-size: 16px;
                              color: #555;
                              margin-bottom: 20px;
                    }

                    .content .info p {
                              margin: 5px 0;
                    }

                    .content button {
                              background-color: #007bff;
                              color: #fff;
                              border: none;
                              padding: 10px 20px;
                              font-size: 18px;
                              border-radius: 4px;
                              cursor: pointer;
                              transition: background-color 0.3s ease;
                              margin: 10px 0;
                              width: 100%;
                              text-align: center;
                    }

                    .content button:hover {
                              background-color: #0056b3;
                    }

                    /*  */

                    .details {
                              display: flex;
                              justify-content: space-between;
                              margin-top: 20px;
                              border-top: 1px solid #e0e0e0;
                              padding-top: 20px;
                    }

                    .details div {
                              width: 45%;
                    }

                    .details label {
                              font-weight: bold;
                              color: #333;
                    }

                    .details p {
                              margin: 5px 0;
                              color: #555;
                    }

                    .chat-button {
                              margin-top: 20px;
                              text-align: center;
                              display: flex;
                    }

                    .chat-button a {
                              background-color: #17a2b8;
                              color: #fff;
                              border: none;
                              text-decoration: none;
                              padding: 10px 20px;
                              margin: 0 10px;
                              font-size: 18px;
                              border-radius: 4px;
                              cursor: pointer;
                              transition: background-color 0.3s ease;
                    }

                    .chat-button a:hover {
                              background-color: #117a8b;
                    }

                    /*  */

                    .description-container {
                              width: 100%;
                              border-radius: 8px;
                              overflow: hidden;
                              padding: 20px;
                              margin-top: 20px;
                    }

                    .description {
                              display: flex;
                              justify-content: space-between;
                    }

                    .description .left,
                    .description .right {
                              width: 45%;
                    }

                    .description h2 {
                              font-size: 22px;
                              color: #333;
                    }

                    .description p {
                              font-size: 16px;
                              color: #555;
                              margin: 10px 0;
                    }

                    .description .community {
                              margin-top: 20px;
                              font-size: 14px;
                              color: #888;
                    }

                    .description .community a {
                              color: #007bff;
                              text-decoration: none;
                    }

                    .description .community a:hover {
                              text-decoration: underline;
                    }

                    .description .ad-info {
                              display: flex;
                              justify-content: space-between;
                              margin-top: 20px;
                              font-size: 14px;
                              color: #888;
                    }

                    .description .ad-info span {
                              display: flex;
                              align-items: center;
                    }

                    .description .ad-info .views {
                              margin-left: 10px;
                    }

                    .description .ad-info .views::before {
                              content: '\1F441';
                              /* eye icon */
                              margin-right: 5px;
                    }

                    .description .seller-info {
                              display: flex;
                              align-items: center;
                    }

                    .description .seller-info img {
                              border-radius: 50%;
                              margin-right: 10px;
                              width: 50px;
                              height: 50px;
                              object-fit: cover;
                    }

                    .description .seller-info .verified {
                              color: #28a745;
                              margin-left: 10px;
                    }

                    .description .visit-profile {
                              margin-top: 20px;
                              text-align: center;
                    }

                    .description .visit-profile a {
                              background-color: #17a2b8;
                              color: #fff;
                              border: none;
                              text-decoration: none;
                              padding: 10px 20px;
                              font-size: 18px;
                              border-radius: 4px;
                              cursor: pointer;
                              transition: background-color 0.3s ease;
                    }

                    .description .visit-profile a:hover {
                              background-color: #117a8b;
                    }

                    /*  */

                    /* Media Query for Tablets and Smaller Devices */
                    @media (max-width: 1024px) {
                              .nothing {}

                              .container {
                                        width: 80%;
                                        flex-direction: column;
                                        padding: 10px;
                              }

                              .product-img {
                                        width: 100%;
                                        margin-bottom: 20px;
                              }

                              .image-section img {
                                        width: 90%;
                              }

                              .image-thumbnails {
                                        flex-wrap: wrap;
                                        justify-content: flex-start;
                              }

                              .image-thumbnails img {
                                        width: 25%;
                                        margin: 5px;
                              }

                              .content {
                                        width: 100%;
                                        padding: 15px;
                              }

                              .content h1 {
                                        font-size: 24px;
                              }

                              .content .price {
                                        font-size: 20px;
                              }

                              .content .old-price {
                                        font-size: 16px;
                              }

                              .content .availability {
                                        font-size: 16px;
                              }

                              .content .info {
                                        font-size: 14px;
                              }

                              .content button {
                                        font-size: 16px;
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {
                              .nothing {}

                              .container {
                                        width: 95%;
                                        padding: 5px;
                              }

                              .product-img {
                                        width: 100%;
                                        margin-bottom: 10px;
                              }

                              .image-section img {
                                        width: 100%;
                              }

                              .image-thumbnails {
                                        flex-direction: row;
                                        align-items: center;
                                        border: 1px solid #ddd;
                                        padding: 3px 1px;
                              }

                              .image-thumbnails img {
                                        width: 20%;
                                        margin: 5px auto;
                              }

                              .content {
                                        width: 100%;
                                        padding: 10px;
                              }

                              .content h1 {
                                        font-size: 20px;
                              }

                              .content .price {
                                        font-size: 18px;
                              }

                              .content .old-price {
                                        font-size: 14px;
                              }

                              .content .availability {
                                        font-size: 14px;
                              }

                              .content .info {
                                        font-size: 12px;
                              }

                              .content button {
                                        font-size: 14px;
                                        padding: 8px 16px;
                              }
                    }

                    /*  */

                    /* Media Query for Tablets and Smaller Devices */
                    @media (max-width: 1024px) {
                              .noting{}
                              .details {
                                        flex-direction: column;
                                        align-items: center;
                              }

                              .details div {
                                        width: 100%;
                                        margin-bottom: 20px;
                              }

                              .chat-button {
                                        flex-direction: row;
                                        align-items: center;
                              }

                              .chat-button a {
                                        font-size: 16px;
                                        padding: 8px 16px;
                              }

                              .description-container {
                                        padding: 15px;
                              }

                              .description {
                                        flex-direction: column;
                              }

                              .description .left,
                              .description .right {
                                        width: 100%;
                                        margin-bottom: 20px;
                              }

                              .description h2 {
                                        font-size: 20px;
                              }

                              .description p {
                                        font-size: 14px;
                              }

                              .description .community {
                                        font-size: 12px;
                              }

                              .description .ad-info {
                                        font-size: 12px;
                              }

                              .description .seller-info img {
                                        width: 40px;
                                        height: 40px;
                              }

                              .description .visit-profile a {
                                        font-size: 16px;
                                        padding: 8px 16px;
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {
                              .nothing{}
                              .details {
                                        flex-direction: column;
                                        align-items: center;
                                        margin-top: 10px;
                              }

                              .details div {
                                        width: 100%;
                                        margin-bottom: 15px;
                              }

                              .chat-button {
                                        flex-direction: row;
                                        align-items: center;
                              }
                              
                              .chat-button a {
                                        margin: auto;
                                        font-size: 14px;
                                        padding: 8px 12px;
                              }

                              .description-container {
                                        padding: 10px;
                              }

                              .description {
                                        flex-direction: column;
                              }

                              .description .left,
                              .description .right {
                                        width: 100%;
                                        margin-bottom: 15px;
                              }

                              .description h2 {
                                        font-size: 18px;
                              }

                              .description p {
                                        font-size: 12px;
                              }

                              .description .community {
                                        font-size: 10px;
                              }

                              .description .ad-info {
                                        font-size: 10px;
                              }

                              .description .seller-info img {
                                        width: 30px;
                                        height: 30px;
                              }

                              .description .visit-profile a {
                                        font-size: 14px;
                                        padding: 8px 12px;
                              }
                    }
          </style>

</head>

<body>

          <?php $__env->startSection('main-content'); ?>


          <div class="container">
                    <div class="product-img">
                              <div class="image-section">
                                        <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Jee Most Important (14) Books">
                              </div>
                              <div class="image-thumbnails rounded-1">
                                        <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Thumbnail 2">
                                        <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Thumbnail 3">
                                        <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Thumbnail 4">
                                        <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Thumbnail 1">
                              </div>
                    </div>
                    <div class="content">
                              <h1>Jee Most Important (14) Books</h1>
                              <div class="price">
                                        ₹1999 <span class="old-price">₹4999</span>
                              </div>
                              <div class="availability">Shipping is available from the seller!</div>
                              <div class="info">
                                        <p><label>Book Condition:</label> <strong>Excellent</strong></p>
                                        <p><label>Subject/Title:</label> <strong>Chat with me if you are interested</strong></p>
                                        <p><label>Type:</label> <strong>Exam/Test Preparation Books</strong></p>
                                        <p><label>Category:</label> <strong>Engineering Entrance Exams</strong></p>
                                        <p><label>Author:</label> <strong>NCERT, HC Verma, N. Bhansal, N. Awasthi, Arihant</strong></p>
                                        <p><label>Year:</label> <strong>2021</strong></p>
                              </div>
                              <div class="chat-button">
                                        <a href="checkout">Buy Now</a>
                                        <a href="#">Chat with Seller</a>
                              </div>
                    </div>
          </div>


          <div class="description-container container border my-5">
                    <div class="description">
                              <div class="left">
                                        <h2>Description</h2>
                                        <p>NCERT All Books For JEE (6 Books) HC Verma Concept of Physics part I and II (2 Books) Arihant All subject Handbook for JEE (3 Books) N Awasthi Famous Physical Chemistry Book with Free PYQ Book (2 Books) N. Bhansal Organic Chemistry Book (1) Please if you need any of this chat with me</p>
                                        <div class="community">
                                                  <a href="#">Our Community</a>
                                                  <p>We're not just another shopping website where you buy from professional sellers - we are a vibrant community of students, book lovers across India who deliver happiness to each other!</p>
                                        </div>
                                        <div class="ad-info">
                                                  <span>Ad Id: 5011721325976952</span>
                                                  <span>Posted: 57 minutes ago</span>
                                                  <span class="views">22 Views</span>
                                        </div>
                              </div>
                              <div class="right">
                                        <h2>Sold By</h2>
                                        <div class="seller-info">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Seller">
                                                  <div>
                                                            <strong>Aman Momin</strong><span class="verified">✔ Verified</span>
                                                            <p>Kolhapur, MAHARASHTRA</p>
                                                  </div>
                                        </div>
                                        <div class="visit-profile">
                                                  <a href="#">Visit Seller's Profile</a>
                                        </div>
                              </div>
                    </div>
          </div>

          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/single.blade.php ENDPATH**/ ?>