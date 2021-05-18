<x-app-layout>
    @if($role == "java")
        <script>
            let datos = <?php print_r($data['data']); ?>; 
            $(document).ready(function(){
                $("main").html(datos['html']["java"]);
            });
        </script>
    @else
        <script>
            let datos = <?php print_r($data['data']); ?>;
            $(document).ready(function(){
                $("main").html(datos['html']["django"]);
            });
        </script>
    @endif
    {{--<!-- <img src="{{asset('images/scenes/Dark-Sala-de-actos.png')}}" alt="Sala de actos Java" class="z-0 top-0 fixed w-full h-screen">

    <div class="flex flex-col justify-around items-center p-8 space-y-6">
        <div class="bg-white shadow-sm rounded-lg z-50 bg-opacity-80">
            <p class="p-5 italic z-10">Cuando llegas a la sala de actos, te encuentras con una sala vacía. No hay alumnos, ni profesor... Y vuestro amigo/a no ha llegado todavía. No sabes qué hacer y decides ponerte en contacto con Django/Java para saber dónde está. Comentáis que los dos estáis en la sala de actos, pero... ¿Cómo podía ser eso posible si la única persona que había allí eras tú?</p>
        </div>
        <div class="bg-black py-12 px-1 rounded-xl z-10">
            <img src="/images/challenge1/Chat_django.png" alt="Chat Java">
        </div>
        <div class="flex flex-col space-y-4 px-2 z-10">
            <x-input placeholder="Introduce el codigo" id="inputView1"></x-input>
            <div class="flex space-x-12">
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue1">PISTA 1</button>
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="view1clue2">PISTA 2</button>
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md" id="comproveView1">AVANZAR</button>     
            </div>
        </div>
    </div> -->--}}
</x-app-layout>