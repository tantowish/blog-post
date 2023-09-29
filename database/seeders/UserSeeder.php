<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'name' => 'Tantowi Shah',
                'username' => 'tantows001',
                'email' => 'tantows001@gmail.com',
                'password' => bcrypt('123')
            ],
        ];

        User::insert($users);

        User::factory(4)->create();
    }
}
