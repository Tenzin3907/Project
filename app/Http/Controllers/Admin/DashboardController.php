<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request, $id)
    {
        $users = user::findorFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request, $id)
    {
        $users = user::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status','Your Data is Updated');
    }
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status','Your Data is Deleted');
    }
    public function store(Request $request){
        $users = new User;
        $users ->name = $request -> input('name');
        $users ->email = $request->input('email');
        $users ->address = $request->input('address');
        $users ->password = Hash::make('password');
        $users->save();
         return redirect('/role-register')>with('status','Your Registerd has been successful');
        
    }
}
