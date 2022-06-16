<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/admin_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="/admin_assets/css/all.min.css" rel="stylesheet" type="text/css">
	
	<script src="/admin_assets/js/main/jquery.min.js"></script>
	<script src="/admin_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/admin_assets/js/app.js"></script>
	<style>
         .text-red-600{
			color: red;
		 }
    </style>
</head>

<body>
	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="navbar-brand ml-2 ml-lg-0">
			<a href="index.html" class="d-inline-block">
				<img src="/admin_assets/global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-flex justify-content-end align-items-center ml-auto">
			<ul class="navbar-nav flex-row">
				
				<li class="nav-item">
					<a href="{{ route('register') }}" class="navbar-nav-link">
						<i class="icon-user-plus"></i>
						<span class="d-none d-lg-inline-block ml-2">Register</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('login') }}" class="navbar-nav-link">
						<i class="icon-user-lock"></i>
						<span class="d-none d-lg-inline-block ml-2">Login</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="{{ route('login') }}" method="POST">
                        @csrf
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>
								<x-jet-validation-errors class="mb-4" />
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="email" class="form-control" placeholder="User email" name="email" :value="old('email')" required>
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" placeholder="Password" name="password" required>
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in</button>
								</div>

								<div class="text-center">
									<a href="login_password_recover.html">Forgot password?</a>
								</div>
								
							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
