<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

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
