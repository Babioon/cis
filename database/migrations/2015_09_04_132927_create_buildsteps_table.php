<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildstepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildsteps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('build_id')->unsigned();
            $table->integer('step')->unsigned();
            $table->string('name');
            $table->boolean('success');
            $table->boolean('allow_to_fail');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buildsteps');
    }
}
