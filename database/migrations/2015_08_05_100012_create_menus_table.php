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
                $table->string('icon', 50)->nullable();
                $table->string('permission', 100)->nullable();
                $table->text('name')->nullable();
                $table->text('description')->nullable();
                $table->enum('open', ['New', 'Same'])->default('Same')->nullable();
                $table->boolean('has_sub')->nullable();
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
