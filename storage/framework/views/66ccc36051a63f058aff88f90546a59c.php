

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Cart | ClanKart</title>

          <style>
                    .cart-container {
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
                              padding: 20px;
                    }

                    .cart-header {
                              font-size: 24px;
                              font-weight: bold;
                              margin-bottom: 20px;
                              /* border-bottom: 1px solid #e0e0e0; */
                              padding-bottom: 10px;
                    }

                    .cart-inner {
                              display: flex;
                              flex-direction: row;
                              gap: 20px;
                    }

                    .inner-cart-container {
                              background-color: white;
                              /* border: 1px solid #e0e0e0; */
                              border-radius: 8px;
                              padding: 20px;
                              display: flex;
                              justify-content: space-between;
                              gap: 20px;
                              width: 70%;
                    }

                    .cart-item {
                              display: flex;
                              gap: 20px;
                    }

                    .item-image {
                              width: 33.333%;
                              /* border: 1px solid #555; */
                    }

                    .item-image img {
                              width: 100%;
                              height: auto;
                              border: 1px solid #e0e0e0;
                              border-radius: 4px;
                    }

                    .item-details {
                              flex-grow: 1;
                              width: 33.333%;
                              /* border: 1px solid #555; */
                    }

                    .item-title {
                              font-size: 18px;
                              font-weight: bold;
                              margin-bottom: 10px;
                    }

                    .item-quantity,
                    .item-seller {
                              margin-bottom: 10px;
                    }

                    .item-actions a {
                              margin-right: 20px;
                              color: #007bff;
                              text-decoration: none;
                              font-size: 14px;
                    }

                    .item-actions a:hover {
                              text-decoration: underline;
                    }

                    .price-details {
                              text-align: right;
                              font-size: 14px;
                              width: 33.333%;
                              /* border: 1px solid #555; */
                    }

                    .price-label {
                              font-weight: bold;
                              margin-bottom: 10px;
                    }

                    .total-price-details {
                              background-color: #f9f9f9;
                              /* border: 1px solid #e0e0e0; */
                              border-radius: 8px;
                              padding: 20px;
                              text-align: right;
                              width: 30%;
                    }

                    .price-summary {
                              margin-bottom: 20px;
                    }

                    .summary-title {
                              font-weight: bold;
                              margin-bottom: 10px;
                              font-size: 18px;
                    }

                    .summary-price,
                    .summary-shipping,
                    .summary-total {
                              margin-bottom: 10px;
                              font-size: 16px;
                    }

                    .secure-payment p {
                              margin: 0;
                              font-size: 14px;
                              color: green;
                    }

                    .checkout-button {
                              background-color: #007bff;
                              color: white;
                              padding: 10px 20px;
                              border: none;
                              border-radius: 4px;
                              font-size: 16px;
                              cursor: pointer;
                              text-decoration: none;
                    }

                    .checkout-button:hover {
                              background-color: #0056b3;
                    }

                    /*  */

                    /* Media Query for Tablets and Smaller Devices */
                    @media (max-width: 1024px) {
                              .nothing{}
                              .cart-container {
                                        padding: 15px;
                                        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1), 0 4px 12px rgba(0, 0, 0, 0.1);
                              }

                              .cart-header {
                                        font-size: 20px;
                                        margin-bottom: 15px;
                              }

                              .cart-inner {
                                        flex-direction: column;
                              }

                              .inner-cart-container {
                                        width: 100%;
                                        flex-direction: column;
                                        padding: 15px;
                              }

                              .cart-item {
                                        flex-direction: column;
                                        margin-bottom: 15px;
                              }

                              .item-image {
                                        width: 100%;
                                        margin-bottom: 10px;
                              }

                              .item-image img {
                                        width: 100%;
                                        height: auto;
                              }

                              .item-details {
                                        width: 100%;
                              }

                              .item-title {
                                        font-size: 16px;
                              }

                              .item-quantity,
                              .item-seller {
                                        font-size: 14px;
                              }

                              .item-actions a {
                                        font-size: 12px;
                              }

                              .price-details {
                                        width: 100%;
                                        text-align: left;
                                        margin-top: 10px;
                              }

                              .total-price-details {
                                        width: 100%;
                                        padding: 15px;
                                        font-size: 14px;
                              }

                              .summary-title {
                                        font-size: 16px;
                              }

                              .summary-price,
                              .summary-shipping,
                              .summary-total {
                                        font-size: 14px;
                              }

                              .secure-payment p {
                                        font-size: 12px;
                              }

                              .checkout-button {
                                        font-size: 14px;
                                        padding: 8px 16px;
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {
                              .nothing{}
                              .cart-container {
                                        padding: 10px;
                                        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1), 0 2px 6px rgba(0, 0, 0, 0.1);
                              }

                              .cart-header {
                                        font-size: 18px;
                                        margin-bottom: 10px;
                              }

                              .cart-inner {
                                        flex-direction: column;
                              }

                              .inner-cart-container {
                                        width: 100%;
                                        padding: 10px;
                              }

                              .cart-item {
                                        flex-direction: column;
                                        margin-bottom: 10px;
                              }

                              .item-image {
                                        width: 100%;
                                        margin-bottom: 5px;
                              }

                              .item-image img {
                                        width: 100%;
                                        height: auto;
                              }

                              .item-details {
                                        width: 100%;
                              }

                              .item-title {
                                        font-size: 14px;
                              }

                              .item-quantity,
                              .item-seller {
                                        font-size: 12px;
                              }

                              .item-actions a {
                                        font-size: 12px;
                                        margin-right: 10px;
                              }

                              .price-details {
                                        width: 100%;
                                        text-align: left;
                                        margin-top: 5px;
                              }

                              .total-price-details {
                                        width: 100%;
                                        padding: 10px;
                                        font-size: 12px;
                              }

                              .summary-title {
                                        font-size: 14px;
                              }

                              .summary-price,
                              .summary-shipping,
                              .summary-total {
                                        font-size: 12px;
                              }

                              .secure-payment p {
                                        font-size: 10px;
                              }

                              .checkout-button {
                                        width: 100%;
                                        font-size: 12px;
                                        padding: 8px 12px;
                              }
                    }
          </style>
</head>

<body>

          <?php $__env->startSection('main-content'); ?>

          <div class="container rounded-1 border cart-container my-5 mx-auto">
                    <p class="p-3 fs-3">My cart (1)</p>
          </div>

          <div class="cart-container container rounded border my-5 mx-auto  cart-main">








                    <!-- <?php echo $__env->yieldContent('login-needed'); ?> -->

                    <!-- <div class="cart-inner container w-auto d-flex flex-column">
                              <img src="<?php echo e(URL::to('/')); ?>/images/emptycart.png" alt="Empty" height="500" width="500" class="m-auto">
                              <p class="p-3 fs-4 m-auto">Sorry you have an empty cart :(</p>
                              <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Start Buying Now!</button>
                    </div>
                     -->






                    <div class="cart-inner container w-auto my-3">
                              <div class="inner-cart-container border-bottom rounded-0">
                                        <div class="cart-item">
                                                  <div class="item-image">
                                                            <img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="Physiology Book">
                                                  </div>
                                                  <div class="item-details">
                                                            <div class="item-title">Physiology vol1and2 ak jain</div>
                                                            <div class="item-quantity">Qty: 1</div>
                                                            <div class="item-seller">Seller: Venkatesh pattar</div>
                                                            <div class="item-actions">
                                                                      <a href="#">MOVE TO WISHLIST</a>
                                                                      <a href="#">REMOVE</a>
                                                            </div>
                                                  </div>
                                                  <div class="price-details">
                                                            <div class="price-label">PRICE DETAILS</div>
                                                            <div class="price">Price: ₹ 1000</div>
                                                            <div class="shipping">Shipping Charges: ₹ 300</div>
                                                            <div class="total">Total: ₹ 1300</div>
                                                  </div>
                                        </div>
                              </div>
                              <div class="total-price-details">
                                        <div class="price-summary my-3">
                                                  <div class="summary-title">TOTAL PRICE DETAILS</div>
                                                  <div class="summary-price">Price (1 item): ₹ 1000</div>
                                                  <div class="summary-shipping">Shipping Charges: ₹ 300</div>
                                                  <div class="summary-total">Total Payable: ₹ 1300</div>
                                        </div>
                                        <div class="secure-payment pt-3">
                                                  <p class="mb-2">Secure Payment: Your money is safe with us until you receive the item.</p>
                                        </div>
                                        <a href="checkout" class="checkout-button">PROCEED TO CHECKOUT</a>
                              </div>
                    </div>



          </div>

          <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/cart.blade.php ENDPATH**/ ?>