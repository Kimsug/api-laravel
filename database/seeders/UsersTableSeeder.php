<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();

       $faker = \Faker\Factory::create();
       
       $password = Hash::make('netireki');

       User::create([
           'name' => 'Admin',
           'email' => 'admin@test.com',
           'password' => $password,
       ]);

       for ($i = 0; $i < 10; $i++) {
           User::create([
               'name' => $faker->name,
               'email' => $faker->email,
               'password' => $password,
           ]);
       }
   }
}