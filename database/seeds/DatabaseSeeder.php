<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(Litepie\MenuTableSeeder::class);
        $this->call(Litepie\UserTableSeeder::class);
        $this->call(Litepie\RoleTableSeeder::class);

        $this->call(Litepie\ClientTableSeeder::class);
        $this->call(Litepie\MessageTableSeeder::class);
        $this->call(Litepie\SettingTableSeeder::class);
        $this->call(Litepie\CalendarTableSeeder::class);
        $this->call(Litepie\TaskTableSeeder::class);
        $this->call(Litecms\BlockTableSeeder::class);
        $this->call(Litecms\ContactTableSeeder::class);
        $this->call(Litecms\PageTableSeeder::class);

        Model::reguard();
    }
}
