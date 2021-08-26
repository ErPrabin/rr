<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $table= 'item_order';

    protected $fillable= [
        'order_id',
        'item_id',
        'quantity',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
