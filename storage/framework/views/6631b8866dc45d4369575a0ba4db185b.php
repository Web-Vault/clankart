

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>My Profile | ClanKart</title>

          <style>
                    .cart-container {
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
                    }

                    .cart-main {
                              display: flex;
                              justify-content: center;
                              flex-direction: column;
                    }

                    .cart-inner>.search-btn {
                              font-size: 20px;
                              /* width: 200px; */
                              background-color: #0083CA;
                    }

                    .cart-main>button:hover {
                              background-color: #286090;
                    }

                    .nav-item {
                              cursor: pointer;
                              transition: 0.3s all ease;
                    }

                    .nav-item:hover {
                              background-color: #eee;
                              color: #0083CA;
                    }

                    .links {
                              text-decoration: none;
                              color: #000;
                              width: 100%;
                    }

                    /*  */


                    .profile-form-container {
                              background-color: #ffffff;
                              border-radius: 8px;
                              /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
                              padding: 20px;
                              /* width: 400px; */
                    }

                    h2 {
                              margin-top: 0;
                              margin-bottom: 20px;
                              text-align: center;
                    }

                    .tab {
                              display: flex;
                              justify-content: flex-start;
                              margin-bottom: 20px;
                    }

                    .tab button {
                              background-color: transparent;
                              border: none;
                              cursor: pointer;
                              font-size: 16px;
                              padding: 10px;
                              transition: color 0.3s;
                    }

                    .tab button.active {
                              border-bottom: 2px solid #007bff;
                              color: #007bff;
                    }

                    .tab button:hover {
                              color: #007bff;
                    }

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
                              padding: 10px;
                              width: 100%;
                    }

                    .form-group input[readonly] {
                              background-color: #e9ecef;
                    }

                    .email-verified {
                              align-items: center;
                              display: flex;
                              margin-top: 5px;
                    }

                    .email-verified img {
                              height: 16px;
                              margin-right: 5px;
                              width: 16px;
                    }

                    .phone-input {
                              align-items: center;
                              display: flex;
                    }

                    .phone-input .country-code {
                              background-color: #e9ecef;
                              border: 1px solid #ccc;
                              border-radius: 4px 0 0 4px;
                              padding: 10px;
                    }

                    .phone-input input {
                              border-left: none;
                              border-radius: 0 4px 4px 0;
                              width: calc(100% - 40px);
                    }

                    .name-group {
                              display: flex;
                              justify-content: space-between;
                    }

                    .name-field {
                              display: flex;
                              flex-direction: column;
                              width: 48%;
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

                    /*  */

                    @media (max-width: 1024px) {
                              .noting {
                                        border: 1px solid black;
                              }

                              .cart-container {
                                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 4px 10px rgba(0, 0, 0, 0.1);
                              }

                              .cart-main {
                                        padding: 10px;
                              }

                              .cart-inner>.search-btn {
                                        font-size: 18px;
                                        width: 150px;
                              }

                              .nav-item {
                                        font-size: 14px;
                              }

                              .nav-name {
                                        display: none;
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {

                              .noting {
                                        border: 1px solid black;
                              }

                              .cart-container {
                                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 2px 5px rgba(0, 0, 0, 0.1);
                              }

                              .cart-main {
                                        padding: 5px;
                              }

                              .cart-inner>.search-btn {
                                        font-size: 16px;
                                        width: 120px;
                              }

                              .nav {
                                        width: 100%;
                              }

                              .nav-item {
                                        font-size: 12px;
                              }

                              .sidebar {
                                        display: none;
                              }

                              .img {
                                        width: 100%;
                              }
                    }

                    /*  */

                    /* Media Query for Tablets and Smaller Devices */
                    @media (max-width: 1024px) {
                              .profile-form-container {
                                        padding: 15px;
                                        width: 100%;
                                        /* Adjust width as needed */
                              }

                              h2 {
                                        font-size: 24px;
                                        margin-bottom: 15px;
                              }

                              .tab {
                                        flex-direction: row;
                                        align-items: flex-start;
                              }

                              .tab button {
                                        font-size: 14px;
                                        padding: 8px;
                              }

                              .form-group {
                                        margin-bottom: 15px;
                              }

                              .form-group label {
                                        font-size: 14px;
                              }

                              .form-group input {
                                        font-size: 14px;
                                        padding: 8px;
                              }

                              .email-verified img {
                                        height: 14px;
                                        width: 14px;
                              }

                              .phone-input {
                                        flex-direction: column;
                              }

                              .phone-input .country-code {
                                        width: 100%;
                                        border-radius: 4px;
                                        margin-bottom: 5px;
                              }

                              .phone-input input {
                                        width: 100%;
                                        border-radius: 4px;
                              }

                              .name-group {
                                        flex-direction: column;
                              }

                              .name-field {
                                        width: 100%;
                                        margin-bottom: 10px;
                              }

                              .form-actions {
                                        flex-direction: column;
                                        align-items: stretch;
                              }

                              .form-actions button {
                                        width: 100%;
                                        margin-bottom: 10px;
                              }

                              .form-actions .discard {
                                        background-color: #6c757d;
                              }

                              .form-actions .update {
                                        background-color: #0083CA;
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {
                              .profile-form-container {
                                        padding: 10px;
                              }

                              h2 {
                                        font-size: 20px;
                                        margin-bottom: 10px;
                              }

                              .tab {
                                        flex-direction: row;
                                        align-items: flex-start;
                              }

                              .tab button {
                                        font-size: 12px;
                                        padding: 6px;
                              }

                              .form-group {
                                        margin-bottom: 10px;
                              }

                              .form-group label {
                                        font-size: 12px;
                              }

                              .form-group input {
                                        font-size: 12px;
                                        padding: 6px;
                              }

                              .email-verified img {
                                        height: 12px;
                                        width: 12px;
                              }

                              .phone-input {
                                        display: flex;
                                        align-items: center;
                                        gap: 10px;
                                        /* Add spacing between country code and input field */
                              }

                              .phone-input .country-code {
                                        flex: 1;
                                        /* Allow the country code to take up equal space */
                                        max-width: 120px;
                                        /* Limit maximum width for better alignment */
                                        background-color: #e9ecef;
                                        border: 1px solid #ccc;
                                        border-radius: 4px 0 0 4px;
                                        padding: 10px;
                              }

                              .phone-input input {
                                        flex: 3;
                                        /* Allow the input field to take up more space */
                                        border: 1px solid #ccc;
                                        border-radius: 0 4px 4px 0;
                                        padding: 10px;
                                        box-sizing: border-box;
                                        /* Ensure padding doesn't affect width */
                                        max-width: 100%;
                                        /* Prevent overflow */
                              }


                              .name-group {
                                        flex-direction: column;
                              }

                              .name-field {
                                        width: 100%;
                                        margin-bottom: 10px;
                              }

                              .form-actions {
                                        flex-direction: column;
                                        align-items: stretch;
                              }

                              .form-actions button {
                                        width: 100%;
                                        margin-bottom: 10px;
                              }

                              .form-actions .discard {
                                        background-color: #6c757d;
                              }

                              .form-actions .update {
                                        background-color: #0083CA;
                              }
                    }
          </style>

</head>

<body>

          <?php $__env->startSection('main-content'); ?>

          <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                    <div class="row">
                              <div class="col-3">
                                        <div class="nav my-3">

                                                  <a href="<?php echo e(URL::to('/')); ?>/profile" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <svg height="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                                                          <title></title>
                                                                                          <g id="about">
                                                                                                    <path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"></path>
                                                                                                    <path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"></path>
                                                                                          </g>
                                                                                </svg>
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Profile </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/ads" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/ads.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Ads </span>
                                                                      </div>

                                                            </div>
                                                  </a>

                                                  <a href="<?php echo e(URL::to('/')); ?>/orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/selling-orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/selling orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Selling Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="<?php echo e(URL::to('/')); ?>/chats" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/chats.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Chats </span>
                                                                      </div>

                                                            </div>
                                                  </a>



                                                  <a href="<?php echo e(URL::to('/')); ?>/wishlist" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="<?php echo e(URL::to('/')); ?>/images/wishlist.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Wishlist </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                        </div>
                              </div>

                              <div class="col-9">
                                        <p class="p-3 fs-3 border-bottom">My Profile</p>


                                        <!-- <?php echo $__env->yieldContent('login-needed'); ?> -->



                                        <div class="profile-form-container">
                                                  <div class="tab">
                                                            <button class="tablinks active" id="changeProfileTab">Change Profile</button>
                                                            <button class="tablinks" id="changePasswordTab">Change Password</button>
                                                  </div>

                                                  <form action="/update_profile" method="post" enctype="multipart/form-data" class="profile-form" id="profileForm">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="form-group name-group">
                                                                      <div class="name-field">
                                                                                <label for="first-name">First Name</label>
                                                                                <input type="text" id="first-name" name="firstname" placeholder="First Name" value="Jhon">
                                                                                <span class="text-danger">
                                                                                          <?php $__errorArgs = ['firstname'];
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
                                                                      <div class="name-field">
                                                                                <label for="last-name">Last Name</label>
                                                                                <input type="text" id="last-name" name="lastname" placeholder="Last Name" value="Doe">
                                                                                <span class="text-danger">
                                                                                          <?php $__errorArgs = ['lastname'];
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
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="email">Email Address</label>
                                                                      <input type="email" id="email" name="email" value="mail@gmail.com">
                                                                      <span class="text-danger">
                                                                                <?php $__errorArgs = ['email'];
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
                                                                      <div class="d-flex">
                                                                                <label for="phone-number">Phone Number (WhatsApp only)</label>
                                                                                <div class="phone-input mx-5 w-100">
                                                                                          <span class="country-code">+91</span>
                                                                                          <input type="text" id="phone-number" name="phonenumber" placeholder="Phone Number" value="1234567890">
                                                                                          <span class="text-danger">
                                                                                                    <?php $__errorArgs = ['phonenumber'];
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
                                                                      </div>
                                                                      
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="pincode">Pincode</label>
                                                                      <input type="text" id="pincode" name="pincode" placeholder="Your Pincode" value="123456">
                                                                      <span class="text-danger">
                                                                                <?php $__errorArgs = ['pincode'];
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
                                                            <p class="border-bottom pb-3 mb-3 fs-6 text-primary">We won't share your email/phone number with anyone. They will be kept private. Nor do we use it to spam you in any way.</p>
                                                            <div class="form-actions">
                                                                      <button type="button" class="discard">Discard Changes</button>
                                                                      <button type="submit" class="update" name="update_profile">Update Profile</button>
                                                            </div>
                                                  </form>

                                                  <!-- Password Form -->
                                                  <form action="change-password" method="post" class="password-form" id="passwordForm" style="display: none;">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="form-group">
                                                                      <label for="new-password">New Password</label>
                                                                      <input type="password" id="new-password" name="password">
                                                                      <span class="text-danger">
                                                                                <?php $__errorArgs = ['password'];
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
                                                                      <button type="submit" class="update" name="change_password">Change Password</button>
                                                            </div>
                                                  </form>

                                        </div>










                              </div>

                    </div>





          </div>

          <?php $__env->stopSection(); ?>

</body>
<script>
          document.addEventListener('DOMContentLoaded', function() {
                    // Get elements
                    const changeProfileTab = document.getElementById('changeProfileTab');
                    const changePasswordTab = document.getElementById('changePasswordTab');
                    const profileForm = document.getElementById('profileForm');
                    const passwordForm = document.getElementById('passwordForm');

                    // Event listener for Change Profile tab
                    changeProfileTab.addEventListener('click', function() {
                              // Switch active class
                              changeProfileTab.classList.add('active');
                              changePasswordTab.classList.remove('active');

                              // Show/Hide forms
                              profileForm.style.display = 'block';
                              passwordForm.style.display = 'none';
                    });

                    // Event listener for Change Password tab
                    changePasswordTab.addEventListener('click', function() {
                              // Switch active class
                              changePasswordTab.classList.add('active');
                              changeProfileTab.classList.remove('active');

                              // Show/Hide forms
                              passwordForm.style.display = 'block';
                              profileForm.style.display = 'none';
                    });
          });
</script>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/profile.blade.php ENDPATH**/ ?>