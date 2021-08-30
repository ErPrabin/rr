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

        \DB::table('menus')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Tray Biryani',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-08-13 15:54:44',
                'updated_at' => '2021-08-13 15:54:44',
                'deleted_at' => NULL,
            ),
        ));
    }
}
