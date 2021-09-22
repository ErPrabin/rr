<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tray Biryani',
                'image' => NULL,
                'sort' => 1,
                'deleted_at' => '2021-09-22 06:38:09',
                'created_at' => '2021-08-13 15:54:44',
                'updated_at' => '2021-09-22 06:38:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Veg Items',
                'image' => '20210922064600556271.JPG',
                'sort' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-09-22 06:38:28',
                'updated_at' => '2021-09-22 06:46:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Non veg',
                'image' => '20210922064550307042.JPG',
                'sort' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-09-22 06:38:36',
                'updated_at' => '2021-09-22 06:45:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Side Snacks',
                'image' => '20210922064623915067.JPG',
                'sort' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-09-22 06:46:23',
                'updated_at' => '2021-09-22 06:46:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Desserts',
                'image' => '20210922064641072835.jpeg',
                'sort' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-09-22 06:46:41',
                'updated_at' => '2021-09-22 06:46:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sauce',
                'image' => '20210922064713032762.JPG',
                'sort' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-09-22 06:47:13',
                'updated_at' => '2021-09-22 06:47:13',
            ),
        ));
        
        
    }
}