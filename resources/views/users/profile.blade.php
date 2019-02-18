@extends('layouts.app')

@section('content')
<div>
	<ul class="short" style="padding: 2em 0 0 3em;">
		<li>
			<a href="/">Home</a>
		</li>
		<li style="color:black;"> >
			<a href="{{ route('users.profile') }}">Profile</a>
		</li>
	</ul>
</div>
<section id="profile" class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 mt-3">Profil ku</h3>
			<div class="checkout-left row">
				<div class="col-md-4 checkout-left-basket">
					<img src="{{ asset('img/users/profile.png') }}" style="width: 250px; height: 250px;"/>
				</div>
				<div class="col-md-8 address_form">
					<div class="information-wrapper">
						<div class="first-row form-group">
							<div class="controls">
								<b>Nama lengkap :</b><br/>
								{{ Auth::user()->name }}
							</div>
							<div class="controls">
								<b>Email :</b><br/>
								{{ Auth::user()->email }}
							</div>
							<div class="controls">
								<b>Nomor telepon :</b><br/>
								{{ Auth::user()->phone }}
							</div>
							<div class="controls">
								<b>Alamat :</b><br/>
								{{ Auth::user()->address }}, {{ Auth::user()->village }}, {{ Auth::user()->district }}, {{ Auth::user()->city }}, {{ Auth::user()->province }}
							</div>
						</div>
						<a class="btn btn-primary" href="{{ route('users.edit') }}">Ubah Profil</a>
					</div>
				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>
</section>
<!--//checkout-->
@endsection
