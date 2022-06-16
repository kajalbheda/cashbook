	<!-- Main sidebar -->
	<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

	    <!-- Sidebar content -->
	    <div class="sidebar-content">

	        <!-- User menu -->
	        <div class="sidebar-section sidebar-user my-1">
	            <div class="sidebar-section-body">
	                <div class="media">
	                    <a href="#" class="mr-3">
	                        <img src="/admin_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
	                    </a>

	                    <div class="media-body">
	                        <div class="font-weight-bold">{{ Auth::user()->name }}</div>  
	                    </div>

	                    <div class="ml-3 align-self-center">
	                        <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
	                            <i class="icon-transmission"></i>
	                        </button>

	                        <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
	                            <i class="icon-cross2"></i>
	                        </button>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- /user menu -->

	        <!-- Main navigation -->
	        <div class="sidebar-section">
	            <ul class="nav nav-sidebar" data-nav-type="accordion">

	                <!-- Main -->
	                <li class="nav-item-header">
	                    
	                </li>

                    <li class="nav-item   nav-item-open" data-toggle="modal" data-target="#exampleModal">
                        <a href="#" class="nav-link"><i class="icon-plus-circle2" ></i> <span>Create New Book</span></a> 
                    </li>
                    

					@foreach ($books as $book)
					
	                <li class="nav-item" >
	                    <a href="{{url("/book/data/{$book->id}")}}" class="nav-link ">
	                        <i class="icon-bookmark"></i>
	                        <span>
	                            {{ $book->name }} <br><span class="text-muted"> Created:{{$book->created_at }}</span>
	                        </span>
	                    </a>
	                </li>
					@endforeach
	               
	                <!-- /main -->
	            </ul>
	        </div>
	        <!-- /main navigation -->

	    </div>
	    <!-- /sidebar content -->

	</div>
	<!-- /main sidebar -->

{{-- ---------------------------------------------------------------------------------------}}

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Book</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form action="book/create" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                                <label>Book name</label>
                                <input type="text" placeholder="Book Name" name="bookname" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
    
  <script>

var currentdate = new Date();
var datetime = "Last Sync: " + currentdate.getDay() + "/" + currentdate.getMonth() 
+ "/" + currentdate.getFullYear() ;

	</script>