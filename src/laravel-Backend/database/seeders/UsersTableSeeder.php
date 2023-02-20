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
                'created_at' => '2023-02-20 14:46:13',
                'email' => 'example@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'garobcsi',
                'password' => '$2y$10$GDvJJ7Mh7Ptlv6jlt3Vy/eLgDPwddKoL0UNcAFM5AZTGibXQwqGKC',
                'remember_token' => NULL,
                'updated_at' => '2023-02-20 14:46:13',
            ),
        ));
        
        
    }
}