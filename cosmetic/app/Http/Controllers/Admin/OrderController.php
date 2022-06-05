<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
class OrderController extends Controller
{

    public function index(){
       
        $orders = Order::orderBy('created_at', 'DESC')->get();
        
        return view('admin.order.index', compact('orders'));
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        if($order -> delete()){
            return redirect()->route('order.index')->with('yes','deleted successfully');
        }
        return redirect()->route('order.index')->with('no','Deletion failed');

    }

    public function detail($id){
        $order = Order::find($id);
        return view('admin.order.detail', compact('order'));
    }
}
