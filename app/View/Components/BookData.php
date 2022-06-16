<?php

namespace App\View\Components;

use App\Models\BookData as ModelsBookData;
use App\Models\User;
use App\Models\Category;
use App\Models\PaymentMode;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BookData extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $admin_id=User::where('isadmin',1)->pluck('id');
    
        $category=Category::where('user_id',$admin_id)->orwhere('user_id',Auth::user()->id)->get();
        $paymode=PaymentMode::where('user_id',$admin_id)->orwhere('user_id',Auth::user()->id)->get();

        $bookdata=ModelsBookData::all();
 

        return view('components.book-data',['category'=>$category,'paymode'=>$paymode, 'bookdata'=>$bookdata]);
    }
}
