<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table= "services";
    protected $fillable = ['summary', 'content', 'status','image', 'prioty'];

    public function img(){
        return $this->hasMany(ImageService::class);
    }

    public function bookings()
	{
		return $this->hasMany(Book::class);
	}

}
