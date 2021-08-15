<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Veg Momo',
                'price' => 120,
                'description' => '<p>Veg momo with all the veggie delights</p>',
                'menus_id' => 1,
                'delivery_time' => '40 mins',
                'image' => '20210815083715832335.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:37:15',
                'updated_at' => '2021-08-15 08:37:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Chicken Momo',
                'price' => 200,
                'description' => '<p>Fresh chicken for freshly made chicken momo</p>',
                'menus_id' => 1,
                'delivery_time' => '40min',
                'image' => '20210815084101203003.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:41:01',
                'updated_at' => '2021-08-15 08:41:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Paneer Momo',
                'price' => 200,
                'description' => '<p>Made with high protein paneer</p>',
                'menus_id' => 1,
                'delivery_time' => '40min',
                'image' => '20210815084228221024.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:42:28',
                'updated_at' => '2021-08-15 08:42:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Veg Chowmein',
                'price' => 110,
                'description' => '<p>Veg Chowmein</p>',
                'menus_id' => 3,
                'delivery_time' => '20mins',
                'image' => '20210815084754587305.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:47:54',
                'updated_at' => '2021-08-15 08:47:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Chicken Chowmein',
                'price' => 180,
                'description' => '<p>Chicken Chowmein</p>',
                'menus_id' => 3,
                'delivery_time' => '20mins',
                'image' => '20210815084837226260.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:48:37',
                'updated_at' => '2021-08-15 08:48:37',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Veg Pizza',
                'price' => 300,
                'description' => '<p>Veg Pizza</p>',
                'menus_id' => 4,
                'delivery_time' => '25mins',
                'image' => '20210815085107542228.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:51:07',
                'updated_at' => '2021-08-15 08:51:07',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Chicken Pizza',
                'price' => 550,
                'description' => '<p>Chicken Pizza</p>',
                'menus_id' => 4,
                'delivery_time' => '25mins',
                'image' => '20210815085229492000.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:52:29',
                'updated_at' => '2021-08-15 08:52:29',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Sausage Pizza',
                'price' => 600,
                'description' => '<p>Sausage Pizza</p>',
                'menus_id' => 4,
                'delivery_time' => '25mins',
                'image' => '20210815085340216226.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:53:40',
                'updated_at' => '2021-08-15 08:53:40',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Mushroom Pizza',
                'price' => 550,
                'description' => '<p>Mushroom Pizza</p>',
                'menus_id' => 4,
                'delivery_time' => '25mins',
                'image' => '20210815085454275314.jpeg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:54:54',
                'updated_at' => '2021-08-15 08:54:54',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Veg Burger',
                'price' => 150,
                'description' => '<p>Veg Burger</p>',
                'menus_id' => 2,
                'delivery_time' => '15mins',
                'image' => '20210815085616495941.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:56:16',
                'updated_at' => '2021-08-15 08:56:16',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Chicken Burger',
                'price' => 200,
                'description' => '<p>Chicken Burger</p>',
                'menus_id' => 2,
                'delivery_time' => '15mins',
                'image' => '20210815085728354416.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:57:28',
                'updated_at' => '2021-08-15 08:57:28',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Triple Chicken Patti Burger',
                'price' => 500,
                'description' => '<p>Triple Chicken Patti Burger</p>',
                'menus_id' => 2,
                'delivery_time' => '20mins',
                'image' => '20210815085827439827.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:58:27',
                'updated_at' => '2021-08-15 08:58:27',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Triple Layer Burger',
                'price' => 500,
                'description' => '<p>Triple Layer Burger</p>',
                'menus_id' => 2,
                'delivery_time' => '20mins',
                'image' => '20210815085942921139.jpg',
                'sort' => 1,
                'created_at' => '2021-08-15 08:59:42',
                'updated_at' => '2021-08-15 08:59:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}