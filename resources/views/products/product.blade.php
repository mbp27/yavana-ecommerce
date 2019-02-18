@extends('layouts.app')

@section('content')
	@if (session('alert'))
    	<div class="alert alert-success">
        	{{ session('alert') }}
    	</div>
	@endif
<!-- banner -->
	<div class="">
		<ul class="short" style="padding: 2em 0 0 3em;">
			<li>
				<a href="/">Home</a>
			</li>
			<li style="color:black;"> >
				<a href="{{ route('product.all') }}">Produk</a>
			</li>
		</ul>
	</div>
		<!--//banner -->
	<!--/shop-->
	<section  id="shop" class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="row">
					<!-- product left -->
					<div class="side-bar col-lg-3">
						<div class="search-hotel">
							<h3 class="agileits-sear-head">Cari disini..</h3>
							<form action="{{ route('product.search') }}" method="get">
									<input class="form-control" type="search" name="search" placeholder="Search here...">
									<button class="btn1">
											<i class="fas fa-search"></i>
									</button>
									<div class="clearfix"> </div>
								</form>
						</div>
						<!-- price range -->
<!-- 						<div class="range">
							<h3 class="agileits-sear-head">Kisaran harga</h3>
							<ul class="dropdown-menu6">
								<li>
									<div id="slider-range"></div>
									<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
								</li>
							</ul>
						</div> -->
						<!-- //price range -->
						<!--preference -->
						<div class="left-side">
							<h3 class="agileits-sear-head">Kategori</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Asli</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Imitasi</span>
								</li>

							</ul>
						</div>
						<!-- // preference -->
						<!-- discounts -->
						<div class="left-side">
							<h3 class="agileits-sear-head">Diskon</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% atau lebih</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% atau lebih</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% atau lebih</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% atau lebih</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% atau lebih</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% atau lebih</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- reviews -->
						<div class="customer-rev left-side">
							<h3 class="agileits-sear-head">Ulasan Pembeli</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									 	<i class="fa fa-star" aria-hidden="true"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<span>2.0</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- deals -->
						<!-- <div class="deal-leftmk left-side">
							<h3 class="agileits-sear-head">Special Deals</h3>
							<div class="special-sec1">
								<div class="img-deals">
									<img src="images/s1.jpg" alt="">
								</div>
								<div class="img-deal1">
									<h3>Farenheit (Grey)</h3>
									<a href="/single">$575.00</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="special-sec1">
								<div class="col-xs-4 img-deals">
									<img src="images/s2.jpg" alt="">
								</div>
								<div class="col-xs-8 img-deal1">
									<h3>Opium (Grey)</h3>
									<a href="/single">$325.00</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="special-sec1">
									<div class="col-xs-4 img-deals">
										<img src="images/m2.jpg" alt="">
									</div>
									<div class="col-xs-8 img-deal1">
										<h3>Azmani Round</h3>
										<a href="/single">$725.00</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
										<div class="col-xs-4 img-deals">
											<img src="images/m4.jpg" alt="">
										</div>
										<div class="col-xs-8 img-deal1">
											<h3>Farenheit Oval</h3>
											<a href="/single">$325.00</a>
										</div>
										<div class="clearfix"></div>
								</div>
						</div> -->
						<!-- //deals -->
					</div>
					<!-- //product left -->
					<!--/product right-->
					<div class="left-ads-display col-lg-9">
						<div class="wrapper_top_shop">
							<div class="row">
								<!-- /womens -->
								@foreach($products as $p)
								<div class="col-md-3 product-men women_two shop-gd">
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
																<button type="submit" class="btn btn-primary btn-sm">
																	<i class="fas fa-cart-plus"></i>
																</button>
															@else
																<input type="hidden" name="users_id" value="{{ $users->id }}">
					                    						<input type="hidden" name="add_value" value="1">
																<input type="hidden" name="product_id" value="{{ $p->id }}">
																<input type="hidden" name="product_name" value="{{ $p->name }}">
																<input type="hidden" name="product_price" value="{{ $p->price }}">
																<button type="submit" class="btn btn-primary btn-sm">
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
							</div>
						</div>
						Halaman : {{$products->currentPage()}} <br/>
			            Jumlah Data : {{$products->total()}} <br/>
			            Data per Halaman : {{$products->perPage()}} <br/>

			            {{$products->links()}}
					</div>
					<!--//product right-->
				</div>
				<!--/slide-->
		</div>
	</section>
@endsection