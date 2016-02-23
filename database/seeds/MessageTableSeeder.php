<?php

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->insert([
            // Uncomment  and edit this section for entering value to message table.
            /*
            array(
               "id"        => "Id",
               "from"        => "From",
               "to"        => "To",
               "subject"        => "Subject",
               "message"        => "Message",
               "read"        => "Read",
               "type"        => "Type",
               "deleted_at"        => "Deleted at",
               "created_at"        => "Created at",
               "updated_at"        => "Updated at",
            ),
            */

        ]);

        DB::table('permissions')->insert([
            [
                'slug'          => 'message.message.view',
                'name'          => 'View Message',
            ],
            [
                'slug'          => 'message.message.create',
                'name'          => 'Create Message',
            ],
            [
                'slug'          => 'message.message.edit',
                'name'          => 'Update Message',
            ],
            [
                'slug'          => 'message.message.delete',
                'name'          => 'Delete Message',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            array(
                'key'      => 'message.message.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ),
            */
        ]);
    }
}
