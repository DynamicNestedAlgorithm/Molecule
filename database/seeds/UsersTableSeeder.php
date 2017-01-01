<?php

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
        //
        // $api_token = str_random('api_token', 60);
        $password = bcrypt('mol3cul3');
        DB::table('users')->insert([
            'name' => 'Admin',
            'user_type' => 'admin',
            'email' => 'tj.ab.omega@gmail.com',
            'password' => $password,
        ]);
    }
}
