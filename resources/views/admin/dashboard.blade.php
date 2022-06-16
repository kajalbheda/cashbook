@extends('layouts.master')

@section('content')
	<!-- Content area -->
	<div class="content my-5 mx-5">

		<!-- Dashboard content -->
		<div class="row">
			<div class="col-xl-8">

				<!-- Quick stats boxes -->
				<div class="row">
					<div class="col-lg-4">

						<!-- Members online -->
						<div class="card bg-teal text-white">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">3,450</h3>
									<span class="badge badge-dark badge-pill align-self-center ml-auto">+53,6%</span>
								</div>

								<div>
									Members online
									<div class="font-size-sm opacity-75">489 avg</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="members-online"></div>
							</div>
						</div>
						<!-- /members online -->

					</div>
					
				</div>
				<!-- /quick stats boxes -->
			</div>
		</div>
		<!-- /dashboard content -->
	</div>
	<!-- /content area -->


@endsection