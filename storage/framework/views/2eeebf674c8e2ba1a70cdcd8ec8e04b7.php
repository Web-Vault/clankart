

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>scroller form</title>
</head>

<body>

        <?php $__env->startSection('main-content'); ?>

        <form action="add_image" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="file" name="img"  accept="png" required>
                <button type="submit">Upload</button>
        </form>


        <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/scroller_form.blade.php ENDPATH**/ ?>