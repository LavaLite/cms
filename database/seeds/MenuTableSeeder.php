<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenuTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('menus')->insert(array(

            array(
                'id' => 1,
                'parent_id' => 0,
                'key' => 'admin',
                'url' => 'admin/',
                'name' => 'Admin',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 1,
                'order' => 1,
                'status' => 1
            ),

            array(
                'id' => 2,
                'parent_id' => 0,
                'key' => 'main',
                'url' => '/',
                'name' => 'Main Menu',
                'description' => 'Website main menu',
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 1,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 3,
                'parent_id' => 0,
                'key' => 'bottom',
                'url' => '/',
                'name' => 'Bottom',
                'description' => 'Bottom menu',
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 1,
                'order' => 2,
                'status' => 1
            ),

            array(
                'id' => 4,
                'parent_id' => 1,
                'key' => 'content',
                'url' => '/admin/page',
                'name' => 'Content',
                'description' => NULL,
                'icon' => 'fa fa-book',
                'open' => NULL,
                'has_sub' => 1,
                'order' => 9,
                'status' => 1
            ),

            array(
                'id' => 5,
                'parent_id' => 4,
                'key' => NULL,
                'url' => '/admin/page',
                'name' => 'Pages',
                'description' => NULL,
                'icon' => 'fa fa-book',
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 7,
                'parent_id' => 4,
                'key' => NULL,
                'url' => '/admin/menu',
                'name' => 'Menu',
                'description' => NULL,
                'icon' => 'fa fa-bars',
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 8,
                'parent_id' => 2,
                'key' => NULL,
                'url' => '/',
                'name' => 'Home',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 9,
                'parent_id' => 2,
                'key' => NULL,
                'url' => '/about-us.html',
                'name' => 'About Us',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 10,
                'parent_id' => 2,
                'key' => NULL,
                'url' => '/contact.html',
                'name' => 'Contact Us',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 11,
                'parent_id' => 1,
                'key' => NULL,
                'url' => 'admin',
                'name' => 'Dashboard',
                'description' => NULL,
                'icon' => 'fa fa-dashboard',
                'open' => NULL,
                'has_sub' => 0,
                'order' => 10,
                'status' => 1
            ),

            array(
                'id' => 12,
                'parent_id' => 1,
                'key' => NULL,
                'url' => 'admin/user/user',
                'name' => 'Users',
                'description' => NULL,
                'icon' => 'fa fa-users',
                'open' => NULL,
                'has_sub' => 1,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 13,
                'parent_id' => 12,
                'key' => NULL,
                'url' => 'admin/user/user',
                'name' => 'Users',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 14,
                'parent_id' => 12,
                'key' => NULL,
                'url' => '/admin/user/role',
                'name' => 'Roles',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

            array(
                'id' => 15,
                'parent_id' => 12,
                'key' => NULL,
                'url' => '/admin/user/permission',
                'name' => 'Permissions',
                'description' => NULL,
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1
            ),

        ));
    }
}
