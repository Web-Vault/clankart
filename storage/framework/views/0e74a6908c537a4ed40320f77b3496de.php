

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>My Chats | ClanKart</title>

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
                                                                      <div class="nav-name  w-100 d-flex align-items-center">
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
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Chats </span>
                                                                      </div>

                                                            </div>
                                                  </a>



                                                  <a href="<?php echo e(URL::to('/')); ?>/wishlist" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/wishlist.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Wishlist </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                        </div>
                              </div>

                              <div class="col-9">
                                        <!-- <p class="p-3 fs-3 border-bottom">My Chats (0) </p> -->


                                        <!-- <?php echo $__env->yieldContent('login-needed'); ?> -->

                                        <div class="cart-inner container w-auto d-flex flex-column">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/no-chats.png" alt="Empty" class="img m-auto">
                                                  <p class="p-3 fs-4 m-auto">You have no chats :(</p>
                                        </div>




                              </div>

                    </div>





          </div>

          <?php $__env->stopSection(); ?>

</body>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/chats.blade.php ENDPATH**/ ?>