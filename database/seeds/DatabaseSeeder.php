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
        $this->call(LitepieMenuTableSeeder::class);
        $this->call(LitepieUserTableSeeder::class);
        $this->call(LitepieRoleTableSeeder::class);
        $this->call(LitepieTeamTableSeeder::class);

        $this->call(LitepieClientTableSeeder::class);
        $this->call(LitepieSettingTableSeeder::class);
        $this->call(LitecmsBlockTableSeeder::class);
        $this->call(LitecmsContactTableSeeder::class);
        $this->call(LitecmsPageTableSeeder::class);
    }
}
