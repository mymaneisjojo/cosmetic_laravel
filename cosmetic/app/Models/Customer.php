<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Customer extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table= 'customer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firtsName',
        'lastName',
        'email',
        'phone',
        'address',
        'password',
        'remember_token',
        'token'
    ];


    public function bookings()
	{
		return $this->hasMany(Book::class);
	}
}
