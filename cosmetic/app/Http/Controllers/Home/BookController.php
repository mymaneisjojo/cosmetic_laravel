<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\CartService;
use App\Models\Book;
use App\Models\Service;
class BookController extends Controller
{
    private $auth;

    public function __construct(){
        $this->middleware(function($request , $next){
            $this->auth  = Auth::guard('cus')->user();
           return $next($request);
        });
    }

    public function checkout(CartService $cartservice){
        $auth = Auth::guard('cus')->user();

        
            return view('home.book.checkout', compact('cartservice', 'auth'));
        
        // return view('home.book.notification');
    }

    public function post_checkout(Request $req, CartService $cartservice)
    {
        $auth = Auth::guard('cus')->user();
        $auth_id = $auth->id;
        $check = false;
        $req->merge(['customer_id' => $auth_id]);
        $data = $req->only('service_id', 'customer_id', 'cus-date');
        // dd($cartservice);

        if($book = Book::create($data)){
        $check = true;

            foreach($cartservice->items as $item){
                Book::create([
                    'service_id' => $req->id,
                    'customer_id' => $item->id,
                ]);
                   
            }
                $check = false;

                }
            }

            
        
        //them moi don hang neu thanh cong thi foreach ra
        // dd($req->all());
    

}
