<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Mohammad Alief Hasyani',
                'email' => 'aliefhasyani@gmail.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Andi Wijaya',
                'email' => 'wijaya@gmail.com',
                'password' => '12345678'
            ],
            [
                'name' => 'Siti Aminah',
                'email' => 'amina@gmail.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'santoso@gmail.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Dewi Lestari',
                'email' => 'lestari@gmail.com',
                'password' => Hash::make('12345678')
            ],

        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
