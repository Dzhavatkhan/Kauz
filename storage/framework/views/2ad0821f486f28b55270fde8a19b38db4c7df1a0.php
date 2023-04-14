<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
</head>
<body>

    <div class="card" style="width:400px">
        <img src="<?php echo e($profile->image); ?>" class="card-img-top"  alt="Card image" >
        
        
        
        <div class="card-body">
          <h4 class="card-title"><?php echo e($profile->name); ?></h4>
          <p class="card-text">Some example text.</p>
          <a href="<?php echo e(route('addVideo')); ?>" class="btn btn-primary">+</a>


          <a href="<?php echo e(route('videos')); ?>">Home</a>

          <a href="<?php echo e(route('logout')); ?>">Back</a>
        </div>
      </div>




</body>
</html><?php /**PATH C:\OpenServer\domains\Kauz\resources\views/profile.blade.php ENDPATH**/ ?>