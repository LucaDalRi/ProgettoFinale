<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name"=> "Francesco",
                "email"=> "fra@gmail.com",
                "password"=> bcrypt("12345678"),
            ],
            [
                "name"=> "Arianna",
                "email"=> "arianna@gmail.com",
                "password"=> bcrypt("12345678"),
            ],
            [
                "name"=> "Luca",
                "email"=> "luca@gmail.com",
                "password"=> bcrypt("12345678"),
            ],
            [
                "name"=> "Giulia",
                "email"=> "giulia@gmail.com",
                "password"=> bcrypt("12345678"),
            ]
        ];
        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];

            $newUser->save();
        }
    }
}
