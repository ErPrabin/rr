<?php

namespace App\Models;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Item extends Model
{
    use SearchableTrait; //Searchable ;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =  ['name', 'price', 'description', 'image', 'menus_id', 'sort', 'veg', 'delivery_time', 'todays_special'];


    public function getVegAttribute($value)
    {
        return $value == 0 ? 'Non-Veg' : 'Veg';
    }

    // copy gareko  ya dekhi
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'name' => 10,
            'price' => 10,

            // 'posts.title' => 2, tala ko join ley kam gareko cha vane chaincha
            // 'posts.body' => 1,
        ],
        // 'joins' => [   relation ship ko through search garne vaye tara aile hamro case ma chaidaina
        //     'posts' => ['users.id','posts.user_id'],
        // ],
    ];

    // ya samma


    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menus_id', 'id');
    }
    public function itemorders()
    {
        return $this->hasMany(ItemOrder::class);
    }
}
