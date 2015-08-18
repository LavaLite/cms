<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {        /**
             * Table: users
             */
            Schema::create('users', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('reporting_to')->nullable()->default(0);
                $table->string('first_name', 100)->nullable();
                $table->string('last_name', 100)->nullable();
                $table->string('email')->unique();
                $table->string('password', 100);
                $table->boolean('active')->nullable();
                $table->string('remember_token', 255)->nullable();
                $table->enum('sex', array('', 'male','female'))->nullable();
                $table->date('dob')->nullable();
                $table->string('designation', 50)->nullable();
                $table->string('mobile', 100)->nullable();
                $table->string('phone', 100)->nullable();
                $table->string('building', 255)->nullable();
                $table->string('street', 100)->nullable();
                $table->string('city', 100)->nullable();
                $table->string('district', 100)->nullable();
                $table->string('state', 100)->nullable();
                $table->integer('country')->nullable();
                $table->string('photo', 500)->nullable();
                $table->string('web', 100)->nullable();
                $table->json('social_login')->nullable();
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

                Schema::drop('users');
         }

}