<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create new Admin user in the database
        User::create([
            'name' => 'Admin',
            'email' => 'admin@udemy-tut-one.test',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);
    }
}
