<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;    //db bata data delete nahune tara user ley kati bela delete gareko vanera delete_at column ma time save huncha
    protected $dates = ['deleted_at'];

    //protected $table=foodmenus;
    protected $fillable = ['name', 'sort'];

    public function items()
    {
        return $this->hasMany(Item::class, 'menus_id');
    }
}
