<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'slug'          => 'user.user.view',
                'name'          => 'View user',
            ],
            [
                'slug'          => 'user.user.create',
                'name'          => 'Create user',
            ],
            [
                'slug'          => 'user.user.edit',
                'name'          => 'Update user',
            ],
            [
                'slug'          => 'user.user.delete',
                'name'          => 'Delete user',
            ],

        ]);
    }
}
