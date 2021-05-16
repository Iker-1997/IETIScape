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
                    <div class="sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex text-sm font-semibold text-black-500 hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Tanca sessió') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <h1 class="text-center text-5xl font-black pt-14">IETI ESCAPE ROOM</h1>    

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-5 shadow">
                <div class="p-10">
                    <p class="text-center">¡Bienvenid@s a IETI Escape Room!</p>
                    <p class="text-center">Este juego virtual nace de la motivación de dos alumnos del CFGS de Desarrollo de Aplicaciones Web, del instituto Esteve Terradas i Illa, a la hora de realizar su proyecto de final de curso.</p>
                    <br>
                    <p class="font-semibold text-xl text-center">Dificultad: DIFÍCIL</p>
                    <p class="font-semibold text-xl text-center">Nº de Jugadores: 2</p>
                    <br>
                    <p class="text-center">Para jugar simplemente necesitarás un ordenador con conexión a internet, un compañero/a con el/la que compartir la experiencia y seguir las siguientes indicaciones:</p>
                    <br>
                    <ul class="list-disc list-inside">
                        <li>Uno de los dos jugadores tiene que iniciar sesión en la página.</li>
                        <li>Si este no tiene ninguna cuenta creada, por favor, ve a "REGISTRARSE" para crear una.</li>
                        <li>Buscad una forma de manteneros en contacto: chat de voz, videollamada, notas de voz, mensajes de humo... Algo que sea fácil y rápido para mantener una conversación fluida.</li>
                    </ul>
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
