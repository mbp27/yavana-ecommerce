@extends('layouts.app')

@section('content')
	@if (session('alert'))
    	<div class="alert alert-success">
        	{{ session('alert') }}
    	</div>
	@endif
	<div>
		<ul class="short" style="padding: 2em 0 0 3em;">
			<li>
				<a href="/">Home</a>
			</li>
			<li style="color:black;"> >
				<a href="{{ route('product.all') }}">Produk</a>
			</li>
			<li style="color:black;"> >
				<a href="{{ route('product.all') }}">{{ $products->category }}</a>
			</li>
			<li style="color: black;">> {{ $products->name }}
			</li>
		</ul>
	</div>
	</div>
	<section id="single" class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop pt-lg-4 pt-3">
				<div class="row">
						<div class="col-lg-4 single-right-left ">
								<div class="grid images_3_of_2">
									<div class="flexslider1">
				
										<ul class="slides">
											<li data-thumb="{{ asset('img/product/300/'.$products->image.'') }}">
												<div class="thumb-image"> <img src="{{ asset('img/product/500/'.$products->image.'') }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
											</li>
											<li data-thumb="{{ asset('img/product/300/'.$products->image.'') }}">
												<div class="thumb-image"> <img src="{{ asset('img/product/500/'.$products->image.'') }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
											</li>
											<li data-thumb="{{ asset('img/product/300/'.$products->image.'') }}">
												<div class="thumb-image"> <img src="{{ asset('img/product/500/'.$products->image.'') }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 single-right-left simpleCart_shelfItem">
								<h3>{{ $products->name }}</h3>
								<p><span class="item_price">Rp{{ $products->price }}</span>
									<del></del>
								</p>
								<div class="customer-rev left-side"> 
									<ul>
										<li>
											<a href="#">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											 	<i class="fa fa-star" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
								<br/>
								<div class="color-quality">
									<div class="color-quality-right">
										<h5>Jumlah beli :</h5>
										<select id="qty" onchange="changeValue();" class="form-control" style="width: 15%">
											<option selected="selected" value="1">1</option>
											<option value="2">2</option> 
											<option value="3">3</option>					
											<option value="4">4</option>					
											<option value="5">5</option>								
										</select>
									</div>
								</div>
								<br/>
								<div>
									<h6>Waktu Proses : {{ $products->process_time }} hari</h6>
									<h6>Kategori : {{ $products->category }}</h6>
									<h6>Terjual : {{ $products->soldout }}</h6>
								</div>
								<br/>
								<div class="occasion-cart">
									<div class="googles single-item singlepage">
										<form action="{{ route('add.cart') }}" method="post">
											@csrf
											@guest
											<input type="hidden" id="add-qty" name="add_value" value="1">
											<input type="hidden" name="product_id" value="{{ $products->id }}">
											<input type="hidden" name="product_name" value="{{ $products->name }}">
											<input type="hidden" name="product_price" value="{{ $products->price }}">
											<button type="submit" class="googles-cart pgoogles-cart">
												Tambah ke Keranjang
											</button>
											@else
											<input type="hidden" name="users_id" value="{{ $users->id }}">
											<input type="hidden" id="add-qty" name="add_value" value="1">
											<input type="hidden" name="product_id" value="{{ $products->id }}">
											<input type="hidden" name="product_name" value="{{ $products->name }}">
											<input type="hidden" name="product_price" value="{{ $products->price }}">
											<button type="submit" class="googles-cart pgoogles-cart">
												Tambah ke Keranjang
											</button>
											@endguest
										</form><!-- 
										<div>
											<input type="hidden" name="id" v-model="item.id" class="form-control" value="{{ $products->id }}">
											<input type="hidden" name="name" v-model="item.name" class="form-control" value="{{ $products->name }}">
											<input type="hidden" name="price" v-model="item.price" class="form-control" value="{{ $products->price }}">
											<input type="hidden" id="qty-2" name="qty" v-model="item.qty" class="form-control" value="">
											<button v-on:click="addItem()" type="submit" class="googles-cart pgoogles-cart">Tambah ke Keranjang</button>
										</div> -->
									</div>
								</div>
								<ul class="footer-social text-left mt-lg-4 mt-3">
										<li>Bagikan ke : </li>
										<li class="mx-2">
											<a href="#">
												<span class="fab fa-facebook-f"></span>
											</a>
										</li>
										<li class="mx-2">
											<a href="#">
												<span class="fab fa-twitter"></span>
											</a>
										</li>
										<li class="mx-2">
											<a href="#">
												<span class="fab fa-google-plus-g"></span>
											</a>
										</li>
										<li class="mx-2">
											<a href="#">
												<span class="fab fa-linkedin-in"></span>
											</a>
										</li>
										<li class="mx-2">
											<a href="#">
												<span class="fas fa-rss"></span>
											</a>
										</li>
										
									</ul>
		
							</div>
							<div class="clearfix"> </div>
							<!--/tabs-->
							<div class="responsive_tabs">
								<div id="horizontalTab">
									<ul class="resp-tabs-list">
										<li>Deskripsi</li>
										<li>Ulasan</li>
									</ul>
									<div class="resp-tabs-container">
										<!--/tab_one-->
										<div class="tab1">
				
											<div class="single_page">
												<h6>{{ $products->name }}</h6>
												<p>{{ $products->description }}</p>
											</div>
										</div>
										<!--//tab_one-->
										<div class="tab2">
				
											<div class="single_page">
												<div class="bootstrap-tab-text-grids">
													<div class="bootstrap-tab-text-grid">
														<div class="bootstrap-tab-text-grid-left">
															<img src="{{ asset('images/bq.jpg') }}" alt=" " class="img-fluid">
														</div>
														<div class="bootstrap-tab-text-grid-right">
															<ul>
																<li><a href="#">{{ Auth::user()->name }}</a></li>
																<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
															</ul>
															<p>Produk memuaskan yayayayayyayayay hjsdhfjksdhfjk hsdjkfhsjdkhfkjsdhf hjsdkfhjksdhfjksd hjkfdshjfkhsdjfks hjksdf</p>
														</div>
														<div class="clearfix"> </div>
													</div>
													<div class="add-review">
														<h4>tambahkan ulasan</h4>
														<form action="#" method="post">
															<input class="form-control" type="text" style="width: 100%" name="Name" placeholder="Enter your email..." required="">
															<textarea name="Message" required="min:50"></textarea>
															<input type="submit" value="SEND">
														</form>
													</div>
												</div>
				
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--//tabs-->
				</div>
			</div>
		</div>
	</section>
@endsection
