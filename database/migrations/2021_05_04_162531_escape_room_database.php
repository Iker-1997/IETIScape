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
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('time');
            $table->foreignId('escapeRoom_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('escapeRoom_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });

        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->text('answer');
            $table->foreignId('escapeRoom_id')->constrained();
        });

        Schema::create('screens', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('text');
            $table->binary('image');
            $table->foreignId('phase_id')->constrained();
        });

        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('phase_id')->constrained();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('phase_id')->constrained();
        });

        Schema::create('clues', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('phase_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
