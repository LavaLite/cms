<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'   => 1,
                'name' => 'superuser',
            ],
            [
                'id'   => 2,
                'name' => 'admin',
            ],
            [
                'id'   => 3,
                'name' => 'user',
            ],
        ]);

        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 1,
                'role_id' => 2,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ],
            [
                'user_id' => 3,
                'role_id' => 3,
            ],
        ]);
    }
}
