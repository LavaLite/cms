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

        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        $this->call(CalendarTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(ClientTableSeeder::class);

        Model::reguard();
    }
}
