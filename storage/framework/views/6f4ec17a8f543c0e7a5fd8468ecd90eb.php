
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>master view</title>

    <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/images/favicon-ck.jpg" type="image/x-icon">

    <title><?php echo e($search); ?></title>

    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/search_result.css">
</head>

<body>

    <?php $__env->startSection('main-content'); ?>
    <div class="container" style="margin-top: 0; margin-bottom: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-4">
                    Search Results for: <?php echo e($search); ?>

                </h2>
            </div>
        </div>

        <div class="container product-row">
            <?php if($results->isEmpty() || $results == ""): ?>
                <p>No books found matching your search query.</p>
            <?php else: ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/<?php echo e($book->book_image); ?>" alt="">
                        <div class="desc">
                            <label for="" class="name"><?php echo e($book->book_title); ?></label><br>
                            <label for="" class="description">Desc : <?php echo e($book->description); ?></label>
                            <label for="" class="seller">Seller : <?php echo e($book->seller_name); ?></label><br>
                            <label for="" class="price">₹<?php echo e($book->price); ?></label><br>
                        </div>
                        <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>


    </div>
    <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/Search_result.blade.php ENDPATH**/ ?>