<?php

use App\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
           'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin')
        ]);
    }
}
