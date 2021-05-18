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
                @if (Route::has('login'))
                    @auth
                    <div class="flex items-center justify-end">
                        <a href="/logout"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg></a>
                    </div>
                    @endauth
                @endif
                </div>
            </div>
        </div>
    </x-slot>

    <h1 class="text-center text-5xl font-black pt-14">IETI ESCAPE ROOM</h1>    

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-5 shadow">
                <div class="p-10">
                    <p class="text-center text-xl">¡Bienvenid@s a IETI Escape Room!</p><br>
                    <p class="text-center">Este juego virtual nace de la motivación de dos alumnos del CFGS de Desarrollo de Aplicaciones Web, del instituto Esteve Terradas i Illa, a la hora de realizar su proyecto de final de curso.</p>
                    <br>
                    <p class="font-semibold text-xl text-center">Dificultad: MUY DIFÍCIL</p>
                    <p class="font-semibold text-xl text-center">Nº de Jugadores: 2</p>
                    <p class="font-semibold text-xl text-center">Duración: 60-90 minutos</p>
                    <br>
                    <p class="text-center">Para jugar simplemente necesitarás un <b>ordenador</b> con conexión a internet, <b>papel y lápiz</b> para ayudarte con las pruebas, un <b>compañero/a</b> con el/la que compartir la experiencia y seguir las siguientes <b>indicaciones</b>:</p>
                    <br>
                @if (Route::has('login'))
                    @auth
                    <ul class="list-disc list-inside">
                        <li>Buscad un método para poneros en contacto: chat de voz, videollamada, notas de voz, mensajes de humo... La mejor manera para poder mantener una conversación fluida y sin inconvenientes.</li>
                        <li>Pulsa "Entrar" para continuar y crear una partida.</li>
                    </ul>
                    @else
                    <ul class="list-disc list-inside">
                        <li>Los dos jugadores/as deberéis "INICIAR SESIÓN" en la página.</li>
                        <li>Si alguno/a todavía no tiene ninguna cuenta creada, por favor, que se dirija a "REGISTRARSE" para crear una.</li>
                        <li>Buscad un método para poneros en contacto: chat de voz, videollamada, notas de voz, mensajes de humo... La mejor manera para poder mantener una conversación fluida y sin inconvenientes.</li>
                    </ul>
                    @endauth
                @endif
                </div>
            @if (Route::has('login'))
                @auth
                <div class="flex justify-center mb-5">
                    <a href="{{ url('/team') }}" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 px-8 shadow-md">ENTRAR</a>
                </div>
                @else
                <div class="flex justify-around items-center mb-5">
                    <a href="/login" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">INICIAR SESIÓN</a>
                    <a href="/register" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">REGISTRARSE</a>
                </div>
                @endauth
            @endif
            </div>
        </div>
    </div>
</x-app-layout>
