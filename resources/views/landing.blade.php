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
            <div class="flex items-center">
                <a href="" class="">Log-in</a>  
                <a href="" class="">Register</a>  
            </div>
        </div>
    </x-slot>

    <h1 class="text-center text-5xl font-black pt-14">IETI ESCAPE ROOM</h1>    

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 shadow">
                <div class="p-10">
                    <p class="text-center">¡Bienvenid@s a IETI Escape Room!</p>
                    <p class="text-center">Este juego virtual nace de la motivación de dos alumnos del CFGS de Desarrollo de Aplicaciones Web, del instituto Esteve Terradas i Illa, a la hora de realizar su proyecto de final de curso.</p>
                    <br>
                    <p class="font-semibold text-xl text-center">Dificultad: DIFÍCIL</p>
                    <p class="font-semibold text-xl text-center">Nº de Jugadores: 2</p>
                    <br>
                    <p class="text-center">Para jugar simplemente necesitarás un ordenador con conexión a internet, un compañero/a con el/la que puedas contactar de forma fácil y rápida, y seguir las siguientes indicaciones.</p>
                    <br>
                    <p class="text-lg">PARA EMPEZAR EL JUEGO:</p>
                    <br>
                    <ul class="list-disc list-inside">
                        <li>Uno de los dos componentes debe introducir un nombre de equipo.</li>
                        <li>Esa misma persona, tiene que seleccionar "GENERAR ENLACE" para invitar a la otra al juego.</li>
                        <li>Una vez se haya unido, podrás seleccionar el botón "EMPEZAR" para iniciar conjuntamente la aventura.</li>
                    </ul>
                    <br>
                    <p class="font-semibold text-xl text-center">¡BUENA SUERTE!</p>
                </div>
                <div class="pt-10 space-y-4 grid justify-items-center">
                    <div class="justify-items-center space-y-4 ">
                        <x-label class="block pb-1 text-shadow">Nombre de equipo:</x-label>
                        <x-input class="block border-2 shadow" placeholder="Introducir nombre">
                        </x-input>
                        <x-label class="block pb-1 text-shadow">Invitación:</x-label>
                        <x-input class="block border-2 shadow" placeholder="Enlace">
                        </x-input>
                        <x-button class="block p-2 shadow-md">Generar enlace
                        </x-button>
                    </div>
                    <div>
                        <x-button class="block px-16 p-5 bg-red-700 hover:bg-red-600 shadow-md">¡EMPEZAR!
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
