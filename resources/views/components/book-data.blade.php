 <!-- Page header -->
 <style>
     .breadcrumb-item+.breadcrumb-item::before {
         float: left;
         padding-right: 0.625rem;
         color: inherit;
         content: "|";
     }
 </style>

 <div class="page-header page-header-light">
     {{-- <div class="page-header-content header-elements-lg-inline">
         <div class="page-title d-flex" style="font-size: large">
             <h2> <b> Book Name</b></h2>
             </h3> &nbsp;&nbsp;&nbsp;
             <a href=""> <i class="icon-gear mr-2 icon-2x"></i> </a>| &nbsp;&nbsp;&nbsp;
             <a href=""> <i class="icon-user-plus icon-2x"></i></a>
         </div>

         <div class="header-elements d-none">
             <div class="d-flex justify-content-center">

             </div>
         </div>
     </div> --}}

     <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
         <div class="d-flex">
             <div class="breadcrumb">
                 <h4>
                     <a href="" class="breadcrumb-item"> Book Name &nbsp;</a>
                     <a href="" class="breadcrumb-item"> <i class="icon-gear mr-2 "></i></a>
                     <a href="" class="breadcrumb-item"> <i class="icon-user-plus"></i></a>
                 </h4>
             </div>
         </div>

     </div>
 </div>
 <!-- /page header -->



 <!-- table area -->


 <div class="content">


     <!-- Dashboard content -->
     <div class="row">
         <div class="col-xl-12">

             <!-- Quick stats boxes -->
             <div class="row">
                 <div class="col-lg-3 ">
                     <!-- cashin -->
                     <div class="card bg-teal text-white">
                         <div class="card-body text-center">
                             <div>
                                 <i class="icon-plus-circle2"></i> Cash In
                             </div>
                             <div class="text-center">
                                 <h3 class="font-weight-semibold mb-0">0.00</h3>
                             </div>
                         </div>
                     </div>
                     <!-- /cashin -->

                 </div>
                 <div class="col-md-1"></div>
                 <div class="col-lg-3">
                     <!-- Current server load -->
                     <div class="card bg-pink text-white">
                         <div class="card-body text-center">
                             <div>
                                 <i class="icon-minus-circle2"></i> Cash Out
                             </div>
                             <div class="text-center">
                                 <h3 class="font-weight-semibold mb-0">0.00</h3>
                             </div>
                         </div>
                     </div>
                     <!-- /current server load -->

                 </div>
                 <div class="col-md-1"></div>
                 <div class="col-lg-3">
                     <!-- Today's revenue -->
                     <div class="card bg-primary text-white">
                         <div class="card-body text-center">
                             <div><i class="fas fa-equals mr-3 "></i>
                                 Net Balence
                             </div>
                             <div class="text-center">
                                 <h3 class="font-weight-semibold mb-0">0.00</h3>
                             </div>
                         </div>
                     </div>
                     <!-- /today's revenue -->

                 </div>
             </div>
             <!-- /quick stats boxes -->
         </div>
     </div>
     <!-- /dashboard content -->

     <!-- Striped rows -->
     <div class="card">
         <div class="card-header my-3">
             {{-- book id= {{ $book_id }} --}}
             {{-- <div class="row">
                 <div class="col-md-11"> --}}
                   
 
                     <form action="filter-data" method="get">
                         <div class="row">
                             <div class="form-group col-md-2">
                                 <label>Duration:</label>
                                 <select class="form-control select select2-hidden-accessible " data-fouc=""
                                     aria-hidden="true" name="duration">
                                     <option value="alltime">All Time</option>
                                     <option value="today">Today</option>
                                     <option value="yesterday">Yesterday</option>
                                     <option value="this_month">This Month</option>
                                     <option value="last_month">Last Month</option>
                                 </select>
                             </div>
                             <div class="form-group col-md-1">
                                 <label>Types:</label>
                                 <select class="form-control select select2-hidden-accessible " data-fouc=""
                                     aria-hidden="true" name="types">
                                     <option value="all">All</option>
                                     <option value="cashin">Cash In</option>
                                     <option value="cashout">Cash Out</option>
                                 </select>
                             </div>
                             <div class="form-group col-md-1">
                                 <label>Members:</label>
                                 <select class="form-control select select2-hidden-accessible " data-fouc=""
                                     aria-hidden="true" name="member">
                                     <option value="all">All</option>
                                     <option value="cashin">You</option>
                                     <option value="cashout">Other name</option>
                                 </select>
                             </div>

                             <div class="form-group col-md-3">
                                 <label>Payment Modes</label>
                                 <select multiple="multiple" class="form-control select" data-fouc name="paymode">
                                     <option value="all" selected>All</option>

                                     @foreach ($paymode as $pm)
                                         <option value="{{ $pm->id }}">{{ $pm->name }}</option>
                                     @endforeach
                                 </select>
                             </div>

                             <div class="form-group col-md-3">
                                 <label>Categories</label>
                                 <select multiple="multiple" class="form-control select" data-fouc name="category">
                                     <option value="all" selected>All</option>
                                     @foreach ($category as $cat)
                                         <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                     @endforeach
                                 </select>
                             </div>

                             <button type="submit" class="btn btn-light">Filter</button>

                         </div>
                     </form>
                 {{-- </div>
                 <div class="col-md-1">
                     <button class="btn btn-success " data-toggle="modal" data-target="#panel_cashin"><i
                             class="icon-plus3 "></i> Cash In </button> <br>
                     <button class="btn btn-danger" data-toggle="modal" data-target="#panel_cashout"><i
                             class="icon-minus3 "></i> Cash Out </button>
                 </div>
             </div> --}}
         </div>
         {{-- ################################################################################################# --}}
         <div class="card-body">
             <button class="btn btn-success " data-toggle="modal" data-target="#panel_cashin"><i
                     class="icon-plus3 "></i> Cash In </button>
             &nbsp;&nbsp;
             <button class="btn btn-danger" data-toggle="modal" data-target="#panel_cashout"><i
                     class="icon-minus3 "></i> Cash Out </button>
         </div>

         <div class="table-responsive">
             <table class="table table-striped" id="book">
                 <thead>
                     <tr>
                         <th>Date & Time</th>
                         <th>Remark</th>
                         <th>Category</th>
                         <th>Mode</th>
                         <th>Image</th>
                         <th>Amount</th>
                         <th>Balance</th>
                         <th>Actoions</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($bookdata as $bookdata)
                         <tr>
                             <td>{{ $bookdata->transaction_date }} <br><span class="text-muted">
                                     {{ $bookdata->transaction_time }}</span></td>
                             <td>{{ $bookdata->remark }}</td>
                             <td>{{ $bookdata->category->name }}</td>
                             <td>
                                 @if ($bookdata->payment_mode_id)
                                     {{ $bookdata->payment_mode->name }}
                                 @else
                                     -
                                 @endif
                             </td>
                             <td>
                                 @if ($bookdata->attachment)
                                     <img src="/bills/{{ $bookdata->attachment }}" height="80" width="100"
                                         alt="Bill">
                                 @else
                                     -
                                 @endif
                             </td>
                             <td>{{ $bookdata->amount }}</td>
                             <td>{{ $bookdata->amount }}</td>
                             <td> 
                                <a href='{{ url("/user/bookdata/edit/{$bookdata->id}") }}'
                                    class="list-icons-item text-indigo" data-popup="tooltip" title=""
                                    data-original-title="Edit"><i class="icon-pencil7"></i></a>&nbsp;
                                <a href="javascript:delete_record({{ $bookdata->id }},'/user/bookdata/delete','Deleted');"
                                    id="{{ $bookdata->id }}" class="list-icons-item text-danger" data-popup="tooltip"
                                    title="" data-original-title="Delete"><i class="icon-trash "></i> </a>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
     <!-- /striped rows -->
 </div>


 <!-- /table area -->

 <!-- cash in panel -->
 <div id="panel_cashin" class="modal modal-right fade" tabindex="-1">
     <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
             <div class="modal-header bg-transparent border-0 align-items-center">
                 <h5 class="modal-title font-weight-semibold">Add Cash In Entry</h5>
                 <button type="button" class="btn btn-icon btn-light btn-sm border-0 rounded-pill ml-auto"
                     data-dismiss="modal"><i class="icon-cross2"></i></button>
             </div>

             <div class="modal-body p-0">

                 <div class="card">

                     <div class="card-body">
                         <div class="row">
                             <div class="col-lg-10 offset-lg-1">
                                 <form action="{{ route('create_book_data') }}" method="POST"
                                     enctype="multipart/form-data">
                                     @csrf
                                     <div class="row">
                                         <div class="form-group col-md-6">
                                             <label>Date</label>
                                             <input type="date" id="today" class="form-control"
                                                 name="entry_date">
                                         </div>
                                         <div class="form-group col-md-6 align-right">
                                             <label>Time</label>
                                             <input type="time" id="t_time" class="form-control"
                                                 name="entry_time">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <input type="hidden" name="cash_in" value="1">
                                     </div>

                                     <div class="form-group">
                                         <label>Amount: (required)</label>
                                         <input type="text" class="form-control" placeholder="eg. 1000 "
                                             name="amount">
                                     </div>

                                     <div class="form-group">
                                         <label>Remark</label>
                                         <input type="text" class="form-control"
                                             placeholder="eg. Enter Details(Name, Bill No, Item Name etc) "
                                             name="remark">
                                     </div>

                                     <div class="form-group">
                                         <label class="d-block">Category</label>
                                         <select data-placeholder="Select a Category..."
                                             class="form-control select select2-hidden-accessible" name="category">

                                             @foreach ($category as $cat)
                                                 <option value=""></option>
                                                 <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                             @endforeach
                                             <option> <button type="button" class="btn btn-light"
                                                     data-toggle="modal" data-target="#addcategory"> Add New
                                                     Category</button></option>
                                         </select>
                                         <button type="button" class="btn btn-light" data-toggle="modal"
                                             data-target="#addcategory"> Add New Category</button>
                                     </div>

                                     <div class="form-group">
                                         <label class="d-block">Payment Mode</label>
                                         <select data-placeholder="Select a Payment Mode..."
                                             class="form-control select select2-hidden-accessible" name="paymode">

                                             @foreach ($paymode as $pm)
                                                 <option value=""></option>
                                                 <option value="{{ $pm->id }}">{{ $pm->name }}</option>
                                             @endforeach
                                         </select>
                                         <button type="button" class="btn btn-light" data-toggle="modal"
                                             data-target="#addpaymode"> Add New PaymentMode</button>
                                     </div>


                                     {{-- <div class="form-group">
                                         <label>Payment Mode:</label>
                                         <select class="form-control form-control-select2 select2-hidden-accessible"
                                             data-fouc="" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                             <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="45">
                                                 <option value="AK" data-select2-id="3">Alaska</option>
                                                 <option value="HI" data-select2-id="46">Hawaii</option>
                                             </optgroup>
                                             <optgroup label="Pacific Time Zone" data-select2-id="47">
                                                 <option value="CA" data-select2-id="48">California</option>
                                                 <option value="NV" data-select2-id="49">Nevada</option>
                                                 <option value="WA" data-select2-id="50">Washington</option>
                                             </optgroup>
                                             <optgroup label="Mountain Time Zone" data-select2-id="51">
                                                 <option value="AZ" data-select2-id="52">Arizona</option>
                                                 <option value="CO" data-select2-id="53">Colorado</option>
                                                 <option value="WY" data-select2-id="54">Wyoming</option>
                                             </optgroup>
                                             <optgroup label="Central Time Zone" data-select2-id="55">
                                                 <option value="AL" data-select2-id="56">Alabama</option>
                                                 <option value="AR" data-select2-id="57">Arkansas</option>
                                                 <option value="KY" data-select2-id="58">Kentucky</option>
                                             </optgroup>
                                             <optgroup label="Eastern Time Zone" data-select2-id="59">
                                                 <option value="CT" data-select2-id="60">Connecticut</option>
                                                 <option value="DE" data-select2-id="61">Delaware</option>
                                                 <option value="FL" data-select2-id="62">Florida</option>
                                             </optgroup>
                                         </select><span
                                             class="select2 select2-container select2-container--default select2-container--above"
                                             dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                 class="selection"><span
                                                     class="select2-selection select2-selection--single" role="combobox"
                                                     aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                     aria-disabled="false"
                                                     aria-labelledby="select2-4tqp-container"><span
                                                         class="select2-selection__rendered" id="select2-4tqp-container"
                                                         role="textbox" aria-readonly="true"
                                                         title="Alaska">Alaska</span><span
                                                         class="select2-selection__arrow" role="presentation"><b
                                                             role="presentation"></b></span></span></span><span
                                                 class="dropdown-wrapper" aria-hidden="true"></span></span>
                                     </div> --}}


                                     <div class="form-group">
                                         <label>Attach Bill:</label>
                                         <label class="custom-file">
                                             <input type="file" class="custom-file-input" name="bill">
                                             <span class="custom-file-label">Choose file</span>
                                         </label>

                                     </div>

                                     <div class="text-right">
                                         <button type="submit" class="btn btn-primary">Save <i
                                                 class="icon-paperplane ml-2"></i></button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- /large panel -->


 <!-- cash out panel -->
 <div id="panel_cashout" class="modal modal-right fade" tabindex="-1">
     <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
             <div class="modal-header bg-transparent border-0 align-items-center">
                 <h5 class="modal-title font-weight-semibold">Add Cash Out Entry</h5>
                 <button type="button" class="btn btn-icon btn-light btn-sm border-0 rounded-pill ml-auto"
                     data-dismiss="modal"><i class="icon-cross2"></i></button>
             </div>

             <div class="modal-body p-0">

                 <div class="card">

                     <div class="card-body">
                         <div class="row">
                             <div class="col-lg-10 offset-lg-1">
                                 <form action="{{ route('create_book_data') }}" method="POST"
                                     enctype="multipart/form-data">
                                     @csrf
                                     <div class="row">
                                         <div class="form-group col-md-6">
                                             <label>Date</label>
                                             <input type="date" id="todayout" class="form-control"
                                                 name="entry_date">
                                         </div>
                                         <div class="form-group col-md-6 align-right">
                                             <label>Time</label>
                                             <input type="time" id="out_time" class="form-control"
                                                 name="entry_time">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <input type="hidden" name="cash_out" value="1">
                                     </div>

                                     <div class="form-group">
                                         <label>Amount: (required)</label>
                                         <input type="text" class="form-control" placeholder="eg. 1000 "
                                             name="amount">
                                     </div>

                                     <div class="form-group">
                                         <label>Remark</label>
                                         <input type="text" class="form-control"
                                             placeholder="eg. Enter Details(Name, Bill No, Item Name etc) "
                                             name="remark">
                                     </div>

                                     <div class="form-group">
                                         <label class="d-block">Category</label>
                                         <select data-placeholder="Select a Category..."
                                             class="form-control select select2-hidden-accessible" name="category">

                                             @foreach ($category as $cat)
                                                 <option value=""></option>
                                                 <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                             @endforeach
                                             <option> <button type="button" class="btn btn-light"
                                                     data-toggle="modal" data-target="#addcategory"> Add New
                                                     Category</button></option>
                                         </select>
                                         <button type="button" class="btn btn-light" data-toggle="modal"
                                             data-target="#addcategory"> Add New Category</button>
                                     </div>

                                     <div class="form-group">
                                         <label class="d-block">Payment Mode</label>
                                         <select data-placeholder="Select a Payment Mode..."
                                             class="form-control select select2-hidden-accessible" name="paymode">

                                             @foreach ($paymode as $pm)
                                                 <option value=""></option>
                                                 <option value="{{ $pm->id }}">{{ $pm->name }}</option>
                                             @endforeach
                                         </select>
                                         <button type="button" class="btn btn-light" data-toggle="modal"
                                             data-target="#addpaymode"> Add New PaymentMode</button>
                                     </div>

                                     <div class="form-group">
                                         <label>Attach Bill:</label>
                                         <label class="custom-file">
                                             <input type="file" class="custom-file-input" name="bill">
                                             <span class="custom-file-label">Choose file</span>
                                         </label>

                                     </div>

                                     <div class="text-right">
                                         <button type="submit" class="btn btn-primary">Save <i
                                                 class="icon-paperplane ml-2"></i></button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- /large panel -->

 <!-- Modal category -->
 <div class="modal fade" id="addcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <form action="{{ route('user_create_category') }}" method="POST">
                     @csrf
                     <div class="modal-body">
                         <div class="form-group">
                             <div class="row">
                                 <label>Category name</label>
                                 <input type="text" placeholder="Category Name" name="category_name"
                                     class="form-control">
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


 <!-- Modal payment mode -->
 <div class="modal fade" id="addpaymode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Create Payment Mode</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <form action="{{ route('user_create_paymode') }}" method="POST">
                     @csrf
                     <div class="modal-body">
                         <div class="form-group">
                             <div class="row">
                                 <label>Payment Mode Name:</label>
                                 <input type="text" placeholder="Payment Mode Name" name="paymode_name"
                                     class="form-control">
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
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });

     //for data table
     $(function() {
         $('#book').DataTable({
             'columnDefs': [{
                 'targets': [4, 7],
                 /* column index */
                 'orderable': false,
                 /* disable sorting */
             }],
         });
     });

     document.getElementById('today').value = moment().format('YYYY-MM-DD');
     document.getElementById('todayout').value = moment().format('YYYY-MM-DD');

     var currentdate = new Date();
     var time = currentdate.getHours() + ":" + currentdate.getMinutes();
     document.getElementById('t_time').value = time;
     document.getElementById('out_time').value = time;
 </script>
