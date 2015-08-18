<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(config('defender.role_user_table', 'role_user'), function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on(config('auth.table', 'users'))->onDelete('cascade');

            $table->integer(config('defender.role_key', 'role_id'))->unsigned()->index();
            $table->foreign(config('defender.role_key', 'role_id'))->references('id')
                  ->on(config('defender.role_table', 'roles'))
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table(config('defender.role_user_table', 'role_user'), function (Blueprint $table) {
            $table->dropForeign(config('defender.role_user_table', 'role_user').'_user_id_foreign');
            $table->dropForeign(config('defender.role_user_table', 'role_user').'_'.config('defender.role_key', 'role_id').'_foreign');
        });

        Schema::drop(config('defender.role_user_table', 'role_user'));
    }
}
