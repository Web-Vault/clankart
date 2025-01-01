


<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>My Ads | ClanKart</title>

          <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">

          <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/wishlist.css">
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
                                                                                <svg height="25" viewBox="0 0 32 32"
                                                                                          xmlns="http://www.w3.org/2000/svg">
                                                                                          <title></title>
                                                                                          <g id="about">
                                                                                                    <path
                                                                                                              d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                              d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z">
                                                                                                    </path>
                                                                                          </g>
                                                                                </svg>
                                                                      </div>
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Profile
                                                                                </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/ads" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/ads.png"
                                                                                          alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Ads </span>
                                                                      </div>

                                                            </div>
                                                  </a>

                                                  <a href="<?php echo e(URL::to('/')); ?>/orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/orders.png"
                                                                                          alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Orders
                                                                                </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/selling-orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/selling orders.png"
                                                                                          alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Selling
                                                                                          Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/chats" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/chats.png"
                                                                                          alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Chats
                                                                                </span>
                                                                      </div>

                                                            </div>
                                                  </a>



                                                  <a href="<?php echo e(URL::to('/')); ?>/wishlist" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/wishlist.png"
                                                                                          alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Wishlist
                                                                                </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                        </div>
                              </div>

                              <div class="col-9">
                                        <p class="p-3 fs-3 border-bottom">Manage your Wishlist</p>

                                        <!-- <div class="cart-inner container w-auto d-flex flex-column">

                                                  <?php echo $__env->yieldContent('login-needed'); ?> 

                                                  <img src="<?php echo e(URL::to('/')); ?>/images/emptywishlist.png" alt="Empty" class="img m-auto">
                                                  <p class="p-3 fs-4 m-auto">Sorry you have an empty wishlist :(</p>



                                        </div> -->


                                        <div class="cart-inner container w-auto d-flex flex-column">

                                                  <div class="main-content my-3">


                                                            <?php if(isset($books)): ?>
                                                                      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <!-- <?php echo e(print_r($book)); ?>

                                                                                <br><br><br> -->

                                                                                <div class="wishlist-item">
                                                                      <div>
                                                                                <img src="<?php echo e(URL::to('/')); ?><?php echo e($book->book_image); ?>"
                                                                                          alt="Book Image">
                                                                                <div class="wishlist-item-description">
                                                                                          <p><?php echo e($book->description); ?>

                                                                                          </p>
                                                                                </div>
                                                                      </div>
                                                                      <div class="wishlist-item-actions">
                                                                                <button class="delete-button"> <a href="remove-wishlist/<?php echo e($book->id); ?>" class="text-black text-decoration-none">Delete from wishlist</a></button>
                                                                                <button> <a class="text-white text-decoration-none" href="add-to-cart/<?php echo e($book->id); ?>">Add to Cart</a></button>
                                                                      </div>
                                                            </div>

                                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>

                                                            <div class="footer">
                                                                      That's all :)
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
<?php echo $__env->make('login-needed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/wishlist.blade.php ENDPATH**/ ?>