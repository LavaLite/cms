<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /*
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
            $table->increments('id');
            $table->enum('status', ['Draft', 'Inbox', 'Sent', 'Trash', 'Junk', 'Important', 'Promosions', 'Social'])
                  ->nullable();
            $table->enum('star', ['Yes', 'No'])->nullable();
            $table->integer('from')->nullable();
            $table->integer('to')->nullable();
            $table->string('subject', 255)->nullable();
            $table->text('message')->nullable();
            $table->tinyInteger('read')->nullable();
            $table->enum('type', ['System', 'Admin', 'User'])->nullable();
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
        Schema::drop('messages');
    }
}
