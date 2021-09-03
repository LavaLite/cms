<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('team_id')->unsigned()->nullable();
        });

        /*
         * Table: teams
         */
        Schema::create('teams', function ($table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('status')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
        /*
         * Table: users
         */
        Schema::create('team_user', function ($table) {
            $table->increments('id');
            $table->integer('team_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->enum('role', ['Admin', 'Manager', 'User'])->nullable();
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
        Schema::drop('teams');
        Schema::drop('team_user');
    }
}
