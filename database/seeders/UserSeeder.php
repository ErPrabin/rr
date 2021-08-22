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
        $users = [
            [
                'name' => 'Admin',
                'role' => 'admin',
                'email' => 'admin@slair.com',
                'phone_number' => '1234567890',
                'password' => 'password',
            ],
            [
                'name' => 'User1',
                'role' => 'user',
                'email' => 'user1@gmail.com',
                'phone_number' => '0123456789',
                'password' => 'password',
            ]
        ];
            
        foreach ($users as $u) {
            $user = User::where('email', $u['email'])->first();
            if (!$user) {
                $user = User::create([
                    'name' => $u['name'],
                    'role' => $u['role'],
                    'email' => $u['email'],
                    'phone_number' => $u['phone_number'],
                    'password' => bcrypt($u['password']),
                ]);
            }
        }
    }
}
