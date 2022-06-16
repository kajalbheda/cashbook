<?php

namespace App\Http\Controllers\admin;

use App\Models\PaymentMode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentModeController extends Controller
{
    public function index(){
        $data = PaymentMode::all();
        return view("admin.payment_modes", ['record' => $data]);
    }

    public function Add(Request $request){

        //dd($request->toArray());
        $user_id=Auth::user()->id;
        
        $pm = new PaymentMode;
        $pm->user_id=$user_id;
        $pm->name = $request->modename;
        $pm->save();
        return redirect()->back();
    }

    public function Delete(Request $req){
        $id=$req->id;
        PaymentMode::where('id',$id)->delete();
        return true;
    }

    public function Edit($id)
    {
        $data = PaymentMode::where('id', $id)->first();
        return view('admin.payment_modes_edit', ['record' => $data]);
    }

    public function Update(Request $req){
        echo $id = $req->post('id');

        $data = array(
            'name' => $req->name,
        );
        PaymentMode::where('id', $id)->update($data);
        return redirect('/admin/paymentmode')->with('msg', 'Record updated Successfully!');
    }

    public function MultiDelete(Request $req)
    {
        $data = $req->ids;

        if (!empty($data)) {
            for ($i = 0; $i < sizeof($data); $i++) {
                $id = $data[$i];
                PaymentMode::where('id', $id)->delete();
            }
            return true;
        } else {
            return false;
        }
    }
}
