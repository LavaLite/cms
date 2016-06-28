<?php

use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
         * Table: menus
         */
        Schema::create('menus', function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('parent_id');
            $table->string('key', 100)->nullable();
            $table->string('url', 100)->nullable();
            $table->string('icon', 100)->nullable();
            $table->string('permission', 1000)->nullable();
            $table->string('role', 1000)->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->enum('target', ['_blank', '_self'])->default('_self')->nullable();
            $table->integer('order')->nullable();
            $table->string('uload_folder', 150)->nullable();
            $table->boolean('status')->default('1')->nullable();
            $table->softDeletes()->nullable();
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
        Schema::drop('menus');
    }
}
