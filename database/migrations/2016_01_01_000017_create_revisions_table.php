<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevisionsTable extends Migration
{
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_type')->nullable()->index();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('field')->nullable()->index();
            $table->string('cast')->nullable();
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->string('revision_type')->nullable()->index();
            $table->integer('revision_id')->unsigned()->nullable()->index();
            $table->timestamps();
            $table->index(['revision_id', 'revision_type']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('revisions');
    }
}
