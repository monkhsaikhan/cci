<?php

use App\User\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Chimedbazar',
            'name' => 'Munkhsaikhan',
            'email' => 'chmunkhsaikhan@gmail.com',
            'password' => \Hash::make('root')
        ]);
    }
}
