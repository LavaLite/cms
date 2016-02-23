<?php

use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
          * Run the migrations.
          *
          * @return void
          */
         public function up()
         {

        /*
         * Table: pages
         */
           Schema::create('pages', function ($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 50)->nullable();
                $table->string('slug', 50)->nullable();
                $table->integer('order')->nullable();
                $table->mediumText('banner')->nullable();
                $table->string('view', 20)->default('page');
                $table->enum('compiler', ['php','blade','twif','none'])->default('none')->nullable();
                $table->boolean('status')->default('1');
                $table->string('upload_folder', 100)->nullable();
                $table->text('heading')->nullable();
                $table->text('title')->nullable();
                $table->text('content')->nullable();
                $table->text('keyword')->nullable();
                $table->text('description')->nullable();
                $table->text('images')->nullable();
                $table->text('abstract')->nullable();
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
             Schema::drop('pages');
         }
}
