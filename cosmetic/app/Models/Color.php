<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table= "color";
    protected $fillable = ['name', 'status','parent_id', 'prioty'];

    public function prod(){
        return $this->hasMany(Product::class, 'color_id','product_id');
    }


    public function scopeSearch($query){
        if(request()->key){
            $query = $query->where('name', 'LIKE', '%' . request()->key . '%');
        }
        return $query;
    }
}
