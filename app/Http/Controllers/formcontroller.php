<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\permission;

class formcontroller extends Controller
{
    public function Rolestore(Request $request){
$request->validate([
    'name' =>'required',
    'guardName' =>'required',
    
]);
$role=new Role();
$role->name=$request->name;
$role->guard_name=$request->guardName;
$role->save();
return redirect('role');

    }
    public function permissionStore(Request $request){
        $request->validate([
            'name' =>'required',
            'guardName' =>'required',
            
        ]);
        $role=new permission();
        $role->name=$request->name;
        $role->guard_name=$request->guardName;
        $role->save();
        return redirect('permission');
    }
}
