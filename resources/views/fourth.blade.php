<x-app-layout>
    <img src="{{asset('images/scenes/pasillo.jpg')}}" alt="Pasillo Django" class="z-0 top-0 fixed w-full h-screen">
    <div class="flex flex-col justify-center items-center p-4">
        <div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80">
            <p class="p-5 italic">Conseguís avanzar y dejáis atrás el departamento. En algún punto del instituto tenéis que poder encontraros, pero ¿dónde? Veis que hay un mapa en el pasillo y es posible que haya algún tipo de indicación en él.</p>
        </div>
        <img src="images/periodico.png" alt="Mapa" class="z-20">
        <div class="flex flex-col space-y-4 px-2 z-20">
            <x-input placeholder="Introduce el codigo"></x-input>
            <div class="flex space-x-12">
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">PISTA 1</button>
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">PISTA 2</button>
                <a href="" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">AVANZAR</a>     
            </div>
        </div>
    </div>
</x-app-layout>