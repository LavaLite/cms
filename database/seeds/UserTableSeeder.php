<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([

            [
                'id'          => 1,
                'email'       => 'superuser@superuser.com',
                'password'    => '$2y$10$bKwW6PzSa1GDOeUTqtTaLOVMutZ12ObeslBfEXPx2pJAL/2B8aB06',
                'active'      => 1,
                'name'        => 'Super User',
                'sex'         => 'Male',
                'dob'         => '2014-05-15',
                'designation' => 'Super User',
                'web'         => 'http://lavalite.org',
                'created_at'  => '2015-09-15',
            ],
            [
                'id'          => 2,
                'email'       => 'admin@admin.com',
                'password'    => '$2y$10$T9DqgU3OlGOHHBKRL/tS4.CXyx6VZ.HhlT.otvMWk55zQ3EZB8Sze',
                'active'      => 1,
                'name'        => 'Admin',
                'sex'         => 'Male',
                'dob'         => '20-05-15',
                'designation' => 'Admin',
                'web'         => 'http://lavalite.org',
                'created_at'  => '2015-09-15',
            ],
            [
                'id'          => 3,
                'email'       => 'user@user.com',
                'password'    => '$2y$10$WgdW0SZkx3wlT52nroRGquai2P3l0MSU3vozQLrWgfFpJVxS4R6ky',
                'active'      => 1,
                'name'        => 'User',
                'sex'         => 'Male',
                'dob'         => '2014-05-15',
                'designation' => 'User',
                'web'         => 'http://lavalite.org',
                'created_at'  => '2015-09-15',
            ],
        ]);
    }
}
