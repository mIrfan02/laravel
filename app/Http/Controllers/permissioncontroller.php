<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permission;

class permissioncontroller extends Controller
{
    public function permission(){
        $data=permission::all();
        return view('permission',compact('data'));
    }
    public function edit($id){
        $data=permission::find($id);
        return view('PermissionEdit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=permission::find($id);
        $data->name=$request->name;
        $data->guard_name=$request->guard_name;
        $data->save();
        return redirect('permission');
    }
    public function delete($id){
        $data=permission::find($id);
        $data->delete();
        return redirect('permission');
    }
}

