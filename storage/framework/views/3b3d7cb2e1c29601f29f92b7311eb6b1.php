

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/view_css/review_form.css">
        <title>Review form | CLanKart</title>
</head>

<body>

        <?php $__env->startSection('main-content'); ?>

        <div class="review-page container my-5 p-4">
                <div class="content-wrapper d-flex gap-4">
                        <div class="book-info flex-shrink-0">
                                <img src="<?php echo e(URL::to('/')); ?>/<?php echo e($book->book_image); ?>" alt="Book Image"
                                        class="book-image mb-3">
                                <h3 class="book-title"><?php echo e($book->book_title); ?></h3>
                                <p class="book-price">Price: ₹<?php echo e($book->price); ?></p>
                                <p class="book-description"><?php echo e($book->description); ?></p>
                        </div>

                        <div class="review-form-container">
                                <h3 class="form-title">Submit Your Review</h3>
                                <form action="<?php echo e(route('submit.review')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="rating-section mb-4">
                                                <label for="rating" class="rating-label">Rating:</label>
                                                <div class="star-rating">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                                <input type="radio" id="star<?php echo e($i); ?>" name="rating"
                                                                        value="<?php echo e($i); ?>">
                                                                <label for="star<?php echo e($i); ?>" class="star">&#9733;</label>
                                                        <?php endfor; ?>
                                                </div>
                                        </div>

                                        <input type="hidden" name="product_id" value="<?php echo e($book->id); ?>">
                                        <input type="hidden" name="order_id" value="<?php echo e($oid); ?>">

                                        <div class="review-text-section mb-4">
                                                <label for="review_text" class="review-text-label">Your Review:</label>
                                                <textarea id="review_text" name="review_text" rows="4"
                                                        placeholder="Write your review here..." required></textarea>
                                        </div>

                                        <button type="submit" class="submit-btn">Submit Review</button>
                                </form>
                        </div>
                </div>
        </div>


        <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\clancart\resources\views/book_review_form.blade.php ENDPATH**/ ?>