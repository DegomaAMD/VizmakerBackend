<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */
    
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'house_lot_number',
        'street_name',
        'barangay_name',
        'city_name',
        'province_name',
        'region_name',
        'country_name',
        'postal_code',
        'phone_number',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the cart items associated with the user.
     */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
