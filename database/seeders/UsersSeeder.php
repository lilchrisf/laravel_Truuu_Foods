<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'fname'=>'Admin',
               'lname'=>'solutiond',
               'phone'=>'1234567',
               'email'=>'admin@itsolutionstuff.com',
               'parish'=>'parish',
               'town'=>'town',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
                'fname'=>'user',
                'lname'=>'wayne',
                'phone'=>'1234567',
                'email'=>'user@gmail.com',
                'parish'=>'parish',
                'town'=>'town',
                 'is_admin'=>'0',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
    }
