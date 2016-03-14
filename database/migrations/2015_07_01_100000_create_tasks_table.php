<?php

use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: tasks
         */
        Schema::create('tasks', function ($table) {
            $table->increments('id');
            $table->string('parent_id', 255)->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('category', 255)->nullable();
            $table->string('task', 255)->nullable();
            $table->time('time_required')->nullable();
            $table->time('time_taken')->nullable();
            $table->string('priority', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('created_by', 255)->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('tasks');
    }
}
