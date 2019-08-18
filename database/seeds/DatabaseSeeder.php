<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Litepie\MenuTableSeeder::class);
        $this->call(Litepie\UserTableSeeder::class);
        $this->call(Litepie\RoleTableSeeder::class);
        $this->call(Litepie\TeamTableSeeder::class);

        $this->call(Litepie\ClientTableSeeder::class);
        $this->call(Litepie\SettingTableSeeder::class);
        $this->call(Litecms\BlockTableSeeder::class);
        $this->call(Litecms\ContactTableSeeder::class);
        $this->call(Litecms\PageTableSeeder::class);
    }
}
