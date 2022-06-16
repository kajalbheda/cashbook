
@extends('layouts.master')

@section('content')



	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-lg-inline">
			<div class="page-title d-flex" style="font-size: large">
				<b> Users </b>
			</div>

			<div class="header-elements d-none">
				<div class="d-flex justify-content-center">
				</div>
			</div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<span class="breadcrumb-item active">Users</span>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">

		<!-- Basic datatable -->
		<div class="card ">
			<div class="card-header">
				@if(session("msg"))

				<div class="alert alert-success alert-rounded alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
					<span class="font-weight-semibold">{{session("msg")}}</span>
				</div>

				@endif
			</div>

			<form action="{{url('/admin/user/multidel')}}" method="POST">
				@csrf
				<table id="users_table" class="table  table-bordered table-striped table-hover ">

					<div class="panel-heading mx-3">

					</div>
					<br>
					<thead>
						<tr>
							<th width="2%">Id</th>
							<th width="15%">Name</th>
							<th>Email</th>
							<th width="8%">Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($record as $row)
						<tr>
							<td>{{ $row['id'] }}</td>
							<td>{{ucfirst($row['name'])}}</td>
							<td><a href="mailto:{{$row['email']}}">{{$row['email']}}</a></td>
							<td>
								@if ($row->status=='inactive')
								<span class="badge badge-pink"><a style="color: white;" href='{{url("admin/users/active/{$row->id}")}}'>Inactive</a></span>
								@else
								<span class="badge badge-success"> <a style="color: white;" href='{{url("/admin/users/deactive/{$row->id}")}}'>Active</a></span>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</form>
		</div>
		<!-- /basic datatable -->
	</div>
	<!-- /content area -->



	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		//for data table
		$(function() {
			$('#users_table').DataTable({
				'columnDefs': [{
					'targets': [0, 3, 4, 5],
					/* column index */
					'orderable': false,
					/* disable sorting */
				}],
			});
		});

	</script>

@endsection