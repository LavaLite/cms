<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLavaliteDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {

	    /**
	     * Table: contacts
	     */
	    Schema::create('contacts', function($table) {
                $table->increments('id');
                $table->integer('pin');
                $table->string('phone', 100);
                $table->string('email', 50);
                $table->string('website', 50);
                $table->string('lat', 255);
                $table->string('lng', 255);
                $table->text('name');
                $table->text('address');
                $table->integer('status');
                $table->string('slug', 50);
                $table->softDeletes();
                $table->nullableTimestamps();
            });


	    /**
	     * Table: groups
	     */
	    Schema::create('groups', function($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 255)->nullable();
                $table->text('permissions')->nullable();
                $table->nullableTimestamps();
            });


	    /**
	     * Table: menus
	     */
	    Schema::create('menus', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('parent_id');
                $table->string('key', 100)->nullable();
                $table->string('url', 100)->nullable();
                $table->string('icon', 50)->nullable();
                $table->text('name')->nullable();
                $table->text('description')->nullable();
                $table->enum('open', array('New','Same'))->default("Same")->nullable();
                $table->boolean('has_sub')->nullable();
                $table->integer('order')->nullable();
                $table->boolean('status')->default("1")->nullable();
                $table->softDeletes()->nullable();
                $table->nullableTimestamps();
            });

	    /**
	     * Table: pages
	     */
	    Schema::create('pages', function($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 50)->nullable();
                $table->string('slug', 50)->nullable();
                $table->integer('order')->nullable();
                $table->mediumText('banner')->nullable();
                $table->string('view', 20)->default("page");
                $table->enum('compiler', array('php','blade','twif','none'))->default("none")->nullable();
                $table->boolean('status')->default("1");
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


	    /**
	     * Table: throttle
	     */
	    Schema::create('throttle', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->string('ip_address', 255)->nullable();
                $table->integer('attempts');
                $table->boolean('suspended');
                $table->boolean('banned');
                $table->timestamp('last_attempt_at')->nullable();
                $table->timestamp('suspended_at')->nullable();
                $table->timestamp('banned_at')->nullable();
            });


	    /**
	     * Table: users
	     */
	    Schema::create('users', function($table) {
                $table->increments('id')->unsigned();
                $table->string('email', 255);
                $table->string('password', 255);
                $table->text('permissions')->nullable();
                $table->boolean('activated')->nullable();
                $table->string('activation_code', 255)->nullable();
                $table->timestamp('activated_at')->nullable();
                $table->timestamp('last_login')->nullable();
                $table->string('persist_code', 255)->nullable();
                $table->string('reset_password_code', 255)->nullable();
                $table->string('first_name', 255)->nullable();
                $table->string('last_name', 255)->nullable();
                $table->enum('sex', array('male','female'))->nullable();
                $table->date('dob')->nullable();
                $table->string('designation', 50)->nullable();
                $table->string('mobile', 255)->nullable();
                $table->string('phone', 255)->nullable();
                $table->string('address', 255)->nullable();
                $table->string('street', 255)->nullable();
                $table->string('city', 255)->nullable();
                $table->string('district', 255)->nullable();
                $table->string('state', 255)->nullable();
                $table->string('country', 100)->nullable();
                $table->string('photo', 500)->nullable();
                $table->string('web', 255)->nullable();
                $table->enum('type', array('Admin','Public','User'))->nullable();
                $table->string('facebook', 255)->nullable();
                $table->string('twitter', 255)->nullable();
                $table->string('google_plus', 255)->nullable();
                $table->string('linkedin', 255)->nullable();
                $table->softDeletes();
                $table->nullableTimestamps();
            });


	    /**
	     * Table: users_groups
	     */
	    Schema::create('users_groups', function($table) {
                $table->integer('user_id')->unsigned();
                $table->integer('group_id')->unsigned();
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {

	            Schema::drop('contacts');
	            Schema::drop('groups');
	            Schema::drop('menus');
	            Schema::drop('pages');
	            Schema::drop('throttle');
	            Schema::drop('users');
	            Schema::drop('users_groups');
         }

}