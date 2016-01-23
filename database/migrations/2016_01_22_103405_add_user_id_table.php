<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
        });

        Schema::table('units', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();;
        });

        Schema::table('sources', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();;
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('units', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('sources', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('units', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('sources', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
