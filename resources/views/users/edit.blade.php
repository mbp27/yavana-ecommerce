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
		<li style="color: black;"> >
			<a href="#">Edit</a>
		</li>
	</ul>
</div>
<section id="profile" class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 mt-3">Edit profil</h3>
			<form action="{{ route('users.update') }}" method="post" class="creditly-card-form agileinfo_form">
				<section class="creditly-wrapper wrapper">
					<div class="information-wrapper">
						<div class="first-row form-group">
							{{ csrf_field() }}
							<div class="controls">
								<img src="{{ asset('img/users/profile.png') }}" style="width: 150px; height: 150px;"/>
								<input type="file" onchange="">
							</div>
							<div class="controls">
								<label class="control-label">Nama lengkap: </label>
								<input class="billing-address-name form-control" type="text" name="name" placeholder="" value="{{ Auth::user()->name }}">
							</div>
							<div class="controls">
								<label class="control-label">Nomor telepon:</label>
								<input class="form-control" type="text" name="phone" placeholder="" value="{{ Auth::user()->phone }}">
							</div>
							<div class="controls">
								<label class="control-label">Alamat: </label>
								<text-area class="form-control" name="address" value="">{{ Auth::user()->address }}</text-area>
							</div>
							<div class="controls">
								<label class="control-label">Provinsi: </label>
								<select id="select-provinsi" class="form-control option-w3ls" name="province" value="{{ Auth::user()->province }}">
									<div id="option-provinsi" style="overflow: auto;">
										@foreach($provinsi as $p)
											<option value="{{ $p->id }}">{{ $p->name }}</option>
										@endforeach
									</div>
								</select>
							</div>
							<div class="controls">
								<label class="control-label">Kota: </label>
								<select id="select-kota" class="form-control option-w3ls" name="city" value="{{ Auth::user()->city }}">
									<div id="option-kota" style="overflow: auto;">				
										@foreach($kota as $kot)
											<option>{{ $kot->name }}</option>
										@endforeach
									</div>
								</select>
							</div>
							<div class="controls">
								<label class="control-label">Kecamatan: </label>
								<select id="select-kecamatan" class="form-control option-w3ls" name="district" value="{{ Auth::user()->district }}">
									<div id="option-kecamatan" style="overflow: auto;">
										@foreach($kecamatan as $kec)
											<option>{{ $kec->name }}</option>
										@endforeach
									</div>
								</select>
							</div>
							<div class="controls">
								<label class="control-label">Kelurahan: </label>
								<select id="select-kelurahan" class="form-control option-w3ls" name="village" value="{{ Auth::user()->village }}">
									<div id="option-kelurahan" style="overflow: auto;">
										@foreach($kelurahan as $kel)	
											<option>{{ $kel->name }}</option>
										@endforeach
									</div>
								</select>
							</div>
						</div>
						<button class="submit check_out">Simpan</button>
					</div>
				</section>
			</form>
				<div class="clearfix"> </div>
		</div>

	</div>
</section>
<!--//checkout-->
@endsection
