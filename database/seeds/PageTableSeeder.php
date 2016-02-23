<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([

            [
                'id'          => 1,
                'name'        => 'Home',
                'slug'        => 'home',
                'heading'     => 'Home',
                'title'       => 'Home',
                'content'     => 'Home Page',
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
                'id'          => 2,
                'name'        => 'About Us',
                'slug'        => 'about-us',
                'heading'     => 'About Us',
                'title'       => 'About Us',
                'content'     => 'About Us',
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

        DB::table('permissions')->insert([
            [
                'slug'          => 'page.page.view',
                'name'          => 'View Page',
            ],
            [
                'slug'          => 'page.page.create',
                'name'          => 'Create Page',
            ],
            [
                'slug'          => 'page.page.edit',
                'name'          => 'Update Page',
            ],
            [
                'slug'          => 'page.page.delete',
                'name'          => 'Delete Page',
            ],
        ]);
    }
}
