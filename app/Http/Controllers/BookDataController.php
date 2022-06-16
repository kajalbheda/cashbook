<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\BookData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class BookDataController extends Controller
{
    public function create(Request $request)
    { 
        //dd($request->toArray());
        $fileName=null;
        if ($request->hasFile('bill')) {
            $fileName = time() . '.' . $request->bill->extension();
            echo $fileName;
            $request->bill->move(public_path('bills'), $fileName);
        }
      
        $cashin=0;
        $cashout=0;
        if($request->cash_in==1){
           $cashin=$request->amount;
        }
        if($request->cash_out==1){
            $cashout=$request->amount;
        }
       
     

        $user_id = Auth::user()->id;

        $activity = new BookData;

        $activity->category_id = $request->category;
        $activity->payment_mode_id  = $request->paymode;
        $activity->user_id   = $user_id;
        $activity->remark   = $request->remark;
        $activity->amount   = $request->amount;
        $activity->cash_in   = $cashin;
        $activity->cash_out   = $cashout;
        $activity->attachment   = $fileName;
        $activity->transaction_date   = $request->entry_date;
        $activity->transaction_time   = $request->entry_time;
        $activity->book_id  = 1;
        $activity->save();
        return redirect()->back();
    }

    public function Delete(Request $request){
        $id=$request->id;
        BookData::where('id',$id)->delete();
        return true;
    }
}
