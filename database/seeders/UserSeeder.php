<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User 1 - Memasukkan data user
        DB::table('users')->insert([
            'name' => 'Upin Ipin',
            'email' => 'upinipin@gmail.com',
            'password' => bcrypt('pass123') // Hash::make('pass123')
        ]);

        // User 2 - Memasukkan data user
        DB::table('users')->insert([
            'name' => 'Siti Sifir',
            'email' => 'sitisifir@gmail.com',
            'password' => bcrypt('pass123') // Hash::make('pass123')
        ]);

        // User 3 - Memasukkan data user
        DB::table('users')->insert([
            'name' => 'Ahmad Albab',
            'email' => 'ahmadalbab@gmail.com',
            'password' => bcrypt('pass123') // Hash::make('pass123')
        ]);

        // User 4 - Memasukkan data user
        DB::table('users')->insert([
            'name' => 'Muthu',
            'email' => 'muthu@gmail.com',
            'password' => bcrypt('pass123') // Hash::make('pass123')
        ]);

        // User 5 - Memasukkan data user
        DB::table('users')->insert([
            'name' => 'Ah Lee',
            'email' => 'ahlee@gmail.com',
            'password' => bcrypt('pass123') // Hash::make('pass123')
        ]);
    }
}
