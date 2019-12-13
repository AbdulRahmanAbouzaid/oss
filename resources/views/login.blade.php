<?php $login_active = "active"; ?>

@extends('layouts.master')

@section('content')

<section id="form"><!--form-->

		<div class="container">

			<div class="row">

				<div class="col-md-3 ">
				</div>

				<div class="col-md-6">
					@include('layouts.errors')
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="/login" method="post">
							{{ csrf_field() }}
							<input type="text" name="email" placeholder="Enter Your User Email" required />
							<input type="password" name="password" placeholder="Password" required />
							<button type="submit" class="btn btn-default">Login</button>
						</form>

					</div><!--/login form-->
				</div>

				<div class="col-md-3">
				</div>

			</div>

		</div>

</section><!--/form-->

@endsection