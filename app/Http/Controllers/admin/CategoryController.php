<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();
        return view("admin.categories", ['record' => $data]);
    }

    public function Add(Request $request){

        //dd($request->toArray());
        $user_id=Auth::user()->id;
        
        $cat = new Category();
        $cat->user_id=$user_id;
        $cat->name = $request->catname;
        $cat->save();
        return redirect()->back();
    }

    public function Delete(Request $req){
        $id=$req->id;
        Category::where('id',$id)->delete();
        return true;
    }

    public function Edit($id)
    {
        $data = Category::where('id', $id)->first();
        return view('admin.category_edit', ['record' => $data]);
    }

    public function Update(Request $req){
        echo $id = $req->post('id');

        $data = array(
            'name' => $req->name,
        );
        Category::where('id', $id)->update($data);
        return redirect('/admin/category')->with('msg', 'Record updated Successfully!');
    }

    public function MultiDelete(Request $req)
    {
        $data = $req->ids;

        if (!empty($data)) {
            for ($i = 0; $i < sizeof($data); $i++) {
                $id = $data[$i];
                Category::where('id', $id)->delete();
            }
            return true;
        } else {
            return false;
        }
    }
}
