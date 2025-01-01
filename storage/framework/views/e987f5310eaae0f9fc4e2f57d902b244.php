

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Quiz</title>

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>

          <?php $__env->startSection('demo'); ?>

          <form action="answer" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="quiz">
                              <div class="question">
                              Which of the following is national animal of india?
                              </div>
                              <div class="option">
                                        <input type="radio" name="op1" id="op1" >Elaphant
                                        <input type="radio" name="op1" id="op2" value="option1">tiger
                                        <input type="radio" name="op1" id="op3">lion
                                        <input type="radio" name="op1" id="op4">zebra
                              </div>
                    </div><hr><br>

                    <div class="quiz">
                              <div class="question">
                                Which is national bird of India?
                              </div>
                              <div class="option">
                                        <input type="radio" name="op2" id="op1" value="option1">Peackok
                                        <input type="radio" name="op2" id="op2">Sparrow
                                        <input type="radio" name="op2" id="op3">Monkey
                                        <input type="radio" name="op2" id="op4">Humming bird
                              </div>
                    </div><hr><br>

                    <div class="quiz">
                              <div class="question">
                              Who is Pm of india?
                              </div>
                              <div class="option">
                                        <input type="radio" name="op3" id="op1" >Amit shah
                                        <input type="radio" name="op3" id="op2">Ramnath kovind
                                        <input type="radio" name="op3" id="op3" value="option1">Narendra modi
                                        <input type="radio" name="op3" id="op4">Dropadi murmumu
                              </div>
                    </div><hr><br>

                    <div class="quiz">
                              <div class="question">
                                Current latest andriod version ? 
                              </div>
                              <div class="option">
                                        <input type="radio" name="op4" id="op1" >10
                                        <input type="radio" name="op4" id="op2" value="option1">14
                                        <input type="radio" name="op4" id="op3">12
                                        <input type="radio" name="op4" id="op4">6
                              </div>
                    </div>
                    <hr><br>
                    <div class="quiz">
                              <div class="question">
                              What is the correct syntax to declare an array of 10 integers in C?
                              </div>
                              <div class="option">
                                        <input type="radio" name="op5" id="op1">int array;
                                        <input type="radio" name="op5" id="op2" value="option1">int array[10];
                                        <input type="radio" name="op5" id="op3">int array[10] = 0;
                                        <input type="radio" name="op5" id="op4">int array(10);
                              </div>
                    </div><hr><br>
                    <div class="quiz">
                              <input type="submit" name="submit">
                    </div>

          </form>
          <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('masterview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\extra-tasks\resources\views/quiz.blade.php ENDPATH**/ ?>