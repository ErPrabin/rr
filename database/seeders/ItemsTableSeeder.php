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
                'name' => 'Tray Biryani',
                'price' => 37,
                'description' => 'Tray Biryani',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210907130939543608.jpeg',
                'veg' => 0,
                'sort' => 1,
                'todays_special' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:43:29',
                'updated_at' => '2021-09-07 13:09:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Egg Biryani',
                'price' => 22,
                'description' => 'Egg Biryani',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210907131005275452.jpeg',
                'veg' => 0,
                'sort' => 1,
                'todays_special' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:45:03',
                'updated_at' => '2021-09-07 13:10:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Veg Biryani',
                'price' => 20,
                'description' => 'Veg Biryani',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210907131112815479.jpeg',
                'veg' => 1,
                'sort' => 1,
                'todays_special' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:45:36',
                'updated_at' => '2021-09-07 13:11:12',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mutton Biryani',
                'price' => 28,
                'description' => 'Mutton Biryani',
                'menus_id' => 1,
                'delivery_time' => '45 minutes',
                'image' => '20210907131049018716.jpeg',
                'veg' => 0,
                'sort' => 1,
                'todays_special' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-08-30 06:46:08',
                'updated_at' => '2021-09-07 13:10:49',
            ),
        ));
        
        
    }
}