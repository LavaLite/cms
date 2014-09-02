<?php

class lavaliteCmsTableSeeder extends Seeder {
    public function run()
    {
        
        DB::table('contact_langs')->insert(array(
            
            array(
                'id' => 1,
                'contact_id' => 1,
                'name' => 'Address',
                'address' => 'Street Name, City Name, Country',
                'lang' => 'en',
            )

        ));
        DB::table('contacts')->insert(array(
            
            array(
                'id' => 1,
                'pin' => 23423,
                'phone' => '1800-555-1234',
                'email' => 'mail@yourdomain.com',
                'website' => 'yourdomain.com',
                'lat' => 18.062312304546726,
                'lng' => 75.76171875,
                'status' => 1,
                'slug' => 'tgy',
                'deleted_at' => NULL,
                'created_at' => '2014-07-09 12:46:40',
                'updated_at' => '2014-07-18 10:31:08',
            )

        ));
        DB::table('groups')->insert(array(
            
            array(
                'id' => 1,
                'name' => 'Superuser',
                'permissions' => '{\"superuser\":1}',
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-08-29 11:57:23',
            ),

            array(
                'id' => 2,
                'name' => 'Admin',
                'permissions' => '{\"admin\":1}',
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-08-29 11:57:29',
            ),

            array(
                'id' => 3,
                'name' => 'User',
                'permissions' => '{\"user\":1}',
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-08-29 11:58:20',
            ),

        ));
        DB::table('menu_langs')->insert(array(
            
            array(
                'id' => 1,
                'menu_id' => 1,
                'name' => 'Admin',
                'description' => NULL,
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
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 5,
                'menu_id' => 5,
                'name' => 'Pages',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 6,
                'menu_id' => 7,
                'name' => 'Menu',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 7,
                'menu_id' => 8,
                'name' => 'Home',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 8,
                'menu_id' => 9,
                'name' => 'About Us',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 9,
                'menu_id' => 10,
                'name' => 'Contact Us',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 10,
                'menu_id' => 11,
                'name' => 'Dashboard',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 11,
                'menu_id' => 14,
                'name' => 'Users',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 12,
                'menu_id' => 15,
                'name' => 'Users',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 13,
                'menu_id' => 16,
                'name' => 'Groups',
                'description' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 14,
                'menu_id' => 17,
                'name' => 'Contact',
                'description' => NULL,
                'lang' => 'en',
            ),

        ));
        DB::table('menus')->insert(array(
            
            array(
                'id' => 1,
                'parent_id' => 0,
                'key' => 'admin',
                'url' => 'admin/',
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 1,
                'order' => 1,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 18:29:11',
                'updated_at' => '2014-07-15 11:39:49',
            ),

            array(
                'id' => 2,
                'parent_id' => 0,
                'key' => 'main',
                'url' => '/',
                'icon' => NULL,
                'open' => NULL,
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
                'icon' => NULL,
                'open' => NULL,
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
                'key' => 'content',
                'url' => '/admin/page',
                'icon' => 'fa fa-book',
                'open' => NULL,
                'has_sub' => 1,
                'order' => 9,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 19:45:13',
                'updated_at' => '2014-07-07 13:01:41',
            ),

            array(
                'id' => 5,
                'parent_id' => 4,
                'key' => NULL,
                'url' => '/admin/page',
                'icon' => 'fa fa-book',
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-08 21:15:44',
                'updated_at' => '2014-04-16 11:04:45',
            ),

            array(
                'id' => 7,
                'parent_id' => 4,
                'key' => NULL,
                'url' => '/admin/menu',
                'icon' => 'fa fa-bars',
                'open' => NULL,
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
                'key' => NULL,
                'url' => '/',
                'icon' => NULL,
                'open' => NULL,
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
                'key' => NULL,
                'url' => '/about-us.html',
                'icon' => NULL,
                'open' => NULL,
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
                'key' => NULL,
                'url' => '/contact.html',
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-11 13:18:16',
                'updated_at' => '2014-04-12 11:53:53',
            ),

            array(
                'id' => 11,
                'parent_id' => 1,
                'key' => NULL,
                'url' => 'admin',
                'icon' => 'fa fa-dashboard',
                'open' => NULL,
                'has_sub' => 0,
                'order' => 10,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-07-04 04:46:31',
                'updated_at' => '2014-07-05 06:33:44',
            ),

            array(
                'id' => 14,
                'parent_id' => 1,
                'key' => NULL,
                'url' => 'admin/user/user',
                'icon' => 'fa fa-users',
                'open' => NULL,
                'has_sub' => 1,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-07-05 06:42:55',
                'updated_at' => '2014-07-05 09:52:20',
            ),

            array(
                'id' => 15,
                'parent_id' => 14,
                'key' => NULL,
                'url' => 'admin/user/user',
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-07-05 09:44:55',
                'updated_at' => '2014-07-05 09:46:58',
            ),

            array(
                'id' => 16,
                'parent_id' => 14,
                'key' => NULL,
                'url' => '/admin/user/group',
                'icon' => NULL,
                'open' => NULL,
                'has_sub' => 0,
                'order' => 0,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-07-05 09:45:35',
                'updated_at' => '2014-07-05 09:46:27',
            ),

            array(
                'id' => 17,
                'parent_id' => 1,
                'key' => NULL,
                'url' => '/admin/contact',
                'icon' => 'fa fa-fax',
                'open' => NULL,
                'has_sub' => 0,
                'order' => 5,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-07-10 08:17:50',
                'updated_at' => '2014-07-10 11:43:30',
            ),

        ));
        DB::table('page_langs')->insert(array(
            
            array(
                'id' => 1,
                'page_id' => 1,
                'heading' => 'Home',
                'title' => 'Home',
                'content' => '<section class=\"container text-center\">
				<h1 class=\"text-center\">
					<strong>Welcome</strong> to Atropos
					<span class=\"subtitle\">COME ON, DON\'T BE SHY! TODAY WE DON\'T BITE!</span>
				</h1>
				<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
			</section>
<div class=\"container\">
				<hr class=\"half-margins\"><!-- hr line -->
			</div>
<section class=\"container\">
				<div class=\"row\">
					<div class=\"col-md-3\">
						<div class=\"featured-box nobg border-only\">
							<div class=\"box-content\">
								<i class=\"fa fa-users\"></i>
								<h4>For Everyone</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
					<div class=\"col-md-3\">
						<div class=\"featured-box nobg border-only left-separator\">
							<i class=\"fa fa-book\"></i>
							<h4>Well Documented</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class=\"col-md-3\">
						<div class=\"featured-box nobg border-only left-separator\">
							<i class=\"fa fa-trophy\"></i>
							<h4>For Your Business</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class=\"col-md-3\">
						<div class=\"featured-box nobg border-only left-separator\">
							<i class=\"fa fa-cogs\"></i>
							<h4>Highly Customizable</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</section>',
                'keyword' => NULL,
                'description' => NULL,
                'image' => NULL,
                'abstract' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 2,
                'page_id' => 2,
                'heading' => 'About Us',
                'title' => 'About Us',
                'content' => '<article>
                    <h2><span style=\"color: inherit; line-height: 1.1;\">Welcome to Atropos</span><br></h2></article><article>
                    <p>Sed ut perspiciatis unde omnis <strong>iste natus error</strong> sit voluptatem accusantium <em>doloremque laudantium</em>, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia <a href=\"#\">voluptas sit aspernatur</a> aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut <strong>labore dolore magnm</strong> aliquam quaerat voluptatem.</p>
                    <p class=\"lead\">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                </article>
<div class=\"divider\"><!-- divider -->
                    <i class=\"fa fa-star\"></i>
                </div>

<article class=\"row\">
                    <div class=\"col-md-6\">
<img src=\"/packages/lavalite/page/page/3/content/4_1.jpg\" style=\"width: 319px;\">
                    </div>
                    <div class=\"col-md-6\">
                        <h3>Atropos : Born to be a Winner</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat voluptatem.</p>
                    </div>
                </article>',
                'keyword' => NULL,
                'description' => NULL,
                'image' => NULL,
                'abstract' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 3,
                'page_id' => 3,
                'heading' => 'Contact Us',
                'title' => 'Contact Us',
                'content' => '<p><br></p>',
                'keyword' => NULL,
                'description' => NULL,
                'image' => NULL,
                'abstract' => NULL,
                'lang' => 'en',
            ),

            array(
                'id' => 4,
                'page_id' => 4,
                'heading' => 'Page Not found',
                'title' => 'Page Not found',
                'content' => '<p><br></p>',
                'keyword' => NULL,
                'description' => NULL,
                'image' => NULL,
                'abstract' => NULL,
                'lang' => 'en',
            ),

        ));
        DB::table('pages')->insert(array(
            
            array(
                'id' => 1,
                'name' => 'Home',
                'slug' => 'home',
                'order' => 0,
                'banner' => NULL,
                'view' => 'page',
                'compiler' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-21 10:38:28',
                'updated_at' => '2014-08-28 07:47:22',
            ),

            array(
                'id' => 2,
                'name' => 'About Us',
                'slug' => 'about-us',
                'order' => 0,
                'banner' => NULL,
                'view' => 'page',
                'compiler' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-06 23:20:20',
                'updated_at' => '2014-08-13 12:23:34',
            ),

            array(
                'id' => 3,
                'name' => 'Contact Us',
                'slug' => 'contact',
                'order' => 0,
                'banner' => NULL,
                'view' => 'page',
                'compiler' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-04-06 23:19:57',
                'updated_at' => '2014-08-13 12:18:48',
            ),

            array(
                'id' => 4,
                'name' => 'Page Not found',
                'slug' => 404,
                'order' => 0,
                'banner' => NULL,
                'view' => 'page',
                'compiler' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2014-08-29 11:01:49',
                'updated_at' => '2014-08-29 11:30:23',
            ),

        ));
        DB::table('throttle')->insert(array(
            
            array(
                'id' => 1,
                'user_id' => 2,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 2,
                'user_id' => 1,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 3,
                'user_id' => 3,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 4,
                'user_id' => 4,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 5,
                'user_id' => 5,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 6,
                'user_id' => 6,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '2014-07-09 06:21:04',
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 7,
                'user_id' => 7,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 8,
                'user_id' => 8,
                'ip_address' => NULL,
                'attempts' => 4,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => '2014-07-09 06:50:52',
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 9,
                'user_id' => 9,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 10,
                'user_id' => 10,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

            array(
                'id' => 11,
                'user_id' => 11,
                'ip_address' => NULL,
                'attempts' => 0,
                'suspended' => 0,
                'banned' => 0,
                'last_attempt_at' => NULL,
                'suspended_at' => NULL,
                'banned_at' => NULL,
            ),

        ));
        DB::table('users')->insert(array(
            
            array(
                'id' => 1,
                'email' => 'superuser@superuser.com',
                'password' => '$2y$10$bKwW6PzSa1GDOeUTqtTaLOVMutZ12ObeslBfEXPx2pJAL/2B8aB06',
                'permissions' => NULL,
                'activated' => 1,
                'activation_code' => NULL,
                'activated_at' => '0000-00-00 00:00:00',
                'last_login' => '2014-09-01 13:07:57',
                'persist_code' => '$2y$10$SHDmb3zHxPWMWXwhNx8s.uHRaL78V4F5AcMXMYssWqXWOApySXZ.q',
                'reset_password_code' => NULL,
                'first_name' => 'Super',
                'last_name' => 'User',
                'sex' => 'male',
                'date_of_birth' => '2014-05-15',
                'designation' => 'Administrator',
                'mobile' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'street' => NULL,
                'city' => NULL,
                'district' => NULL,
                'state' => NULL,
                'country' => NULL,
                'photo' => NULL,
                'web' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'google_plus' => NULL,
                'linkedin' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-12 10:33:41',
                'updated_at' => '2014-09-01 13:07:57',
            ),

            array(
                'id' => 2,
                'email' => 'admin@admin.com',
                'password' => '$2y$10$AfS5hyUsDMmWJvd1ASfc3O8CdznWjuRtP9zX4/A4.4wCcbHqRO7qu',
                'permissions' => NULL,
                'activated' => 1,
                'activation_code' => NULL,
                'activated_at' => '0000-00-00 00:00:00',
                'last_login' => '2014-07-11 12:19:30',
                'persist_code' => '$2y$10$ym4MsKSEdAgo8s106RDUCu/zRGhfoXdV6Awf2eZZtxBIqB06kaXeu',
                'reset_password_code' => NULL,
                'first_name' => 'Admin',
                'last_name' => NULL,
                'sex' => 'male',
                'date_of_birth' => '0000-00-00',
                'designation' => NULL,
                'mobile' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'street' => NULL,
                'city' => NULL,
                'district' => NULL,
                'state' => NULL,
                'country' => NULL,
                'photo' => NULL,
                'web' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'google_plus' => NULL,
                'linkedin' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-12 10:33:42',
                'updated_at' => '2014-07-11 12:19:30',
            ),

            array(
                'id' => 3,
                'email' => 'user@user.com',
                'password' => '$2y$10$0qG4ju372fDcFRQESUCcZ.1/vyThBA.Y89tW7EBK6yNBKPTFMD5zi',
                'permissions' => NULL,
                'activated' => 1,
                'activation_code' => NULL,
                'activated_at' => '0000-00-00 00:00:00',
                'last_login' => '0000-00-00 00:00:00',
                'persist_code' => NULL,
                'reset_password_code' => NULL,
                'first_name' => 'User',
                'last_name' => NULL,
                'sex' => 'male',
                'date_of_birth' => '2014-05-15',
                'designation' => 'Manager',
                'mobile' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'street' => NULL,
                'city' => NULL,
                'district' => NULL,
                'state' => NULL,
                'country' => NULL,
                'photo' => NULL,
                'web' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'google_plus' => NULL,
                'linkedin' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-12 10:33:42',
                'updated_at' => '2014-08-02 09:59:22',
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