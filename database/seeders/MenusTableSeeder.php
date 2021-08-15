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
                'name' => 'MOMO',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-08-13 15:54:44',
                'updated_at' => '2021-08-13 15:54:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Burger',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-08-15 08:34:46',
                'updated_at' => '2021-08-15 08:34:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Chowmein',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-08-15 08:43:05',
                'updated_at' => '2021-08-15 08:43:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pizza',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-08-15 08:46:32',
                'updated_at' => '2021-08-15 08:46:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}