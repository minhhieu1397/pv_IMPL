@extends ('layouts.submenu_shop_assistant')
@section('content')
	<div class="col-md-12">
		<div class="content personal">
			<div class="row justify-content-md-center">
				<div class="col-md-5 mb-5">
					<ul class="list-group">
						@foreach ($products as $product)
					  		<li class="list-group-item"> <a href="" title="">{{ $product->name }} - {{ $product->price }}</a> </li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop()