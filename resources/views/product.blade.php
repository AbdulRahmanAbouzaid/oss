<div class="col-sm-3">

	<div class="product-image-wrapper not-selected" id="{{$product->id}}" onclick="selectOrNot(this)">
		<div class="single-products">
			<div class="productinfo text-center">
                <i class="fa fa-check check-icon"></i>
				<img src="/images/home/product2.jpg" alt=""/>
				<h2>${{$product->price}}</h2>
				<h3>{{$product->name}}</h3>				
				<!--<a href="/products/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa 
				fa-shopping-cart"></i>Shop</a>-->
			</div>
		</div>
		
	</div>

</div>
    
@section('customJs')
    <script src="/js/products.js"></script>
@endsection