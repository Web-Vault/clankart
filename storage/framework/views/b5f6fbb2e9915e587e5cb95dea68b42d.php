<?php $__env->startSection('header/footer'); ?>
<form action="<?php echo e(URL::to('/')); ?>/files" method="post" enctype="multipart/form-data">
          <br>
          <?php echo csrf_field(); ?>
          Upload file <input type="file" name="files1" id="">
          <?php $__errorArgs = ['files1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <br>
          <input type="submit" value="Submit"><br><br><br>
</form>
<table>
          <tr>
                    <th>file name</th>
                    <th>Download</th>
                    <th>Delet</th>
          </tr>

          <!DOCTYPE html>
<html>
<head>
    <title>File List</title>
</head>
<body>
    <table>
          <?php dd($all_files); ?>
        <?php $__currentLoopData = $all_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($filename = $file->getFilename()); ?>

                </td>
                <td>
                    <a href="<?php echo e(route('download', $filename)); ?>">download</a>
                </td>
                <td>
                    <a href="<?php echo e(route('delete', $filename)); ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>



</table>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/tutorial_3.blade.php ENDPATH**/ ?>