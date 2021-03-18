@extends ('layouts.submenu_shop_assistant')
@section('content')
	<div class="col-md-12">
		<div class="content personal">
			<div class="row justify-content-md-center">
				<div class="col-md-5 mb-5">
					<h1>Create Product</h1>
					<form action="{{ route('shop_assistant.product.store') }}" method="POST">
			  			{{ csrf_field() }}
			  			<div class="form-group">
						    <label for="name">Name:</label>
						    <input class="form-control" placeholder="Enter Name" id="name" name="name">
						    <p class="text-danger small text-sm mt-1 mb-0">
							    @if ($errors->has('name'))
		                            {{ $errors->first('name') }}
		                        @endif
	                        </p>
						</div>
						<div class="form-group">
						    <label for="price">Price:</label>
						    <input class="form-control" placeholder="Enter price" id="price" name="price">
						    <p class="text-danger small text-sm mt-1 mb-0">
							    @if ($errors->has('price'))
		                            {{ $errors->first('price') }}
		                        @endif
		                    </p>
						</div>
						<div class="form-group">
						    <label for="description">Description:</label>
						    <input class="form-control" placeholder="Enter description" id="description" name="description">
						    <p class="text-danger small text-sm mt-1 mb-0">
							    @if ($errors->has('description'))
		                            {{ $errors->first('description') }}
		                        @endif
		                    </p>
						</div>
					  	<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop()