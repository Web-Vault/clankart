

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Sell your old books on ClanKart</title>

          <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">
          <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/post_ad.css">
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
                                        
                                        <!-- Book Category Section -->
                                        <div class="form-group row">
                                                  <label for="bookCategory" class="col-sm-4 col-form-label">Book Category</label>
                                                  <div class="col-sm-8">
                                                            <select class="form-control" id="bookCategory" name="category">
                                                                      <option value="" disabled selected>Please select book type</option>
                                                                      <option value="1">School / College Books</option>
                                                                      <option value="2">Fiction</option>
                                                                      <option value="3">Novel</option>
                                                                      <option value="4">Others</option>
                                                                      <!-- Add options here -->
                                                            </select>
                                                  </div>
                                        </div>
                                        
                                        <!-- Book Category Section -->
                                        <div class="form-group row">
                                                  <label for="bookType" class="col-sm-4 col-form-label">Book Type</label>
                                                  <div class="col-sm-8">
                                                            <select class="form-control" id="bookCategory" name="type">
                                                                      <option value="" disabled selected>Please select book type</option>
                                                                      <option value="hardcover">Hard Cover</option>
                                                                      <option value="paperback">Paper</option>
                                                                      <option value="ebook">E Book</option>
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

                                        <!-- Year of book -->
                                        <div class="form-group row">
                                                  <label for="quantityAvailable" class="col-sm-4 col-form-label">Year Of This Book</label>
                                                  <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="quantityAvailable" name="year">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['year'];
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
                                                            <input type="number" class="form-control" id="quantityAvailable" name="stock">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['stock'];
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
                                        
                                        <!-- Description of books -->
                                        <div class="form-group row">
                                                  <label for="bookDescription" class="col-sm-4 col-form-label">Description Of This Book</label>
                                                  <div class="col-sm-8">
                                                            <textarea class="form-control" id="bookDescription" name="description"></textarea>
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['description'];
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

                                        <!-- Author / Writer of books -->
                                        <div class="form-group row">
                                                  <label for="quantityAvailable" class="col-sm-4 col-form-label">Writer Of This Book</label>
                                                  <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="quantityAvailable" name="authorName">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['authorName'];
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

                                        <!-- Post Ad Button -->
                                        <div class="form-group row">
                                                  <div class="col-sm-4"></div>
                                                  <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-warning btn-block px-5 fs-6" >Post Ad</button>
                                                  </div>
                                        </div>
                              </form>
                    </div>
          </div>



          <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/post-ad.blade.php ENDPATH**/ ?>