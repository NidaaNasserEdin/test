<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // here you can create new seeder users
        $user = new User;
        $user -> name = 'User Test';
        $user -> email = 'User@user.com';
        $user -> password = bcrypt('user123');
        $user -> save();
    }
}
