<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function Users()
    {
        $data = User::all();
        return view("admin.users", ['record' => $data]);
    }

    public function StatusChange($id){
       
        echo $user=User::select('status')->where('id', $id)->get();
        
    }

    public function ActiveUser($id)
    {
        $data = array('status' => 'active');
        User::where('id', $id)->update($data);
        return redirect()->back()->with('msg', 'User Activated Successfully!');
    }
    public function DeactiveUser($id)
    {
        $data = array('status' => 'inactive');
        User::where('id', $id)->update($data);
        return redirect()->back()->with('msg', 'User Deactivated Successfully!');
    }

}
