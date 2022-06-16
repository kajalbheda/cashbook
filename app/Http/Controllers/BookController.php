<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\PaymentMode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function create(Request $request){
        //dd($request->toArray());
        $user_id=Auth::user()->id;
        
        $book = new Book;
        $book->user_id=$user_id;
        $book->name = $request->bookname;
        $book->save();
        return redirect()->back();
    }

    public function CategoryCreate(Request $request){
        $user_id=Auth::user()->id;
        
        $cat = new Category();
        $cat->user_id=$user_id;
        $cat->name = $request->category_name;
        $cat->save();
        return redirect()->back();
    }

    public function PaymodeCreate(Request $request){
        $user_id=Auth::user()->id;
        
        $pm = new PaymentMode;
        $pm->user_id=$user_id;
        $pm->name = $request->paymode_name;
        $pm->save();
        return redirect()->back();
    }

    public function LoadBook($id){
        return view('dashboard',['book_id'=>$id]);
    }
}
