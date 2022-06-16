<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Demo Website</title>

    @include('admin.links')

</head>

<body>
    @include('admin.header')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex" style="font-size: large">
                <b> Profile </b>
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
                    <span class="breadcrumb-item active">Profile</span>
                </div>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <!-- <a href="{{url('admin/users/trash')}}" class="btn btn-outline-primary border-transparent"><i class="icon-circle-right2  mr-2"></i> GoToTrash</a> -->
                    </a>

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

        <div class="col-lg-10 mx-lg-auto">
            <div>
                <div class="">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
                    @endif

                </div>
            </div>

            <div style="visibility: hidden;">
                <x-app-layout>
                </x-app-layout>
            </div>

        </div>
    </div>

    <!-- /content area -->

    @include('admin.footer')
</body>

</html>