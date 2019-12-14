@extends('layouts.master')

@section('content')

	<section id="cart_items">

		<div class="container">

			<div class="table-responsive cart_info">

				<table class="table table-condensed">

					<thead>

						<tr class="cart_menu">
							<td class="image">Invoice No.</td>
							<td> #No. Items</td>
							<td class="description">Total Price</td>
							<td class="price">Card Number</td>
						</tr>

					</thead>

					<tbody>
						<tr>
							<td class="cart_product">
								<h4> {{ $bill->bill_number}} </h4>
							</td>

							<td class="cart_description">
                                <h4> {{count($order->products)}} </h4>
                            </td>
                                
                            <td class="cart_description">
								<h4> $ {{ number_format($bill->bill_total, 2) }} </h4>
							</td>

							<td class="cart_quantity">
								<h4> {{ $card_number }} </h4>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> 

	<section>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<a class="btn btn-default update" href="/order/confirm-purchase">Confirm Purchasing</a>
						<a class="btn btn-default update" href="/orders/{{$order->id}}">Back To Order</a>
					</center>
				</div>
			</div>
		</div>

	</section>



@endsection