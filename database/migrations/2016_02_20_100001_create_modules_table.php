<?php

use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: modules
         */
        Schema::create('modules', function ($table) {
            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('color', 50)->nullable();
            $table->date('date')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('file', 50)->nullable();
            $table->string('files', 50)->nullable();
            $table->string('image', 50)->nullable();
            $table->string('images', 50)->nullable();
            $table->string('month', 50)->nullable();
            $table->string('password', 50)->nullable();
            $table->string('range', 50)->nullable();
            $table->string('search', 50)->nullable();
            $table->string('tel', 50)->nullable();
            $table->string('time', 50)->nullable();
            $table->string('url', 50)->nullable();
            $table->string('week', 50)->nullable();
            $table->date('date_picker')->nullable();
            $table->time('time_picker')->nullable();
            $table->dateTime('date_time_picker')->nullable();
            $table->string('radios', 20)->nullable();
            $table->string('checkboxes', 1000)->nullable();
            $table->tinyInteger('switch')->nullable();
            $table->enum('select', ['option1', 'option2', 'option3'])->nullable();
            $table->enum('model_select', ['ms1', 'ms2', 'ms3'])->nullable();
            $table->tinyInteger('tinyints')->nullable();
            $table->smallInteger('smallints')->nullable();
            $table->mediumInteger('mediumints')->nullable();
            $table->integer('ints')->nullable();
            $table->bigInteger('bigints')->nullable();
            $table->decimal('decimals', 8, 2)->nullable();
            $table->float('floats')->nullable();
            $table->double('doubles', 50)->nullable();
            $table->double('reals', 50)->nullable();
            $table->integer('bits')->nullable();
            $table->tinyInteger('booleans')->nullable();
            $table->date('dates')->nullable();
            $table->dateTime('datetimes')->nullable();
            $table->timestamp('timestamps')->nullable();
            $table->time('times')->nullable();
            $table->integer('years')->nullable();
            $table->char('chars', 1)->nullable();
            $table->string('varchars', 50)->nullable();
            $table->mediumText('tinytexts')->nullable();
            $table->text('texts')->nullable();
            $table->mediumText('mediumtexts')->nullable();
            $table->longText('longtexts')->nullable();
            $table->binary('binarys')->nullable();
            $table->binary('varbinarys')->nullable();
            $table->mediumText('tinyblobs')->nullable();
            $table->mediumText('mediumblobs')->nullable();
            $table->text('blobs')->nullable();
            $table->longText('longblobs')->nullable();
            $table->enum('enums', ['1', '2'])->nullable();
            $table->enum('sets', ['3', '4'])->nullable();
            $table->enum('status', ['Draft', 'Published', 'Hidden', 'Suspended', 'Spam'])->default('Draft')->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::drop('modules');
    }
}
