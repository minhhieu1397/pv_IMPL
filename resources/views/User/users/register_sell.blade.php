@extends ('layouts.submenu_user')
@section('content')
	<div class="col-md-12">
		<div class="content">
			<div class="row justify-content-md-center">
				<div class="col-md-5 mb-5">
					<div class="text-center">
						<h1>Sell</h1>
					</div>
					<img src="https://cdn.vietnambiz.vn/2019/9/23/photo1538469229007-1538469229007506284088-1569211996768349741029.jpg" alt="">
					<div class="mt-5">
						You want to be a salesman <a href="{{ route('user.change_role') }}" title="">Click on</a>
					</div>
					<div class="mt-5">
						Go to sell <a href="{{ route('shop_assistant.login') }}" title="">Click on</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop()