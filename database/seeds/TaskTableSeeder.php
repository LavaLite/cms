<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->insert([
            // Uncomment  and edit this section for entering value to task table.
            /*
            array(
               "id"        => "Id",
               "parent_id"        => "Parent id",
               "user_id"        => "User id",
               "start"        => "Start",
               "end"        => "End",
               "category"        => "Category",
               "task"        => "Task",
               "time_required"        => "Time required",
               "time_taken"        => "Time taken",
               "proprity"        => "Proprity",
               "status"        => "Status",
               "created_by"        => "Created by",
               "created_at"        => "Created at",
               "updated_at"        => "Updated at",
               "deleted_at"        => "Deleted at",
            ),
            */

        ]);

        DB::table('permissions')->insert([
            [
                'slug'          => 'task.task.view',
                'name'          => 'View Task',
            ],
            [
                'slug'          => 'task.task.create',
                'name'          => 'Create Task',
            ],
            [
                'slug'          => 'task.task.edit',
                'name'          => 'Update Task',
            ],
            [
                'slug'          => 'task.task.delete',
                'name'          => 'Delete Task',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            array(
                'key'      => 'task.task.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ),
            */
        ]);
    }
}
