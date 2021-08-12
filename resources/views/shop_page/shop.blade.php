@extends('layout.layout')

@section("content")

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
						<a href="#" class="banner-link">
							<figure><img src="/images/1.PNG" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<h1 class="shop-title">Mobiles & Tablets</h1>

					</div><!--end wrap shop control-->


					<div class="row">
						<ul class="product-list grid-products equal-container">

							@foreach ($products as $product)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem">
									<div class="product-thumnail" style="height: 25rem;">
										<a href="{{route('details_page.details', ['detail' => $product->id])}}" title="">
											<figure><img src="{{ url($product->image) }}" alt=""></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="{{route('details_page.details', ['detail' => $product->id])}}" class="product-name"><span>{{ $product->name }}</span></a>
										<div class="wrap-price" style="height:6rem;">{{ $product->description }}</div>
										<div class="wrap-price"><span class="product-price">${{ $product->price }}</span></div>
										@if ($product->quantity != 0)
										<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
											<input type="hidden" value="{{ $product->id }}" name="id">
											<input type="hidden" value="{{ $product->name }}" name="name">
											<input type="hidden" value="{{ $product->price }}" name="price">
											<input type="hidden" value="{{ $product->image }}"  name="image">
											<input type="hidden" value="1" name="quantity">
											<button class="btn add-to-cart"><span class="carts" style="color: #888888">Add To Cart</span></button>
										</form>
										@else 
										<button class="btn add-to-cart"><span class="carts" style="color: #888888">Sorry I'm out of stock &hearts;</span></button>
                        				@endif
										
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>

					<div class="wrap-pagination-info">
						<ul class="page-numbers">
							<li><span class="page-number-item {{--current--}}" >1</span></li>
							<li><a class="page-number-item" href="{{route('products.list')}}" >2</a></li>
							<li><a class="page-number-item" href="{{route('products.list')}}" >3</a></li>
							<li><a class="page-number-item next-link" href="{{route('products.list')}}" >Next</a></li>
						</ul>
						
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					

					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Brand</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="6">
								<li class="list-item"><a class="filter-link " href="#">Apple</a></li>
								<li class="list-item"><a class="filter-link " href="#">Honor</a></li>
								<li class="list-item"><a class="filter-link " href="#">HTC</a></li>
								<li class="list-item"><a class="filter-link " href="#">Huawie</a></li>
								<li class="list-item"><a class="filter-link " href="#">Lenovo</a></li>
								<li class="list-item"><a class="filter-link " href="#">Nokia</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Samsung</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">TCL</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Tecno</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Oppo</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Xiaomi</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Google</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Realme</a></li>
								<li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div><!-- brand widget-->

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price</h2>
						<div class="widget-content">
							<div id="slider-range"></div>
							<p>
								<label for="amount">Price:</label>
								<input type="text" id="amount" readonly>
								<button class="filter-submit">Filter</button>
							</p>
						</div>
					</div><!-- Price-->

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Color</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list has-count-index">
								<li class="list-item"><a class="filter-link " href="#">Red </a></li>
								<li class="list-item"><a class="filter-link " href="#">Yellow </a></li>
								<li class="list-item"><a class="filter-link " href="#">Black </a></li>
								<li class="list-item"><a class="filter-link " href="#">Blue </a></li>
								<li class="list-item"><a class="filter-link " href="#">Grey </a></li>
								<li class="list-item"><a class="filter-link " href="#">White </a></li>
								<li class="list-item"><a class="filter-link " href="#">Gold </a></li>
							</ul>
						</div>
					</div><!-- Color -->

				

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="/images/products/digital_01.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="/images/products/digital_17.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="/images/products/digital_18.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="/images/products/digital_20.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection