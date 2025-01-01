

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>My Ads | ClanKart</title>

          <style>
                    .cart-container {
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
                    }

                    .cart-main {
                              display: flex;
                              justify-content: center;
                              flex-direction: column;
                    }

                    .cart-inner>.search-btn {
                              font-size: 20px;
                              /* width: 200px; */
                              background-color: #0083CA;
                    }

                    .cart-main>button:hover {
                              background-color: #286090;
                    }

                    .nav-item {
                              cursor: pointer;
                              transition: 0.3s all ease;
                    }

                    .nav-item:hover {
                              background-color: #eee;
                              color: #0083CA;
                    }

                    .links {
                              text-decoration: none;
                              color: #000;
                              width: 100%;
                    }

                    /*  */

                    .main-content {
                              background-color: #f9f9f9;
                              padding: 30px;
                              border-radius: 12px;
                              margin-left: 20px;
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .header {
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                              margin-bottom: 30px;
                    }

                    .header h1 {
                              font-size: 28px;
                              color: #333;
                    }

                    .profile-buttons button {
                              background-color: #e0f7fa;
                              border: none;
                              padding: 12px 24px;
                              border-radius: 6px;
                              cursor: pointer;
                              margin-left: 12px;
                              font-size: 16px;
                              font-weight: 500;
                              transition: background-color 0.3s, color 0.3s;
                    }

                    .profile-buttons .view-profile {
                              background-color: #e0f7fa;
                              color: #007bff;
                    }

                    .profile-buttons .view-profile:hover {
                              background-color: #b2ebf2;
                    }

                    .profile-buttons .share-profile {
                              background-color: #ffebee;
                              color: #d32f2f;
                    }

                    .profile-buttons .share-profile:hover {
                              background-color: #ffcdd2;
                    }

                    .ads-container {
                              display: flex;
                              flex-direction: column;
                    }

                    .ad-item {
                              display: flex;
                              align-items: center;
                              border-bottom: 1px solid #ddd;
                              padding: 20px;
                              background-color: #fff;
                              border-radius: 8px;
                              margin-bottom: 20px;
                              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                              transition: box-shadow 0.3s;
                    }

                    .ad-item img {
                              width: 150px;
                              height: auto;
                              margin-right: 20px;
                              border: 1px solid #ddd;
                              border-radius: 8px;
                    }

                    .ad-details {
                              flex-grow: 1;
                    }

                    .ad-title {
                              margin: 0;
                              color: #007bff;
                              font-size: 20px;
                              font-weight: 600;
                    }

                    .ad-info {
                              margin: 0;
                              color: #555;
                              font-size: 15px;
                    }

                    .ad-actions a {
                              margin-right: 15px;
                              color: #007bff;
                              text-decoration: none;
                              font-size: 15px;
                              font-weight: 500;
                              transition: color 0.3s;
                    }

                    .ad-actions a:hover {
                              color: #0056b3;
                              text-decoration: underline;
                    }

                    .ad-earnings {
                              margin: 10px 0 0;
                              color: #333;
                              font-size: 15px;
                    }

                    .ad-id {
                              color: #999;
                              font-size: 14px;
                    }

                    .pagination {
                              text-align: center;
                              margin-top: 30px;
                    }

                    .page-btn {
                              background-color: #fff;
                              border: 1px solid #ddd;
                              padding: 8px 16px;
                              margin: 0 6px;
                              cursor: pointer;
                              border-radius: 6px;
                              font-size: 16px;
                              font-weight: 500;
                              transition: background-color 0.3s, color 0.3s;
                    }

                    .page-btn:hover {
                              background-color: #f1f1f1;
                    }

                    .page-btn.active {
                              background-color: #007bff;
                              color: #fff;
                    }

                    /*  */

                    @media (max-width: 1024px) {
                              .noting {}

                              .cart-container {
                                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 4px 10px rgba(0, 0, 0, 0.1);
                              }

                              .cart-main {
                                        padding: 10px;
                              }

                              .cart-inner>.search-btn {
                                        font-size: 18px;
                                        width: 150px;
                              }

                              .nav-item {
                                        font-size: 14px;
                              }

                              .nav-name {
                                        display: none;
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {

                              .noting {}

                              .cart-container {
                                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 2px 5px rgba(0, 0, 0, 0.1);
                              }

                              .cart-main {
                                        padding: 5px;
                              }

                              .cart-inner>.search-btn {
                                        font-size: 16px;
                                        width: 120px;
                              }

                              .nav {
                                        width: 100%;
                              }

                              .nav-item {
                                        font-size: 12px;
                              }

                              .sidebar {
                                        display: none;
                              }

                              .img {
                                        width: 100%;
                              }
                    }

                    /*  */

                    /* Media Query for Tablets and Smaller Devices */
                    @media (max-width: 1024px) {
                              .nothing {}

                              .main-content {
                                        padding: 20px;
                                        margin-left: 10px;
                              }

                              .header {
                                        flex-direction: column;
                                        align-items: flex-start;
                                        margin-bottom: 20px;
                              }

                              .header h1 {
                                        font-size: 24px;
                              }

                              .profile-buttons button {
                                        display: none;
                              }

                              .ad-item {
                                        flex-direction: column;
                                        align-items: center;
                                        /* Center items */
                                        padding: 15px;
                                        margin-bottom: 20px;
                                        /* Increase bottom margin for better spacing */
                                        border-radius: 8px;
                                        /* Add border radius for rounded corners */
                                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                        /* Light shadow for emphasis */
                                        background-color: #fff;
                                        /* Ensure background color */
                              }

                              .ad-item img {
                                        width: 100%;
                                        /* Ensure image is responsive */
                                        max-width: 200px;
                                        /* Limit maximum width for better fit */
                                        height: auto;
                                        /* Maintain aspect ratio */
                                        margin-bottom: 15px;
                                        /* Increase bottom margin */
                              }

                              .ad-title {
                                        font-size: 20px;
                                        /* Increase font size for better readability */
                                        font-weight: 600;
                                        /* Make title more prominent */
                                        color: #007bff;
                                        /* Highlight title color */
                                        margin-bottom: 10px;
                                        /* Add bottom margin */
                                        text-align: center;
                                        /* Center align title */
                              }

                              .ad-info {
                                        font-size: 16px;
                                        /* Increase font size */
                                        color: #555;
                                        /* Soft color for information */
                                        margin-bottom: 10px;
                                        /* Add bottom margin */
                                        text-align: center;
                                        /* Center align information */
                              }

                              .ad-actions a {
                                        font-size: 16px;
                                        /* Increase font size for actions */
                                        margin: 5px;
                                        /* Add margin for better spacing */
                                        color: #007bff;
                                        /* Action color */
                                        transition: color 0.3s;
                                        /* Smooth color transition */
                              }

                              .ad-actions a:hover {
                                        color: #0056b3;
                                        /* Darken color on hover */
                                        text-decoration: underline;
                                        /* Underline on hover */
                              }

                              .ad-earnings,
                              .ad-id {
                                        font-size: 16px;
                                        /* Increase font size for better readability */
                                        color: #333;
                                        /* Darker color for better contrast */
                              }

                    }

                    @media (max-width: 768px) {
                              .nothing {}

                              .main-content {
                                        padding: 15px;
                                        margin: 0;
                                        width: 100%;
                              }

                              .header {
                                        flex-direction: column;
                                        align-items: flex-start;
                                        margin-bottom: 15px;
                              }

                              .header h1 {
                                        font-size: 20px;
                              }

                              .profile-buttons button {
                                        display: none;
                              }

                              .ad-item {
                                        padding: 10px;
                                        /* Reduce padding for mobile screens */
                                        margin-bottom: 15px;
                                        /* Adjust margin-bottom */
                              }

                              .ad-item img {
                                        max-width: 150px;
                                        /* Adjust maximum width for mobile */
                                        margin-bottom: 10px;
                                        /* Adjust bottom margin */
                              }

                              .ad-title {
                                        font-size: 18px;
                                        /* Adjust font size for mobile */
                              }

                              .ad-info {
                                        font-size: 14px;
                                        /* Adjust font size for mobile */
                              }

                              .ad-actions a {
                                        font-size: 14px;
                                        /* Adjust font size for mobile */
                                        margin: 2px 5px;
                                        /* Adjust margin for mobile */
                              }

                              .ad-earnings,
                              .ad-id {
                                        font-size: 14px;
                                        margin: 3px 0;
                                        /* Adjust font size for mobile */
                              }
                    }
          </style>

</head>

<body>

          <?php $__env->startSection('main-content'); ?>

          <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                    <div class="row">
                              <div class="col-3">
                                        <div class="nav mt-3">

                                                  <a href="<?php echo e(URL::to('/')); ?>/profile" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <svg height="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                                                          <title></title>
                                                                                          <g id="about">
                                                                                                    <path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"></path>
                                                                                                    <path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"></path>
                                                                                          </g>
                                                                                </svg>
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Profile </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/ads" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/ads.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Ads </span>
                                                                      </div>

                                                            </div>
                                                  </a>

                                                  <a href="<?php echo e(URL::to('/')); ?>/orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/selling-orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/selling orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Selling Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/chats" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/chats.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Chats </span>
                                                                      </div>

                                                            </div>
                                                  </a>



                                                  <a href="<?php echo e(URL::to('/')); ?>/wishlist" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/wishlist.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Wishlist </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                        </div>
                              </div>

                              <div class="col-9">
                                        <p class="p-3 fs-3 border-bottom">My Ads (0) </p>


                                        <!-- <?php echo $__env->yieldContent('login-needed'); ?> -->


                                        <!-- <div class="cart-inner container w-auto d-flex flex-column">
                                                  
                                                  
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/storeclosed.png" alt="Empty"  class="img m-auto">
                                                  <p class="p-3 fs-4 m-auto">You have no books listed for sale :(</p>
                                                  <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Click Here To Sll Your Books For Actual Money!</button>

                                                  

                                        </div> -->



                                        <div class="cart-inner container w-auto d-flex flex-column">
                                                  <div class="main-content">
                                                            <div class="header">
                                                                      <h1>Your Books Listed for Sale</h1>
                                                                      <div class="profile-buttons">
                                                                                <button class="view-profile">View your public profile</button>
                                                                                <button class="share-profile">Share your profile</button>
                                                                      </div>
                                                            </div>
                                                            <div class="ads-container">




                                                                      <div class="ad-item border-bottom rounded-0">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Sample Book">
                                                                                <div class="ad-details">
                                                                                          <h2 class="ad-title">sample book</h2>
                                                                                          <p class="ad-info">Posted: 2 seconds ago<br>Quantity Available: 1</p>
                                                                                          <div class="ad-actions">
                                                                                                    <a href="#" class="view-link">View</a>
                                                                                                    <a href="#" class="edit-link">Edit</a>
                                                                                                    <a href="#" class="delete-link">Delete</a>
                                                                                                    <a href="#" class="share-link">Share</a>
                                                                                          </div>
                                                                                          <p class="ad-earnings">You will earn ₹180 for this ad</p>
                                                                                </div>
                                                                                <div class="ad-id">Ad ID: 1001721315778855</div>
                                                                      </div>



                                                            </div>
                                                  </div>

                                        </div>

                              </div>

                    </div>





          </div>

          <?php $__env->stopSection(); ?>

</body>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/ads.blade.php ENDPATH**/ ?>