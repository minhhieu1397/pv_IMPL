@extends ('layouts.submenu_user')
@section('content')
	<div class="col-md-12">
		<div class="content personal">
			<div class="row justify-content-md-center">
				<div class="col-md-5 mb-5">
					<ul class="list-group">
					  	@foreach ($products as $product)
					  		<li class="list-group-item"> {{ $product->name }} - {{ $product->price }}
					  			<a href="{{route('user.products.sell', $product['id'])}}" title="" class="ml-2 buy-item" onclick="return confirm('Are you sure you buy this product？')">Buy now</a>
					  		</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop()