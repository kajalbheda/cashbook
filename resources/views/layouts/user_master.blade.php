<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="/admin_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">

    <link href="/admin_assets/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/admin_assets/js/main/jquery.min.js"></script>
    <script src="/admin_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/admin_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="/admin_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/admin_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/admin_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="/admin_assets/js/app.js"></script>
    <script src="/admin_assets/js/dashboard.js"></script>
    <script src="/admin_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="/admin_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
    <script src="/admin_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="/admin_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/admin_assets/js/form_select2.js"></script>

    <script src="/admin_assets/js/components_modals.js"></script>

	<!-- <script src="/admin_assets/js/plugins/notifications/sweet_alert.min.js"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/admin_assets/js/custom.js"></script>

    <!-- /theme JS files -->
    

</head>

<body class="font-sans antialiased">

    @include('layouts.includes.userheader')

	<!-- Content area -->
	
        @yield('content')
    
	<!-- /content area -->

    @include('layouts.includes.adminfooter')
</body>

</html>
