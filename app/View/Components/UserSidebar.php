<?php

namespace App\View\Components;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class UserSidebar extends Component
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
        $uid=Auth::user()->id;
        $books=Book::where('user_id',$uid)->orderByRaw('created_at DESC')->get();
        return view('components.user-sidebar',['books'=>$books]);
    }
}
