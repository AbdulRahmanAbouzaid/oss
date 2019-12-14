@section('metadata')

	<meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@extends('layouts.master')

@section('content')

	<section id="cart_items">

		<div class="container">

			<div class="table-responsive cart_info">

				<table class="table table-condensed">

					<thead>

						<tr class="cart_menu">

							<td class="image">Product</td>

							<td class="description"></td>

							<td class="price">Product Price</td>

						</tr>

					</thead>

					<tbody>

						@foreach($order->products as $product)
							<tr>
								<td class="cart_product">
									<img src="/images/cart/one.png" alt="">
								</td>

								<td class="cart_description">
									<h4><a href="">{{$product->name}}</a></h4>
									<h4>Code : {{$product->code}}</h4>
								</td>

								<td class="cart_price">
									<h4>{{$product->price}}</h4>
								</td>

								
							</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</section>


	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Order Total <span id="totalPrice">${{$order->getTotalPrice()}}</span></li>
						</ul>

						<div class="row">
							<center>
								<a class="btn btn-default update" href="/order/invoice">Show Bill</a>
								<a class="btn btn-default update" href="/order/destroy">Cancel Order</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
