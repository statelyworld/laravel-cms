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
        $user = User::where('email', 'gauravjoshi.uk.in@gmail.com')->first();
        if (!$user) {
          User::create([
            'role' => 'admin',
            'name' => 'Gaurav Joshi',
            'email' => 'gauravjoshi.uk.in@gmail.com',
            'password' => Hash::make('password')
          ]);
        }
    }
}
