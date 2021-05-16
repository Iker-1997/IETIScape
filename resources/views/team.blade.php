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
            <div class="grid grid-cols-2 p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <p class="text-2xl font-bold">¡Un placer conocerte "<span>{{ Auth::user()->name }}</span>"!</p>
                    <br>
                    <p class="text-lg">PARA EMPEZAR EL JUEGO:</p>
                    <br>
                    <ul class="list-disc list-inside">
                        <li>Lo primero que tienes que hacer es elegir con tu compañero/a un nombre para vuestro equipo e introducirlo en el campo correspondiente.</li>
                        <li>Si tu compañero/a es quien crea la partida, tú solamente deberás introducir en el campo el "código" que te haga llegar y unirte.</li>
                        <li>Si por el contrario eres tu quien crea la partida, deberás introducir un nombre.</li>
                    </ul>
                    <br>
                    <p class="font-semibold text-3xl text-center mt-6">¡BUENA SUERTE!</p>
                    <div class="mt-10">
                        <h2 class="font-bold text-lg">JUGADORES:</h2>
                        <ol id='players' class="list-decimal list-inside">
                        </ol>
                    </div>
                </div>
                <div class="pt-10 space-y-4 grid justify-items-center">
                    <div class="justify-items-center space-y-4 ">
                        <h2 class="font-bold text-lg">Unirse a una partida existente:</h2>
                        <x-label class="block pb-1 text-shadow">Invitación:</x-label>
                        <x-input type="number" id='game-id' class="block border-2 shadow p-3" placeholder="Código">
                        </x-input>
                        <button id="joinGame" class="self-center text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-3 shadow-md">Unirse a partida
                        </button>

                        <h2 class="font-bold text-lg">Crear una nueva partida:</h2>
                        <x-label class="block pb-1 text-shadow">Nombre de equipo:</x-label>
                        <x-input class="block border-2 shadow p-3" placeholder="Introducir nombre" id="teamName">
                        </x-input>
                        <button onclick='createGame("{{Auth::user()->id}}")' id='createGame' class="self-center text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-3 shadow-md">Crear partida
                        </button>
                    </div>
                    <div class="p-10">
                        <a href="/election" class="self-center text-center bg-red-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150 block px-12 p-5 text-xl shadow-md">¡EMPEZAR!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
