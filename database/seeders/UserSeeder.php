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
        // $users=[
        //     [
        //         'name' => 'Tantowi Shah',
        //         'email' => 'tantows001@mailCom.com',
        //         'password' => bcrypt('12345')
        //     ],
        //     [
        //         'name' => 'Sandhila',
        //         'email' => 'sandi@mailCom.com',
        //         'password' => bcrypt('546')
        //     ],
        // ];

        // User::insert($users);

        User::factory(5)->create();
    }
}
