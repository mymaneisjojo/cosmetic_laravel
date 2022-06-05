<?php

namespace App\Http\Controllers\Home;
use App\Models\Blogdetail;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogdetailController extends Controller
{
    public function Index($id){
       
        $data = Blogdetail::where(['id' => $id])->first();
      
        return view('home.blogdetail', compact('data'));

  
    }
}
