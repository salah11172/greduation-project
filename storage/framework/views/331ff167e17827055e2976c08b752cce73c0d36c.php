<?php $__env->startSection("content"); ?>


<br>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
    <div class=" main-content-area">
        <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
            <?php $count =1;?>
                <form method="POST" action="<?php echo e(route("productstore")); ?>" enctype="multipart/form-data" name="frm-login">
                    <?php echo csrf_field(); ?>
                    <fieldset class="wrap-title">
                        <h3 class="form-title">add product</h3>										
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-uname">name</label>
                        <input type="text" id="frm-login-uname" name="name" placeholder="product name">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">details:</label>
                        <input type="text" id="frm-login-pass" name="details" placeholder="product details">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">description:</label>
                        <input type="text" id="frm-login-pass" name="description" placeholder="product description">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">quantity:</label>
                        <input type="text" id="frm-login-pass" name="quantity" placeholder="product quantity">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">price:</label>
                        <input type="text" id="frm-login-pass" name="price" placeholder="product price">
                    </fieldset>

                    
                    
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">productimage:</label>
                        <input type="file" id="frm-login-pass" name="image" placeholder="product details">
                    </fieldset>
                    <div class="form-group">
                        <label for="sel1">select category name:</label>
                        <select name="categort_id" class="form-control" id="sel1">
                            <?php $__currentLoopData = $dervied; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    
                   
                    <input type="submit" class="btn btn-submit" value="add" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>
</div><!--end row-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/admin/product/create.blade.php ENDPATH**/ ?>