;

<?php $__env->startSection('content'); ?>
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form class="form-stl" action="<?php echo e(route('auth.save')); ?>" name="frm-login" method="POST" >
                                <?php if(Session::get('success')): ?>
                                <div class="alert alert-success">
                                   <?php echo e(Session::get('success')); ?>

                                </div>
                              <?php endif; ?>
                   
                              <?php if(Session::get('fail')): ?>
                                <div class="alert alert-danger">
                                   <?php echo e(Session::get('fail')); ?>

                                </div>
                              <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                   
                                    <input type="text" class="" name="name" placeholder="Enter full name" value="<?php echo e(old('name')); ?>">
                                  <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter email address" value="<?php echo e(old('email')); ?>">
                                    <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                              
                                <fieldset class="wrap-input ">
                                    <label for="frm-reg-phone">Phone *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Enter phone number">
                                    <span class="text-danger"><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Password" >
                                    <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">Confirm Password *</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation" required placeholder="Confirm Password">
                                    <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                             
                                <input type="submit" class="btn btn-sign" value="Register" name="register">

                                <br> <br>
                                <a href="<?php echo e(route('auth.login')); ?>">I already have an account, sign in</a>

                            </form>
                        </div>											
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/auth/register.blade.php ENDPATH**/ ?>