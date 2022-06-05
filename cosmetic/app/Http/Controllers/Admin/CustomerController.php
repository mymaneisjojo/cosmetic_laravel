<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
class CustomerController extends Controller
{
    public function index()
    {  
            $data = Customer::Paginate(10);
            return view('admin.customer.index', compact('data')); 
            
    }
   
    

    public function check_login(Request $req){
   
     $check = Auth::guard('cus')->attempt($req->only('email','password','status'));
        
        
        if($check){
            return redirect()->route('admin.customer.index');

       }
       return redirect()->back()->with('no','error');
        
    }

   

    public function create(){
        return view('admin.customer.create');

    }
   
    public function store(Request $req){
        
        $this->validate($req,[
            'firtsName' => 'required',
            'lastName'=>'required',
            'email' => 'required|email|unique:customer,email',
            'phone' => 'required|unique:customer,phone',
            'status' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        
           
        ],[
            'firtsName.required' => 'firtsName cannot be left blank',
            'lastName.required' => 'lastName cannot be left blank',
            'email.required' => 'email cannot be left blank',
            'email.unique' => 'email already exist',
            'email.email' => 'email Malformed',
            'phone.required' => 'phone cannot be left blank',
            'phone.unique' => 'phone already exist',
            
            'status.required' => 'status cannot be left blank',
            'password.required' => 'password cannot be left blank',
            'password_confirm.required' => 'password_confirm incorrect ',
        ]);
       
        $pass_hashed=bcrypt($req->password);
        $req->merge(['password'=>$pass_hashed]);
        
       if(Customer::create($req->all())){
           return redirect()->route('customer.index');

       }
       return redirect()->back();
    }

    public function edit($id)
    {
        $model = Customer::find($id);
        
        if ($model) {
            
            return view('admin.customer.edit',compact('model'));
        }
        return abort(404);
    }
   
    public function update(Request $req,$id){
        $cus = Customer::find($id);
        $req->validate([
            'firtsName' => 'required',
            'lastName'=>'required',
            'email' => 'required|email|unique:customer,email,'.$cus->id,
            'phone' => 'required|unique:customer,phone,'.$cus->id,
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        
        ]);
        $pass_hashed=bcrypt($req->password);
        $req->merge(['password'=>$pass_hashed]);
        if($cus->update($req->only( 'firtsName', 'lastName','email','phone','password'))){
            return redirect()->route('customer.index')->with('yes','success');
        }
        return redirect()->back()->with('no','error');
    }
    public function destroy($id)
    {
        $cus = Customer::find($id);
        if($cus -> delete()){
            return redirect()->route('customer.index')->with('yes','deleted successfully');
        }
        return redirect()->route('customer.index')->with('no','Deletion failed');

    }
}