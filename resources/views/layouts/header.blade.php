<!-- header -->
<header>
<div class="row" style="margin-top: -20px">
<!-- 	<label class="top-log mx-auto"></label> -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
		<div class="col-lg-3 text-center">
			<h1 class="">
				<a href="/"><img src="{{ asset('img/yavana-logo.png') }}" style="width: 40%"></img></a>
			</h1>
		</div>
		<div class="col-lg-2 text-center" id="">
			<ul class="navbar-nav nav-mega mx-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('product.all') }}" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
					    aria-expanded="false">Kategori</a>
					<ul class="dropdown-menu mega-menu" style="width: 80%">
						<li>
							<div class="row">
								<div class="col-md-6 media-list span4 text-left">
									<h5 class="tittle-w3layouts-sub">Bouquet</h5>
									<ul>
										<li class="media-mini mt-3">
											<a href="{{ route('product.all') }}">Asli</a>
										</li>
										<li class="">
											<a href="{{ route('product.all') }}">Imitasi</a>
										</li>
									</ul>
								</div>
							</div>
							<hr>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-lg-4 text-center" style="">
			<form action="{{ route('product.search') }}" method="get" class="d-flex">
				<input type="text" class="form-control" name="search" type="search" placeholder="Cari disini.." value="{{ old('cari') }}">
				<button type="submit" class="btn btn-primary submit">
					<i class="fas fa-search"></i>
				</button>
			</form>	
		</div>
		<div class="col-lg-3 text-center">
			<ul class="cart-inner-info">
				<li class="nav-item dropdown button-log">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="fa fa-user" aria-hidden="true"></span> <span class="caret"></span>
                    </a>
                    @guest
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    	<a class="dropdown-item" href="{{ route('login') }}">Masuk</a>
                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">Daftar</a>
                        @endif	
                	</div>
                	@else
                	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    	<a class="dropdown-item" href="{{ route('users.profile')}}">Profile</a>
	                    <a class="dropdown-item" href="{{ route('logout') }}"
	                       onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();">
	                        Keluar
	                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                	</div>
                	@endguest
                </li>
				<li class="">
<!-- 				<form action="{{ route('product.checkout') }}" method="post" class="last">
						@csrf
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="top_googles_cart" type="submit" name="submit" value="">
							<i class="fas fa-cart-arrow-down"></i>
						</button>
					</form> -->
					<div>
						<a class="" href="{{ route('product.cart') }}"><i style="color:black;" class="fas fa-cart-arrow-down"></i></a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>