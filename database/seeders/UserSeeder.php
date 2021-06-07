<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'username' => 'admin',
                'lname' => 'PENAS',
                'fname' => 'BERNARD',
                'mname' => 'SABALA',
                'email' => 'penas@gmail.com',
                'role' => 'ADMIN',
                'sex' => 'MALE',
                'contact_number' => '09123456789',
                'program' => 'BSCS',
                'year_graduated' => null,
                'password' => Hash::make('a'),

            ],
            [
                'username' => 'alumni',
                'lname' => 'CABASAG',
                'fname' => 'MARITCHO',
                'mname' => 'ANTIPUESTO',
                'email' => 'cabasag@gmail.com',
                'role' => 'ALUMNI',
                'sex' => 'MALE',
                'contact_number' => '09123456784',
                'program' => 'BSCS',
                'year_graduated' => null,
                'password' => Hash::make('a'),
            ]
         ];

         User::insertOrIgnore($users);
    }
}
