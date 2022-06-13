<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;


class CreateUsersSeeder extends Seeder

{
    public function run()
    {

        $users = [

            [
               'name'=>'User',
               'email'=>'user@nicesnippets.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],

            [

               'name'=>'Super Admin User',
               'email'=>'super-admin@nicesnippets.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),

            ],

            [

               'name'=>'Manager User',
               'email'=>'manager@nicesnippets.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
        ];

    

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }

}