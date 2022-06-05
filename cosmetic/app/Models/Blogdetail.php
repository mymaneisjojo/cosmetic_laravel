<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogdetail extends Model
{
    use HasFactory;

    protected $table= "blogdetail";

    protected $fillable = ['name', 'image', 'description', 'cate_blog_id', 'status' , 'created_at'];

    public function cate(){
        return $this->hasOne(Blog::class, 'id', 'cate_blog_id');
    }

   

    // public function img(){
    //     return $this->hasMany(Image::class);
    // }
    public function scopeSearch($query){
        if(request()->key && empty(request()->cat)){
            $query = $query->where('name', 'LIKE', '%'.request()->key.'%');
        } else if(request()->cat && empty(request()->key)){
            $query = $query->where('cate_blog_id',request()->cat);
        } else if(request()->key && request()->cat){
            $query = $query->where('name', 'LIKE', '%'.request()->key.'%')->where('cate_blog_id',request()->cat);

        }
        return $query;
    }
   
}

