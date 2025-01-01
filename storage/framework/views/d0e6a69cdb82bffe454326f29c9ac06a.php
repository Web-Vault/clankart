

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title></title>

          <style>
                    .sidebar {
                              width: 300px;
                              padding: 20px;
                              border: 1px solid #ddd;
                    }

                    .filter-section {
                              margin-bottom: 20px;
                    }

                    .filter-section h3 {
                              font-size: 1.2em;
                              color: #007bff;
                              margin-bottom: 10px;
                              position: relative;
                    }

                    .filter-section h3::after {
                              /* content: '⯆'; */
                              font-size: 0.8em;
                              position: absolute;
                              right: 0;
                              top: 50%;
                              transform: translateY(-50%);
                              color: #007bff;
                    }

                    .filter-section .condition-status {
                              font-size: 0.9em;
                              color: #888;
                    }

                    .filter-section ul {
                              list-style-type: none;
                              padding: 0;
                              max-height: none;
                    }

                    .filter-section ul li {
                              margin-bottom: 10px;
                    }

                    .filter-section input[type="checkbox"] {
                              margin-right: 10px;
                    }

                    .filter-section label {
                              font-size: 1em;
                              color: #333;
                    }

                    .filter-section ul {
                              max-height: 200px;
                              overflow-y: auto;
                    }

                    .filter-section ul::-webkit-scrollbar {
                              width: 8px;
                    }

                    .filter-section ul::-webkit-scrollbar-thumb {
                              background-color: #007bff;
                              border-radius: 4px;
                    }

                    .filter-section ul::-webkit-scrollbar-track {
                              background-color: #f1f1f1;
                    }

                    /*  */

                    .main-header {
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                              padding: 20px;
                              border-bottom: 1px solid #ccc;
                              background-color: #fff;
                    }

                    .main-header h1 {
                              font-size: 1.5em;
                              margin: 0;
                    }

                    .filter-dropdown {
                              display: flex;
                              align-items: center;
                    }

                    .filter-dropdown label {
                              margin-right: 10px;
                              font-size: 1em;
                    }

                    .filter-dropdown select {
                              padding: 5px;
                              font-size: 1em;
                    }

                    .product-row {
                              display: flex;
                              flex-wrap: wrap;
                              padding: 20px;
                              justify-content: flex-start;
                    }

                    .product {
                              width: 24%;
                              margin-bottom: 20px;
                              border: 1px solid #ddd;
                              border-radius: 8px;
                              overflow: hidden;
                              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                              background-color: #fff;
                              transition: transform 0.3s, box-shadow 0.3s;
                    }

                    .product:hover {
                              transform: translateY(-5px);
                              box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                    }

                    .product img {
                              width: 100%;
                              height: 200px;
                              object-fit: cover;
                              border-bottom: 1px solid #ddd;
                    }

                    .desc {
                              padding: 15px;
                    }

                    .name {
                              font-variant: small-caps;
                              font-size: 1.2em;
                              margin: 10px 0;
                              white-space: nowrap;
                              overflow: hidden;
                              text-overflow: ellipsis;
                              display: block;
                    }


                    .price {
                              font-size: 1.1em;
                              color: #e60000;
                              margin: 5px 0;
                    }

                    .original-price {
                              text-decoration: line-through;
                              color: #888;
                              margin-left: 10px;
                    }

                    .discount {
                              font-size: 0.9em;
                              color: #28a745;
                              margin-left: 10px;
                    }

                    .info {
                              font-size: 0.9em;
                              color: #666;
                              margin-bottom: 15px;
                    }

                    .purchase a {
                              display: inline-block;
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                              padding: 10px 20px;
                              margin: 10px 0;
                              transition: all 0.3s ease;
                              background-color: #007bff;
                              color: white;
                              text-decoration: none;
                              font-size: 1em;
                    }

                    .purchase a:hover {
                              background-color: #0056b3;
                    }

                    /*  */

                    /* Media Query for Tablets and Smaller Devices */
                    @media (max-width: 1024px) {

                              .nothing {}

                              .main-header {
                                        padding: 15px;
                                        /* Adjust padding for tablets */
                              }

                              .main-header h1 {
                                        font-size: 1.4em;
                                        /* Adjust font size for tablets */
                              }

                              .product-row {
                                        padding: 15px;
                                        /* Adjust padding for tablets */
                              }

                              .product {
                                        width: 30%;
                                        /* Fit 3 products per row */
                                        margin-bottom: 15px;
                                        /* Adjust spacing */
                              }

                              .product img {
                                        height: 180px;
                                        /* Adjust image height for tablets */
                              }

                              .desc {
                                        padding: 10px;
                                        /* Adjust padding for tablets */
                              }

                              .name {
                                        font-size: 1.1em;
                                        /* Adjust font size for tablets */
                              }

                              .price {
                                        font-size: 1em;
                                        /* Adjust font size for tablets */
                              }

                              .purchase a {
                                        padding: 8px 16px;
                                        /* Adjust button padding */
                                        font-size: 0.9em;
                                        /* Adjust font size */
                              }
                    }

                    /* Media Query for Mobile Devices */
                    @media (max-width: 768px) {
                              .nothing {}

                              .section.border {
                                        width: 100%;
                              }

                              .main-header {
                                        flex-direction: column;
                                        /* Stack items vertically on mobile */
                                        align-items: flex-start;
                                        /* Align items to start */
                                        padding: 10px;
                                        /* Adjust padding for mobile devices */
                              }

                              .main-header h1 {
                                        font-size: 1.2em;
                                        /* Adjust font size for mobile devices */
                                        margin-bottom: 10px;
                                        /* Margin below heading */
                              }

                              .product-row {
                                        padding: 10px;
                                        /* Adjust padding for mobile devices */
                              }

                              .product {
                                        width: 100%;
                                        /* Full width for each product */
                                        margin-bottom: 10px;
                                        /* Adjust spacing */
                                        box-shadow: none;
                                        /* Remove box-shadow for mobile devices */
                                        border: none;
                                        /* Remove border for mobile devices */
                              }

                              .product img {
                                        height: 150px;
                                        /* Adjust image height for mobile devices */
                              }

                              .desc {
                                        padding: 8px;
                                        /* Adjust padding for mobile devices */
                              }

                              .name {
                                        font-size: 1em;
                                        /* Smaller font size for mobile devices */
                              }

                              .price {
                                        font-size: 0.9em;
                                        /* Smaller font size for mobile devices */
                              }

                              .purchase a {
                                        padding: 6px 12px;
                                        /* Adjust button padding for mobile devices */
                                        font-size: 0.9em;
                                        /* Adjust font size for mobile devices */
                              }
                    }

                    /*  */

                    /* Media Query for Smaller Devices */
                    @media (max-width: 768px) {

                              .nothing{}
                              section.border{
                                        width: 100%;
                                        margin-left: 0;
                              }

                              /* Sidebar hidden by default */
                              .sidebar {
                                        position: fixed;
                                        top: 0;
                                        right: -300px;
                                        /* Adjust based on sidebar width */
                                        width: 300px;
                                        height: 100%;
                                        padding: 20px;
                                        background-color: #f9f9f9;
                                        transition: right 0.3s ease;
                                        z-index: 1000;
                                        /* Ensure it's above the main content */
                              }

                              /* Show sidebar */
                              .sidebar.active {
                                        right: 0;
                              }

                              /* Button to open sidebar */
                              .sidebar-toggle-btn {
                                        display: block;
                                        /* position: fixed; */
                                     
                                        background-color: #007bff;
                                        color: white;
                                        border: none;
                                        padding: 10px;
                                        border-radius: 5px;
                                        cursor: pointer;
                                        z-index: 1001;
                                        /* Ensure it's above the sidebar */
                              }
                    }
          </style>

</head>

<body>

          <?php $__env->startSection('main-content'); ?>

          <main class=" row my-5 container mx-auto p-1">
                    <aside class=" py-1 col-3">
                              <div class="sidebar border rounded-1">
                                        <div class="filter-section">
                                                  <h3>Book Condition <span class="condition-status">(Used)</span></h3>
                                                  <ul>
                                                            <li><input type="checkbox" id="condition1"><label for="condition1">Excellent</label></li>
                                                            <li><input type="checkbox" id="condition2"><label for="condition2">Good</label></li>
                                                            <li><input type="checkbox" id="condition3"><label for="condition3">Fair</label></li>
                                                  </ul>
                                        </div>
                                        <div class="filter-section">
                                                  <h3>Book Type</h3>
                                                  <ul>
                                                            <li><input type="checkbox" id="type1"><label for="type1">College Books (Higher Education Textbooks)</label></li>
                                                            <li><input type="checkbox" id="type2"><label for="type2">Exam/Test Preparation Books</label></li>
                                                            <li><input type="checkbox" id="type3"><label for="type3">Reading Books (Novels, Children, Business, Literature, History, etc.)</label></li>
                                                            <li><input type="checkbox" id="type4"><label for="type4">School Books (up to 12th)</label></li>
                                                  </ul>
                                        </div>
                                        <div class="filter-section">
                                                  <h3>Book Category</h3>
                                                  <ul>
                                                            <li><input type="checkbox" id="category1"><label for="category1">Bachelor of Agriculture (B.Sc. Agriculture)</label></li>
                                                            <li><input type="checkbox" id="category2"><label for="category2">Bachelor of Architecture (B.Arch)</label></li>
                                                            <li><input type="checkbox" id="category3"><label for="category3">Bachelor of Arts (BA)</label></li>
                                                            <li><input type="checkbox" id="category4"><label for="category4">Bachelor of Ayurvedic Medicine & Surgery (BAMS)</label></li>
                                                  </ul>
                                        </div>
                              </div>

                    </aside>
                    <section class="border py-1 col-9">
                              <div class="main-header">
                                        <button class="btn btn-outline-secondary py-2 px-3 sidebar-toggle-btn" id="toggle">Filter</button>
                                        <h1>Buy Second Hand Books, Used Books Online In India</h1>
                                        <div class="filter-dropdown">
                                                  <label for="sort">Sort</label>
                                                  <select id="sort">
                                                            <option value="latest">Latest</option>
                                                            <option value="price_low_high">Price: Low to High</option>
                                                            <option value="price_high_low">Price: High to Low</option>
                                                  </select>
                                        </div>
                              </div>
                              <div class="product-row">
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">Computer Science book</p>
                                                            <p class="price">₹149 <span class="original-price">₹500</span> <span class="discount">70% off</span></p>
                                                            <p class="info">7 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">GE3252 tamil book</p>
                                                            <p class="price">₹350</p>
                                                            <p class="info">8 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                                                  <div class="desc">
                                                            <p class="name">Computer Science Book</p>
                                                            <p class="price">₹149 <span class="original-price">₹400</span> <span class="discount">63% off</span></p>
                                                            <p class="info">10 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt="">                                                   <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="<?php echo e(URL::to('/')); ?>/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="checkout">Buy Now</a></div>
                                                  </div>
                                        </div>
                              </div>
                    </section>
          </main>

          <?php $__env->stopSection(); ?>
</body>

<script>
          document.addEventListener('DOMContentLoaded', function() {
                    const sidebar = document.querySelector('.sidebar');
                    const toggleBtn = document.querySelector('.sidebar-toggle-btn');

                    toggleBtn.addEventListener('click', function() {
                              sidebar.classList.toggle('active');
                    });
          });
</script>


</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/book-category.blade.php ENDPATH**/ ?>