<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static">
	<div class="d-flex flex-1 d-lg-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-paragraph-justify3"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-transmission"></i>
		</button>
	</div>

	<div class="navbar-brand text-center text-lg-left">
		<a href="index.html" class="d-inline-block">
			<img src="/admin_assets/images/logo_light.png" class="d-none d-sm-block" alt="">
			<img src="/admin_assets/images/logo_icon_light.png" class="d-sm-none" alt="">
		</a>
	</div>

	<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
	</div>

	<ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
		
		 <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
			


			<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
				<img src="/admin_assets/images/placeholders/placeholder.jpg" class="rounded-pill mr-lg-2" height="40px" width="40px" alt="profile">
				<span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
			</a>

			<div class="dropdown-menu dropdown-menu-right">
				<a href="{{url('admin/profile')}}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>

				<a href="{{url('/admin/changepwd')}}" class="dropdown-item"><i class="icon-cog5"></i> Change Password</a>
				<a href="{{url('/logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
			</div>
		</li>
	</ul>
</div>
<!-- /main navbar -->

<!-- Page content -->
<div class="page-content">

	@include('layouts.includes.admin_sidebar')

	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Inner content -->
		<div class="content-inner">