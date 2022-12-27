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
<form method="post" action="<?php echo e(Route('userData.store')); ?>">
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


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"> 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">phone number</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-1">
    <label for="age" class="form-label">age</label>
    <input type="text" class="form-control" id="age" name="age">
  </div>
  <div class="mb-1">
    <label for="nId" class="form-label">national id</label>
    <input type="text" class="form-control" id="nId" name="nId">
  </div>
  <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address" id="address" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label>Gender</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                    <label class="custom-control-label" for="female">Female</label>
                </div>
                <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label>Password comfirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>
 
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="t&c" name="t&c">
                <label class="form-check-label">
                    I agree to the terms and conditions.
                </label>
            </div>
            </div>
        </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</container>



    
</body>
</html><?php /**PATH C:\xampp\htdocs\es3afProject\resources\views/user_table.blade.php ENDPATH**/ ?>