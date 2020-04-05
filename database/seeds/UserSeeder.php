<?php

use App\User;
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
            'name' => 'فلان الفلاني',
            'email' => 'admin@example.com', 
            'password' => Hash::make('12345678'),
            'administration_level' => 2,
        ]);
    }
}
