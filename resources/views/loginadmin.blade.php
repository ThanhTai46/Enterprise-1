{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('BE/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('BE/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/vendor/select2/select2.min.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('BE/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('BE/css/main.css')}}">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login Admin
					</span>
					<form action="{{URL('executeLoginAdmin')}}" method="post">
						@csrf
						<div class="wrap-input100">
							<input class="input100" type="email" name="admin_email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="admin_password">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
						<div class="flex-sb-m w-full p-t-3 p-b-32">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									Remember me
								</label>
							</div>
							<div>
								<a href="" class="txt1">
									Forgot Password?
								</a>
							</div>
						</div>
						<div>
							<a href="" class="login100-form-social-item flex-c-m bg3 m-r-5">
								<i class="fa fa-google" aria-hidden="true"></i>
							</a>
							<a href="" class="login100-form-social-item flex-c-m bg2 m-r-5">
								<i class="fa fa-github" aria-hidden="true"></i>
							  </a>
						</div>
					</form>
			</div>
				<div class="login100-more" style="background-image: url('BE/images/1.jpeg');">
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('BE/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('BE/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('BE/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('BE/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('BE/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('BE/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('BE/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('BE/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('BE/js/main.js')}}"></script>
</body>
</html> --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('AdminTemplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminTemplate/dist/css/adminlte.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background : no-repeat url('https://images.unsplash.com/photo-1509023464722-18d996393ca8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'); background-size: cover;">
<div class="login-box">
  <div class="login-logo">
    <h1 style="text-shadow: 3px 3px #f1f1f1;">Admin</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
	  	<?php
			$message = Session::get('message');
			if ($message){
				echo "<center><font color=red>$message</font></center>";
				Session::put('message',null);
			}
		?>
		<form  action="{{ROUTE('login')}}" method="post" >
			@csrf
			<div class="input-group mb-3">
			<input type="email" name="admin_email" class="form-control" placeholder="Email">
			<div class="input-group-append">
				<div class="input-group-text">
				<span class="fas fa-envelope"></span>
				</div>
			</div>
			</div>
			<div class="input-group mb-3">
			<input type="password" name="admin_password" class="form-control" placeholder="Password">
			<div class="input-group-append">
				<div class="input-group-text">
				<span class="fas fa-lock"></span>
				</div>
			</div>
			</div>
			<div class="row">
			{{-- <div class="col-8">
				<div class="icheck-primary">
				<input type="checkbox" id="remember">
				<label for="remember">
					Remember Me
				</label>
				</div>
			</div> --}}
			<!-- /.col -->
			<div class="col-4 d-inline-flex justify-content-end">
				<button type="submit" class="btn btn-primary btn-block">Sign In</button>
			</div>
			<!-- /.col -->
			</div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{asset('AdminTemplate/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminTemplate/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminTemplate/dist/js/adminlte.js')}}"></script>
</body>
</html>
