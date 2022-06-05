<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table= "image";
    protected $fillable = ['name', 'value', 'product_id'];

    public function prod()
  {
    return $this->belongsTo(Product::class);
  }
}
