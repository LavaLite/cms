<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
          * Run the migrations.
          *
          * @return void
          */
         public function up()
         {

            /*
             * Table: messages
             */
            Schema::create('messages', function ($table) {
                $table->increments('id')->unsigned();
                $table->integer('from')->nullable();
                $table->integer('to')->nullable();
                $table->string('subject')->nullable();
                $table->text('message')->nullable();
                $table->boolean('read')->nullable();
                $table->enum('type', ['System', 'Admin', 'User'])->nullable();
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
             Schema::drop('messages');
         }
}
