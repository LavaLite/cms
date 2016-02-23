<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevisionsTable extends Migration
{
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('field')->nullable()->index();
            $table->string('cast')->nullable();
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->string('revision_type');
            $table->integer('revision_id');
            $table->timestamps();
            $table->index(['revision_id', 'revision_type']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('revisions');
    }
}
