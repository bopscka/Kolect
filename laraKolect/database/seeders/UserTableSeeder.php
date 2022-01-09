<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'firstname'=>"Admin",
            'lastname'=>"Belrick",
            'email'=>'lat@gmail.com',
            'password'=> bcrypt("1234"),
        ]);

        $users = User::factory()
                        ->count(5)
                        ->create();
    }
}
