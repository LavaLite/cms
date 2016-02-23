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
        ]);

    }
}
