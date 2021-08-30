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
                'name' => 'Chicken Biryani',
                'price' => 60,
                'description' => '<p>Chicken Biryani</p>',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210830064329481475.jpg',
                'veg' => 0,
                'sort' => 1,
                'todays_special' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:43:29',
                'updated_at' => '2021-08-30 06:43:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Egg Biryani',
                'price' => 60,
                'description' => '<p>Egg Biryani</p>',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210830064503515630.jpg',
                'veg' => 0,
                'sort' => 1,
                'todays_special' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:45:03',
                'updated_at' => '2021-08-30 06:45:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Veg Biryani',
                'price' => 40,
                'description' => '<p>Veg Biryani</p>',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210830064536544827.jpg',
                'veg' => 1,
                'sort' => 1,
                'todays_special' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:45:36',
                'updated_at' => '2021-08-30 06:45:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mutton Biryani',
                'price' => 80,
                'description' => '<p>Mutton Biryani</p>',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210830064608784993.jpg',
                'veg' => 0,
                'sort' => 1,
                'todays_special' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:46:08',
                'updated_at' => '2021-08-30 06:46:08',
            ),
        ));
        
        
    }
}