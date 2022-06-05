<?php


namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests\Customer\RegisterRequest;
use App\Http\Requests\Customer\LoginRequest;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Service;
use Auth;

class CustomerController extends Controller
{
    public function login(){
        return view('home.customer.login');
    }

    public function check_login(Request $req){
        $check  = Auth::guard('cus')->attempt($req->only('email', 'password'), $req->has('remember_token'));
        if($check){
            return redirect()->route('home.index');
       }
       return redirect()->back();
        
    }

    public function register(){
        return view('home.customer.register');
    }

    public function profile(){
        $model = Auth::guard('cus')->user();
        return view('home.customer.profile ', compact('model'));

    }


    public function post_register(RegisterRequest $req){
        
        $pass_hashed = bcrypt($req->password);
        // dd($pass_hashed);
            // dd($req->all());
       
       $req->merge(['password' => $pass_hashed]);
       
       if(Customer::create($req->all())){
           return redirect()->route('home.index');
       }
       return redirect()->back();
    }

    
    public function logout(){

        Auth::guard('cus')->logout();
        return redirect()->route('home.index');
    }


    public function reset(){
        return view('home.customer.reset');
    }
    
    public function post_reset(Request $req){
        $email = $req->email;

        $checkCus = Customer::where('email', $email)->first();
        $cus_id= $checkCus->id;
        if($checkCus){
            $email = $req->email;
            $token = \Str::random(20);
            
            $customer=Customer::find($cus_id);
           
            $customer->update(['token' => $token]);
            // dd($token);
            \Mail::send('home.emails.password', compact('email', 'token') , function($m) use($email , $token){
                $m->from('nguyenhue11052001@gmail.com', 'Demo shopping oline');
    
                $m->to($email, 'sdfds')->subject('Email dat hang');
            });
        }
    }

    public function confirm(){
        return view('home.customer.confirm');
    }

    public function post_confirm(Request $req){
        // dd($req->all());

        $token = $req->token;
        $email = $req->email;
        $new_pass = $req->new_pass;

        $cus = Customer::where('email', $email)->where('token', $token)->first();
        // dd($cus);
        if($cus){
            $new_pass = bcrypt($req->new_pass);

            $cus->update(['password' => $new_pass]);
            // dd($new_pass);
            return redirect()->route('customer.login');
        }
    }

}
