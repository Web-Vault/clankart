

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
                    body {
                              font-family: Arial, sans-serif;
                              background-color: #f0f0f0;
                    }

                    .container-form {
                              width: 500px;
                              margin: 50px auto;
                              background-color: #ffffff;
                              padding: 20px;
                              border-radius: 8px;
                              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }

                  
          </style>
</head>

<body>
          <?php $__env->startSection('demo'); ?>

          <div class="container-form">
    
                    <form action="formdata" method="post">
                    <?php echo csrf_field(); ?>
                              <div class="field">
                                        <label for="">name</label><br>
                                        <input type="text" name="name" id="name">
                              </div><br> 

                              <div class="field">
                                        <label for="">username</label><br>
                                        <input type="text" name="username" id="username">
                              </div><br>
                              <div class="field">
                                        <label for="">email</label><br>
                                        <input type="text" name="email" id="email">
                              </div><br>
                              <div class="field">
                                        <label for="">password</label><br>
                                        <input type="text" name="password" id="password">
                              </div><br>

                              <div class="field">
                                        <label for="">gender</label><br>
                                        <input type="radio" name="gender" id="male">male
                                        <input type="radio" name="gender" id="female">female

                              </div><br>
                              <div class="field">
                                        <label for="">language</label><br>
                                        <input type="checkbox" name="lang" id="lang1">checkbox1
                                        <input type="checkbox" name="lang" id="lang2">checkbox2
                                        <input type="checkbox" name="lang" id="lang2">checkbox3

                              </div><br>
                              <div class="field">
                                        <label for="">language</label><br>
                                        <select name="lang2" id="languages">
                                                  <option value="java">java</option>
                                                  <option value="javascript">javascript</option>
                                                  <option value="python">python</option>
                                        </select>

                              </div><br>
                              <div class="field">
                                        <input type="submit" value="click here" name="register">
                              </div>
                    </form>
          </div>
          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('masterview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/register.blade.php ENDPATH**/ ?>