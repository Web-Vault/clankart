<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Bootstrap Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <h2>Laravel Tutorials</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tutorial 1
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">Tutorial 1.1</a></li>
                <li><a class="dropdown-item" href="quiz">Tutorial 1.2</a></li>
                <li><a class="dropdown-item" href="sum-of-primes">Tutorial 1.3</a></li>
                <li><a class="dropdown-item" href="modulus">Tutorial 1.4</a></li>
                <li><a class="dropdown-item" href="multiplication">Tutorial 1.5</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?php echo $__env->yieldContent('demo'); ?>

  <!-- Footer -->
  <footer class="bg-dark text-center mt-3 py-3">
    <div class="container">
      <p>Footer Line 1</p>
      <p>Footer Line 2</p>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script></body>

</html><?php /**PATH C:\laragon\www\extra-tasks\resources\views/masterview.blade.php ENDPATH**/ ?>