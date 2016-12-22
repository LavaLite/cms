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

        $this->call(MenuTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(ClientTableSeeder::class);

        $this->call(CalendarTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        $this->call(BlockTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}