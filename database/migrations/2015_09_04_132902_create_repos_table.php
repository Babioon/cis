<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('remote_id');
            $table->string('name');
            $table->string('host');
            $table->string('owner');
            $table->string('url');
            $table->string('clone_url');
            $table->string('git_url');
            $table->string('ssh_url');
            $table->boolean('active');
            $table->boolean('private');
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
        Schema::drop('repos');
    }
}

