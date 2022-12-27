<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
</head>
<body>
<container class="container">

<form method="get" action="<?php echo e(Route('userData.show')); ?>">
<?php echo csrf_field(); ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<label for="phone" class="form-label">phone number</label>
<input class="form-control form-control-lg" type="text" placeholder="phone" aria-label="phone">
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</container>



    
</body>
</html><?php /**PATH C:\xampp\htdocs\es3afProject\resources\views/showUserByPhone.blade.php ENDPATH**/ ?>