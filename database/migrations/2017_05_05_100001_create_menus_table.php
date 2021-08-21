<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: menus
         */
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default('0')->nullable();
            $table->string('key', 100)->nullable();
            $table->string('url', 100)->nullable();
            $table->string('icon', 100)->nullable();
            $table->string('permission', 1000)->nullable();
            $table->string('role', 1000)->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->enum('target', ['_blank', '_self'])->nullable();
            $table->integer('order')->nullable();
            $table->string('uload_folder', 150)->nullable();
            $table->string('slug', 200)->nullable();
            $table->enum('status', ['Show', 'Hide'])->default('Show')->nullable();
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
        Schema::drop('menus');
    }
}
