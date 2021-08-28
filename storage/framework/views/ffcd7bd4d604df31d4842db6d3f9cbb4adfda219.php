<?php $__env->startSection('content'); ?>

<main id="main" class="main-site left-sidebar">

<div class="container">

  <div class="wrap-breadcrumb">
    <ul>
      <li class="item-link"><a href="/" class="link">home</a></li>
      <li class="item-link"><span>Contact us</span></li>
    </ul>
  </div>
  <div class="row">
    <div class=" main-content-area">
      <div class="wrap-contacts ">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="contact-box contact-form">
            <h2 class="box-title">Leave a Message</h2>
            <form action="<?php echo e(route('comment.store')); ?>" method="POST" name="frm-contact">


            <?php echo csrf_field(); ?>
              <label for="name">Name<span>*</span></label>
              <input type="text" value="" id="name" name="name"  class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid name <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <label for="email">Email<span>*</span></label>
              <input type="text" value="" id="email" name="email"  class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid name <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger"><?php echo e($message); ?></div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

              <label for="phone" >Number Phone<span>*</span></label>
              <input type="text" value="" id="phone" name="phone"  class="<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid name <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
              <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <div class="alert alert-danger"><?php echo e($message); ?></div>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

              <label for="comment">Comment<span>*</span></label>
              <textarea name="comment" id="comment"></textarea>

              <input type="submit" name="ok" value="Submit" >
              
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="contact-box contact-info">
            <div class="wrap-map">
              <div class="mercado-google-maps"
                 id="az-google-maps57341d9e51968"
                 data-hue=""
                 data-lightness="1"
                 data-map-style="2"
                 data-saturation="-100"
                 data-longitude="31.3537"
                 data-latitude="31.0449"
                 data-zoom="16"
                 data-map-height="263">
              </div>
            </div>
            <h2 class="box-title">Contact Detail</h2>
            <div class="wrap-icon-box">

              <div class="icon-box-item">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <div class="right-info">
                  <b>Email</b>
                  <p>Support@gmail.com</p>
                </div>
              </div>

              <div class="icon-box-item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="right-info">
                  <b>Phone</b>
                  <p>0123-465-789-111</p>
                </div>
              </div>

              <div class="icon-box-item">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <div class="right-info">
                  <b>Mail Office</b>
                  <p>Mansoura<br /> mansora unversity </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div><!--end main products area-->

  </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/contact-us/create.blade.php ENDPATH**/ ?>