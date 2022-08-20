<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role_id' => 1,
                'name' => 'Super Admin',
                'username' => 'super',
                'email' => 'superadmin@ikafti.com',
                'password' => Hash::make('12341234'),
            ],
            [
                'role_id' => 2,
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@ikafti.com',
                'password' => Hash::make('12341234'),
            ],

        ];
        DB::table('users')->insert($users);
    }
}
