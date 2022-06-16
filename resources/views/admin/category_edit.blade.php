@extends('layouts.master')

@section('content')

    <!-- Content area -->
    <div class="content">

        <div class="row my-5">
            <div class="col-lg-6 mx-lg-auto">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><b>Update Category</b></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/admin/category/update')}}" method="POST">
                            @csrf

                            <input type="hidden" value="{{$record->id}}" name="id">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" value="{{$record->name}}" name="name" required>
                                
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->

    @endsection