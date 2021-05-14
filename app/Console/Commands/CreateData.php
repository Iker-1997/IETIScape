<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Game;
use App\Models\Team;
use App\Models\Screen;
use App\Models\Itinerary;
use App\Models\Role;
use App\Models\RolesUsersGame;
use App\Models\UsersTeam;

class CreateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Añadir datos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::query()
        ->create([
            'name' => 'Iker',
            'email' => 'iker@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::query()
        ->create([
            'name' => 'Sílvia',
            'email' => 'silvia@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        Team::query()
        ->create([
            'name' => 'Los hackers',
        ]);

        Role::query()
        ->create([
            'name' => 'dava',
        ]);

        Role::query()
        ->create([
            'name' => 'django',
        ]);

        Game::query()
        ->create([
            'time' => '09:58:41',
            'finished' => true,
            'team_id' => 1,
        ]);
            

        Screen::query()
        ->create([
            'data' => null,
            'order' => 1,
            'role_id' => 2,
        ]);

        Itinerary::query()
        ->create([
            'screen_id' => 1,
            'game_id' => 1,
        ]);

        UsersTeam::query()
        ->create([
            'user_id' => 1,
            'team_id' => 1,
        ]);

        UsersTeam::query()
        ->create([
            'user_id' => 2,
            'team_id' => 1,
        ]);

        RolesUsersGame::query()
        ->create([
            'user_id' => 1,
            'game_id' => 1,
            'role_id' => 1,
        ]);

        RolesUsersGame::query()
        ->create([
            'user_id' => 2,
            'game_id' => 1,
            'role_id' => 2,
        ]);
    }
}
