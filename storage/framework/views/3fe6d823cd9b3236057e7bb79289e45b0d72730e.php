<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="<?php echo e(route('registr')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger">
        <?php echo e($message); ?>

     </div> 
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <div class="mb-3">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger">
        <?php echo e($message); ?>

     </div> 
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="alert alert-danger">
        <?php echo e($message); ?>

     </div> 
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <div class="mb-3">
        <label for="pwd">Password confirm:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_confirmation">
      </div>
      <div class="mb-3">
        <label for="pwd">Avatar:</label>
        <input type="file" class="form-control" id="pwd" name="file">
      </div>
      <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="alert alert-danger">
        <?php echo e($message); ?>

     </div> 
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <button type="submit" class="btn btn-primary">Отправить</button>
    <div class="mb-3 mt-3">
      <a href="<?php echo e(route('auth')); ?>">У меня есть аккаунт</a>
    </div>


  </form>
</div>


</body>
</html>
<?php /**PATH C:\OpenServer\domains\Kauz\resources\views/register.blade.php ENDPATH**/ ?>