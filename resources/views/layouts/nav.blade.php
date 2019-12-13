<div class="header"><!--header-->

	<div class="container">

		<div class="row">

			<div class="col-sm-4">

				<div class="logo pull-left">

					<a href="/"><img src="/images/home/logo.png" alt="" /></a>

				</div>

				<div class="btn-group pull-right">

					

				</div>

			</div>

			<div class="col-sm-8">

				<div class="menu pull-right">

					<ul class="nav navbar-nav">


						<li><a href="/" class=""><i class="fa fa-home"></i>Home</a></li>

						<li><a href="/categories" class=""><i class="fa fa-th-large"></i> Categories</a></li>

						@if(auth()->check())

							<li><a href="/basket" class=""><i class="fa fa-shopping-cart"></i> Cart</a></li>

							<li><a href="#"><i class="fa fa-user"></i> {{auth()->user()->name}}</a></li>

							<li><a href="/logout"><i class="fa fa-lock">
							</i> Logout</a></li>

						@else

							<li><a href="/login" class=""><i class="fa fa-lock">
							</i> Login</a></li>
							<li><a href="/register" class="{{$register_active or ''}}"><i class="fa fa-lock">
							</i> Register</a></li>

						@endif

					</ul>

				</div>

			</div>

		</div>

	</div>

</div>

<br/>