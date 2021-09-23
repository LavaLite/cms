<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([

            [
                'id'          => 1,
                'parent_id'   => 0,
                'key'         => 'admin',
                'url'         => '/admin',
                'name'        => 'Admin',
                'role'        => null,
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'id'          => 2,
                'parent_id'   => 0,
                'key'         => 'user',
                'url'         => '/user',
                'name'        => 'User',
                'role'        => null,
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'id'          => 3,
                'parent_id'   => 0,
                'key'         => 'client',
                'url'         => '/client',
                'name'        => 'Client',
                'role'        => null,
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'id'          => 4,
                'parent_id'   => 0,
                'key'         => 'main',
                'url'         => '',
                'name'        => 'Main',
                'role'        => null,
                'description' => 'Website main menu',
                'icon'        => null,
                'target'      => null,
                'order'       => 2,
                'status'      => 1,
            ],

            [
                'id'          => 5,
                'parent_id'   => 0,
                'key'         => 'footer',
                'url'         => '',
                'name'        => 'Footer',
                'role'        => null,
                'description' => 'Footer menu',
                'icon'        => null,
                'target'      => null,
                'order'       => 3,
                'status'      => 1,
            ],

            [
                'id'          => 6,
                'parent_id'   => 0,
                'key'         => 'social',
                'url'         => '',
                'name'        => 'Social',
                'role'        => null,
                'description' => 'Social media menu',
                'icon'        => null,
                'target'      => null,
                'order'       => 3,
                'status'      => 1,
            ],
            /*
            [
                'id' => null,
                'parent_id' => 1,
                'key' => null,
                'url' => 'admin/menu/menu',
                'name' => 'Menu',
                'role' => '["superuser"]',
                'description' => null,
                'icon' => 'fa fa-bars',
                'target' => null,
                'order' => 6,
                'status' => 1,
            ],

            [
                'id' => null,
                'parent_id' => 1,
                'key' => null,
                'url' => 'admin',
                'name' => 'Dashboard',
                'role' => null,
                'description' => null,
                'icon' => 'fa fa-dashboard',
                'target' => null,
                'order' => 1,
                'status' => 1,
            ],
*/
            [
                'id'          => null,
                'parent_id'   => 6,
                'key'         => null,
                'url'         => 'https://twitter.com/lavalitecms',
                'name'        => 'Twitter',
                'role'        => null,
                'description' => null,
                'icon'        => 'fab fa-twitter',
                'target'      => '_blank',
                'order'       => 11,
                'status'      => 1,
            ],

            [
                'id'          => null,
                'parent_id'   => 6,
                'key'         => null,
                'url'         => 'https://github.com/LavaLite/cms',
                'name'        => 'GitHub',
                'role'        => null,
                'description' => null,
                'icon'        => 'fab fa-github',
                'target'      => '_blank',
                'order'       => 12,
                'status'      => 1,
            ],

            [
                'id'          => null,
                'parent_id'   => 6,
                'key'         => null,
                'url'         => 'https://www.facebook.com/lavalite/',
                'name'        => 'Facebook',
                'role'        => null,
                'description' => null,
                'icon'        => 'fab fa-facebook-square',
                'target'      => '_blank',
                'order'       => 13,
                'status'      => 1,
            ],
        ]);
    }
}
