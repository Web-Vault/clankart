

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>form data</title>
</head>

<body>
          <?php $__env->startSection('demo'); ?>

          <div class="container">
                    <h2>Form Data</h2>
                    <table class=" table table-bordered table-striped">
                              <thead>
                                        <tr>
                                                  <th>Name</th>
                                                  <th>Username</th>
                                                  <th>Emaiol</th>
                                                  <th>Password</th>
                                                  <th>Gender</th>
                                                  <th>Language</th>
                                                  <th>Lamguage2</th>
                                        </tr>
                              </thead>
                              <tbody>
                                        <tr>
                                                  <td><?php echo e($values['name']); ?></td>
                                                  <td><?php echo e($values['username']); ?></td>
                                                  <td><?php echo e($values['email']); ?></td>
                                                  <td><?php echo e($values['password']); ?></td>
                                                  <td><?php echo e($values['gender']); ?></td>
                                                  <td><?php echo e($values['lang']); ?></td>
                                                  <td><?php echo e($values['lang2']); ?></td>
                                        </tr>
                                        
                              </tbody>
                    </table>
                 
          </div>
          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('masterview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/form_data.blade.php ENDPATH**/ ?>