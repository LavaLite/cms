<?php

use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
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
                $table->increments('id')->unsigned();
                $table->string('parent_id')->nullable();
                $table->string('user_id')->nullable();
                $table->dateTime('start')->nullable();
                $table->dateTime('end')->nullable();
                $table->string('category')->nullable();
                $table->string('task')->nullable();
                $table->time('time_required')->nullable();
                $table->time('time_taken')->nullable();
                $table->string('proprity')->nullable();
                $table->string('status')->nullable();
                $table->string('created_by')->nullable();
                $table->string('upload_folder', 100)->nullable();
                $table->softDeletes();
                $table->nullableTimestamps();
            });
         }

         /**
          * Reverse the migrations.
          *
          * @return void
          */
         public function down()
         {
             Schema::drop('tasks');
         }
}
