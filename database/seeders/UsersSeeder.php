<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'firstName' => 'Roger',
            'lastName' => 'Hugo',
            'email' => 'rogerhugo703@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
