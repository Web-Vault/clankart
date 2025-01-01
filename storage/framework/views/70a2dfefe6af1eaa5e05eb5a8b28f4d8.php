

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>make payment for your future</title>

        <style>
                .profile-form-container {
                        background-color: #ffffff;
                        border-radius: 8px;
                        padding: 20px;
                }

                h2 {
                        margin-top: 0;
                        margin-bottom: 20px;
                        text-align: center;
                }

                .book-info {
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 20px;
                }

                .book-info .book-name,
                .book-info .book-price {
                        width: 48%;
                }

                .book-info label {
                        display: block;
                        margin-bottom: 5px;
                        font-weight: bold;
                }

                .book-info p {
                        background-color: #e9ecef;
                        padding: 10px;
                        border-radius: 4px;
                        text-align: center;
                }

                .form-group {
                        margin-bottom: 20px;
                }

                .form-group label {
                        display: block;
                        margin-bottom: 5px;
                }

                .form-group input {
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        padding: 10px;
                        width: 100%;
                }

                .form-actions {
                        display: flex;
                        justify-content: flex-end;
                }

                .form-actions .update {
                        border: none;
                        border-radius: 4px;
                        background-color: #0083CA;
                        color: white;
                        padding: 10px 20px;
                        cursor: pointer;
                        transition: 0.3s all ease;
                }

                .form-actions .update:hover {
                        background-color: #286090;
                        color: white;
                }

                /*  */

                /* Optional: Styling for specific elements in the order form */
                #orderForm .form-group input[readonly] {
                        background-color: #e9ecef;
                        /* Matches the style for read-only fields */
                        border-color: #ccc;
                }

                /* Optional: Add any specific margins or paddings for the form elements in the book order form */
                #orderForm .form-group {
                        margin-bottom: 20px;
                        /* Ensures spacing is consistent */
                }

                /* Optional: Specific styling for error messages (if different from profile form) */
                #orderForm .text-danger {
                        color: #dc3545;
                }

                /* Optional: Styling for the Place Order button */
                #orderForm .form-actions .update {
                        background-color: #28a745;
                        /* A green button for placing orders */
                        transition: 0.3s all ease;
                }

                #orderForm .form-actions .update:hover {
                        background-color: #218838;
                }
        </style>

</head>

<body>

        <?php $__env->startSection('main-content'); ?>
        <div class="order-form-container">
                <h2>Order Book</h2>

                <?php if(isset($payment_info)): ?>
                
                <?php endif; ?>

                <form action="/make_payment" method="post" enctype="multipart/form-data" class="profile-form container"
                        id="orderForm">
                        <?php echo csrf_field(); ?>
                        <div class="form-group name-group">
                                <div class="name-field">
                                        <label for="book-name">Book Name</label>
                                        <input type="text" id="book-name" name="bookname" value="<?php echo e($payment_info['book_name']); ?>"
                                                readonly>
                                </div>
                                <div class="name-field">
                                        <label for="book-price">Price</label>
                                        <input type="text" id="book-price" name="bookprice" value="<?php echo e($payment_info['book_price']); ?>" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                                <label for="shipping-address">Shipping Address</label>
                                <input type="text" id="shipping-address" name="shipping_address"
                                        placeholder="Enter your shipping address">
                                <span class="text-danger">
                                        <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                        <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                        </div>

                        <div class="form-group">
                                <label for="card-number">Card Number</label>
                                <input type="text" id="card-number" name="card_number"
                                        placeholder="Enter your card number">
                                <span class="text-danger">
                                        <?php $__errorArgs = ['card_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                        <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                        </div>

                        <div class="form-group">
                                <label for="pin">PIN</label>
                                <input type="password" id="pin" name="pin" placeholder="Enter your PIN">
                                <span class="text-danger">
                                        <?php $__errorArgs = ['pin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                        <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                        </div>

                        <p class="border-bottom pb-3 mb-3 fs-6 text-primary">Your payment details are secure and will
                                not be shared with anyone.</p>

                        <div class="form-actions">
                                <button type="submit" class="update" name="place_order"> Place Order</button>
                        </div>
                </form>

                <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/purchase_form.blade.php ENDPATH**/ ?>