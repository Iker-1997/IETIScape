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
 /*        User::query()
        ->create([
            'name' => 'Jugador1',
            'email' => 'jugador1@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::query()
        ->create([
            'name' => 'Jugador2',
            'email' => 'jugador2@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        Team::query()
        ->create([
            'name' => 'Los hackers',
        ]); */

        Role::query()
        ->create([
            'name' => 'java',
        ]);

        Role::query()
        ->create([
            'name' => 'django',
        ]);

/*         Game::query()
        ->create([
            'time' => '09:58:41',
            'finished' => true,
            'team_id' => 1,
            'itinerary' => 1,
        ]);    */  
        
        $data1way1 = ["html" => [
            'java' => '<img src="/images/scenes/Dark-Sala-de-actos.png" alt="Sala de actos Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-around items-center p-8 space-y-6"><div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80"><p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amigo no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Django para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p></div><div class="bg-black py-12 px-3 rounded-xl z-10"><img src="/images/challenge1/Chat_java.png" width="400 alt="Chat Java"></div><div class="flex flex-col space-y-4 px-2 z-10"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView1"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button></div></div></div><script src="/js/page1.js"></script>',
            'django' => '<img src="/images/scenes/Sala-de-actos.jpg" alt="Sala de actos Django" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-around items-center p-8 space-y-6"><div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80"><p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amiga no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Java para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p></div><div class="bg-black py-12 px-1 rounded-xl z-10"><img src="/images/challenge1/Chat_django.png" width="400 alt="Chat Django"></div><div class="flex flex-col space-y-4 px-2 z-10"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView1"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button></div></div></div><script src="/js/page1.js"></script>'
            ], 
        "solution" => "PROFE", 
        "clue1" => "¿Tenéis el mismo chat?", 
        "clue2" => "Lo importante es el orden y la posición."];

        $data1way2 = ["html" => [
                'java' => '<img src="/images/scenes/Dark-Sala-de-actos.png" alt="Sala de actos Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-around items-center p-8 space-y-6"><div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80"><p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amigo no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Django para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p></div><div class="bg-black py-12 px-3 rounded-xl z-10"><img src="/images/challenge1/Chat_java1.png" width="400" alt="Chat Java"></div><div class="flex flex-col space-y-4 px-2 z-10"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView1"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button></div></div></div><script src="/js/page1.js"></script>',
                'django' => '<img src="/images/scenes/Sala-de-actos.jpg" alt="Sala de actos Django" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-around items-center p-8 space-y-6"><div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80"><p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amiga no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Java para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p></div><div class="bg-black py-12 px-1 rounded-xl z-10"><img src="/images/challenge1/Chat_django1.png" width="400 alt="Chat Django"></div><div class="flex flex-col space-y-4 px-2 z-10"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView1"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button></div></div></div><script src="/js/page1.js"></script>'
                ], 
                "solution" => "PROFE", 
                "clue1" => "¿Tenéis el mismo chat?", 
                "clue2" => "Lo importante es el orden y la posición."];

        $data2way1 = ["html" => [
            'java' => '<img src="/images/scenes/Puerta-despacho-Java.png" alt="Puerta despacho Java" class="z-0 top-0 fixed w-full h-screen"><div id="felpudo" class="hidden absolute overflow-hidden w-full min-h-screen z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge2/java1.png" alt="Felpudo" class="w-8/12 mx-auto"></div><div class="h-screen flex flex-col justify-between items-center p-4"><div class="z-20 flex flex-col items-center"><div class="bg-white shadow-sm rounded-lg mb-4 bg-opacity-80"><p class="p-5 italic">Estáis muy confusos pero, aún así, decidís ir en busca del profesor a su departamento y ver por qué no hay nadie en el lugar del examen.<br>-Java: No me gusta ésta sensación. Todo está oscuro y me dan escalofríos...<br>-Django: Yo todo lo veo muy normal. Pero no entiendo por qué sigo sin verte.<br>Cuando llegas te encuentras con la puerta cerrada. Seguro que hay alguna forma de abrirla.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView2"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView2">AVANZAR</button></div></div></div><button id="verFelpudo" class="justify-self-end self-start z-10 border-none h-32 w-60 outline-none cursor-pointer mb-2 ml-80" style="background:transparent;"></button></div><script src="/js/page2.js"></script>',
            'django' => '<img src="/images/scenes/Puerta-despacho-Django.png" alt="Puerta despacho Django" class="z-0 top-0 fixed w-full h-screen"><div id="felpudo" class="hidden absolute overflow-hidden w-full min-h-screen z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge2/django1.png" alt="Felpudo" class="w-8/12 mx-auto"></div><div class="h-screen flex flex-col justify-between items-center p-4"><div class="z-20 flex flex-col items-center"><div class="bg-white shadow-sm rounded-lg mb-4 bg-opacity-80"><p class="p-5 italic">Estáis muy confusos pero, aún así, decidís ir en busca del profesor a su departamento y ver por qué no hay nadie en el lugar del examen.<br>-Java: No me gusta ésta sensación. Todo está oscuro y me dan escalofríos...<br>-Django: Yo todo lo veo muy normal. Pero no entiendo por qué sigo sin verte.<br>Cuando llegas te encuentras con la puerta cerrada. Seguro que hay alguna forma de abrirla.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView2"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView2">AVANZAR</button></div></div></div><button id="verFelpudo" class="justify-self-end self-end z-10 border-none h-32 w-60 outline-none cursor-pointer mb-2 mr-80" style="background:transparent;"></button></div><script src="/js/page2.js"></script>'
            ], 
        "solution" => "Cabo Cañaveral", 
        "clue1" => "¿Habéis visto la etiqueta del felpudo?",
        "clue2" => "Tal vez necesitéis algo para orientaros."];

        $data2way2 = ["html" => [
            'java' => '<img src="/images/scenes/Puerta-despacho-Java.png" alt="Puerta despacho Java" class="z-0 top-0 fixed w-full h-screen"><div id="felpudo" class="hidden absolute overflow-hidden w-full min-h-screen z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge2/java2.png" alt="Felpudo" class="w-8/12 mx-auto"></div><div class="h-screen flex flex-col justify-between items-center p-4"><div class="z-20 flex flex-col items-center"><div class="bg-white shadow-sm rounded-lg mb-4 bg-opacity-80"><p class="p-5 italic">Estáis muy confusos pero, aún así, decidís ir en busca del profesor a su departamento y ver por qué no hay nadie en el lugar del examen.<br>-Java: No me gusta ésta sensación. Todo está oscuro y me dan escalofríos...<br>-Django: Yo todo lo veo muy normal. Pero no entiendo por qué sigo sin verte.<br>Cuando llegas te encuentras con la puerta cerrada. Seguro que hay alguna forma de abrirla.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView2"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView2">AVANZAR</button></div></div></div><button id="verFelpudo" class="justify-self-end self-start z-10 border-none h-32 w-60 outline-none cursor-pointer mb-2 ml-80" style="background:transparent;"></button></div><script src="/js/page2.js"></script>',
            'django' => '<img src="/images/scenes/Puerta-despacho-Django.png" alt="Puerta despacho Django" class="z-0 top-0 fixed w-full h-screen"><div id="felpudo" class="hidden absolute overflow-hidden w-full min-h-screen z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge2/django2.png" alt="Felpudo" class="w-8/12 mx-auto"></div><div class="h-screen flex flex-col justify-between items-center p-4"><div class="z-20 flex flex-col items-center"><div class="bg-white shadow-sm rounded-lg mb-4 bg-opacity-80"><p class="p-5 italic">Estáis muy confusos pero, aún así, decidís ir en busca del profesor a su departamento y ver por qué no hay nadie en el lugar del examen.<br>-Java: No me gusta ésta sensación. Todo está oscuro y me dan escalofríos...<br>-Django: Yo todo lo veo muy normal. Pero no entiendo por qué sigo sin verte.<br>Cuando llegas te encuentras con la puerta cerrada. Seguro que hay alguna forma de abrirla.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView2"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view2clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView2">AVANZAR</button></div></div></div><button id="verFelpudo" class="justify-self-end self-end z-10 border-none h-32 w-60 outline-none cursor-pointer mb-2 mr-80" style="background:transparent;"></button></div><script src="/js/page2.js"></script>'
            ], 
        "solution" => "Puerto espacial de Kourou", 
        "clue1" => "¿Habéis visto la etiqueta del felpudo?",
        "clue2" => "Tal vez necesitéis algo para orientaros."];

        $data3way1 = ["html" => [
            'java' => '<img src="/images/scenes/Despacho-Java1.png" alt="Despacho Java" class="z-0 top-0 fixed w-full h-screen"><div id="periodico" class="w-full hidden absolute overflow-hidden z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge3/periodico.png" alt="Periodico" class="w-8/12 mx-auto"></div><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís entrar, pero el profesor no está. El despacho está algo desordenado, como si alguien hubiese salido con prisa de allí. Pensáis en ir a otro lugar, pero hay algo extraño en esa habitación.<br>-Java: ¡A éste despacho le falta algo!<br>-Django: ¿Algo? Yo solamente lo veo desordenado.<br>Es posible que por aquí encontréis alguna forma de ayudar a Java a encontrar lo que falta.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 p-3 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView3"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue3">PISTA 3</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView3">AVANZAR</button></div></div><img src="/images/challenge3/periodico.png" id="verPeriodico" class="z-10 mt-2 ml-6 self-start border-none hidden xl:block h-12 w-20 outline-none cursor-pointer" style="background:transparent;"></div><script src="/js/page3java1.js"></script>',
            'django' => '<audio id="audio" controls class="hidden"><source type="audio/mp3" src="/images/challenge3/morse.mp3"></audio><img src="/images/scenes/Despacho-Django.jpg" alt="Despacho Django" class="z-0 top-0 fixed w-full h-screen"><div id="periodico" class="w-full hidden absolute overflow-hidden z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge3/periodico.png" alt="Periodico" class="w-8/12 mx-auto"></div><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís entrar, pero el profesor no está. El despacho está algo desordenado, como si alguien hubiese salido con prisa de allí. Pensáis en ir a otro lugar, pero hay algo extraño en esa habitación.<br>-Java: ¡A éste despacho le falta algo!<br>-Django: ¿Algo? Yo solamente lo veo desordenado.<br>Es posible que por aquí encontréis alguna forma de ayudar a Java a encontrar lo que falta.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView3"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue3">PISTA 3</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView3">AVANZAR</button></div></div><img src="/images/challenge3/periodico.png" id="verPeriodico" class="z-10 mt-8 mr-6 self-end border-none hidden xl:block h-12 w-20 outline-none cursor-pointer" style="background:transparent;"><img src="/images/challenge3/play.png" id="reproducirAudio" class="z-10 ml-52 mb-2 self-start border-none hidden xl:block h-12 w-20 outline-none cursor-pointer" style="background:transparent;"></div><script src="/js/page3django.js"></script>'
            ], 
        "solution" => "CALMA", 
        "clue1" => "Estaría bien pararse a escuchar el audio atentamente.", 
        "clue2" => "¿Dónde se encuentra la consola en una pàgina web?",
        "clue3" => "Utiliza clic derecho + \"Inspeccionar\" en la página y busca la consola."];

        $data3way2 = ["html" => [
            'java' => '<img src="/images/scenes/Despacho-Java2.png" alt="Despacho Java" class="z-0 top-0 fixed w-full h-screen"><div id="periodico" class="w-full hidden absolute overflow-hidden z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge3/periodico.png" alt="Periodico" class="w-8/12 mx-auto"></div><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís entrar, pero el profesor no está. El despacho está algo desordenado, como si alguien hubiese salido con prisa de allí. Pensáis en ir a otro lugar, pero hay algo extraño en esa habitación.<br>-Java: ¡A éste despacho le falta algo!<br>-Django: ¿Algo? Yo solamente lo veo desordenado.<br>Es posible que por aquí encontréis alguna forma de ayudar a Java a encontrar lo que falta.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView3"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue3">PISTA 3</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView3">AVANZAR</button></div></div><img src="/images/challenge3/periodico.png" id="verPeriodico" class="z-10 mt-8 ml-6 self-start border-none hidden xl:block h-12 w-20 outline-none cursor-pointer" style="background:transparent;"></div><script src="/js/page3java2.js"></script>',
            'django' => '<audio id="audio" controls class="hidden"><source type="audio/mp3" src="/images/challenge3/morse.mp3"></audio><img src="/images/scenes/Despacho-Django.jpg" alt="Despacho Django" class="z-0 top-0 fixed w-full h-screen"><div id="periodico" class="w-full hidden absolute overflow-hidden z-50 px-32 py-12 bg-black bg-opacity-80"><img src="/images/challenge3/periodico.png" alt="Periodico" class="w-8/12 mx-auto"></div><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís entrar, pero el profesor no está. El despacho está algo desordenado, como si alguien hubiese salido con prisa de allí. Pensáis en ir a otro lugar, pero hay algo extraño en esa habitación.<br>-Java: ¡A éste despacho le falta algo!<br>-Django: ¿Algo? Yo solamente lo veo desordenado.<br>Es posible que por aquí encontréis alguna forma de ayudar a Java a encontrar lo que falta.</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView3"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view3clue3">PISTA 3</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView3">AVANZAR</button></div></div><img src="/images/challenge3/periodico.png" id="verPeriodico" class="z-10 mt-8 mr-6 self-end border-none hidden xl:block h-12 w-20 outline-none cursor-pointer" style="background:transparent;"><img src="/images/challenge3/play.png" id="reproducirAudio" class="z-10 ml-52 mb-2 self-start border-none hidden xl:block h-12 w-20 outline-none cursor-pointer" style="background:transparent;"></div><script src="/js/page3django.js"></script>'
            ], 
            "solution" => "LUZ", 
            "clue1" => "Estaría bien pararse a escuchar el audio atentamente.", 
            "clue2" => "¿Dónde se encuentra la consola en una pàgina web?",
            "clue3" => "Utiliza clic derecho + \"Inspeccionar\" en la página y busca la consola."];

        $data4way1 = ["html" => [
            'java' => '<img src="/images/scenes/Pasillo-Java.png" alt="Pasillo Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís avanzar y dejáis atrás el departamento. En algún punto del instituto tenéis que poder encontraros, pero ¿dónde? Veis que hay un mapa en el pasillo y es posible que haya algún tipo de indicación en él.</p></div><img src="/images/challenge4/Indicaciones1.png" alt="Indicaciones" class="z-20 mb-6"><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView4"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView4">AVANZAR</button></div></div></div><script src="/js/page4.js"></script>',
            'django' => '<img src="/images/scenes/Pasillo-Django.jpg" alt="Pasillo Django" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís avanzar y dejáis atrás el departamento. En algún punto del instituto tenéis que poder encontraros, pero ¿dónde? Veis que hay un mapa en el pasillo y es posible que haya algún tipo de indicación en él.</p></div><img src="/images/challenge4/Mapa1.png" alt="Mapa" class="z-20 mb-6 rounded"><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView4"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView4">AVANZAR</button></div></div></div><script src="/js/page4.js"></script>'
            ], 
        "solution" => "WC CHICAS", 
        "clue1" => "Seguid BIEN las indicaciones.", 
        "clue2" => "Recordad que en el OTRO mundo las cosas son diferentes."];

        $data4way2 = ["html" => [
            'java' => '<img src="/images/scenes/Pasillo-Java.png" alt="Pasillo Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís avanzar y dejáis atrás el departamento. En algún punto del instituto tenéis que poder encontraros, pero ¿dónde? Veis que hay un mapa en el pasillo y es posible que haya algún tipo de indicación en él.</p></div><img src="/images/challenge4/Indicaciones2.png" alt="Indicaciones" class="z-20 mb-6"><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView4"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView4">AVANZAR</button></div></div></div><script src="/js/page4.js"></script>',
            'django' => '<img src="/images/scenes/Pasillo-Django.jpg" alt="Pasillo Django" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-center items-center p-4"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Conseguís avanzar y dejáis atrás el departamento. En algún punto del instituto tenéis que poder encontraros, pero ¿dónde? Veis que hay un mapa en el pasillo y es posible que haya algún tipo de indicación en él.</p></div><img src="/images/challenge4/Mapa2.png" alt="Mapa" class="z-20 mb-6 rounded"><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView4"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue1">PISTA 1</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view4clue2">PISTA 2</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView4">AVANZAR</button></div></div></div><script src="/js/page4.js"></script>'
            ], 
        "solution" => "LAVABOS", 
        "clue1" => "Seguid BIEN las indicaciones.", 
        "clue2" => "Recordad que en el OTRO mundo las cosas son diferentes."];

        $data5way1 = ["html" => [
            'java' => '<img src="/images/challenge5/java1.png" alt="Lavabo Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-between items-center p-4 h-screen"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Las señales os hacen dirigiros a uno de los lavabos. Una vez allí miráis alrededor y os posicionáis frente a los espejos. No os imagináis lo que iba a pasar a continuación.<br>-Java: ¡Django, puedo verte!<br>-Django: ¡Dios mío, Java! ¿Qué haces ahí dentro?<br>Por fin os encontráis. Os veis los dos en cada uno de los dos lados del espejo, pero no podéis atravesarlo. ¿Es posible que esas marcas en el espejo os ayuden?</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView5"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view5clue">PISTA</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView5">AVANZAR</button></div></div></div><script src="/js/page5.js"></script>',
            'django' => '<img src="/images/challenge5/django1.png" alt="Lavabo Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-between items-center p-4 h-screen"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Las señales os hacen dirigiros a uno de los lavabos. Una vez allí miráis alrededor y os posicionáis frente a los espejos. No os imagináis lo que iba a pasar a continuación.<br>-Java: ¡Django, puedo verte!<br>-Django: ¡Dios mío, Java! ¿Qué haces ahí dentro?<br>Por fin os encontráis. Os veis los dos en cada uno de los dos lados del espejo, pero no podéis atravesarlo. ¿Es posible que esas marcas en el espejo os ayuden?</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView5"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view5clue">PISTA</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView5">AVANZAR</button></div></div></div><script src="/js/page5.js"></script>'
            ], 
        "solution" => [
            "java" => "25",
            "django" => "7"
            ], 
        "clue1" => [
            "java" => "Al cuadrado.",
            "django" => "Prueba de sumar números."]];

        $data5way2 = ["html" => [
            'java' => '<img src="/images/challenge5/java2.png" alt="Lavabo Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-between items-center p-4 h-screen"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Las señales os hacen dirigiros a uno de los lavabos. Una vez allí miráis alrededor y os posicionáis frente a los espejos. No os imagináis lo que iba a pasar a continuación.<br>-Java: ¡Django, puedo verte!<br>-Django: ¡Dios mío, Java! ¿Qué haces ahí dentro?<br>Por fin os encontráis. Os veis los dos en cada uno de los dos lados del espejo, pero no podéis atravesarlo. ¿Es posible que esas marcas en el espejo os ayuden?</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView5"><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view5clue">PISTA</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView5">AVANZAR</button></div></div></div><script src="/js/page5.js"></script>',
            'django' => '<img src="/images/challenge5/django2.png" alt="Lavabo Java" class="z-0 top-0 fixed w-full h-screen"><div class="flex flex-col justify-between items-center p-4 h-screen"><div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80"><p class="p-5 italic">Las señales os hacen dirigiros a uno de los lavabos. Una vez allí miráis alrededor y os posicionáis frente a los espejos. No os imagináis lo que iba a pasar a continuación.<br>-Java: ¡Django, puedo verte!<br>-Django: ¡Dios mío, Java! ¿Qué haces ahí dentro?<br>Por fin os encontráis. Os veis los dos en cada uno de los dos lados del espejo, pero no podéis atravesarlo. ¿Es posible que esas marcas en el espejo os ayuden?</p></div><div class="flex flex-col space-y-4 px-2 z-20"><input class="rounded-md shadow-sm border-gray-300 p-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Introduce el codigo" id="inputView5"></x-input><div class="flex space-x-12"><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view5clue">PISTA</button><button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView5">AVANZAR</button></div></div></div><script src="/js/page5.js"></script>'
            ], 
        "solution" => [
            "java" => "111221",
            "django" => "13"
            ], 
        "clue1" => [
            "java" => "Di cuántos números hay.",
            "django" => "Suma de anteriores."]];


        Screen::query()
        ->create([
            'data' => json_encode($data1way1),
            'order' => 1,
            'itinerary' => 1,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data1way2),
            'order' => 1,
            'itinerary' => 2,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data2way1),
            'order' => 2,
            'itinerary' => 1,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data2way2),
            'order' => 2,
            'itinerary' => 2,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data3way1),
            'order' => 3,
            'itinerary' => 1,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data3way2),
            'order' => 3,
            'itinerary' => 2,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data4way1),
            'order' => 4,
            'itinerary' => 1,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data4way2),
            'order' => 4,
            'itinerary' => 2,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data5way1),
            'order' => 5,
            'itinerary' => 1,
        ]);
        Screen::query()
        ->create([
            'data' => json_encode($data5way2),
            'order' => 5,
            'itinerary' => 2,
        ]);

/*         Itinerary::query()
        ->create([
            'screen_id' => 1,
            'game_id' => 1,
        ]);

        Itinerary::query()
        ->create([
            'screen_id' => 3,
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
        ]); */
    }
}
