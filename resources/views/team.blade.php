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
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
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
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="grid grid-cols-2 p-6">
                    <div class="pt-10 px-10 pb-4">
                        <p class="text-2xl font-bold">¡Un placer conocerte "<span>{{ Auth::user()->name }}</span>"!</p>
                        <br>
                        <p class="text-lg">PARA EMPEZAR EL JUEGO:</p>
                        <br>
                        <p>Lo primero que tienes que hacer es elegir con tu compañero/a un nombre para vuestro equipo.</p>
                        <br>
                        <ul class="list-disc list-inside">
                            <li><b>Si tu compañero/a es quien crea la </b>, tú solamente deberás introducir en el campo de "Unirse a una partida existente" el código que te haga llegar y unirte.</li>
                            <li><b>Si por el contrario eres tú quien crea la partida</b>, deberás introducir el nombre de equipo y seleccionar "Crear partida".</li>
                        </ul>
                        <br>
                        <div class="mt-4">
                            <h2 class="font-bold text-lg">JUGADORES:</h2>
                            <ol id='players' class="list-decimal list-inside">
                            </ol>
                        </div>
                        <p class="font-semibold text-3xl text-center mt-10">¡BUENA SUERTE!</p>
                    </div>
                    <div class="pt-10 space-y-4 grid justify-items-center">
                        <div class="justify-items-center space-y-4 ">
                            <h2 class="font-bold text-lg">Unirse a una partida existente:</h2>
                            <x-label class="block pb-1 text-shadow">Invitación:</x-label>
                            <x-input type="number" id='game-id' class="block border-2 shadow p-3" placeholder="Código">
                            </x-input>
                            <button id="joinGame" onclick='joinGame("{{Auth::user()->id}}")' class="self-center text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-3 px-6 shadow-md">Unirse a partida
                            </button>

                            <h2 class="font-bold text-lg">Crear una nueva partida:</h2>
                            <x-label class="block pb-1 text-shadow">Nombre de equipo:</x-label>
                            <x-input class="block border-2 shadow p-3" id="teamName" placeholder="Introducir nombre">
                            </x-input>
                            <button onclick='createGame("{{Auth::user()->id}}")' id='createGame' class="self-center text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-3 px-10 shadow-md">Crear partida
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mb-12">
                    <a href="/election" class="self-center text-center bg-blue-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150 block px-12 p-5 text-2xl shadow-md pointer-events-none opacity-60" id="startGame" tabindex="-1">¡EMPEZAR!
                    </a>
                </div>
            <div>
        </div>
    </div>
</x-app-layout>
