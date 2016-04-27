<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clients')->insert([

            [
                'id'          => 1,
                'email'       => 'superuser@superuser.com',
                'password'    => '$2y$10$bKwW6PzSa1GDOeUTqtTaLOVMutZ12ObeslBfEXPx2pJAL/2B8aB06',
                'status'      => 'Active',
                'name'        => 'Super User',
                'sex'         => 'Male',
                'dob'         => '2014-05-15',
                'api_token'   => str_random(60),
                'designation' => 'Super User',
                'web'         => 'http://lavalite.org',
                'created_at'  => '2015-09-15',
            ],
            [
                'id'          => 2,
                'email'       => 'admin@admin.com',
                'password'    => '$2y$10$T9DqgU3OlGOHHBKRL/tS4.CXyx6VZ.HhlT.otvMWk55zQ3EZB8Sze',
                'status'      => 'Active',
                'name'        => 'Admin',
                'sex'         => 'Male',
                'dob'         => '20-05-15',
                'api_token'   => str_random(60),
                'designation' => 'Admin',
                'web'         => 'http://lavalite.org',
                'created_at'  => '2015-09-15',
            ],
            [
                'id'          => 3,
                'email'       => 'user@user.com',
                'password'    => '$2y$10$WgdW0SZkx3wlT52nroRGquai2P3l0MSU3vozQLrWgfFpJVxS4R6ky',
                'status'      => 'Active',
                'name'        => 'User',
                'sex'         => 'Male',
                'dob'         => '2014-05-15',
                'api_token'   => str_random(60),
                'designation' => 'User',
                'web'         => 'http://lavalite.org',
                'created_at'  => '2015-09-15',
            ],
        ]);
    }
}
