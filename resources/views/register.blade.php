<?php $register_active = "active"; ?>

@extends('layouts.master')

@section('content')

<section id="form"><!--form-->
	
		<div class="container">
	
			<div class="row">

				@include('layouts.errors')
                <div class="signup-form">
                    <form action="/register" method="post">
				        <div class="col-sm-4 col-sm-offset-1">
                            <h2>Main Information</h2>
                            {{ csrf_field() }}
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Name" required/>
                            <label for="email">Email</label>
						    <input type="email" name="email" placeholder="Email" required/>
                            <label for="phone">Phone</label>
						    <input type="text" name="phone" placeholder="Phone" required/>
                            <label for="password">Password</label>
						    <input type="password" name="password" placeholder="Password" required/>
                            <label for="password_confirmation">Password Confirmation</label>						    
                            <input type="password" name="password_confirmation" placeholder="confirm Password" required />
				        </div>

				        <div class="col-sm-4 col-sm-offset-1">

                            <h2>Credit Card Information!</h2>
                            <label for="card_number">Card Number</label>
						    <input type="text" name="card_number" placeholder="Card Number" required/>
                            <label for="holder_name">Card Holder Name</label>						    
                            <input type="text" name="holder_name" placeholder="Card Holder Name" required/>
                            <label for="expire_date">Expiring Date</label>						                                
                            <div style="display:flex">
						        <input type="number" name="month" min="1" max="12" placeholder="mm" required style="margin-right: 5px;"/>
						        <input type="number" name="year" min="{{Carbon\Carbon::now()->year%100}}" max="99" placeholder="yy" required/>
                            </div>
                            <label for="cvc">CVC Number (begind the card)</label>						    
						    <input type="text" name="cvc" placeholder="CVC Number" required/>
						    <button type="submit" name="submit" class="btn btn-default">Signup</button>
				        </div>
                    </form>
                </div>
			</div>

		</div>

</section><!--/form-->

@endsection