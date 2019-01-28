<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'email_verified',
	];

	protected $casts = [
		'email_verified' => 'boolean',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function addresses() {
		return $this->hasMany(UserAddress::class);
	}

	public function favoriteProducts()
	{
		return $this->belongsToMany(Product::class, 'user_favorite_products')
			->withTimestamps()
			->orderBy('user_favorite_products.created_at', 'desc');

	}

	 public function cartItems()
    	{
        	return $this->hasMany(CartItem::class);
    	}

}
