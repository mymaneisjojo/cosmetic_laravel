<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBack;

class FeedBackController extends Controller
{
    public function index()
    {  
            $data = FeedBack::Paginate(10);
            return view('admin.feedback.index', compact('data')); 
            
    }
   
    

    
   

    public function create(){
        return view('admin.feedback.create');

    }
   
    public function store(Request $req){
        
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required|email:customer,email',
            'status' => 'required',
            'mesage' => 'required'
        
           
        ],[
            'name.required' => 'Name cannot be left blank',       
            'email.required' => 'email cannot be left blank',       
            'email.email' => 'email Malformed',
            'status.required' => 'status cannot be left blank',
            'mesage.required' => 'mesage cannot be left blank',
        ]);
       
       
        
       if(FeedBack::create($req->all())){
           return redirect()->route('feedback.index');

       }
       return redirect()->back();
    }

    public function edit($id)
    {
        $model = FeedBack::find($id);
        
        if ($model) {
            
            return view('admin.feedback.edit',compact('model'));
        }
        return abort(404);
    }
   
    public function update(Request $req,$id){
        $fed = Feedback::find($id);
        $req->validate([
            'name' => 'required',
            'email' => 'required|email:feedback,email,'.$fed->id,
            'status' => 'required',
            'mesage' => 'required'
        ]);
       
        if($fed->update($req->only( 'name', 'email','status','mesage'))){
            return redirect()->route('feedback.index')->with('yes','success');
        }
        return redirect()->back()->with('no','error');
    }
    public function destroy($id)
    {
        $fed = FeedBack::find($id);
        if($fed -> delete()){
            return redirect()->route('feedback.index')->with('yes','deleted successfully');
        }
        return redirect()->route('feedback.index')->with('no','Deletion failed');

    }
}