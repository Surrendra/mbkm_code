<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Surendra Made',
            'email' => 'zuren.dra96@gmail.com',
            'password' => Hash::make('yaha'),
        ]);
    }
}
