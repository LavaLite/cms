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
        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(ClientTableSeeder::class);

        $this->call(CalendarTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(TaskTableSeeder::class);

        /*Additional packages uncomment and seed if required */

        $this->call(BlockTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(CareerTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(ForumTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(PriceListTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);

        Model::reguard();
    }
}
