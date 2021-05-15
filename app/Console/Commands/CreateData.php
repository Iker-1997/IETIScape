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

        $data = ["html" => 
                [
                'java' => '<img src="/images/scenes/Dark-Sala-de-actos.png" alt="Sala de actos Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-around items-center p-8 space-y-6"><div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80"><p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amigo/a no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Django para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p></div><div class="bg-black py-12 px-3 rounded-xl z-10"><img src="/images/challenge1/Chat_java1.png" alt="Chat Java"></div><div class="flex flex-col space-y-4 px-2 z-10"><x-input placeholder="Introduce el codigo" id="inputView1"></x-input><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button></div></div></div><script src="{{ asset(\"js/page1.js\") }}"></script>',
                'django' => '<img src="/images/scenes/Sala-de-actos.jpg" alt="Sala de actos Django" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-around items-center p-8 space-y-6"><div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80"><p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amigo/a no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Java para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p></div><div class="bg-black py-12 px-1 rounded-xl z-10"><img src="/images/challenge1/Chat_django1.png" alt="Chat Java"></div><div class="flex flex-col space-y-4 px-2 z-10"><x-input placeholder="Introduce el codigo" id="inputView1"></x-input><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button></div></div></div><script src="{{ asset(\"js/page1.js\") }}"></script>'
                ], 
            "solution" => "PROFE", 
            "clue1" => "¿Tenéis el mismo chat?", 
            "clue2" => "Lo importante es el orden y la posición."];

        Screen::query()
        ->create([
            'data' => json_encode($data),
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
