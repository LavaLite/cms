<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'slug' => 'menu.menu.view',
                'name' => 'View Menu',
            ],
            [
                'slug' => 'menu.menu.create',
                'name' => 'Create Menu',
            ],
            [
                'slug' => 'menu.menu.edit',
                'name' => 'Update Menu',
            ],
            [
                'slug' => 'menu.menu.delete',
                'name' => 'Delete Menu',
            ],
        ]);

        DB::table('menus')->insert([

            [
                'id'          => 1,
                'parent_id'   => 0,
                'key'         => 'admin',
                'url'         => 'admin/',
                'name'        => 'Admin',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'id'          => 2,
                'parent_id'   => 0,
                'key'         => 'main',
                'url'         => '',
                'name'        => 'Main Menu',
                'description' => 'Website main menu',
                'icon'        => null,
                'target'      => null,
                'order'       => 2,
                'status'      => 1,
            ],

            [
                'id'          => 3,
                'parent_id'   => 0,
                'key'         => 'footer',
                'url'         => '',
                'name'        => 'Footer',
                'description' => 'Footer menu',
                'icon'        => null,
                'target'      => null,
                'order'       => 3,
                'status'      => 1,
            ],

            [
                'id'          => 4,
                'parent_id'   => 1,
                'key'         => 'content',
                'url'         => 'admin/page/page',
                'name'        => 'Content',
                'description' => null,
                'icon'        => 'fa fa-book',
                'target'      => null,
                'order'       => 4,
                'status'      => 1,
            ],

            [
                'id'          => 5,
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'admin/page/page',
                'name'        => 'Pages',
                'description' => null,
                'icon'        => 'fa fa-book',
                'target'      => null,
                'order'       => 5,
                'status'      => 1,
            ],

            [
                'id'          => 7,
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'admin/menu/menu',
                'name'        => 'Menu',
                'description' => null,
                'icon'        => 'fa fa-bars',
                'target'      => null,
                'order'       => 6,
                'status'      => 1,
            ],

            [
                'id'          => 8,
                'parent_id'   => 2,
                'key'         => null,
                'url'         => '',
                'name'        => 'Home',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 7,
                'status'      => 1,
            ],

            [
                'id'          => 9,
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'about-us.html',
                'name'        => 'About Us',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 8,
                'status'      => 1,
            ],

            [
                'id'          => 10,
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'contact.html',
                'name'        => 'Contact Us',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 9,
                'status'      => 1,
            ],

            [
                'id'          => 11,
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin',
                'name'        => 'Dashboard',
                'description' => null,
                'icon'        => 'fa fa-dashboard',
                'target'      => null,
                'order'       => 3,
                'status'      => 1,
            ],

            [
                'id'          => 12,
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/user/user',
                'name'        => 'Users',
                'description' => null,
                'icon'        => 'fa fa-users',
                'target'      => null,
                'order'       => 11,
                'status'      => 1,
            ],

            [
                'id'          => 13,
                'parent_id'   => 12,
                'key'         => null,
                'url'         => 'admin/user/user',
                'name'        => 'Users',
                'description' => null,
                'icon'        => 'fa fa-users',
                'target'      => null,
                'order'       => 12,
                'status'      => 1,
            ],

            [
                'id'          => 14,
                'parent_id'   => 12,
                'key'         => null,
                'url'         => 'admin/user/role',
                'name'        => 'Roles',
                'description' => null,
                'icon'        => 'fa fa-user-plus',
                'target'      => null,
                'order'       => 13,
                'status'      => 1,
            ],

            [
                'id'          => 15,
                'parent_id'   => 12,
                'key'         => null,
                'url'         => 'admin/user/permission',
                'name'        => 'Permissions',
                'description' => null,
                'icon'        => 'fa fa-check-circle-o',
                'target'      => null,
                'order'       => 14,
                'status'      => 1,
            ],
            [
                'id'          => 16,
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'https://twitter.com/lavalitecms',
                'name'        => 'Twitter',
                'description' => null,
                'icon'        => null,
                'target'      => '_blank',
                'order'       => 11,
                'status'      => 1,
            ],

            [
                'id'          => 17,
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'https://github.com/LavaLite',
                'name'        => 'GitHub',
                'description' => null,
                'icon'        => null,
                'target'      => '_blank',
                'order'       => 12,
                'status'      => 1,
            ],

            [
                'id'          => 18,
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'https://www.facebook.com/lavalite/',
                'name'        => 'Facebook',
                'description' => null,
                'icon'        => null,
                'target'      => '_blank',
                'order'       => 13,
                'status'      => 1,
            ],

        ]);
    }
}
