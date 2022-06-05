<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table= 'orders';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'note',
        'status',
        'customer_id',
        'token'
    ];

    public function details(){
        return $this->hasMany(OrderDetail::class, 'order_id','id');
    }

    public function cus(){
        return $this->hasOne(Customer::class,'id', 'customer_id');
    }

    public function getTotalPrice()
    {   
        $total=0;
        foreach($this->details as $item){
            $total += $item->quantity * $item->price;
        }

        return $total;
    }
}
