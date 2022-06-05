<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table= "brand";
    protected $fillable = ['name', 'status','parent_id', 'prioty'];

    public function pro(){
        return $this->hasMany(Product::class, 'brand_id','id');
    }

    public function scopeSearch($query){
        if(request()->key){
            $query = $query->where('name', 'LIKE', '%' . request()->key . '%');
        }
        return $query;
    }
}
