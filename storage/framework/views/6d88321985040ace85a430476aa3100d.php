<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                              initial-scale=1.0">
    <title>Admin Panel - Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(URL::to('/')); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="<?php echo e(URL::to('/')); ?>/js/bootstrap.min.js"></script>

    <style>
        body {
            overflow-x: hidden;
        }

        #wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: margin 0.25s ease-out;
            background: #343a40;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            color: white;
            background: #343a40;
        }

        .sidebar-heading>img {
            width: 150px;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #sidebar-wrapper .list-group-item {
            background: #343a40;
            color: #fff;
        }

        #sidebar-wrapper .list-group-item:hover {
            background: #495057;
        }

        #page-content-wrapper {
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        .card {
            margin-bottom: 20px;
        }

        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

        .navbar {
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1rem;
            margin-left: 1rem;
        }

        .navbar-nav .nav-item .nav-link i {
            margin-right: 0.5rem;
        }

        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-light {
            border: none;
            color: white;
        }

        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .table-wrapper {
            margin-top: 20px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
            vertical-align: middle;
        }

        .table .actions {
            text-align: center;
        }

        .btn-edit,
        .btn-delete {
            padding: 0.25rem 0.75rem;
            margin-right: 0.5rem;
            font-size: 0.875rem;
        }

        .btn-edit {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
        }

        .dropdown-categories {
            width: 250px;
        }





        /*  */








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
            color: #fff;
            width: 100%;
        }

        .none:hover {
            cursor: pointer;
            transition: 0.3s all ease;
            background: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper"> <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="<?php echo e(URL::to('/')); ?>/images/clankart-logo.png" alt="logo"></div>
            <div class="nav mt-3 w-100 d-block">
                <a href="<?php echo e(URL::to('/')); ?>/a-index" class="links">
                    <div class="nav-item p-3 d-flex w-100">
                        <div class="nav-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="nav-name w-100 d-flex align-items-center">
                            <span class="mx-3 fs-5">
                                Dashboard
                            </span>
                        </div>
                    </div>
                </a>

                <a href="<?php echo e(URL::to('/')); ?>/a-orders" class="links">
                    <div class="nav-item p-3 d-flex w-100">
                        <div class="nav-icon">
                            <i class="fas fa-box mr-2"></i>
                        </div>
                        <div class="nav-name w-100 d-flex align-items-center">
                            <span class="mx-3 fs-5">
                                Orders
                            </span>
                        </div>
                    </div>
                </a>


                <a href="<?php echo e(URL::to('/')); ?>/a-product" class="links">
                    <div class="nav-item p-3 d-flex w-100">
                        <div class="nav-icon">
                            <i class="fas fa-cubes mr-2"></i>
                        </div>
                        <div class="nav-name w-100 d-flex align-items-center">
                            <span class="mx-3 fs-5">
                                Products
                            </span>
                        </div>
                    </div>
                </a>


                <a href="<?php echo e(URL::to('/')); ?>/a-customer" class="links">
                    <div class="nav-item p-3 d-flex w-100">
                        <div class="nav-icon">
                            <i class="fas fa-users mr-2"></i>
                        </div>
                        <div class="nav-name w-100 d-flex align-items-center">
                            <span class="mx-3 fs-5">
                                Customers
                            </span>
                        </div>
                    </div>
                </a>


                <a href="<?php echo e(URL::to('/')); ?>/a-offer" class="links">
                    <div class="nav-item p-3 d-flex w-100">
                        <div class="nav-icon">
                            <i class="fas fa-chart-line mr-2"></i>
                        </div>
                        <div class="nav-name w-100 d-flex align-items-center">
                            <span class="mx-3 fs-5">
                                Offers & Discounts
                            </span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <!-- /#sidebar-wrapper --> <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom shadow-sm">
                <button class="btn btn-outline-light" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>

                <a class="navbar-brand text-white ml-3" href="#">Admin Panel</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item none">
                            <a class="nav-link text-white" href="index">
                                <i class="fas fa-home"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item none dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                Admin
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Products</h1>
                <!-- Product Management -->
                <div class="row mt-4">
                    <!-- Filters and Sorting -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="categoryFilter">Filter
                                by
                                Category:</label>
                            <select class="form-control dropdown-categories" id="categoryFilter">
                                <option value="">All Categories</option>
                                <option value="1">School / College books</option>
                                <option value="2">Fiction</option>
                                <option value="3">Novel</option>
                                <option value="4">Others</option>
                            </select>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script>
                        $(document).ready(function () {
                            $('#categoryFilter').on('change', function () {
                                const selectedCategory = $(this).val();

                                window.location.href = `/filter-products/${selectedCategory}`;
                            });
                        });
                    </script>


                    <div class="col-md-8 text-right">
                        <a href="a-add-product"><button class="btn btn-primary">Add
                                New
                                Product</button></a>
                    </div>
                </div>

                <div class="table-wrapper">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Product
                                    ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Seller</th>
                                <th>Reviews</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <?php if(isset($all_products)): ?>

                            <!-- <?php echo e(print_r($all_products)); ?> -->

                            <tbody>
                                <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->book_title); ?></td>
                                        <td><?php echo e($product->category); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->seller_name); ?></td>
                                        <td>
                                            <Button class="btn btn-success btn-sm">
                                                <a href="product_review/<?php echo e($product->id); ?>"
                                                    class="text-white text-decoration-none">product_review</a>
                                            </Button>
                                        </td>
                                        <td><?php echo e($product->stock); ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary btn-edit" data-product-id="1">
                                                <a href="edit-product" class="text-decoration-none text-white"> <a
                                                        href="edit-book/<?php echo e($product->id); ?>"
                                                        class="text-decoration-none text-white"> Edit</a>
                                            </button>
                                            <button class="btn btn-sm btn-danger btn-delete" data-product-id="1"> <a
                                                    href="remove-book/<?php echo e($product->id); ?>"
                                                    class="text-decoration-none text-white"> Delete </a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        <?php endif; ?>
                    </table>



                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html><?php /**PATH C:\laragon\www\clancart\resources\views/admin/product.blade.php ENDPATH**/ ?>