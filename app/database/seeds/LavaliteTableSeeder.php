<?php

class LavaliteTableSeeder extends Seeder {
    public function run()
    {

        DB::table('groups')->insert(array(

            array(
                'id' => 1,
                'name' => 'Admin',
                'permissions' => '{"admin":1}',
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-06-28 09:00:12',
            ),

            array(
                'id' => 2,
                'name' => 'Superuser',
                'permissions' => '{"superuser":1}',
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-06-28 09:02:11',
            ),

            array(
                'id' => 3,
                'name' => 'User',
                'permissions' => '{"user":1}',
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-05-29 12:16:40',
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

                'created_at' => '2014-04-08 19:12:18',
                'updated_at' => '2014-04-12 11:52:31',
            ),

            array(
                'id' => 4,
                'parent_id' => 1,
                'key' => 'content',
                'url' => '/admin/page',
                'icon' => 'fa fa-book',
                'open' => '',
                'has_sub' => 1,
                'order' => 0,
                'status' => 1,

                'created_at' => '2014-04-08 19:45:13',
                'updated_at' => '2014-06-09 05:22:42',
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

                'created_at' => '2014-04-08 21:15:44',
                'updated_at' => '2014-04-16 11:04:45',
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

                'created_at' => '2014-04-11 13:18:16',
                'updated_at' => '2014-04-12 11:53:53',
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
                'image' => '/packages/lavalite/page/page/1/image/945817_615402761815172_260216169_n_2.jpg',
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
                'name' => 'Contact Ust',
                'slug' => 'contact',
                'order' => 0,
                'banner' => '',
                'status' => 1,

                'created_at' => '2014-04-06 23:19:57',
                'updated_at' => '2014-05-29 07:27:50',
            ),

            array(
                'id' => 2,
                'name' => 'About Us',
                'slug' => 'about-us',
                'order' => 0,
                'banner' => '',
                'status' => 1,

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

                'created_at' => '2014-04-21 10:38:28',
                'updated_at' => '2014-04-21 10:38:28',
            ),

        ));

        DB::table('users')->insert(array(

            array(
                'id' => 1,
                'email' => 'superuser@superuser.com',
                'password' => '$2y$10$bKwW6PzSa1GDOeUTqtTaLOVMutZ12ObeslBfEXPx2pJAL/2B8aB06',
                'permissions' => '',
                'activated' => 1,
                'activation_code' => '',
                'activated_at' => '',
                'last_login' => '2014-06-28 08:57:03',
                'persist_code' => '',
                'reset_password_code' => '',
                'first_name' => 'Super',
                'last_name' => 'User',
                'sex' => 'male',
                'date_of_birth' => '2014-05-15',
                'mobile' => '',
                'phone' => '',
                'address' => '',
                'street' => '',
                'city' => '',
                'district' => '',
                'state' => '',
                'country' => '',
                'photo' => '',
                'web' => '',
                'facebook' => '',
                'twitter' => '',
                'google_plus' => '',
                'linkedin' => '',

                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-06-28 08:57:03',
            ),

            array(
                'id' => 2,
                'email' => 'admin@admin.com',
                'password' => '$2y$10$AfS5hyUsDMmWJvd1ASfc3O8CdznWjuRtP9zX4/A4.4wCcbHqRO7qu',
                'permissions' => '',
                'activated' => 1,
                'activation_code' => '',
                'activated_at' => '',
                'last_login' => '2014-06-28 10:00:30',
                'persist_code' => '',
                'reset_password_code' => '',
                'first_name' => 'Admin',
                'last_name' => '',
                'sex' => 'male',
                'date_of_birth' => '0000-00-00',
                'mobile' => '',
                'phone' => '',
                'address' => '',
                'street' => '',
                'city' => '',
                'district' => '',
                'state' => '',
                'country' => '',
                'photo' => '',
                'web' => '',
                'facebook' => '',
                'twitter' => '',
                'google_plus' => '',
                'linkedin' => '',

                'created_at' => '2014-05-12 10:33:42',
                'updated_at' => '2014-06-28 10:00:30',
            ),

            array(
                'id' => 3,
                'email' => 'user@user.com',
                'password' => '$2y$10$0qG4ju372fDcFRQESUCcZ.1/vyThBA.Y89tW7EBK6yNBKPTFMD5zi',
                'permissions' => '',
                'activated' => 1,
                'activation_code' => '',
                'activated_at' => '',
                'last_login' => '',
                'persist_code' => '',
                'reset_password_code' => '',
                'first_name' => 'User',
                'last_name' => '',
                'sex' => 'male',
                'date_of_birth' => '2014-05-15',
                'mobile' => '',
                'phone' => '',
                'address' => '',
                'street' => '',
                'city' => '',
                'district' => '',
                'state' => '',
                'country' => '',
                'photo' => '',
                'web' => '',
                'facebook' => '',
                'twitter' => '',
                'google_plus' => '',
                'linkedin' => '',

                'created_at' => '2014-05-12 10:33:42',
                'updated_at' => '2014-05-27 12:43:48',
            ),

        ));
        DB::table('users_groups')->insert(array(

            array(
                'user_id' => 1,
                'group_id' => 1,
            ),

            array(
                'user_id' => 2,
                'group_id' => 2,
            ),

            array(
                'user_id' => 3,
                'group_id' => 3,
            ),

        ));
    }
}