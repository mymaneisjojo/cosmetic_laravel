<?php

namespace App\Models;
use App\Models\Color;
class Cart 
{
    public $items=[];
    public $totalprice=0;
    public $totalquantity=0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [] ;
        $this->totalQuantity=$this->getTotalQuantity();
        $this->totalPrice=$this->getTotalPrice();
    }

    public function Add($pro, $quantity=1)
    {
        $quantity= request()->quantity ? request()->quantity: 1 ;
        $color_id = request()->color;
        // dd($color_id);
        
        if(isset($color_id)){
            $color = Color::find($color_id);
            $nameOfColor = $color->name;
        }else{
            $color_id = 0;
            $nameOfColor = 'N/A';
        }
       
        if(isset($this->items[$pro->id] ) && isset( $color_id  )){
            $this->items[$pro->id]->quantity += $quantity;
        }else{
            $item=[
                'id'=> $pro->id,
                'color_id'=> $color_id,
                'color_name'=> $nameOfColor,
                'name'=> $pro->name,
                'image'=> $pro->image,
                'price'=> $pro->sale_price > 0 ? ($pro->sale_price) : $pro->price,
                'quantity'=> $quantity,
            ];   
            
            $this -> items[$pro->id] = (object)$item;
        }
        
        session(['cart' => $this ->items]);
        
    }

    public function Remove($id, $color_id)
    {
        // $key = $id.$color_id;
        if(isset($this->items[$id])){
            unset($this->items[$id]);
            session(['cart' => $this ->items]);
        }
    }

   
        public function Update($id, $quantity=1){
            $quantity = $quantity > 0 ? $quantity : 1;
            if(isset($this->items[$id])){
                $this->items[$id]->quantity = $quantity;
               
            session(['cart' =>$this->items]);
    
            }
        }
       
    

    public function Clear()
    {
        session(['cart' => null]);
    }
    private function getTotalQuantity()
    {
        $total=0;
        foreach($this->items as $item){
            $total += $item->quantity;
        }
        return $total;
    }
    private function getTotalPrice()
    {
        $total=0;
        foreach($this->items as $item){
            $total += $item->quantity*$item->price;
        }

        return $total;
    }
   
    
    
}