

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>make payment for your future</title>

        <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/purchase_form.css">

        <style>
                
        </style>

</head>

<body>

        <?php $__env->startSection('main-content'); ?>


        <div class="container form-container">
                <h2 class="form-title">Checkout</h2>

                <!-- Coupon Code Section -->
                <div class="form-group">
                        <label for="coupon_code">Select Coupon Code (if applicable)</label>

                        <!-- Dropdown to select valid coupons -->
                        <?php if($valid_coupons->count() > 0): ?>
                                                        <select id="coupon_code" name="coupon_code" class="form-control" onchange="applyCoupon(this)">
                                                                <option value="">Select a coupon</option>
                                                                        <?php $__currentLoopData = $valid_coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($coupon->discount_value); ?>" data-coupon-id="<?php echo e($coupon->id); ?>">
                                                                                        <?php echo e($coupon->coupon_code); ?> - Discount: ₹<?php echo e($coupon->discount_value); ?>

                                                                                </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <small class="pricing-help">Select a coupon to apply a discount to your total amount.</small>
                        <?php else: ?>
                        <p class="help-text">No coupons available for this purchase amount.</p>
                        <?php endif; ?>
                </div>

                <!-- Delivery Address Section -->
                <div class="form-group">
                        <label for="address">Delivery Address</label>
                        <textarea id="address" class="form-control" rows="4" placeholder="Enter your delivery address"
                                required></textarea>
                </div>

                <!-- Price Summary -->
                <div class="price-summary my-3">
                        <div class="summary-title">ORDER SUMMARY</div>
                        <div class="summary-price">Total Price: ₹ <span id="initial_total"><?php echo e($book_price); ?></span>
                        </div>

                        <?php
                                                        $discount = 0;
                                                        $finalPayable = $book_price;

                                                        if (isset($_POST['coupon_code']) && !empty($_POST['coupon_code'])) {
                                                                        $discount = (float) $_POST['discount_value'];
                                                                        $finalPayable = $book_price - $discount;
                                                        }
                                                ?>

                        <?php if($discount > 0): ?>
                                                        <div class="summary-discount">Discount Applied: ₹ <?php echo e($discount); ?></div>
                                                <?php endif; ?>
                        <div class="summary-total">Total Payable: ₹ <span id="final_total"><?php echo e($finalPayable); ?></span>
                        </div>
                </div>


                <form method="POST" action="/make_payment">
                        <?php echo csrf_field(); ?> 

                        <?php
                                $customer = DB::table('customers')->where('email', session('email'))->first();
                                $book_info = DB::table('books')->find($book_id);
                        ?>

                        <input type="hidden" name="amount" id="final_payable" value="<?php echo e($finalPayable ?? 1000); ?>">
                        <input type="hidden" name="bookname" value="<?php echo e($book_info->book_title); ?>">
                        <input type="hidden" name="book_id" value="<?php echo e($book_info->id); ?>">
                        <input type="hidden" name="name" value="<?php echo e($customer->firstname ?? 'Aryan'); ?>">
                        <input type="hidden" name="mobile_number" value="<?php echo e($customer->mobile_number ?? '8758499499'); ?>">
                        <input type="hidden" name="email" value="<?php echo e($customer->email ?? 'aryanlathigara@gmail.com'); ?>">

                        <?php
                                session(['payable_amount' => $finalPayable]);

                        ?>


                        <button type="submit" class="post-ad-button">MAKE FINAL PAYMENT</button>
                </form>


                <div class="secure-payment pt-3">
                        <p class="mb-2">Secure Payment: Your money is safe with us until you receive the item.</p>
                </div>
        </div>

        <!-- JavaScript for Dynamic Discount Application -->
        <script>
                function applyCoupon(select) {
                        const discount = parseFloat(select.value) || 0;
                        const initialTotal = parseFloat(document.getElementById('initial_total').innerText);
                        const finalTotal = initialTotal - discount;

                        // Update final total and display discount
                        document.getElementById('final_total').innerText = finalTotal > 0 ? finalTotal : 0;
                        document.getElementById('final_payable').value = finalTotal > 0 ? finalTotal : 0;
                        document.getElementById('selected_coupon_id').value = select.options[select.selectedIndex].getAttribute('data-coupon-id');
                }
        </script>


        <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/purchase_form.blade.php ENDPATH**/ ?>