<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Image;
use App\Models\Color;
use App\Models\ProductColor;


class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $prodNew = Product::where('status', 1)->orderBy('created_at', "DESC")->get();
        $image = Image::where('product_id', $id)->orderBy('name', 'ASC')->get();
        
        
        if($product){
            $colors = $product->colors;
            return view('home.product-detail', compact('product', 'prodNew', 'image', 'colors'));
        }
    }
}
