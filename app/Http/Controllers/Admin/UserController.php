<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.user.edit',compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->update();
        return redirect()->route('user')->with('update','แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user');
    }
}
