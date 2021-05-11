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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->time('boolean');
            $table->foreignId('team_id')->constrained();
            $table->timestamps();
        });

        Schema::create('itinerary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('screen_id')->constrained();
            $table->foreignId('game_id')->constrained();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('screens', function (Blueprint $table) {
            $table->id();
            $table->json('data');
            $table->integer('order');
            $table->foreignId('role_id')->constrained();
            $table->timestamps();
        });

        Schema::create('users_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->timestamps();
        });

        Schema::create('roles_users_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('game_id')->constrained();
            $table->foreignId('roles_id')->constrained();
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
        Schema::dropIfExists('teams');
        Schema::dropIfExists('games');
        Schema::dropIfExists('itinerary');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('screens');
        Schema::dropIfExists('users_teams');
        Schema::dropIfExists('solutions');
        Schema::dropIfExists('clues');


    }
}
