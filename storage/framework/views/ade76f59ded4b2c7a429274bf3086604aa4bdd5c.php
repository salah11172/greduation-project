<?php $__env->startSection("content"); ?>

<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <?php $__currentLoopData = $imageSlider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                <div class="item-slide">
                    <img src="<?php echo e(asset('images/slider/'.$slider->image)); ?>" alt="" class="img-slide" style="height: 50rem;">
                    <div class="slide-info slide-2">
                        <p class="discount-code">Coming Soon</p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!--Latest Products-->

        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="<?php echo e(route('products.list')); ?>" class="link-banner banner-effect-2">
                    <figure><img src="/images/cover.jpg" width="1170" height="240" alt="" style="height: 30rem;"></figure>
                </a>
            </div>
            
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                <?php $__currentLoopData = $latests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('indexdetails', ['id' => $latest->id])); ?>" title="phone">
                                            <figure><img src="<?php echo e(asset('images/products/'.$latest->image)); ?>" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>                                           
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="<?php echo e(route('indexdetails', ['id' => $latest->id])); ?>" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('indexdetails', ['id' => $latest->id])); ?>" class="product-name"><span style="text-transform:uppercase;"><?php echo e($latest->name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price">$<?php echo e($latest->price); ?></span></div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>




        <!--On Sale-->
        <div class="wrap-show-advance-info-box style-1 has-countdown container">
            <h3 class="title-box">On Sale</h3>
            
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
            <?php $__currentLoopData = $productsale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product product-style-2 equal-elem ">
               
                    <div class="product-thumnail">
                    <a href="<?php echo e(route('indexdetails',['id'=>$product['id']])); ?>" title="">
      
                        <figure><img src="<?php echo e(asset('images/products/'.$product['image'])); ?>" width="800" height="800" alt="" style="height: 12rem;"></figure>
                    </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                               <a href="<?php echo e(route('indexdetails',['id'=>$product['id']])); ?>" class="function-link">quick view</a>
                       </div>
                        

                    </div>
          
                    <div class="product-info">

                        <a href="<?php echo e(route('indexdetails',['id'=>$product['id']])); ?>" class="product-name"><span><?php echo e($product['name']); ?></span></a>
                        <div class="wrap-price"><span class="product-price">$<?php echo e($product['price']*.5); ?></span></div>
                        <div class="wrap-price"><span class="product-price" style="text-decoration:line-through;">$<?php echo e($product['price']); ?></span></div>

                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

            </div>
        </div>


        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <figure><img src="/images/cover2.jpg" width="1170" height="240" alt=""></figure>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <a href="<?php echo e(route('showproduct',['catid' => $category['id']])); ?>" class="tab-control-item "><?php echo e($category['name']); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<script>

    

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/index.blade.php ENDPATH**/ ?>