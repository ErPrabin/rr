<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;    //db bata data delete nahune tara user ley kati bela delete gareko vanera delete_at column ma time save huncha
    protected $dates = ['deleted_at'];

    protected $fillable= [
        'users_id',
        'email',
        'name',
        'phone',
        'address',
        'city',
        'orderDate',
        'discount',
        'discount_code',
        'subtotal',
        'total',
        'payment_gateway',
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address',
        'shipping_city',
    ];

    /**
     * Users sanga ko relation create gareko
     *
    */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Items sanga ko relation create gareko
     *
    */
    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity');
    }
}
