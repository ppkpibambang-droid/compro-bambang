<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //insert into users (name, email, password) values ('Admin', 'bambang.utoyo@gmail.com', '12345678'));
        User::create([
            'name' => 'Admin',
            'email' => 'bambang.utoyo@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
