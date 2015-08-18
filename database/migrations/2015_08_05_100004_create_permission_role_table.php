<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(config('defender.permission_role_table', 'permission_role'), function (Blueprint $table) {
            $table->integer(config('defender.permission_key', 'permission_id'))->unsigned()->index();
            $table->foreign(config('defender.permission_key', 'permission_id'))->references('id')
                  ->on(config('defender.permission_table', 'permissions'))
                  ->onDelete('cascade');

            $table->integer(config('defender.role_key', 'role_id'))->unsigned()->index();
            $table->foreign(config('defender.role_key', 'role_id'))->references('id')
                  ->on(config('defender.role_table', 'roles'))
                  ->onDelete('cascade');

            $table->tinyInteger('value')->default(-1);
            $table->timestamp('expires')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table(config('defender.permission_role_table', 'permission_role'), function (Blueprint $table) {
            $table->dropForeign(config('defender.permission_role_table', 'permission_role').'_'.config('defender.permission_key', 'permission_id').'_foreign');
            $table->dropForeign(config('defender.permission_role_table', 'permission_role').'_'.config('defender.role_key', 'role_id').'_foreign');
        });

        Schema::drop(config('defender.permission_role_table', 'permission_role'));
    }
}
