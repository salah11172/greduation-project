;
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-3.1.1/css/bootstrap.min.css')); ?>">
</head>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
      <div class="col-md-4 col-md-offset-4">
           
			
           <form action="<?php echo e(route('auth.check')); ?>" method="post">
            <?php if(Session::get('fail')): ?>
               <div class="alert alert-danger">
                  <?php echo e(Session::get('fail')); ?>

               </div>
            <?php endif; ?>
  
           <?php echo csrf_field(); ?>
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="<?php echo e(old('email')); ?>">
                 <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>
              <button style="background-color: #FF2832;color:white" type="submit" class="btn btn-block  ">Sign In</button>
              <br>
              
              <a href="<?php echo e(route('auth.register')); ?>">I don't have an account, create new</a>
           </form>
      </div>
   </div>
</div>
    
</body>
</html
	<!--main area-->
   
	
    <?php $__env->stopSection(); ?>
	<!--main area-->
  
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/auth/login.blade.php ENDPATH**/ ?>