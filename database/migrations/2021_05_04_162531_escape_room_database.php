<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EscapeRoomDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escapeRooms', function (Blueprint $table) {
            $table->id();
            $table->integer('category');
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('time');
            $table->foreignId('escapeRoom_id')->constrained();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('escapeRoom_id')->constrained();
            $table->timestamps();
        });

        Schema::create('screens', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('order');  
            $table->foreignId('escapeRoom_id')->constrained();
            $table->foreignId('role_id')->constrained();
            $table->timestamps();
        });

        Schema::create('bg_images', function (Blueprint $table) {
            $table->id();
            $table->binary('image');
            $table->foreignId('screen_id')->constrained();
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->binary('image');
            $table->foreignId('screen_id')->constrained();
            $table->timestamps();
        });

        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('screen_id')->constrained();
            $table->timestamps();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('screen_id')->constrained();
            $table->timestamps();
        });

        Schema::create('clues', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('screen_id')->constrained();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
            $table->foreignId('team_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escapeRooms');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('phases');
        Schema::dropIfExists('screens');
        Schema::dropIfExists('texts');
        Schema::dropIfExists('solutions');
        Schema::dropIfExists('clues');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('team_id');
        });

    }
}
