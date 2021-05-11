<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between h-16">

            <div class="flex space-x-8 ">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a>
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('IETI Escape Room') }}
                </h2>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link href="/ranking">
                        {{ __('Ranking') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </x-slot>

    <h1 class="text-center text-5xl font-black pt-14">IETI ESCAPE ROOM</h1>    

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 shadow">
                <div class="p-10">
                    <p class="text-center">¡Bienvenid@s a IETI Escape Room!</p>
                    <p class="text-center">Este juego virtual nace de la motivación de dos alumnos del CFGS de Desarrollo de Aplicaciones Web, del instituto Esteve Terradas i Illa, a la hora de realizar su proyecto de final de curso.</p>
                    <br>
                    <p class="font-semibold text-xl text-center">Dificultad: DIFÍCIL</p>
                    <p class="font-semibold text-xl text-center">Nº de Jugadores: 2</p>
                    <br>
                    <p class="text-center">Para jugar simplemente necesitarás un ordenador con conexión a internet, un compañero/a con el/la que jugar y seguir las siguientes indicaciones:</p>
                    <br>
                    <ul class="list-disc list-inside">
                        <li>Cada jugador tiene que iniciar sesión en la página.</li>
                        <li>Si no tenéis ninguna cuenta creada, por favor, id a "Registrarse" para crear una.</li>
                        <li>Buscad una forma de manteneros en contacto: chat de voz, videollamada, notas de voz, mensajes de humo... Algo que sea fácil y rápido para mantener una conversación fluida.</li>
                    </ul>
                    <!-- <ul class="list-disc list-inside">
                        <li>Uno de los dos componentes debe introducir un nombre de equipo.</li>
                        <li>Esa misma persona, tiene que seleccionar "GENERAR ENLACE" para invitar a la otra al juego.</li>
                        <li>Una vez se haya unido, podrás seleccionar el botón "EMPEZAR" para iniciar conjuntamente la aventura.</li>
                    </ul> -->
                    <div class="flex justify-around mt-10">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">ACCEDER</a>
                        @else
                            <a href="{{ route('login') }}" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">INICIAR SESIÓN</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">REGISTRARSE
                        </a>
                            @endif
                        @endauth
                        </div>
                    @endif
                    </div>
                </div>
                    <!--<div class="pt-10 space-y-4 grid items-center">
                    <div class="justify-items-center space-y-4 ">
                        <x-label class="block pb-1 text-shadow">Nombre de equipo:</x-label>
                        <x-input class="block border-2 shadow" placeholder="Introducir nombre">
                        </x-input>
                        <x-label class="block pb-1 text-shadow">Invitación:</x-label>
                        <x-input class="block border-2 shadow" placeholder="Enlace">
                        </x-input>
                        <a class="block p-2 shadow-md">Generar enlace
                        </a>
                        <a class="block p-2 shadow-md">Iniciar sesión
                        </a>
                    </div>
                    <div>
                        <a class="block px-16 p-5 bg-red-700 hover:bg-red-600 shadow-md">¡EMPEZAR!
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</x-app-layout>
