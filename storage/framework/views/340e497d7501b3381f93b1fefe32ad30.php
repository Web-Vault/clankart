

<!DOCTYPE html>
<html>

<head>
          <title>Calculate Modulus</title>

</head>

<body>

          <?php $__env->startSection('demo'); ?>
          <h1>Calculate Modulus</h1>
          <form action="/modulus" method="post" class="container-form">

                    <?php echo csrf_field(); ?>

                    <label for="dividend">Dividend:</label>
                    <input type="number" id="dividend" name="dividend" required>
                    <br>
                    <label for="divisor">Divisor:</label>
                    <input type="number" id="divisor" name="divisor" required>
                    <br><br>
                    <button type="submit">Calculate</button>
          </form>

          <?php if(!is_null($result)): ?>
          <h2>Result</h2>
          <p>The modulus is: <?php echo e($result); ?></p>
          <?php endif; ?>

          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('masterview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/modulus_form.blade.php ENDPATH**/ ?>