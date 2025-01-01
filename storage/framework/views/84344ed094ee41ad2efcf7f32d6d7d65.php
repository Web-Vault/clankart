<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Login | ClanKart </title>
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

           <!-- Bootstrap CSS -->
           <link href="<?php echo e(URL::to('/')); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="<?php echo e(URL::to('/')); ?>/js/bootstrap.min.js"></script>

          <style>
                    .form-group {
                              margin-bottom: 20px;
                    }

                    .form-group label {
                              display: block;
                              margin-bottom: 5px;
                    }

                    .form-group input {
                              border: 1px solid #ccc;
                              border-radius: 4px;
                              box-sizing: border-box;
                              padding: 20px;
                              width: 100%;
                    }

                    .form-group input[readonly] {
                              background-color: #e9ecef;
                    }

                    .form-actions {
                              display: flex;
                              justify-content: flex-end;
                    }

                    .form-actions button {
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                              padding: 10px 20px;
                              margin: 0 10px;
                    }

                    .form-actions .discard {
                              background-color: #6c757d;
                              color: white;
                    }

                    .form-actions .update {
                              transition: 0.3s all ease;
                              background-color: #0083CA;
                              color: white;
                    }

                    .form-actions .update:hover {
                              background-color: #286090;
                              color: white;
                    }

                    .container {
                              max-width: 500px;
                              margin-top: 50px;
                    }

                    .nav-tabs {
                              justify-content: flex-start;
                    }

                    .nav-link {
                              cursor: pointer;
                    }

                    #forgotPasswordForm {
                              display: none;
                    }

                    .tab-content {
                              margin-top: 20px;
                    }
          </style>
</head>

<body>
          <div class="container">
                    <ul class="nav nav-tabs" id="tabMenu">
                              <li class="nav-item">
                                        <a class="nav-link active" id="loginTab">Login</a>
                              </li>
                              <li class="nav-item">
                                        <a class="nav-link" id="signupTab">Signup</a>
                              </li>
                    </ul>

                    <div class="tab-content">
                              <div id="loginForm" class="active">
                                        <h3 class="mb-4">Login</h3>
                                        <form action="indexLogin" method="post">
                                                  <?php echo csrf_field(); ?>
                                                  <div class="form-group">
                                                            <label for="loginEmail">Email</label>
                                                            <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter email">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['loginEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                      <?php echo e($message); ?>

                                                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="loginPassword">Password</label>
                                                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter password">
                                                            <span class="text-danger">
                                                                      <?php $__errorArgs = ['loginPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                      <?php echo e($message); ?>

                                                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                  </div>
                                                  <div class="form-actions">
                                                            <button type="button" class="btn btn-secondary" id="forgotPasswordLink">Forgot Password?</button>
                                                            <button type="submit" class="update">Login</button>
                                                  </div>
                                        </form>
                              </div>

                              <!-- Signup Form -->
                              <div id="signupForm">
                                        <h3 class="mb-4">Signup</h3>
                                        <form action="indexSignup" method="post">
                                                  <?php echo csrf_field(); ?>
                                                  <div class="form-group">
                                                            <label for="signupName">Full Name</label>
                                                            <input type="text" class="form-control" id="signupName" name="signupName" placeholder="Enter full name">
                                                             <span class="text-danger">
                                                                      <?php $__errorArgs = ['signupName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                      <?php echo e($message); ?>

                                                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="signupEmail">Email</label>
                                                            <input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="Enter email">
                                                             <span class="text-danger">
                                                                      <?php $__errorArgs = ['signupEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                      <?php echo e($message); ?>

                                                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="signupPassword">Password</label>
                                                            <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Enter password">
                                                             <span class="text-danger">
                                                                      <?php $__errorArgs = ['signupPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                      <?php echo e($message); ?>

                                                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="signupConfirmPassword">Confirm Password</label>
                                                            <input type="password" class="form-control" id="signupConfirmPassword" name="signupConfirmPassword" placeholder="Confirm password">
                                                             <span class="text-danger">
                                                                      <?php $__errorArgs = ['signupConfirmPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                      <?php echo e($message); ?>

                                                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                  </div>
                                                  <div class="form-actions">
                                                            <button type="submit" class="update">Signup</button>
                                                  </div>
                                        </form>
                              </div>

                              <!-- Forgot Password Form -->
                              <div id="forgotPasswordForm">
                                        <h3 class="mb-4">Forgot Password</h3>
                                        <form action="forgotPassword" method="post">
                                                  <?php echo csrf_field(); ?>
                                                  <div class="form-group">
                                                            <label for="forgotEmail">Email</label>
                                                            <input type="email" class="form-control" id="forgotEmail" name="forgotEmail" placeholder="Enter your email">
                                                  </div>
                                                  <div class="form-actions">
                                                            <button type="submit" class="update">Submit</button>
                                                  </div>
                                        </form>
                              </div>
                    </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script>
          document.addEventListener('DOMContentLoaded', function() {
                    const loginTab = document.getElementById('loginTab');
                    const signupTab = document.getElementById('signupTab');
                    const loginForm = document.getElementById('loginForm');
                    const signupForm = document.getElementById('signupForm');
                    const forgotPasswordForm = document.getElementById('forgotPasswordForm');
                    const forgotPasswordLink = document.getElementById('forgotPasswordLink');

                    loginTab.addEventListener('click', function() {
                              showForm('login');
                    });

                    signupTab.addEventListener('click', function() {
                              showForm('signup');
                    });

                    forgotPasswordLink.addEventListener('click', function() {
                              showForm('forgotPassword');
                    });

                    forgotPasswordForm.addEventListener('submit', function(event) {
                              event.preventDefault();
                              showForm('login');
                    });

                    function showForm(formType) {
                              loginForm.style.display = formType === 'login' ? 'block' : 'none';
                              signupForm.style.display = formType === 'signup' ? 'block' : 'none';
                              forgotPasswordForm.style.display = formType === 'forgotPassword' ? 'block' : 'none';

                              loginTab.classList.toggle('active', formType === 'login');
                              signupTab.classList.toggle('active', formType === 'signup');
                    }

                    showForm('login');
          });
</script>

</html><?php /**PATH C:\laragon\www\extra-tasks\resources\views/login.blade.php ENDPATH**/ ?>