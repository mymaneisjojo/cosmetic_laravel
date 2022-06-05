<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table= "books";
    protected $fillable = ['customer_id', 'service_id', 'cus-date'];

    public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function service()
	{
		return $this->belongsTo(Service::class);
	}
}
