

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Browse Categories | ClanKart</title>

          <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">


          <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/books.css">

</head>

<body>

          <?php $__env->startSection('main-content'); ?>

          <div class="container mt-5 product-heading fs-1">Buy Old books</div>
          <div class="container product-row">


                    <?php if(isset($all_books)): ?> 
                        <?php $__currentLoopData = $all_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product"> <img src="<?php echo e(URL::to('/')); ?><?php echo e($book->book_image); ?>" alt="">
                              <div class="desc">
                                        <label for="" class="name"><?php echo e($book->book_title); ?></label><br>
                                        <label for="" class="price">₹<?php echo e($book->price); ?></label><br>
                              </div>
                              <div class="purchase"><a href="click/<?php echo e($book->id); ?>" class="buy">Purchase Item</a></div>
                        </div>        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
          </div>

          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/books.blade.php ENDPATH**/ ?>