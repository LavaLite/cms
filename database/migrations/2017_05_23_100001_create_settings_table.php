<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: settings
         */
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 255)->nullable();
            $table->string('package', 255)->nullable();
            $table->string('module', 255)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('value', 255)->nullable();
            $table->string('file', 500)->nullable();
            $table->string('control', 255)->default('text')->nullable();
            $table->enum('type', ['System', 'Default', 'User'])->nullable();
            $table->string('slug', 200)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 50)->nullable();
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
        Schema::drop('settings');
    }
}
