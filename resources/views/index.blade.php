<?php $home_active="active"; ?>

@extends('layouts.master')

@section('metadata')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

	
	<section>

		<div class="container">

			<div class="row">
				<div class="col-sm-12 padding-right">
					<h2 class="title text-center">Products</h2>
					<div class="products"><!--products-->
						@foreach($products as $product)	
							@include('product')	
						@endforeach
					</div><!--products-->
					<button class="btn btn-danger order-button" id="order-btn" onclick="addProducts()">Order</button>
				</div>
			</div>

		</div>

</section>

@endsection