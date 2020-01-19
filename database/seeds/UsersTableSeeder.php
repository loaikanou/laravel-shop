<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Loai',
            'email' => 'loai@example.com',
            'password' => Hash::make('loai') // secret
        ]);

        User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@example.com',
            'password' => Hash::make('ahmed') // secret
        ]);
    }
}
