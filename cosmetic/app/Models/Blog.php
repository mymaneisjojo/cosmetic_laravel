<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected $table= "blog";
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'status','parent_id', 'prioty'];

    public function catebg(){
        return $this->hasMany(Blogdetail::class, 'cate_blog_id','id');
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