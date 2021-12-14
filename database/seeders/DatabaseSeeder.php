<?php

namespace Database\Seeders;

use App\Models\Association\Association;
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
        // \App\Models\User::factory(10)->create();
         \App\Models\Association\Association::factory(20)->create();

         $this->call(Association::class);
    }
}
