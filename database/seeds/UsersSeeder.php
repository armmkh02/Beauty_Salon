<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'     => 'Arman Mkhitaryan',
                'email'    => 'developer.armanmkhitaryan@gmail.com' ,
                'role'     => '4098',
                'phone'    => '+37477226167',
                'password' => Hash::make('salontest')
            ]
        ]);
    }
}
