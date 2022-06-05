<?php

namespace App\Http\Controllers\Home;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function Index(){
      
        $data = About::orderBy('created_at', 'ASC')->first();
      
        return view('home.about', compact('data'));

  
    }
}
