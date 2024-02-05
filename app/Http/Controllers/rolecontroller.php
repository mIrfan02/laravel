<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class rolecontroller extends Controller
{
    public function role(){
        $data=Role::all();
        return view('roles',compact('data'));
    }
    public function edit($id){
        $data=Role::find($id);
        return view('RoleEdit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=Role::find($id);
        $data->name=$request->name;
        $data->guard_name=$request->guard_name;
        $data->update();
        return redirect('role');
    }
    public function destroy($id){
        $data=Role::find($id);
        $data->delete();
        return redirect('role');
    }
}
