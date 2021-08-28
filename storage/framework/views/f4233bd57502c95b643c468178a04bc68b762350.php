   


<?php $__env->startSection("content"); ?>
    
<div class="row">

<ul class="product-list grid-products equal-container">
<?php $__currentLoopData = $productcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
        <div class="product product-style-3 equal-elem " style="margin: 30 px 0;">
            <div class="product-thumnail">
                <a href="<?php echo e(route('indexdetails',['id'=>$product['id']])); ?>" title="">
                    <figure><img src="<?php echo e(asset('images/products/' .$product['image'])); ?>" alt="mobilephone" style="height: 25rem; width:25rem;"></figure>
                </a>
            </div>
            <div class="product-info">
                <a href="<?php echo e(route('indexdetails',['id'=>$product['id']])); ?>" class="product-name"><span><?php echo e($product['name']); ?></span></a>
                <div class="wrap-price"><span class="product-price">$<?php echo e($product['price']); ?></span></div>
                
                <?php if($product->quantity != 0): ?>
				<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<input type="hidden" value="<?php echo e($product->id); ?>" name="id">
					<input type="hidden" value="<?php echo e($product->name); ?>" name="name">
					<input type="hidden" value="<?php echo e($product->price); ?>" name="price">
					<input type="hidden" value="<?php echo e($product->image); ?>"  name="image">
					<input type="hidden" value="1" name="quantity">
					<button class="btn add-to-cart"><span class="carts" style="color: #888888">Add To Cart</span></button>
				</form>
				<?php else: ?> 
				<button class="btn add-to-cart"><span class="carts" style="color: #888888">Sorry I'm out of stock &hearts;</span></button>
                <?php endif; ?>
            </div>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
</div>      
               
              
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/showproducts.blade.php ENDPATH**/ ?>