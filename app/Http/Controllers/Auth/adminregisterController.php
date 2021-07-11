<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;


class adminregisterController extends Controller
{
    public function create() {
        return view('admin.adminregister');
    }
    public function store(Request $request) {

        $request->validate([
                'name'              =>      'required|string|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
                'usertype'          =>      'required|string',
                'email'             =>      'required|email|unique:users,email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password' => ['required', 'string', 'min:8','max:255', 'confirmed','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/']
            ]);

        
        
        $user = adminregister::create([
            "name"          =>          $request->name,
            "usertype"      =>          $request->usertype,
            "email"         =>          $request->email,
            "password"      =>          Hash::make($request->password)
        ]);
        if(is_null($user)){
            abort(419);
        }
        return redirect()->route('home');
    }
}
