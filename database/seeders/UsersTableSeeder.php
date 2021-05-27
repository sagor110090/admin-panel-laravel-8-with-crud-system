<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mehedi Hasan Sagor',
                'email' => 'developer@sagor.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ohPO1U01n2W1aJs2Nruv9uoRX1iPjLJgFIMAYoFFGDQCJ7GFrF42u',
                'remember_token' => NULL,
                'created_at' => '2021-05-23 08:09:57',
                'updated_at' => '2021-05-23 08:09:57',
            ),
        ));
        
        
    }
}