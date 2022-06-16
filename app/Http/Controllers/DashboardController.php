<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     if (Auth::id()) {
    //         return redirect('redirects');
    //     } else {
    //         return view("welcome");
    //     }
    // }

    public function redirects($id=null)
    {
        $userType = Auth::user()->isadmin;

        if ($userType == 1) {
            return view('admin.dashboard');
        } else { 
            
            return view('dashboard',['book_id'=>$id]);
        }
    }
}
