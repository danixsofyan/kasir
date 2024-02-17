<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Administrator',
            'email'     => 'admin@kasir.com',
            'password'  => bcrypt('admin'),
        ]);

        User::create([
            'name'      => 'Staff',
            'email'     => 'staff@kasir.com',
            'password'  => bcrypt('staff'),
        ]);
    }
}
