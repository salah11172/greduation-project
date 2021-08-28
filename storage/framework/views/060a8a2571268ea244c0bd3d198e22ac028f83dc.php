;
<?php $__env->startSection("content"); ?>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3" style="margin-top: 10rem;">
    <div class=" main-content-area">
        <div class="wrap-login-item ">
            <a style="margin-left: 155px; margin-bottom:60px;" class="btn btn-success" href="<?php echo e(route('marqueeindex')); ?>">View Comment Marquee Table</a>						
            <div class="login-form form-item form-stl">
                <form method="POST" action="<?php echo e(route('marqueestore')); ?>" name="frm-login">
                    <?php echo csrf_field(); ?>
                    <fieldset class="wrap-title">
                        <h3 class="form-title">Add Comment Marquee</h3>										
                    </fieldset>
                    
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">Write Comment:</label>
                        <input class="form-control" type="text" id="frm-login-pass" name="comment" required>
                    </fieldset>

                    <input type="submit" class="btn btn-submit" value="Add" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/marquee.blade.php ENDPATH**/ ?>