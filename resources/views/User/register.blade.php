

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
		<div class="container">
		  <div class="row justify-content-md-center">
		  	<div class="col-md-4 mt-5 pt-5">
		  		<h1>Shopping</h1>
		  		<form action="{{ route('user.register.post') }}" method="POST">
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
					    <label for="phone">Phone:</label>
					    <input class="form-control" placeholder="Enter Phone" id="phone" name="phone">
					    <p class="text-danger small text-sm mt-1 mb-0">
						    @if ($errors->has('phone'))
	                            {{ $errors->first('phone') }}
	                        @endif
                        </p>
					</div>
					<div class="form-group">
					    <label for="address">Address:</label>
					    <input class="form-control" placeholder="Enter address" id="address" name="address">
					    <p class="text-danger small text-sm mt-1 mb-0">
						    @if ($errors->has('name'))
	                            {{ $errors->first('name') }}
	                        @endif
                        </p>
					</div>
					<div class="form-group">
					    <label for="email">Email address:</label>
					    <input class="form-control" placeholder="Enter email" id="email" name="email">
					    <p class="text-danger small text-sm mt-1 mb-0">
						    @if ($errors->has('email'))
	                            {{ $errors->first('email') }}
	                        @endif
	                    </p>
					</div>
					<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
					    <p class="text-danger small text-sm mt-1 mb-0">
						    @if ($errors->has('password'))
	                            {{ $errors->first('password') }}
	                        @endif
	                    </p>
					</div>
					<div class="form-group">
					    <label for="cf_pwd">Confirm Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="cf_pwd" name="cf_pwd">
					</div>
					<div class="form-group">
					    <label class="form-check-label">
					    	You have account: <a href="{{ route('user.login') }}">login</a>
					    </label>
					</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		  	</div>
		  </div>
		</div>
	</body>
</html>