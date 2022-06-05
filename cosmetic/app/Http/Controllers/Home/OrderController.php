<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
use PDF;
class OrderController extends Controller
{

    private $auth;

    public function __construct(){
        $this->middleware(function($request , $next){
            $this->auth  = Auth::guard('cus')->user();
           return $next($request);
        });
    }

    public function checkout(Cart $cart){
        $auth = Auth::guard('cus')->user();

        if($cart->totalQuantity > 0){
            return view('home.order.checkout', compact('cart', 'auth'));
        }
        return view('home.order.notification');
    }

    public function post_checkout(Request $req, Cart $cart)
    {
        $auth = Auth::guard('cus')->user();
        $auth_id = $auth->id;
        $check = false;
        $req->merge(['customer_id' => $auth_id]);
        $data = $req->only('name','email','phone','address','note','status','customer_id');

        if($order = Order::create($data)){
        $check = true;

            foreach($cart->items as $item){
                if(!OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                ])){
                $check = false;

                break;

                }
            }

            if($check){
                $orders = Order::find($order->id);
                $token = \Str::random(20);
                $orders->update(['token' => $token]);

                $pdf = PDF::loadView('home.order.pdf', ['order' => $order]);

                $path = public_path('pdf');
                $order_date = $order->created_at->format('d-m-Y');
                $pdf_name = \Str::slug($order->cus->name).'-'.$order_date.'-'.time().'.pdf';
                $pdf->save($path . '/' .$pdf_name);
               
                
                \Mail::send('home.emails.order', compact('auth', 'orders', 'cart', 'token') , function($m) use($auth,$orders,$cart,$token,$path,$pdf_name){
                    $m->from('nguyenhue11052001@gmail.com', 'Demo shopping oline');
        
                    $m->to($auth->email, 'sdfds')->subject('Email dat hang');

                    $m->attach($path . '/' .$pdf_name);// đính kèm file pdf từ email
                });
                //xóa file pdf lưu tạm tại serve
                if(file_exists($path . '/' .$pdf_name)){
                    unlink($path . '/' .$pdf_name);
                }

                $cart->clear();
                return redirect()->route('order.success');
            } else {
                OrderDetail::where('order_id', $order->id)->delete();
                Order::find($order->id)->delete();
                return redirect()->route('order.success');

            }
        }
        //them moi don hang neu thanh cong thi foreach ra
        dd($req->all());
    }

    public function success()
    {
        return view('home.order.success');
    }

    public function history()
    {
        $auth_id = $this->auth->id;
        $orders = Order::where('customer_id', $auth_id)->get();
        return view('home.order.history', compact('orders'));
    }

    public function detail($id)
    {
        $order = Order::find($id);
        return view('home.order.detail', compact('order'));
    }

    public function confirm(Request $req)
    {
        $token = $req->token;
        $order = Order::where('token', $token)->first();
        if($order){
            $order->update(['status'=>2, 'token' =>null]);
            return redirect()->route('order.success');
        } else {
            return redirect()->route('order.notification');

        }
    }

    public function notification()
    {
        return view('home.order.notification');
    }

    public function pdf($id)
    {
        $order = Order::find($id);
        $pdf = PDF::loadView('home.order.pdf', ['order' => $order]);

        $path = public_path('pdf');
        $order_date = $order->created_at->format('d-m-Y');
        $pdf_name = \Str::slug($order->cus->name).'-'.$order_date.'-'.time().'.pdf';
        $pdf->save($path . '/' .$pdf_name);
        if(request()->action && request()->action == 'download'){
           
        return $pdf->download($pdf_name);

        }
        return $pdf->stream();
    }

}