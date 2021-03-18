

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Login</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div>
	        <div class="top-header">
	            <h5 class="text-right">Liên hệ: Đại học Bách khoa Hà Nội, số 1 Đại Cồ Việt - Hà Nội</h5>
	        </div>
	        <nav class="navbar navbar-expand-sm header-home">
	            <a href="{{ route('user.product.index') }}" title=""><p>Home</p></a>
	            
	            <ul v-if="!jwt" class="navbar-nav ml-auto">
	                <li class="nav-item mr-3">
	                    <a href="{{ route('user.users.cart') }}" title=""><p>Cart </p></a>
	                </li>
	                <li class="nav-item ">
	                    <a href="{{ route('user.register_sell') }}">Sell</a>
	                </li>
	            </ul>
	            <ul v-else class="navbar-nav ml-auto">
	                <li class="nav-item font-site16">
	                    <a href="{{ route('user.logout') }}" title=""><p>Logout </p></a>
	                </li>
	            </ul>
	        </nav>
	        <hr>
	        <br>
	        <div class="container-fluid">
	            <div class="row" style="min-height: 400px;">
	               	@yield('content')
	            </div>
	        </div>
	        <footer class="page-footer font-small blue pt-4 footer-home">
	            <div class="container-fluid text-center text-md-left">
	                <div class="row">
	                    <div class="col-md-6 mt-md-0 mt-3">
	                        <h5 class="text-uppercase">Shopping</h5>
	                    </div>
	                    <hr class="clearfix w-100 d-md-none pb-3">
	                    <div class="col-md-3 mb-md-0 mb-3">
	                        <h5 class="text-uppercase">Address</h5>
	                        <ul class="list-unstyled">
	                            <li>
	                                phone: 0123456789
	                            </li>
	                            <li>
	                                Email: Minhhieu97.hust@gmail.com
	                            </li>
	                            <li>
	                                adđd: Số 1, Đại Cồ Việt
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="col-md-3 mb-md-0 mb-3">
	                        <h5 class="text-uppercase">HH</h5>
	                        <ul class="list-unstyled">
	                            <li>
	                                <i class="fa fa-facebook-official" style="font-size:24px"></i> :
	                                <a href="#!">Facebook</a>
	                            </li>
	                            <li>
	                                <i class="fa fa-instagram" aria-hidden="true" style="font-size:24px"></i> :
	                                <a href="#!">Instagram</a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <div class="footer-copyright text-center py-3">© 2020 create by:
	                Hieu40
	            </div>
	        </footer>
	    </div>
	</body>
</html>