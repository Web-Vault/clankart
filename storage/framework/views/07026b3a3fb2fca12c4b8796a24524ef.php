

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart | ClanKart</title>

        <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/cart.css">
</head>

<body>

        <?php $__env->startSection('main-content'); ?>

        <div class="container rounded-1 border cart-container my-5 mx-auto">
                <p class="p-3 fs-3">My cart</p>
        </div>

        <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                <!-- <?php echo $__env->yieldContent('login-needed'); ?> -->

                <div class="cart-inner container w-auto my-3">
                        <div class="cart_item_list">
                                <?php
                                        $totalPrice = 0;
                                        $shippingCharge = 300; // Assuming a fixed shipping charge per item
                                ?>

                                <?php if($cart_items->count() > 0): ?>
                                        <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                        $totalPrice += $cart->book_price;
                                                ?>
                                                
                                                <div class="inner-cart-container border-bottom rounded-0 w-100 py-5">
                                                        <div class="cart-item">
                                                                <div class="item-image">
                                                                        <img src="<?php echo e(URL::to('/')); ?><?php echo e($cart->book_image); ?>" alt="Physiology Book">
                                                                </div>
                                                                <div class="item-details">
                                                                        <div class="item-title"><?php echo e($cart->book_name); ?></div>
                                                                        <div class="item-seller">Seller: <?php echo e($cart->seller_name); ?></div>
                                                                        <div class="item-actions">
                                                                                <a href="add-to-wishlist/<?php echo e($cart->book_id); ?>">MOVE TO WISHLIST</a>
                                                                                <a href="remove-cart/<?php echo e($cart->book_id); ?>">REMOVE</a>
                                                                        </div>                                                                          
                                                                </div>                                                                          
                                                                <div class="price-details">
                                                                        <div class="price-label">PRICE DETAILS</div>
                                                                        <div class="price">Price: ₹ <?php echo e($cart->book_price); ?></div>
                                                                        <div class="shipping">Shipping Charges: ₹ <?php echo e($shippingCharge); ?></div>
                                                                        <div class="total">Total: ₹ <?php echo e($cart->book_price + $shippingCharge); ?></div>                                                                          
                                                                </div>
                                                        </div>
                                                </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <?php else: ?>
                                                <div class="cart-inner container w-auto d-flex flex-column">
                                                                <img src="<?php echo e(URL::to('/')); ?>/images/emptycart.png" alt="Empty" height="500"
                                                                                width="500" class="m-auto">
                                                                <p class="p-3 fs-4 m-auto">Sorry, you have an empty cart :(</p>
                                                                <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Start Buying Now!</button>
                                                </div>
                                        <?php endif; ?>
                        </div>

                        <?php if($cart_items->count() > 0): ?>
                                <?php
                                        $totalShipping = $cart_items->count() * $shippingCharge;
                                        $totalPayable = $totalPrice + $totalShipping;
                                ?>

                                <div class="total-price-details">
                                        <div class="price-summary my-3">
                                                <div class="summary-title">TOTAL PRICE DETAILS</div>
                                                <div class="summary-price">Price (<?php echo e($cart_items->count()); ?> items): ₹ <?php echo e($totalPrice); ?> </div>
                                                <div class="summary-shipping">Shipping Charges: ₹ <?php echo e($totalShipping); ?></div>
                                                <div class="summary-total">Total Payable: ₹ <?php echo e($totalPayable); ?></div>
                                        </div>
                                                <div class="secure-payment pt-3">
                                                        <p class="mb-2">Secure Payment: Your money is safe with us until you receive the item.</p>
                                                </div>
                                                <a href="<?php echo e(URL::to('/')); ?>/place_order/<?php echo e($cart->book_id); ?>/<?php echo e($totalPayable); ?>" class="checkout-button">ENTER DELIVERY ADDRESS</a>
                                </div>
                        <?php endif; ?>
                </div>
        </div>

        <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/cart.blade.php ENDPATH**/ ?>