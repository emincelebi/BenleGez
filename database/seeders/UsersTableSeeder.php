<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $existingUsers = DB::table('users')
            ->whereIn('name', ['Ömer Faruk Dinler', 'Muhammet Emin Çelebi', 'Uğur Ataç'])
            ->pluck('name')
            ->toArray();

        $users = [
            [
                'name' => 'Ömer Faruk Dinler',
                'email' => 'ofd@example.com',
                'password' => bcrypt('ofd123'),
                'gender' => 'Erkek',

            ],
            [
                'name' => 'Muhammet Emin Çelebi',
                'email' => 'eminc1967@gmail.com',
                'password' => bcrypt('emin123'),
                'gender' => 'Erkek',

            ],
            [
                'name' => 'Uğur Ataç',
                'email' => 'ua@example.com',
                'password' => bcrypt('ua123'),
                'gender' => 'Erkek',

            ],
        ];

        foreach ($users as $user) {
            if (!in_array($user['name'], $existingUsers)) {
                DB::table('users')->insert($user);
            }
        }
    }
}
