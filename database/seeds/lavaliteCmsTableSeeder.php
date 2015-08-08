<?php

use Illuminate\Database\Seeder;

class LavaliteTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([

            [
                'id'      => 1,
                'pin'     => 23423,
                'phone'   => '1800-555-1234',
                'email'   => 'mail@yourdomain.com',
                'website' => 'yourdomain.com',
                'lat'     => 18.062312304546726,
                'lng'     => 75.76171875,
                'status'  => 1,
                'name'    => 'Address',
                'address' => 'Street Name, City Name, Country',
                'slug'    => 'contact',
            ],

        ]);
        DB::table('groups')->insert([

            [
                'id'          => 1,
                'name'        => 'Superuser',
                'permissions' => '{"superuser":1}',
            ],

            [
                'id'          => 2,
                'name'        => 'Admin',
                'permissions' => '{"admin":1}',
            ],

            [
                'id'          => 3,
                'name'        => 'User',
                'permissions' => '{"user":1}',
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
                'open'        => null,
                'has_sub'     => 1,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'id'          => 2,
                'parent_id'   => 0,
                'key'         => 'main',
                'url'         => '/',
                'name'        => 'Main Menu',
                'description' => 'Website main menu',
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 1,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 3,
                'parent_id'   => 0,
                'key'         => 'bottom',
                'url'         => '/',
                'name'        => 'Bottom',
                'description' => 'Bottom menu',
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 1,
                'order'       => 2,
                'status'      => 1,
            ],

            [
                'id'          => 4,
                'parent_id'   => 1,
                'key'         => 'content',
                'url'         => '/admin/page',
                'name'        => 'Content',
                'description' => null,
                'icon'        => 'fa fa-book',
                'open'        => null,
                'has_sub'     => 1,
                'order'       => 9,
                'status'      => 1,
            ],

            [
                'id'          => 5,
                'parent_id'   => 4,
                'key'         => null,
                'url'         => '/admin/page',
                'name'        => 'Pages',
                'description' => null,
                'icon'        => 'fa fa-book',
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 7,
                'parent_id'   => 4,
                'key'         => null,
                'url'         => '/admin/menu',
                'name'        => 'Menu',
                'description' => null,
                'icon'        => 'fa fa-bars',
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 8,
                'parent_id'   => 2,
                'key'         => null,
                'url'         => '/',
                'name'        => 'Home',
                'description' => null,
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 9,
                'parent_id'   => 2,
                'key'         => null,
                'url'         => '/about-us.html',
                'name'        => 'About Us',
                'description' => null,
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 10,
                'parent_id'   => 2,
                'key'         => null,
                'url'         => '/contact.html',
                'name'        => 'Contact Us',
                'description' => null,
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 11,
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin',
                'name'        => 'Users',
                'description' => null,
                'icon'        => 'fa fa-dashboard',
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 10,
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
                'open'        => null,
                'has_sub'     => 1,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 13,
                'parent_id'   => 14,
                'key'         => null,
                'url'         => 'admin/user/user',
                'name'        => 'Users',
                'description' => null,
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 14,
                'parent_id'   => 12,
                'key'         => null,
                'url'         => '/admin/user/group',
                'name'        => 'Groups',
                'description' => null,
                'icon'        => null,
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 0,
                'status'      => 1,
            ],

            [
                'id'          => 15,
                'parent_id'   => 1,
                'key'         => null,
                'url'         => '/admin/contact',
                'name'        => 'Contact',
                'description' => null,
                'icon'        => 'fa fa-fax',
                'open'        => null,
                'has_sub'     => 0,
                'order'       => 5,
                'status'      => 1,
            ],

        ]);

        DB::table('pages')->insert([

            [
                'id'      => 1,
                'name'    => 'Home',
                'slug'    => 'home',
                'heading' => 'Home',
                'title'   => 'Home',
                'content' => '<section class="container text-center">
                <h1 class="text-center">
                    <strong>Welcome</strong> to Atropos
                    <span class="subtitle">COME ON, DON\'T BE SHY! TODAY WE DON\'T BITE!</span>
                </h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
            </section>
<div class="container">
                <hr class="half-margins"><!-- hr line -->
            </div>
<section class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="featured-box nobg border-only">
                            <div class="box-content">
                                <i class="fa fa-users"></i>
                                <h4>For Everyone</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="featured-box nobg border-only left-separator">
                            <i class="fa fa-book"></i>
                            <h4>Well Documented</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="featured-box nobg border-only left-separator">
                            <i class="fa fa-trophy"></i>
                            <h4>For Your Business</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="featured-box nobg border-only left-separator">
                            <i class="fa fa-cogs"></i>
                            <h4>Highly Customizable</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </section>',
                'keyword'     => null,
                'description' => null,
                'images'      => null,
                'abstract'    => null,
                'order'       => 0,
                'banner'      => null,
                'view'        => 'page',
                'compiler'    => null,
                'status'      => 1,
            ],

            [
                'id'      => 2,
                'name'    => 'About Us',
                'slug'    => 'about-us',
                'heading' => 'About Us',
                'title'   => 'About Us',
                'content' => '<article>
                    <h2><span style="color: inherit; line-height: 1.1;">Welcome to Atropos</span><br></h2></article><article>
                    <p>Sed ut perspiciatis unde omnis <strong>iste natus error</strong> sit voluptatem accusantium <em>doloremque laudantium</em>, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia <a href="#">voluptas sit aspernatur</a> aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut <strong>labore dolore magnm</strong> aliquam quaerat voluptatem.</p>
                    <p class="lead">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                </article>
<div class="divider"><!-- divider -->
                    <i class="fa fa-star"></i>
                </div>

<article class="row">
                    <div class="col-md-6">
<img src="/packages/lavalite/page/page/3/content/4_1.jpg" style="width: 319px;">
                    </div>
                    <div class="col-md-6">
                        <h3>Atropos : Born to be a Winner</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat voluptatem.</p>
                    </div>
                </article>',
                'keyword'     => null,
                'description' => null,
                'images'      => null,
                'abstract'    => null,
                'order'       => 0,
                'banner'      => null,
                'view'        => 'page',
                'compiler'    => null,
                'status'      => 1,
            ],

            [
                'id'          => 3,
                'name'        => 'Contact Us',
                'heading'     => 'Contact Us',
                'title'       => 'Contact Us',
                'content'     => '<p><br></p>',
                'keyword'     => null,
                'description' => null,
                'images'      => null,
                'abstract'    => null,
                'slug'        => 'contact',
                'order'       => 0,
                'banner'      => null,
                'view'        => 'page',
                'compiler'    => null,
                'status'      => 1,
            ],

            [
                'id'          => 4,
                'name'        => 'Page Not found',
                'heading'     => 'Page Not found',
                'title'       => 'Page Not found',
                'content'     => '<p><br></p>',
                'keyword'     => null,
                'description' => null,
                'images'      => null,
                'abstract'    => null,
                'slug'        => 404,
                'order'       => 0,
                'banner'      => null,
                'view'        => 'page',
                'compiler'    => null,
                'status'      => 1,
            ],

        ]);
        DB::table('throttle')->insert([

            [
                'id'              => 1,
                'user_id'         => 2,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 2,
                'user_id'         => 1,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 3,
                'user_id'         => 3,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 4,
                'user_id'         => 4,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 5,
                'user_id'         => 5,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 6,
                'user_id'         => 6,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => '2014-07-09 06:21:04',
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 7,
                'user_id'         => 7,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 8,
                'user_id'         => 8,
                'ip_address'      => null,
                'attempts'        => 4,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 9,
                'user_id'         => 9,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 10,
                'user_id'         => 10,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

            [
                'id'              => 11,
                'user_id'         => 11,
                'ip_address'      => null,
                'attempts'        => 0,
                'suspended'       => 0,
                'banned'          => 0,
                'last_attempt_at' => null,
                'suspended_at'    => null,
                'banned_at'       => null,
            ],

        ]);
        DB::table('users')->insert([

            [
                'id'                  => 1,
                'email'               => 'superuser@superuser.com',
                'password'            => '$2y$10$bKwW6PzSa1GDOeUTqtTaLOVMutZ12ObeslBfEXPx2pJAL/2B8aB06',
                'permissions'         => null,
                'activated'           => 1,
                'activation_code'     => null,
                'activated_at'        => '0000-00-00 00:00:00',
                'last_login'          => '2014-09-01 13:07:57',
                'persist_code'        => '$2y$10$SHDmb3zHxPWMWXwhNx8s.uHRaL78V4F5AcMXMYssWqXWOApySXZ.q',
                'reset_password_code' => null,
                'first_name'          => 'Super',
                'last_name'           => 'User',
                'sex'                 => 'male',
                'dob'                 => '2014-05-15',
                'designation'         => 'Administrator',
                'mobile'              => null,
                'phone'               => null,
                'address'             => null,
                'street'              => null,
                'city'                => null,
                'district'            => null,
                'state'               => null,
                'country'             => null,
                'photo'               => null,
                'web'                 => null,
                'facebook'            => null,
                'twitter'             => null,
                'google_plus'         => null,
                'linkedin'            => null,
                'created_at'          => '2014-05-12 10:33:41',
                'updated_at'          => '2014-09-01 13:07:57',
            ],

            [
                'id'                  => 2,
                'email'               => 'admin@admin.com',
                'password'            => '$2y$10$AfS5hyUsDMmWJvd1ASfc3O8CdznWjuRtP9zX4/A4.4wCcbHqRO7qu',
                'permissions'         => null,
                'activated'           => 1,
                'activation_code'     => null,
                'activated_at'        => '0000-00-00 00:00:00',
                'last_login'          => '2014-07-11 12:19:30',
                'persist_code'        => '$2y$10$ym4MsKSEdAgo8s106RDUCu/zRGhfoXdV6Awf2eZZtxBIqB06kaXeu',
                'reset_password_code' => null,
                'first_name'          => 'Admin',
                'last_name'           => null,
                'sex'                 => 'male',
                'dob'                 => '0000-00-00',
                'designation'         => null,
                'mobile'              => null,
                'phone'               => null,
                'address'             => null,
                'street'              => null,
                'city'                => null,
                'district'            => null,
                'state'               => null,
                'country'             => null,
                'photo'               => null,
                'web'                 => null,
                'facebook'            => null,
                'twitter'             => null,
                'google_plus'         => null,
                'linkedin'            => null,
                'created_at'          => '2014-05-12 10:33:42',
                'updated_at'          => '2014-07-11 12:19:30',
            ],

            [
                'id'                  => 3,
                'email'               => 'user@user.com',
                'password'            => '$2y$10$0qG4ju372fDcFRQESUCcZ.1/vyThBA.Y89tW7EBK6yNBKPTFMD5zi',
                'permissions'         => null,
                'activated'           => 1,
                'activation_code'     => null,
                'activated_at'        => '0000-00-00 00:00:00',
                'last_login'          => '0000-00-00 00:00:00',
                'persist_code'        => null,
                'reset_password_code' => null,
                'first_name'          => 'User',
                'last_name'           => null,
                'sex'                 => 'male',
                'dob'                 => '2014-05-15',
                'designation'         => 'Manager',
                'mobile'              => null,
                'phone'               => null,
                'address'             => null,
                'street'              => null,
                'city'                => null,
                'district'            => null,
                'state'               => null,
                'country'             => null,
                'photo'               => null,
                'web'                 => null,
                'facebook'            => null,
                'twitter'             => null,
                'google_plus'         => null,
                'linkedin'            => null,
                'created_at'          => '2014-05-12 10:33:42',
                'updated_at'          => '2014-08-02 09:59:22',
            ],

        ]);
        DB::table('users_groups')->insert([

            [
                'user_id'  => 1,
                'group_id' => 1,
            ],

            [
                'user_id'  => 2,
                'group_id' => 2,
            ],

            [
                'user_id'  => 3,
                'group_id' => 3,
            ],

        ]);
    }
}
