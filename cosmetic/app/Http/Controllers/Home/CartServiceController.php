<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CartService;
use App\Models\Service;


class CartServiceController extends Controller
{
    public function __construct(){

    }
    public function view(){
        $cartService = new CartService();
        $dataCartService = $cartService->items;
        
        return view('home.cart_service',  compact('dataCartService'));
    }
    public function add(Request $req){
        
        // dd(request()->ser);
        $this->validate($req,[
            'service_id' => 'required',
            'cus_date' => 'required',
            
        ],[
            'service_id.required' => 'service cannot be left blank',       
            'cus_date.required' => 'date cannot be left blank',       
            
        ]);
        $ser = Service::find($req->service_id);
        
        if($ser){
            $cartService = new CartService();
            $cartService->Add($ser,$req->cus_date);
            
            return redirect()->route('cart_service.view');
        }else{ 
          
            return abort(404);
        }
    }

    public function book(AddRequest $request)
    {
       
        if(CartService::create($request->all())){
            return redirect()->route('cart_service.view')->with('yes', 'Thêm mới danh mục thành công');
        } else {
            return redirect()->back()->wiwth('no', 'Thêm mới danh mục thất bại');
        }
    }

    public function remove($id, CartService $cartservice){
        $cartservice->Remove($id);
        return redirect()->route('cart_service.view');

    }

    public function update($id, CartService $cartservice){
        $cartservice->Update($id, $quantity);
        return redirect()->route('cart_service.view');

    }

    public function clear(CartService $cartservice){
        $cartservice->Clear();
        return redirect()->route('cart_service.view');
        
    }
}
