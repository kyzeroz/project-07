<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('authen/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
					<span class="login100-form-title">
						Reset Password
					</span>
                    
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter Email">
						<input class="input100" type="email" name="email" placeholder="Email" value="{{ $request->email }}" >
						<span class="focus-input100"></span>
					</div>
					
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required autocomplete="new-password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Confirm Password">
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
						<span class="focus-input100"></span>
					</div>
                        

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Reset Password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('authen/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('authen/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/js/main.js')}}"></script>

</body>
</html>