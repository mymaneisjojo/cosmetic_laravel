<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Service;



class HomeController extends Controller
{
    public function index()
    {
        
        $prodNew = Product::where('status', 1)->limit(7)->orderBy('created_at', "DESC")->get();
        $banners = Banner::orderBy('prioty', "ASC")->get();
        $data = Service::where('status', 1)->orderBy('created_at', "DESC")->paginate(4);

        return view('home.index', compact('prodNew', 'banners', 'data'));
    }

    

}
