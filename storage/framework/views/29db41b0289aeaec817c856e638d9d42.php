

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Sell your old books on ClanKart</title>

          <style>
                    .form-container {
                              margin: 20px auto;
                              padding: 30px;
                              border: 1px solid #ddd;
                              border-radius: 8px;
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .form-title {
                              font-size: 1.4rem;
                              margin-bottom: 15px;
                              color: #333;
                              font-weight: bold;
                    }

                    .upload-instructions,
                    .help-text,
                    .pricing-help {
                              font-size: 0.95rem;
                              color: #6c757d;
                              line-height: 1.5;
                    }

                    .pricing-help {
                              color: #28a745;
                              font-weight: bold;
                    }

                    .post-ad-button {
                              background-color: #ffc107;
                              border-color: #ffc107;
                              color: #fff;
                              width: 100%;
                              padding: 20px 10px;
                              font-size: 1rem;
                              border-radius: 5px;
                              cursor: pointer;
                              transition: background-color 0.3s, border-color 0.3s;
                    }

                    .post-ad-button:hover {
                              background-color: #e0a800;
                              border-color: #e0a800;
                    }

                    .form-check-inline .form-check-label {
                              margin-right: 15px;
                              font-size: 0.95rem;
                    }

                    .btn-file {
                              position: relative;
                              overflow: hidden;
                    }

                    .btn-file input[type="file"] {
                              position: absolute;
                              top: 0;
                              right: 0;
                              margin: 0;
                              padding: 0;
                              font-size: 100px;
                              line-height: 1.5;
                              color: transparent;
                              background: transparent;
                              cursor: pointer;
                              opacity: 0;
                    }


                    .form-group {
                              margin-bottom: 20px;
                    }

                    .form-group label {
                              display: block;
                              margin-bottom: 5px;
                    }

                    .email-verified {
                              align-items: center;
                              display: flex;
                              margin-top: 5px;
                    }

                    .email-verified img {
                              height: 16px;
                              margin-right: 5px;
                              width: 16px;
                    }
          </style>

</head>

<body>

          <?php $__env->startSection('main-content'); ?>

          <div class="container">
                    <div class="form-container">
                              <div class="form-title">
                                        Submit a free classified ad to <strong>sell your used books for cash in India</strong>
                              </div>
                              <form action="/sell_book" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <!-- Ad Title Section -->
                                        <div class="form-group row">
                                                  <label for="adTitle" class="col-sm-4 col-form-label">Ad Title</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="adTitle" placeholder="Enter your ad title" name="title">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['title'];
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
                                        </div>
                                        <!-- Book Type Section -->
                                        <div class="form-group row">
                                                  <label for="bookType" class="col-sm-4 col-form-label">Book Type</label>
                                                  <div class="col-sm-8">
                                                            <select class="form-control" id="bookType" name="">
                                                                      <option value="" disabled selected>Please select book type</option>
                                                                      <!-- Add options here -->
                                                            </select>
                                                  </div>
                                        </div>

                                        <!-- Book Condition Section -->
                                        <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Book Condition (Used)</label>
                                                  <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio" name="condition" id="conditionExcellent" value="excellent">
                                                                      <label class="form-check-label" for="conditionExcellent">Excellent</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio" name="condition" id="conditionGood" value="good">
                                                                      <label class="form-check-label" for="conditionGood">Good</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio" name="condition" id="conditionFair" value="fair">
                                                                      <label class="form-check-label" for="conditionFair">Fair</label>
                                                            </div>
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['condition'];
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
                                        </div>


                                        <!-- Upload Photos Section -->
                                        <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Upload Photos</label>
                                                  <div class="col-sm-8">
                                                            <input type="file" class="form-control-file mb-2" id="uploadImages" multiple accept="image/*" name="img">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['img'];
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
                                                            <p class="upload-instructions">Buyers trust real images of your book. Snap and upload your book's actual photos; avoid using internet-downloaded cover photos!</p>
                                                  </div>

                                        </div>

                                        <!-- Quantity Available Section -->
                                        <div class="form-group row">
                                                  <label for="quantityAvailable" class="col-sm-4 col-form-label">Quantity Available (Stock)</label>
                                                  <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="quantityAvailable" name="stk">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['stk'];
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
                                        </div>

                                        <!-- Pricing Details Section -->
                                        <div class="form-group">
                                                  <h5>Pricing Details:</h5>
                                        </div>
                                        <div class="form-group row">
                                                  <label for="price" class="col-sm-4 col-form-label">Your Price (₹)</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="price" placeholder="Enter your ad price" name="price">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['price'];
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
                                        </div>
                                        <div class="form-group row">
                                                  <label for="shippingCharges" class="col-sm-4 col-form-label">Your shipping charges to buyer</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control d-inline w-75" name="ship" id="shippingCharges" placeholder="Enter shipping charges">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['ship'];
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
                                                            <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="checkbox" id="freeShipping">
                                                                      <label class="form-check-label" for="freeShipping">Free Shipping</label>
                                                            </div>
                                                            <small class="form-text pricing-help">Note: Buyers prefer ads with free shipping.</small>
                                                  </div>
                                        </div>

                                        <!-- Payment Mode Section -->
                                        <div class="form-group">
                                                  <h5>Payment Mode:</h5>
                                        </div>
                                        <div class="form-group row">
                                                  <label for="paymentMode" class="col-sm-4 col-form-label">Accepting Payment Via</label>
                                                  <div class="col-sm-8">
                                                            <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="paymentOption" id="upi" value="upi">
                                                                      <label class="form-check-label" for="upi">UPI Number</label>
                                                            </div>
                                                            <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="paymentOption" id="bankAccount" value="bank">
                                                                      <label class="form-check-label" for="bankAccount">Bank Account</label>
                                                                      <span class="text-danger">
                                                                                <?php $__errorArgs = ['paymentOption'];
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
                                                  </div>
                                        </div>

                                        <!-- User Details Section -->
                                        <div class="form-group">
                                                  <h5>Your Details:</h5>
                                        </div>
                                        <div class="form-group row">
                                                  <label for="name" class="col-sm-4 col-form-label">Name</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="name" placeholder="sample User" name="Yourname">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['Yourname'];
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
                                        </div>
                                        <div class="form-group row">
                                                  <label for="emailAddress" class="col-sm-4 col-form-label">Email Address</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="emailAddress" placeholder="qbcq2023@gmail.com" name="Email">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['Email'];
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
                                                            <div class="email-verified">
                                                                      <img src="<?php echo e(URL::to('/')); ?>/images/certified.png" alt="Verified">
                                                                      <span>Email Verified</span>

                                                            </div>
                                                  </div>
                                        </div>
                                        <div class="form-group row">
                                                  <label for="phoneNumber" class="col-sm-4 col-form-label">Phone Number (WhatsApp only)</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="phoneNumber" placeholder="+91 9876524131" name="Phone">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['Phone'];
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
                                                            <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" id="keepPrivate">
                                                                      <label class="form-check-label" for="keepPrivate">Keep my phone number private.</label>
                                                            </div>
                                                  </div>
                                        </div>
                                        <div class="form-group row">
                                                  <label for="pincode" class="col-sm-4 col-form-label">Pincode</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="pincode" placeholder="360004" name="pincode">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['pincode'];
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
                                        </div>

                                        <!-- Post Ad Button -->
                                        <div class="form-group row">
                                                  <div class="col-sm-4"></div>
                                                  <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-warning btn-block px-5 fs-5" name="sell_book">Post Ad</button>
                                                  </div>
                                        </div>
                              </form>
                    </div>
          </div>



          <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/post-ad.blade.php ENDPATH**/ ?>