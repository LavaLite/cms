<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->insert([
            [
                'package'   => 'Main',
                'module'    => 'Company',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'main.company.name',
                'name'      => 'Company name',
                'value'     => 'Lavalite',
                'control'   => 'text',
            ],
            [
                'package'   => 'Main',
                'module'    => 'Company',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'main.company.address',
                'name'      => 'Company address',
                'value'     => '3481 Melrose Place <br>
Beverly Hills, CA 90210',
                'control'   => 'textarea',
            ],
            [
                'package'   => 'Main',
                'module'    => 'Company',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'main.company.email',
                'name'      => 'Company address',
                'value'     => 'info@lavalite.org',
                'control'   => 'email',
            ],
            [
                'package'   => 'Main',
                'module'    => 'Company',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'main.company.logo',
                'name'      => 'Company logo',
                'value'     => 'img/logo.png',
                'control'   => 'file',
            ],
        ]);
    }
}
