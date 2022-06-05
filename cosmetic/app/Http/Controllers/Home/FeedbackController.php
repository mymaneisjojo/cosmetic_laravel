<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;



class FeedbackController extends Controller
{

   
    public function index(){
        return view('home.feedback');

    }

    

   

    public function feedback(){
        return view('home.feedback');

    }
    
    public function post_feedback(Request $req){
       
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required',
            'mesage' => 'required'
        
           
        ],[
            'name.required' => 'Name cannot be left blank',       
            'email.required' => 'email cannot be left blank',       
            'email.email' => 'email Malformed',
            'mesage.required' => 'mesage cannot be left blank',
        ]);

        
       
       if(Feedback::create($req->all())){
           return redirect()->route('home.index');

       }
       return redirect()->back();
    }

   

    

    
}