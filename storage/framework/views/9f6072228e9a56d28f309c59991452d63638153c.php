<?php $__env->startSection("content"); ?>
<script>
	$(function()
	{
		//alert('ahmed')
		  $( "#slider-range" ).slider({
				range: true,
				min: 0,
				max: 20,
				values: [ 0, 20],
				slide: function( event, ui ) {
					$( "#amount_start" ).val( ui.values[0] );
					$( "#amount_end" ).val( ui.values[1] );

				}
			});
		
			//var start = $("#amount_start").val();
			//var end = $("#amount_end").val();
			
			
	})
</script>

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Products</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
 
					<div class="banner-shop">
						<a href="/" class="banner-link">
							<figure><img src="/images/1.PNG" alt="" class="jello-horizontal"></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<h1 class="shop-title">Mobiles & Tablets</h1>

					</div><!--end wrap shop control-->


					<div class="row">
						<ul class="product-list grid-products equal-container">

							<?php $__currentLoopData = $productdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem">
									<div class="product-thumnail" style="height: 25rem;">
										<a id="productname" href="<?php echo e(route('details_page.details', ['detail' => $product->id])); ?>" title="<?php echo e($product->name); ?>">
											<figure><img src="<?php echo e(asset('images/products/'.$product->image)); ?>" alt=""></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="<?php echo e(route('details_page.details', ['detail' => $product->id])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
										<div class="wrap-price" style="height:6rem;"><?php echo e($product->description); ?></div>
										<div class="wrap-price"><span class="product-price">
										<?php if($product->spl_price == Null): ?>	
										$<?php echo e($product->price); ?> 
										<?php else: ?>
										<span style="text-decoration:line-through;color:#888">
										$<?php echo e($product->price); ?>

										</span>
										$<?php echo e($product->spl_price); ?> 
										<?php endif; ?>
										
										
										</span></div>
										<?php if($product->quantity != 0): ?>
										<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
											<?php echo csrf_field(); ?>
											<input type="hidden" value="<?php echo e($product->id); ?>" name="id">
											<input type="hidden" value="<?php echo e($product->name); ?>" name="name">
											<?php if( $product->spl_price == 0): ?>
											<input type="hidden" value= "<?php echo e($product->price); ?>" name="price">
											<?php else: ?>
											<input type="hidden" value= "<?php echo e($product->spl_price); ?>" name="price">
											<?php endif; ?>
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

									

				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					

					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Brand</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="6">
								<?php $__currentLoopData = $dervieddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="list-item"><a class="filter-link " href="<?php echo e(route('categoryprodcuts',["categoryid"=>$category['id']])); ?>"><?php echo e($category['name']); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div><!-- brand widget-->


					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price </h2>
						<div class="widget-content">
							<form action="<?php echo e(route('filterprice')); ?>" method="POST">
								<?php echo csrf_field(); ?>
							<div id="slider-range"></div>
							<p>
								<label for="amount">Price </label>
								<input type="text" id="amount" readonly>
								<input type="text" id="amount_start" name="start_price"  hidden>
								<input type="text" id="amount_end" name="end_price" hidden >
								<button type="submit" id="ahmed">filter<button>
								</form>
						</div>
								
				

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $late): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="" title="<?php echo e($late['description']); ?>">
												<figure><img src="<?php echo e(asset('images/products/'.$late['image'])); ?>" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="" class="product-name"><span><?php echo e($late['name']); ?></span></a>
											<div class="wrap-price"><span class="product-price"><?php echo e($late['price']); ?></span></div>
										</div>
									</div>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
	<script>

		window.addEventListener("load",function()
		{			
			$("#amount").val("0"+" : "+"100")

			
			$("#ahmed").click(function()
			{
			var start=$("#amount_start").val();
			var end=$("#amount_end").val();
			$("#amount").val(start+" : "+end)
		//	console.log(start)
		
		
		/*	//console.log(end)

				$.ajax({

					url:"/filterprice",
					type:"get",
					data:{
						start:start,
						end:end,
					},
                     success:function(data)
					 {
						var product=data['productdata'];
						console.log(product);
						for(var prod of product)
						{
							$('#yourElementId').prop('title', prod['name']);
						}

                              
					 },
				
				});
				*/
			});


		})
	</script>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/shop_page/shop.blade.php ENDPATH**/ ?>