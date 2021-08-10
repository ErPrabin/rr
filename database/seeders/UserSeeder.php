<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'test@gmail.com')->first()) {
            User::create([
                'name' => config('app.name'),
                'phone_number' => '1234567890',
                'email' => 'test@gmail.com',
                'password' => bcrypt('test1234')
            ]);
        }
    }
}
