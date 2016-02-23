<?php

use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
          * Run the migrations.
          *
          * @return void
          */
         public function up()
         {

            /*
             * Table: calendars
             */
            Schema::create('calendars', function ($table) {
                $table->increments('id')->unsigned();
                $table->string('user_id')->nullable();
                $table->string('category_id')->nullable();
                $table->dateTime('start')->nullable();
                $table->dateTime('end')->nullable();
                $table->string('location')->nullable();
                $table->string('title')->nullable();
                $table->string('details')->nullable();
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
             Schema::drop('calendars');
         }
}
