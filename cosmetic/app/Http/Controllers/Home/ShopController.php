<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Brand;


class ShopController extends Controller
{
    public function index(Request $request , Product $product){
        $prodNew = Product::where('status', 1)->orderBy('created_at', "DESC")->search()->paginate(4);
        $cate = Category::where('status', 1)->orderBy('name', 'ASC')->get();
        $brands = Brand::where('status', 1)->orderBy('name', 'ASC')->get();

        
        return view('home.shop', compact('prodNew','cate', 'brands'));
    }

        
    
}
