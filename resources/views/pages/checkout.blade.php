@extends('layouts.app')

@section('content')
<div>
	<ul class="short" style="padding: 2em 0 0 3em;">
		<li>
			<a href="/">Home</a>
		</li>
		<li style="color:black;"> >
			<a href="{{ route('product.checkout') }}">Periksa</a>
		</li>
	</ul>
</div>
<section id="checkout" class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 mt-3">Periksa</h3>
			<div class="checkout-right">
				<h4>Keranjang belanja Anda berisi:
					<span>3 Produk</span>
				</h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<tr class="rem1">
							<td class="invert">1</td>
							<td class="invert">Irayz Butterfly </td>
							<td class="invert">$281.00</td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										<div class="entry value">
											<span>1</span>
										</div>
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">
								<div class="rem">
									<div class="close1"> </div>
								</div>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="checkout-left row">
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<li>Nama produk
							<i>-</i>
							<span>$281.00 </span>
						</li>
						<li>Ongkos kirim
							<i>-</i>
							<span>$55.00</span>
						</li>
						<li>Total
							<i>-</i>
							<span>$986.00</span>
						</li>
					</ul>
				</div>
				<div class="col-md-8 address_form">
					<h4>Tambahkan detail baru</h4>
					<form action="payment" method="post" class="creditly-card-form agileinfo_form">
						<section class="creditly-wrapper wrapper">
							<div class="information-wrapper">
								<div class="first-row form-group">
									<div class="controls">
										<label class="control-label">Nama lengkap: </label>
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
									</div>
									<div class="controls">
										<label class="control-label">Nomor telepon:</label>
										<input class="form-control" type="text" placeholder="Mobile number">
									</div>
									<div class="controls">
										<label class="control-label">Provinsi: </label>
										<select id="select-provinsi" class="form-control option-w3ls">
											<div id="option-provinsi" style="overflow: auto;">
												@foreach($provinsi as $p)
													<option value="{{ $p->id }}">{{ $p->name }}</option>
												@endforeach
											</div>
										</select>
									</div>
									<div class="controls">
										<label class="control-label">Kota: </label>
										<select id="select-kota" class="form-control option-w3ls select-address">
											<div id="option-kota" style="overflow: auto;">				
												@foreach($kota as $kot)
													<option>{{ $kot->name }}</option>
												@endforeach
											</div>
										</select>
									</div>
									<div class="controls">
										<label class="control-label">Kecamatan: </label>
										<select id="select-kecamatan" class="form-control option-w3ls select-address">
											<div id="option-kecamatan" style="overflow: auto;">
												@foreach($kecamatan as $kec)
													<option>{{ $kec->name }}</option>
												@endforeach
											</div>
										</select>
									</div>
									<div class="controls">
										<label class="control-label">Kelurahan: </label>
										<select id="select-kelurahan" class="form-control option-w3ls select-address">
											<div id="option-kelurahan" style="overflow: auto;">
												@foreach($kelurahan as $kel)	
													<option>{{ $kel->name }}</option>
												@endforeach
											</div>
										</select>
									</div>
								</div>
								<button class="submit check_out">Kirim ke alamat tersebut</button>
							</div>
						</section>
					</form>
					<div class="checkout-right-basket">
						<a href="{{ route('payment.index') }}">Lakukan pembayaran</a>
					</div>
				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>
</section>
<!--//checkout-->
@endsection
