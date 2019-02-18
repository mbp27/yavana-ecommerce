@extends('layouts.app')

@section('content')
<div>
	<ul class="short" style="padding: 2em 0 0 3em;">
		<li>
			<a href="/">Home</a>
		</li>
		<li style="color:black;"> >
			<a href="{{ route('product.cart') }}">Keranjang</a>
		</li>
	</ul>
</div>
<section id="checkout" class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 mt-3">Periksa</h3>
			<div class="checkout-right">
				<h4>Keranjang belanja Anda berisi:
					<span>{{ $product_user->count() }} Produk</span>
				</h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>ID Produk</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Hapus</th>
						</tr>
					</thead>
					@foreach($users as $u)
					<tbody>
						@foreach($u->products as $p)
						<tr class="rem1">
							<td class="invert">{{ $p->id }}</td>
							<td class="invert">{{ $p->name }}</td>
							<td class="invert">{{ $p->price }}</td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										@foreach($cart as $c)
										<div class="entry value">
											<span>{{ $c->add_value }}</span>
										</div>
										@endforeach
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">
								<div class="rem">
									<div class="close1"></div>
								</div>

							</td>
						</tr>
						@endforeach
					</tbody>
					@endforeach
				</table>
				<table class="table">
                    <tr>
                        <td>Items on Cart:</td>
                        <td>{{ $product_user->count() }}</td>
                    </tr>
                    <tr>
                        <td>Total Qty:</td>
                        <td>@{{ details.total_quantity }}</td>
                    </tr>
                    <tr>
                        <td>Sub Total:</td>
                        <td>@{{ '$' + details.sub_total.toFixed(2) }} (@{{details.cart_sub_total_conditions_count}} conditions applied)</td>
                    </tr>
                    <tr>
                        <td>Total:</td>
                        <td>@{{ '$' + details.total.toFixed(2) }} (@{{details.cart_total_conditions_count}} conditions applied)</td>
                    </tr>
                </table>
			</div>
		</div>

	</div>
</section>
<!--//checkout-->
@endsection
