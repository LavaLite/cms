<?php

use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
          * Run the migrations.
          *
          * @return void
          */
         public function up()
         {

            /*
             * Table: settings
             */
            Schema::create('settings', function ($table) {
                $table->increments('id')->unsigned();
                $table->string('user_id')->nullable();
                $table->string('skey')->nullable();
                $table->string('name')->nullable();
                $table->string('value')->nullable();
                $table->enum('type', ['System','Default','User'])->nullable();
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
             Schema::drop('settings');
         }
}
