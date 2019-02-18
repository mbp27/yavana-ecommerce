@extends('layouts.app')

@section('content')
	<!-- banner -->
<!-- 	@guest

	@else
		@if (Route::has('login'))
			@include('layouts._modal')
		@endif
	@endguest -->

	@if (session('alert'))
    	<div class="alert alert-success">
        	{{ session('alert') }}
    	</div>
	@endif

	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption text-center">
						<h3>Bouquet
							<span>Promo spesial diskon 50% untuk pengguna baru</span>
						</h3>
						<a href="{{ route('product.all') }}" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption text-center">
						<h3>Bouquet
							<span>Promo spesial diskon 50% untuk pengguna baru</span>
						</h3>
						<a href="{{ route('product.all') }}" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>

					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption text-center">
						<h3>Bouquet
							<span>Promo spesial diskon 50% untuk pengguna baru</span>
						</h3>
						<a href="{{ route('product.all') }}" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption text-center">
						<h3>Bouquet 
							<span>Promo spesial diskon 50% untuk pengguna baru</span>
						</h3>
						<a href="{{ route('product.all') }}" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Sebelumnya</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Selanjutnya</span>
			</a>
		</div>
		<!--//banner -->
	</div>
</div>
<!--//banner-sec-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container-fluid">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 my-4">Yang baru untuk mu!</h3>
			<div class="row">
				<!-- /womens -->
				@foreach($products as $p)
				<div class="col-md-3 product-men women_two">
					<div class="product-googles-info googles">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{ asset('img/product/300/'.$p->image.'') }}" class="img-fluid" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{ url('product/'.$p->url.'') }}" class="link-product-add-cart">Lihat Produk</a>
									</div>
								</div>
								<span class="product-new-top">Baru</span>
							</div>
							<div class="item-info-product">
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<h4>
												<a href="{{ url('product/'.$p->url.'') }}">{{ $p->name }}</a>
											</h4>
											<div class="grid-price mt-2">
												<span class="money ">Rp{{ $p->price }}</span>
											</div>
										</div>
										<ul class="stars">
											<li>
												<a href="#">
													<i class="fa fa-star" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-star" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-star" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-star" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-star-half-o" aria-hidden="true"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="">
										<form action="{{ route('add.cart') }}" method="post">
											@csrf
                    						@guest
	                    						<input type="hidden" name="add_value" value="1">
												<input type="hidden" name="product_id" value="{{ $p->id }}">
												<input type="hidden" name="product_name" value="{{ $p->name }}">
												<input type="hidden" name="product_price" value="{{ $p->price }}">
												<button type="submit" class="btn btn-primary">
													<i class="fas fa-cart-plus"></i>
												</button>
											@else
												<input type="hidden" name="users_id" value="{{ $users->id }}">
	                    						<input type="hidden" name="add_value" value="1">
												<input type="hidden" name="product_id" value="{{ $p->id }}">
												<input type="hidden" name="product_name" value="{{ $p->name }}">
												<input type="hidden" name="product_price" value="{{ $p->price }}">
												<button type="submit" class="btn btn-primary">
													<i class="fas fa-cart-plus"></i>
												</button>
											@endguest
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			<!-- //womens -->
			<!-- /mens -->
			
				<!-- /mens -->
			</div>
			<!--//row-->
			<!--/meddle-->
			<div class="row">
				<div class="col-md-12 middle-slider my-4">
					<div class="middle-text-info ">

						<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Flash sale</h3>
						<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

					</div>
				</div>
			</div>
			<!--//meddle-->
			<!--/slide-->
			<div class="slider-img mid-sec">
				<!--//banner-sec-->
				<div class="mid-slider">
					<div class="owl-carousel owl-theme row">
						@foreach($products_soldout as $p)
						<div class="item">
							<div class="gd-box-info text-center">
								<div class="product-men women_two bot-gd">
									<div class="product-googles-info slide-img googles">
										<div class="men-pro-item">
											<div class="men-thumb-item">
												<img src="{{ asset('img/product/300/'.$p->image.'') }}" class="img-fluid" alt="">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="{{ url('product/'.$p->url.'') }}" class="link-product-add-cart">Lihat Produk</a>
													</div>
												</div>
												<span class="product-new-top">Laris</span>
											</div>
											<div class="item-info-product">

												<div class="info-product-price">
													<div class="grid_meta">
														<div class="product_price">
															<h4>
																<a href="{{ url('product/'.$p->url.'') }}">{{ $p->name }}</a>
															</h4>
															<div class="grid-price mt-2">
																<span class="money ">Rp{{ $p->price }}</span>
															</div>
														</div>
														<ul class="stars">
															<li>
																<a href="#">
																	<i class="fa fa-star" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-star" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-star" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-star-half-o" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-star-o" aria-hidden="true"></i>
																</a>
															</li>
														</ul>
													</div>
													<div class="">
														<form action="{{ route('add.cart') }}" method="post">
															@csrf
				                    						@guest
					                    						<input type="hidden" name="add_value" value="1">
																<input type="hidden" name="product_id" value="{{ $p->id }}">
																<input type="hidden" name="product_name" value="{{ $p->name }}">
																<input type="hidden" name="product_price" value="{{ $p->price }}">
																<button type="submit" class="btn btn-primary">
																	<i class="fas fa-cart-plus"></i>
																</button>
															@else
																<input type="hidden" name="users_id" value="{{ $users->id }}">
					                    						<input type="hidden" name="add_value" value="1">
																<input type="hidden" name="product_id" value="{{ $p->id }}">
																<input type="hidden" name="product_name" value="{{ $p->name }}">
																<input type="hidden" name="product_price" value="{{ $p->price }}">
																<button type="submit" class="btn btn-primary">
																	<i class="fas fa-cart-plus"></i>
																</button>
															@endguest
														</form>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- /testimonials -->
			<div class="testimonials py-lg-4 py-3 mt-4">
				<div class="testimonials-inner py-lg-4 py-3">
					<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Testimoni</h3>
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="testimonials_grid text-center">
									<h3>Aldo
										<span>Pembeli</span>
									</h3>
									<label>Indonesia</label>
									<p>Barangnya bagus sekali, saya sangat suka. Terimakasih!</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonials_grid text-center">
									<h3>Hadi
										<span>Pembeli</span>
									</h3>
									<label>Indonesia</label>
									<p>Barangnya bagus sekali, saya sangat suka. Terimakasih!</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonials_grid text-center">
									<h3>Greg
										<span>Pembeli</span>
									</h3>
									<label>Indonesia</label>
									<p>Barangnya bagus sekali, saya sangat suka. Terimakasih!</p>
								</div>
							</div>
							<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="fas fa-long-arrow-alt-left"></span>
								<span class="sr-only">Sebelumnya</span>
							</a>
							<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
								<span class="sr-only">Selanjutnya</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- //testimonials -->
			<div class="row galsses-grids pt-lg-5 pt-3">
				<div class="col-lg-6 galsses-grid-left">
					<figure class="effect-lexi">
						<img src="{{ asset('images/banner4.jpeg') }}" alt="" class="img-fluid">
						<figcaption>
							<h3>Produk
								<span>Terlaris</span>
							</h3>
							<p>Jangan lewatkan yang ini.</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-lg-6 galsses-grid-left">
					<figure class="effect-lexi">
						<img src="{{ asset('images/banner1.jpeg') }}" alt="" class="img-fluid">
						<figcaption>
							<h3>Produk
								<span>Terlaris</span>
							</h3>
							<p>Jangan lewatkan yang ini.</p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- /grids -->
			<div class="bottom-sub-grid-content py-lg-5 py-3">
				<div class="row">
					<div class="col-lg-6 bottom-sub-grid text-center">
						<div class="bt-icon">

							<span class="far fa-hand-paper"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Kepuasan Terjamin</h4>
						<p>Soal kepuasan sudah dijamin oleh banyaknya pembeli</p>
						<p>
							<a href="{{ route('product.all') }}" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-6 bottom-sub-grid text-center">
						<div class="bt-icon">
							<span class="fas fa-rocket"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Pengiriman Cepat</h4>
						<p>Pengiriman sudah dipastikan cepat, karena kami menggunakan jasa pengiriman express</p>
						<p>
							<a href="{{ route('product.all') }}" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
<!-- 					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">
							<span class="far fa-sun"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
						<p>
							<a href="/shop" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
						</p>
					</div> -->
					<!-- /.col-lg-4 -->
				</div>
			</div>
			<!-- //grids -->
			<!-- /clients-sec -->
			<div class="testimonials p-lg-5 p-3 mt-4">
				<div class="row last-section">
					<div class="col-lg-4 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-shield-alt"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Produk Aman</h3>
							<p>Produk dijamin Aman</p>
						</div>
					</div>
					<div class="col-lg-4 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-dollar-sign"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Bayar di Tempat</h3>
							<p>Bisa bayar di Tempat</p>
						</div>
					</div>
					<div class="col-lg-4 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-truck"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Pengiriman Mudah</h3>
							<p>Pengiriman pasti mudah</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //clients-sec -->
		</div>
	</div>
</section>
<!-- about -->
@endsection
