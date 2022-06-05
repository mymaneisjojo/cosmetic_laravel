<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Auth;
class AccController extends Controller
{
    public function login(){
        // User::create([
        //     'name' => 'Admin Manager1',
        //     'email' => 'nguyenhue11052001@gmail.com',
        //     'password' => bcrypt(12345678),
        //     'role' => 'admin'       
        //     ]);
        // return view('admin.account.login');
    }

    public function check_login(Request $req){
        $check = Auth::attempt($req->only('email', 'password'), $req->has('remember'));
        
        if($check){
            return redirect()->route('admin.index'); 
        }
        return redirect()->back()->with('no', 'tai khoan hoac bao mat khong chinh xac'); 

    }

    public function register(){
        return view('admin.account.register');
    }


    public function post_register(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'

        ]);
        $pass_hashed = bcrypt($req->password);
        // dd($pass_hashed);
            // dd($req->all());
       
       $req->merge(['password' => $pass_hashed]);
       
       if(User::create($req->all())){
           return redirect()->route('admin.index');
       }
       return redirect()->back();
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('admin.account.login'); 

    }
}
