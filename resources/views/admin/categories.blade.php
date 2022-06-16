@extends('layouts.master')

@section('content')
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex" style="font-size: large">
                <b> Categoriess </b>
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
                    <span class="breadcrumb-item active">Categories</span>
                </div>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    {{-- <a href="#" class="breadcrumb-elements-item">
                        <a href="{{ url('admin/users/trash') }}" class="btn btn-outline-primary border-transparent"><i
                                class="icon-circle-right2  mr-2"></i> GoToTrash</a>
                    </a> --}}

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                        </div>
                    </div>
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
                @if (session('msg'))
                    <div class="alert alert-success alert-rounded alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">{{ session('msg') }}</span>
                    </div>
                @endif
            </div>

            <form action="" method="POST">
                @csrf
                <table id="category-table" class="table  table-bordered table-striped table-hover ">

                    <div class="panel-heading mx-3">
                        <a class="btn btn-primary " data-toggle="modal" data-target="#exampleModal"> Add New <i
                                class="icon-plus-circle2 position-right"></i></a>
                        <!-- <button class="btn btn-danger" id="delete_selected"> Delete Selected <i class=" icon-trash position-right"></i></button> -->

                        <a href="javascript:delete_selected('delete','/admin/category/multidel');" id="delete_selected" class="btn btn-danger"
                            id="delete_selected"> Delete Selected <i class=" icon-trash position-right"></i></a>
                    </div>
                    <br>
                    <thead>
                        <tr>
                            <th width="2%">
                                <label class="custom-control custom-control-danger custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input checkBoxClass" id="CheckAll"
                                        onclick="checkall()">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <th>Name</th>

                            <th width="8%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($record as $row)
                            <tr>
                                <td>
                                    <label class="custom-control custom-control-danger custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input checkbox checkBoxClass"
                                            name="multidel[]" id="{{ $row['id'] }}">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>{{ ucfirst($row['name']) }}</td>

                                <td class="text-center">

                                    <a href='{{ url("/admin/category/edit/{$row->id}") }}'
                                        class="list-icons-item text-indigo" data-popup="tooltip" title=""
                                        data-original-title="Edit"><i class="icon-pencil7"></i></a>&nbsp;
                                    <a href="javascript:delete_record({{ $row->id }},'/admin/category/delete','Deleted');"
                                        id="{{ $row->id }}" class="list-icons-item text-danger" data-popup="tooltip"
                                        title="" data-original-title="Delete"><i class="icon-trash "></i> </a>

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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/admin/category/add" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <label>Name</label>
                                    <input type="text" placeholder="Category Name" name="catname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit form</button>
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
            $('#category-table').DataTable({
                'columnDefs': [{
                    'targets': [0, 2],
                    /* column index */
                    'orderable': false,
                    /* disable sorting */
                }],
            });
        });


    </script>
@endsection
