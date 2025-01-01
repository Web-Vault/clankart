Dear <?php echo e($data1['name']); ?>,

Your Clankart account is successfully created using <?php echo e($data1['email']); ?>.
You can login to your Clankart account by 
<a href="http://127.0.0.1:8000/verifyAccount/<?php echo e($data1['email']); ?>/<?php echo e($data1['token']); ?>">Clicking here</a>.<?php /**PATH C:\laragon\www\clancart\resources\views/mail_format.blade.php ENDPATH**/ ?>