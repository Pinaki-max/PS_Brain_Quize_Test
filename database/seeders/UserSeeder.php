<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Admin;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $pass = Hash::make('testpass');
        $admins = [
            [
                'name' => 'admin01',
                'email' => 'admin01@test.com',
                'password' => $pass,
            ],
            [
                'name' => 'Naamendu Manna',
                'email' => 'nabendu.admin@test.com',
                'password' => $pass,
            ],
            [
                'name' => 'Pinaki Sasmal',
                'email' => 'pinake.admin@test.com',
                'password' => $pass,
            ],
        ];

        $users = [
            [
                'name' => 'user01',
                'email' => 'user01@test.com',
                'password' => $pass,
            ],
            [
                'name' => 'Naamendu Manna',
                'email' => 'nabendu.user@test.com',
                'password' => $pass,
            ],
            [
                'name' => 'Pinaki Sasmal',
                'email' => 'pinake.user@test.com',
                'password' => $pass,
            ],
        ];

        foreach ($admins as $admin) {
            if (Admin::where(['email' => $admin['email']])->count() == 0) {
                Admin::create($admin);
            }
        }
        foreach ($users as $user) {
            if (User::where(['email' => $user['email']])->count() == 0) {
                User::create($user);
            }
        }
    }
}
