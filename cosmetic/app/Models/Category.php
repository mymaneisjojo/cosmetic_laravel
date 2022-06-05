<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $table= "category";
    protected $fillable = ['name', 'status','parent_id', 'prioty'];

    public function pro(){
        return $this->hasMany(Product::class, 'category_id','id');
    }

    public function scopeActived($query){
        $query = $query->orderBy('name', "ASC")->where('status', 1);
        return $query;
    }
    public function scopeSearch($query){
        if(request()->key){
            $query = $query->where('name', 'LIKE', '%' . request()->key . '%');
        }
        return $query;
    }
}