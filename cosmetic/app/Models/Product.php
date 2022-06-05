<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table= "product";

    protected $fillable = ['name', 'image' ,'price', 'sale_price', 'description', 'category_id', 'brand_id', 'status' , 'created_at'];

    public function cat(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function bra(){
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function colors(){
        return $this->belongsToMany(Color::class,'product_color', 'product_id', 'color_id');
    }

    public function img(){
        return $this->hasMany(Image::class);
    }
    public function scopeSearch($query){
        if(request()->key){
            $query = $query->where('name', 'LIKE', '%'.request()->key.'%');
        } else if(request()->cat && empty(request()->bra)){
            $query = $query->where('category_id',request()->cat);
        } else if(request()->bra && empty(request()->cat)){
            $query = $query->where('brand_id',request()->bra);
        }
        else if( request()->cat && request()->bra){
            $query = $query->where('category_id',request()->cat)->where('brand_id',request()->bra);

        }
        return $query;
    }

    
   
}

