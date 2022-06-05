<?php

namespace App\Http\Controllers\Home;
use App\Models\Blogdetail;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  

    public function Index(){
        $data = Blogdetail::orderBy('created_at', 'DESC')->paginate(1);
        $cate = Blogdetail::orderBy('created_at', 'DESC')->paginate(5);
        $old = Blogdetail::orderBy('updated_at', 'ASC')->paginate(2);

       
        return view('home.blog', compact('data', 'cate','old'));
    }
}
