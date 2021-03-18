@extends ('layouts.submenu_shop_assistant')
@section('content')
	<div class="col-md-12">
		<div class="content personal">
			<div class="row justify-content-md-center">
				<div class="col-md-5 mb-5">
					<ul class="list-group">
						@foreach ($purchases as $purchase)
					  		<li class="list-group-item"> {{ $purchase->user->name }} - {{ $purchase->user->phone }} - {{ $purchase->user->address }} - {{ $purchase->product->name }} - {{ $purchase->product->price }} - Status:
					  			@foreach (\App\Models\PURCHASE::STATUS as $value => $name)
                                    @if ($purchase->status == $value)
                                        {{ $name }}
                                    @endif
                                @endforeach
                                <form action="{{ route('user.purchases.updateStatus', $purchase['id']) }}" method="POST">
                                	{{ csrf_field() }}
                                	{{ method_field('PUT') }}
                                	<div class="form-group" style="max-width: 150px;">
									    <label for="status">Select Status</label>
									    <select class="form-control" name="status" id="status">
									    	@foreach (\App\Models\PURCHASE::STATUS as $value => $name)
									      		<option value="{{ $value }}">{{ $name }}</option>
			                                @endforeach
									    </select>
									    <button type="submit" class="btn btn-primary my-1">Change</button>
									  </div>
                                </form>
					  		</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop()