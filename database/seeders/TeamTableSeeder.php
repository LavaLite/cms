<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TeamTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert([
            [
                'id'     => 1,
                'name'   => 'Default',
                'status' => 'Active',
            ],
        ]);
    }
}
