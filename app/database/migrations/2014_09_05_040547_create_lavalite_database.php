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
	     * Table: contact_langs
	     */
	    Schema::create('contact_langs', function($table) {
                $table->increments('id');
                $table->integer('contact_id');
                $table->string('name', 50);
                $table->text('address');
                $table->string('lang', 5);
            });


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
                $table->integer('status');
                $table->string('slug', 50);
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: files
	     */
	    Schema::create('files', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('of_id');
                $table->string('of_type', 250);
                $table->string('name', 255);
                $table->string('description', 1000);
                $table->string('category', 50)->nullable();
                $table->string('file', 100);
                $table->string('path', 255);
                $table->integer('default');
                $table->integer('size');
                $table->string('extension', 255);
                $table->string('mimetype', 255);
                $table->integer('user_id')->unsigned();
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: groups
	     */
	    Schema::create('groups', function($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 255);
                $table->text('permissions')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: menu_langs
	     */
	    Schema::create('menu_langs', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('menu_id');
                $table->string('name', 250);
                $table->text('description');
                $table->string('lang', 5)->default("en");
            });


	    /**
	     * Table: menus
	     */
	    Schema::create('menus', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('parent_id');
                $table->string('key', 100);
                $table->string('url', 100);
                $table->string('icon', 50)->nullable();
                $table->enum('open', array('New','Same'))->default("Same");
                $table->boolean('has_sub');
                $table->integer('order');
                $table->boolean('status')->default("1");
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: page_langs
	     */
	    Schema::create('page_langs', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('page_id');
                $table->string('heading', 100);
                $table->string('title', 200);
                $table->longText('content');
                $table->string('keyword', 200);
                $table->string('description', 200);
                $table->string('image', 250)->nullable();
                $table->text('abstract');
                $table->string('lang', 3)->default("en");
            });


	    /**
	     * Table: pages
	     */
	    Schema::create('pages', function($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 50);
                $table->string('slug', 50);
                $table->integer('order');
                $table->string('banner', 100);
                $table->string('view', 20)->default("page");
                $table->enum('compiler', array('php','blade','twif','none'))->default("none");
                $table->boolean('status')->default("1");
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
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
                $table->boolean('activated');
                $table->string('activation_code', 255)->nullable();
                $table->timestamp('activated_at')->nullable();
                $table->timestamp('last_login')->nullable();
                $table->string('persist_code', 255)->nullable();
                $table->string('reset_password_code', 255)->nullable();
                $table->string('first_name', 255)->nullable();
                $table->string('last_name', 255)->nullable();
                $table->enum('sex', array('male','female'));
                $table->date('date_of_birth')->nullable();
                $table->string('designation', 50);
                $table->string('mobile', 255)->nullable();
                $table->string('phone', 255)->nullable();
                $table->string('address', 255)->nullable();
                $table->string('street', 255)->nullable();
                $table->string('city', 255)->nullable();
                $table->string('district', 255)->nullable();
                $table->string('state', 255)->nullable();
                $table->string('country', 100);
                $table->string('photo', 255)->nullable();
                $table->string('web', 255)->nullable();
                $table->string('facebook', 255)->nullable();
                $table->string('twitter', 255)->nullable();
                $table->string('google_plus', 255)->nullable();
                $table->string('linkedin', 255)->nullable();
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
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

	            Schema::drop('contact_langs');
	            Schema::drop('contacts');
	            Schema::drop('files');
	            Schema::drop('groups');
	            Schema::drop('menu_langs');
	            Schema::drop('menus');
	            Schema::drop('page_langs');
	            Schema::drop('pages');
	            Schema::drop('throttle');
	            Schema::drop('users');
	            Schema::drop('users_groups');
         }

}