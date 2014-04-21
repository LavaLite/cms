<?php

class LavaliteTableSeeder extends Seeder {
    public function run()
    {

        DB::table('groups')->insert(array(
                    
            array(
                'id' => 1,
                'name' => 'Admin',
                'permissions' => '{"admin":1}',
                'created_at' => '2013-10-06 06:47:18',
                'updated_at' => '2014-03-19 03:47:15',
            ),

            array(
                'id' => 2,
                'name' => 'Developer',
                'permissions' => '{"developer":1}',
                'created_at' => '2013-11-07 07:19:12',
                'updated_at' => '2014-01-23 05:51:53',
            ),

            array(
                'id' => 3,
                'name' => 'User',
                'permissions' => '{"user":1}',
                'created_at' => '2013-11-09 00:00:00',
                'updated_at' => '2014-01-23 05:48:15',
            ),

        ));
        DB::table('menu_langs')->insert(array(
                    
            array(
                'id' => 1,
                'menu_id' => 1,
                'name' => 'Admin',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 2,
                'menu_id' => 2,
                'name' => 'Main Menu',
                'description' => 'Website main menu',
                'lang' => 'en',
            ),

            array(
                'id' => 3,
                'menu_id' => 3,
                'name' => 'Bottom',
                'description' => 'Bottom menu',
                'lang' => 'en',
            ),

            array(
                'id' => 4,
                'menu_id' => 4,
                'name' => 'Content',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 5,
                'menu_id' => 5,
                'name' => 'Pages',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 6,
                'menu_id' => 7,
                'name' => 'Menu',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 7,
                'menu_id' => 6,
                'name' => 'Products',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 8,
                'menu_id' => 3,
                'name' => 'تذييل',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 9,
                'menu_id' => 8,
                'name' => 'Home',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 10,
                'menu_id' => 9,
                'name' => 'About Us',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 11,
                'menu_id' => 10,
                'name' => 'Contact Us',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 12,
                'menu_id' => 11,
                'name' => 'Category',
                'description' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 13,
                'menu_id' => 6,
                'name' => 'نتاج',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 14,
                'menu_id' => 4,
                'name' => 'محتوى',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 15,
                'menu_id' => 5,
                'name' => 'صفحة',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 16,
                'menu_id' => 7,
                'name' => 'قائمة الطعام',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 17,
                'menu_id' => 11,
                'name' => 'فئة',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 18,
                'menu_id' => 1,
                'name' => 'مشرف',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 19,
                'menu_id' => 2,
                'name' => 'رئيسي',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 20,
                'menu_id' => 8,
                'name' => 'منزل',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 21,
                'menu_id' => 9,
                'name' => 'من نحن',
                'description' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 22,
                'menu_id' => 10,
                'name' => 'الاتصال بنا',
                'description' => '',
                'lang' => 'ar',
            ),

        ));
        DB::table('menus')->insert(array(
                    
            array(
                'id' => 1,
                'parent_id' => 0,
                'key' => 'admin',
                'url' => 'admin/',
                'icon' => '',
                'open' => '',
                'has_sub' => 1,
                'order' => 1,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 18:29:11',
                'updated_at' => '2014-04-12 11:52:00',
            ),

            array(
                'id' => 2,
                'parent_id' => 0,
                'key' => 'main',
                'url' => '/',
                'icon' => '',
                'open' => '',
                'has_sub' => 1,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 18:29:27',
                'updated_at' => '2014-04-12 11:52:20',
            ),

            array(
                'id' => 3,
                'parent_id' => 0,
                'key' => 'bottom',
                'url' => '/',
                'icon' => '',
                'open' => '',
                'has_sub' => 1,
                'order' => 2,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 19:12:18',
                'updated_at' => '2014-04-12 11:52:31',
            ),

            array(
                'id' => 4,
                'parent_id' => 1,
                'key' => 'page',
                'url' => '/admin/page',
                'icon' => 'fa fa-book',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 19:45:13',
                'updated_at' => '2014-04-12 11:49:44',
            ),

            array(
                'id' => 5,
                'parent_id' => 4,
                'key' => '',
                'url' => '/admin/page',
                'icon' => 'fa fa-book',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 21:15:44',
                'updated_at' => '2014-04-16 11:04:45',
            ),

            array(
                'id' => 6,
                'parent_id' => 1,
                'key' => 'page',
                'url' => '/admin/product',
                'icon' => 'fa fa-paperclip',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 14:15:13',
                'updated_at' => '2014-04-12 11:49:09',
            ),

            array(
                'id' => 7,
                'parent_id' => 4,
                'key' => '',
                'url' => '/admin/menu',
                'icon' => 'fa fa-bars',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 15:45:44',
                'updated_at' => '2014-04-12 11:50:37',
            ),

            array(
                'id' => 8,
                'parent_id' => 2,
                'key' => '',
                'url' => '/',
                'icon' => '',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-11 13:17:26',
                'updated_at' => '2014-04-12 11:53:19',
            ),

            array(
                'id' => 9,
                'parent_id' => 2,
                'key' => '',
                'url' => '/about-us.html',
                'icon' => '',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-11 13:17:55',
                'updated_at' => '2014-04-12 11:53:34',
            ),

            array(
                'id' => 10,
                'parent_id' => 2,
                'key' => '',
                'url' => '/contact.html',
                'icon' => '',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-11 13:18:16',
                'updated_at' => '2014-04-12 11:53:53',
            ),

            array(
                'id' => 11,
                'parent_id' => 6,
                'key' => '',
                'url' => '/admin/page',
                'icon' => '',
                'open' => '',
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-12 08:25:51',
                'updated_at' => '2014-04-12 11:51:19',
            ),

        ));
        DB::table('page_langs')->insert(array(
                    
            array(
                'id' => 1,
                'page_id' => 1,
                'heading' => '',
                'content' => '<p>Content</p>',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'image' => '',
                'abstract' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 2,
                'page_id' => 2,
                'heading' => '',
                'content' => '<p>Contetn about us</p>',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'image' => '',
                'abstract' => '',
                'lang' => 'ar',
            ),

            array(
                'id' => 3,
                'page_id' => 3,
                'heading' => '',
                'content' => 'Welcomre',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'image' => '',
                'abstract' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 4,
                'page_id' => 4,
                'heading' => 'Home',
                'content' => 'Home page',
                'title' => 'Home',
                'keyword' => '',
                'description' => '',
                'image' => '',
                'abstract' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 5,
                'page_id' => 1,
                'heading' => '',
                'content' => '<p>Contact Us<br></p>',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'image' => '',
                'abstract' => '',
                'lang' => 'en',
            ),

            array(
                'id' => 6,
                'page_id' => 2,
                'heading' => '',
                'content' => '<p><br></p>',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'image' => '',
                'abstract' => '',
                'lang' => 'en',
            ),

        ));
        DB::table('pages')->insert(array(
                    
            array(
                'id' => 1,
                'name' => 'Contact Us',
                'slug' => 'contact',
                'order' => 0,
                'banner' => '',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-06 23:19:57',
                'updated_at' => '2014-04-21 10:47:12',
            ),

            array(
                'id' => 2,
                'name' => 'About Us',
                'slug' => 'about-us',
                'order' => 0,
                'banner' => '',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-06 23:20:20',
                'updated_at' => '2014-04-21 10:47:25',
            ),

            array(
                'id' => 3,
                'name' => 'Welcome',
                'slug' => 'welcome',
                'order' => 0,
                'banner' => '',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 01:06:11',
                'updated_at' => '2014-04-21 10:38:16',
            ),

            array(
                'id' => 4,
                'name' => 'Home',
                'slug' => 'home',
                'order' => 0,
                'banner' => '',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-21 10:38:28',
                'updated_at' => '2014-04-21 10:38:28',
            ),

        ));
        DB::table('throttle')->insert(array(
                    
            array(
                'id' => 1,
                'user_id' => 1,
                'ip_address' => '192.168.1.6',
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '',
                'suspended_at' => '',
                'banned_at' => '',
            ),

            array(
                'id' => 2,
                'user_id' => 2,
                'ip_address' => '',
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '',
                'suspended_at' => '',
                'banned_at' => '',
            ),

            array(
                'id' => 3,
                'user_id' => 3,
                'ip_address' => '',
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '',
                'suspended_at' => '',
                'banned_at' => '',
            ),

            array(
                'id' => 4,
                'user_id' => 1,
                'ip_address' => '192.168.1.5',
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '',
                'suspended_at' => '',
                'banned_at' => '',
            ),

            array(
                'id' => 5,
                'user_id' => 1,
                'ip_address' => '192.168.1.2',
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '',
                'suspended_at' => '',
                'banned_at' => '',
            ),

        ));
        DB::table('users')->insert(array(
                    
            array(
                'id' => 1,
                'email' => 'admin@admin.com',
                'password' => '$2y$10$DK5NdYvxr5MR.iVET2Q00OBGCCln2kQZJoGVONkiSUb1sZ2BprpOG',
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'permissions' => '',
                'activated' => 1,
                'activation_code' => '',
                'activated_at' => '',
                'last_login' => '2014-04-21 10:37:31',
                'persist_code' => '$2y$10$K6jYbmurEKSNeQWvjLdCCuJdSssXbLj60.rfnoF76DlFav7J.4lNy',
                'reset_password_code' => '',
                'created_at' => '2013-10-06 06:47:19',
                'updated_at' => '2014-04-21 11:01:01',
            ),

            array(
                'id' => 2,
                'email' => 'user@user.com',
                'password' => '$2y$10$zIfN8Dgr3r9W5/44C5x29.0gYB5tA5ZN8UaUS85ZRi3SGTroeIMP.',
                'first_name' => 'User',
                'last_name' => 'User',
                'permissions' => '',
                'activated' => 1,
                'activation_code' => '',
                'activated_at' => '',
                'last_login' => '2014-01-24 06:12:11',
                'persist_code' => '$2y$10$rFe3O0WDIbf.luTn4AC4yO4RaAYUZvN6d10KV7mO5xOI8H8UrJasO',
                'reset_password_code' => '',
                'created_at' => '2013-10-06 06:47:19',
                'updated_at' => '2014-04-21 11:00:39',
            ),

            array(
                'id' => 3,
                'email' => 'developer@developer.com',
                'password' => '$2y$10$Quffar.itlGK6uk40sGpYunmcuz6oJtQoHtbr7Mj9BBRFlsiHP6ra',
                'first_name' => 'Developer',
                'last_name' => 'Developer',
                'permissions' => '',
                'activated' => 1,
                'activation_code' => '',
                'activated_at' => '',
                'last_login' => '2014-01-24 06:14:17',
                'persist_code' => '$2y$10$UG17HLHefmj0ZgNMmKO9q.9s/x8BcIZa9hEMDNR0SSnBPwFL4LJ/6',
                'reset_password_code' => '',
                'created_at' => '2013-10-15 09:13:06',
                'updated_at' => '2014-04-21 11:01:23',
            ),

        ));
        DB::table('users_groups')->insert(array(
                    
            array(
                'user_id' => 1,
                'group_id' => 1,
            ),

            array(
                'user_id' => 2,
                'group_id' => 3,
            ),

            array(
                'user_id' => 3,
                'group_id' => 2,
            ),

        ));
    }
}