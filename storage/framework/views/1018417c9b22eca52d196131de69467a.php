

<!DOCTYPE html>
<html>

<head>
          <title>Multiplication Table</title>


</head>

<body>
          <?php $__env->startSection('demo'); ?>
          <br><br>
          <h1>Multiplication Table</h1>
          <form action="/multiplication" method="POST">
                    <?php echo csrf_field(); ?>
                    <label for="number">Enter a number:</label>
                    <input type="number" id="number" name="number" required>
                    <br>
                    <button type="submit">Generate Table</button>
          </form> <br><br>

          <?php if(isset($table)): ?>
          <h2>Multiplication Table for <?php echo e($number); ?></h2>
          <ul>
                    <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($line); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <?php endif; ?>

          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('masterview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/multiplication_form.blade.php ENDPATH**/ ?>