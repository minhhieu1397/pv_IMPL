@extends ('layouts.submenu_user')
@section('content')
	<div class="col-md-12">
		<div class="content personal">
			<div class="row justify-content-md-center">
				<div class="col-md-5 mb-5">
					<ul class="list-group">
					  	@foreach ($purchases as $purchase)
					  		<li class="list-group-item"> {{ $purchase->product->name }} - {{ $purchase->product->price }} - Status:
					  			@foreach (\App\Models\PURCHASE::STATUS as $value => $name)
                                    @if ($purchase->status == $value)
                                        {{ $name }}
                                    @endif
                                @endforeach
					  		</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop()