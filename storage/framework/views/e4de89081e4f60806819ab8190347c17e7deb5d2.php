<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Well cum</title>
</head>
<body>

  <header>
    <div class="container">
        <div class="row">
          <div class="col-lg-3 mt-5">
              <i class="bi bi-list"></i>
          </div>
          <div class="col-lg-6">
            <h2 class="text-center" >
                LOGO
            </h2>
          </div>
          <div class="col-lg-1 mt-2 ">
              <?php if(auth()->guard('web')->check()): ?>
              <a href="<?php echo e(route('logout')); ?>">Выйти</a>
                <a href="<?php echo e(route('profile')); ?>">Профиль</a>  
            <?php endif; ?>

            <?php if(auth()->guard("web")->guest()): ?>
                <a href="<?php echo e(route('auth')); ?>" class="btn btn-primary justify-content-center" >Войти</a>
            <?php endif; ?>
          </div>
  
        </div>
    </div>



  </header>

<main >
  <div class="container me-1 mt-5">
     <div class="row mt-4 ">
      <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-3">
          <h3><?php echo e($video->video_name); ?></h3>
          <p><?php echo e($video->video_description); ?> </p>
          <a href="http://127.0.0.1/openserver/phpmyadmin/index.php?route=/sql&db=kauz&table=videos&pos=0">
            <video width="150" height="300" controls="controls" poster="video/duel.jpg">
              <source src="<?php echo e($video->video); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
          </a>


      </div>         
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
  </div>
</main>


<footer>
  <a href="<?php echo e(route('admin.login')); ?>">Sign in admin</a>
</footer>
</body>
</html><?php /**PATH C:\OpenServer\domains\Kauz\resources\views/welcome.blade.php ENDPATH**/ ?>