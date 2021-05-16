<x-app-layout>
    <div class="flex flex-col justify-center items-center">
        <div class="bg-white shadow-sm m-4 text-center mx-10">
        @foreach($team as $team)
            <h1 class="font-extrabold text-5xl pt-4">BIENVENIDOS A LA AVENTURA "<span>{{ $team['name'] }}</span>"</h1>
        @endforeach
            <p class="p-4 font-semibold text-red-700">El tiempo ha comenzado a correr, teneis 5 minutos para elegir el personaje que querais. Recordad que si escogeis los dos el mismo personaje, no podreis avanzar en la historia</p>
        </div>
        <div class="bg-white shadow-sm m-4 mx-10">
            <p class="p-4 italic">Django es un chico sencillo y alegre, pero un tanto despistado. En cambio Java, suele estar metida siempre en líos por su cabezonería y su orgullo, pero en su cabeza lo tiene todo organizado. Se conocieron el día de la matriculación en el instituto Esteve Terradas y desde entonces han sido inseparables. Ambes suspendieron varias unidades formativas y les ha tocado asistir al centro en la semana de recuperaciones, pero van con algunos minutos de retraso. Debido a la situación actual de pandemia, los exámenes se realizan en la sala de actos, que es la más espaciosa para mantener las distancias. Al situarse en la entrada ...</p>
        </div>
        <div class="m-4 flex justify-around">
            <div class="w-5/12 bg-white shadow-sm">
                <div class="flex flex-col shadow border border-gray-200 h-full bg-white pb-4">
                    <img src="/images/Entrada_lateral.jpg" alt="Entrada Java">
                    <div class="flex flex-col justify-between h-full px-2 mt-2 space-y-4">
                        <div>
                            <p class="italic">Java, que normalmente impone sus propias reglas, decide que la mejor opción para que no les pillen es entrar por la puerta lateral, que prácticamente nunca se abre.</p>
                        </div>
                        <a href="" class="self-center w-7/12 text-center px-10 bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-2 shadow-md">Quiero ser Java</a>
                    </div>
                </div>
            </div>
            <div class="w-5/12 bg-white shadow-sm">
                <div class="flex flex-col shadow border border-gray-200 h-full bg-white pb-4">
                    <img src="/images/Entrada-frontal.jpg" alt="Entrada Django">
                    <div class="flex flex-col justify-between h-full px-2 mt-2 space-y-4">
                        <div>
                            <p class="italic">Django, por el contrario, no se anda con rodeos y prefiere entrar por la puerta principal para ahorrarse más problemas en un futuro.</p>
                        </div>
                        <a href="" class="self-center w-7/12 text-center px-10 bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-2 shadow-md">Quiero ser Django</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 shadow">
                <div class="p-10">
                    <p class="text-center">¡Bienvenid@s a IETI Escape Room!</p>
                    <p class="text-center">Este juego virtual nace de la motivación de dos alumnos del CFGS de Desarrollo de Aplicaciones Web, del instituto Esteve Terradas i Illa, a la hora de realizar su proyecto de final de curso.</p>
                    <br>
                    <p class="font-semibold text-xl text-center">Duración: 60 minutos</p>
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
    </div> -->