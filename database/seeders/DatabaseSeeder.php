<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Litecms\Block\Seeds\BlockTableSeeder;
use Litecms\Blog\Seeds\BlogTableSeeder;
use Litecms\Contact\Seeds\ContactTableSeeder;
use Litecms\Page\Seeds\PageTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(SettingTableSeeder::class);

        $this->call(BlockTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PageTableSeeder::class);
    }
}
