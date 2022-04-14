<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Box;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        //\App\Models\Area::factory()->count(5)->create();
    //   Area::factory(5)->create();
       // Box::factory(5)->create();
         \App\Models\Admin::factory(2)->create();
        // \App\Models\User::factory(10)->create();
    }
}
