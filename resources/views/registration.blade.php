<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/admin_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="/admin_assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="/admin_assets/js/main/jquery.min.js"></script>
	<script src="/admin_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="/admin_assets/js/app.js"></script>
	<!-- /theme JS files -->
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
					<a href="#" class="navbar-nav-link">
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
					
					<!-- Registration form -->
					<form action="{{ route('register') }}" class="flex-fill" method="POST">
						
						@csrf
						<div class="row">
							<div class="col-lg-6 offset-lg-3">
								<div class="card mb-0">
									<div class="card-body">
										<div class="text-center mb-3">
											<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-pill p-3 mb-3 mt-1"></i>
											<h5 class="mb-0">Create account</h5>
											<span class="d-block text-muted">All fields are required</span>
										</div>
										<div class="text-center mb-3">
										<x-jet-validation-errors/>
									</div >
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="text" class="form-control" name="name" placeholder="Your name" :value="old('name')" required >
											<div class="form-control-feedback">
												<i class="icon-user-plus text-muted"></i>
											</div>
										</div>

										

                                        <div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="email" class="form-control" name="email" placeholder="Your email" :value="old('email')" required >
													<div class="form-control-feedback">
														<i class="icon-mention text-muted"></i>
													</div>
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control" name="phone" placeholder="Phone" :value="old('phone')" required>
													<div class="form-control-feedback">
														<i class="icon-phone text-muted"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="password" class="form-control" name="password" placeholder="Create password" required>
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted"></i>
													</div>
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" required>
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted"></i>
													</div>
												</div>
											</div>
										</div>


										<div class="form-group mb-0">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" name="remember" class="custom-control-input">
												<span class="custom-control-label">Accept <a href="#">&nbsp;terms of service</a></span>
											</label>
										</div>
									</div>

									<div class="card-footer bg-transparent text-right">
										<button type="submit" class="btn btn-teal btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- /registration form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
						</span>

						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
							<li class="nav-item"><a href="https://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
							<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
