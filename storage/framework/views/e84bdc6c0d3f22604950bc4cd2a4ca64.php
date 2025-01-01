

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Browse Categories | ClanKart</title>

          <style>
                    .category {
                              transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
                              padding: 10px;
                              border-radius: 10px;
                    }


                    .category-img {
                              overflow: hidden;
                              border-radius: 50%;
                    }

                    .category-img img {
                              transition: transform 0.3s, filter 0.3s;
                              width: 100px;
                              height: 100px;
                              object-fit: cover;
                    }

                    .category-label {
                              display: block;
                              margin-top: 10px;
                              transition: color 0.3s, transform 0.3s;
                              font-weight: bold;
                    }

                    .category:hover .category-label {
                              transform: scaleX(1.2);
                    }

                    /*  */

                    .product-row {
                              padding: 1%;
                              display: flex;
                              justify-content: flex-start;
                              flex-wrap: wrap;
                    }

                    .product {
                              width: 24%;
                              margin: 1% 5px;
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                              overflow: hidden;
                    }

                    .product img {
                              width: 100%;
                              height: 300px;
                              object-fit: cover;
                              border-bottom: 1px solid black;
                    }

                    .desc {
                              padding: 1%;
                    }

                    .name {
                              font-variant: small-caps;
                              font-size: xx-large;
                              margin: 10px 0;
                    }

                    .price {
                              font-size: x-large;
                              color: #e60000;
                              margin: 5px 0;
                    }

                    .info {
                              font-size: large;
                              text-align: right;
                              margin: 5px 0;
                    }

                    .purchase a {
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                              padding: 10px 20px;
                              margin: 10px;
                              transition: all 0.3s ease;
                              background-color: #0083CA;
                              color: white;
                              text-decoration: none;
                              display: inline-block;
                    }

                    .purchase a:hover {
                              background-color: #286090;
                    }

                    /*  */

                    @media (max-width: 1024px) {

                              .product-row {
                                        padding: 2%;
                                        justify-content: center;
                              }

                              .product {
                                        width: 30%;
                                        margin: 1% 2%;
                              }

                              .product img {
                                        height: 250px;
                              }

                              .name {
                                        font-size: large;
                              }

                              .price {
                                        font-size: large;
                              }

                              .info {
                                        font-size: medium;
                              }

                              .purchase a {
                                        padding: 8px 16px;
                                        font-size: 14px;
                              }
                    }

                    @media (max-width: 768px) {

                              .product-row {
                                        padding: 2%;
                                        flex-direction: column;
                                        align-items: center;
                              }

                              .product {
                                        width: 90%;
                                        margin: 10px 0;
                              }

                              .product img {
                                        height: 200px;
                              }

                              .name {
                                        font-size: medium;
                              }

                              .price {
                                        font-size: medium;
                              }

                              .info {
                                        font-size: small;
                              }

                              .purchase a {
                                        padding: 8px 12px;
                                        font-size: 12px;
                              }
                    }
          </style>

</head>

<body>

          <?php $__env->startSection('main-content'); ?>



          <div class="container d-flex justify-content-center my-3 p-3 border rounded-1">
                    <div class="row w-100">
                              <div class="col-md-3 text-center">
                                        <div class="category p-2">
                                                  <a href="book-category">
                                                            <div class="category-img">
                                                                      <img src="<?php echo e(URL::to('/')); ?>/images/college-books.jpg" alt="college books" class="img-fluid rounded-circle">
                                                            </div>
                                                            <label class="category-label">College Books</label>
                                                  </a>
                                        </div>
                              </div>
                              <div class="col-md-3 text-center">
                                        <div class="category p-2">
                                                  <a href="book-category">
                                                            <div class="category-img">
                                                                      <img src="<?php echo e(URL::to('/')); ?>/images/exam-preparation-books.jpg" alt="exam preparation books" class="img-fluid rounded-circle">
                                                            </div>
                                                            <label class="category-label">Exam Preparation Books</label>
                                                  </a>
                                        </div>
                              </div>
                              <div class="col-md-3 text-center">
                                        <div class="category p-2">
                                                  <a href="book-category">
                                                            <div class="category-img">
                                                                      <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="novels" class="img-fluid rounded-circle">
                                                            </div>
                                                            <label class="category-label">Novels</label>
                                                  </a>
                                        </div>
                              </div>
                              <div class="col-md-3 text-center">
                                        <div class="category p-2">
                                                  <a href="book-category">
                                                            <div class="category-img">
                                                                      <img src="<?php echo e(URL::to('/')); ?>/images/school-books.jpg" alt="school books" class="img-fluid rounded-circle">
                                                            </div>
                                                            <label class="category-label">School Books</label>
                                                  </a>
                                        </div>
                              </div>
                    </div>
          </div>


          <div class="container mt-5 product-heading fs-1">School books</div>
          <div class="container product-row">
                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D Sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>
                    </div>
                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>

                    </div>
                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D Sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>

                    </div>
                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>

                    </div>

                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>
          
                    </div>

                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>

                    </div>

                    <div class="product"> <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                              <div class="desc">
                                        <label for="" class="name">R D sharma</label><br>
                                        <label for="" class="price">100$</label><br>
                              </div>
                              <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>

                    </div>
          </div>

          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/books.blade.php ENDPATH**/ ?>