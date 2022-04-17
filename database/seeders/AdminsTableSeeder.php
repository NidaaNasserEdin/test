<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // here you create Admin table seeders

        $admin = new Admin;
        $admin->name = 'Admin';
        $admin->username = 'admin_1';
        $admin->email = 'Admin@admin.com';
        $admin->password = bcrypt('admin123');
        $admin->save();

    }
}
