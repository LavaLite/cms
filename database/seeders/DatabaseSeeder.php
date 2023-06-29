<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(\Litepie\Menu\Database\Seeders\MenuTableSeeder::class);
        $this->call(\Litepie\User\Database\Seeders\UserTableSeeder::class);
        $this->call(\Litepie\Role\Database\Seeders\RoleTableSeeder::class);
        $this->call(\Litepie\Team\Database\Seeders\TeamTableSeeder::class);
        $this->call(\Litepie\User\Database\Seeders\ClientTableSeeder::class);
        $this->call(\Litepie\Setting\Database\Seeders\SettingTableSeeder::class);

        $this->call(\Litecms\Block\Seeders\BlockTableSeeder::class);
        $this->call(\Litecms\Contact\Seeders\ContactTableSeeder::class);
        $this->call(\Litecms\Page\Seeders\PageTableSeeder::class);
    }
}
