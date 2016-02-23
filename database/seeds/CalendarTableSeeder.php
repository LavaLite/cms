<?php

use Illuminate\Database\Seeder;

class CalendarTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('calendars')->insert([
            // Uncomment  and edit this section for entering value to calendar table.
            /*
            array(
               "id"        => "Id",
               "user_id"        => "User id",
               "category_id"        => "Category id",
               "start"        => "Start",
               "end"        => "End",
               "location"        => "Location",
               "title"        => "Title",
               "details"        => "Details",
               "created_by"        => "Created by",
               "created_at"        => "Created at",
               "updated_at"        => "Updated at",
               "deleted_at"        => "Deleted at",
            ),
            */

        ]);

        DB::table('permissions')->insert([
            [
                'slug'          => 'calendar.calendar.view',
                'name'          => 'View Calendar',
            ],
            [
                'slug'          => 'calendar.calendar.create',
                'name'          => 'Create Calendar',
            ],
            [
                'slug'          => 'calendar.calendar.edit',
                'name'          => 'Update Calendar',
            ],
            [
                'slug'          => 'calendar.calendar.delete',
                'name'          => 'Delete Calendar',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            array(
                'key'      => 'calendar.calendar.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ),
            */
        ]);
    }
}
