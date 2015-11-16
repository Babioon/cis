<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repo_id')->unsigned();
            $table->integer('status')->unsigned();
            $table->dateTime('started');
            $table->dateTime('finished');
            $table->string('sha');
            $table->string('branch');
            $table->string('pr');
            $table->string('commit_author');
            $table->string('commit_message');
            $table->longText('payload');
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
        Schema::drop('builds');
    }
}
