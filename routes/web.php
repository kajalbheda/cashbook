<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PaymentModeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookDataController;
use App\Models\BookData;

Route::get('/', function () {
    return view('login');
});


Route::get("redirects", [DashboardController::class, "redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard/{id?}', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/logout',function(){
        Session::flush(); 
        return redirect('/');
    });


    Route::get('/admin/users', [UserController::class, 'Users']);
    Route::get('/admin/users/active/{id}', [UserController::class, 'ActiveUser']);
    Route::get('/admin/users/deactive/{id}', [UserController::class, 'DeactiveUser']);
    
    Route::get('/admin/category',[CategoryController::class,'index']);
    Route::post('/admin/category/add',[CategoryController::class,'Add']);
    Route::post('/admin/category/delete',[CategoryController::class,'Delete']);
    Route::get('/admin/category/edit/{id}',[CategoryController::class,'Edit']);
    Route::post('/admin/category/update',[CategoryController::class,'Update']);
    Route::post('/admin/category/multidel',[CategoryController::class,'MultiDelete']);

    Route::get('/admin/paymentmode',[PaymentModeController::class,'index']);
    Route::post('/admin/paymentmode/add',[PaymentModeController::class,'Add']);
    Route::post('/admin/paymentmode/delete',[PaymentModeController::class,'Delete']);
    Route::get('/admin/paymentmode/edit/{id}',[PaymentModeController::class,'Edit']);
    Route::post('/admin/paymentmode/update',[PaymentModeController::class,'Update']);
    Route::post('/admin/paymentmode/multidel',[PaymentModeController::class,'MultiDelete']);


    // User Routes

    Route::post('book/create',[BookController::class,'create']);
    

    Route::post('/user/category/create',[BookController::class,'CategoryCreate'])->name('user_create_category');
    Route::post('/user/paymode/create',[BookController::class,'PaymodeCreate'])->name('user_create_paymode');

    Route::post('/bookdata/create',[BookDataController::class,'create'])->name('create_book_data');

  //  Route::get('/book/data/{id}',[BookController::class,'LoadBook']);
    Route::post('/user/bookdata/delete',[BookDataController::class,'Delete']);
    Route::post('/user/bookdata/edit/{id}',[BookDataController::class,'Edit']);

});

