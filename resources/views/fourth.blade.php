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
    {{--
    <!-- <img src='{{asset("images/scenes/Pasillo-Django.jpg")}}' alt='Pasillo Django' class='z-0 top-0 fixed w-full h-screen'>
    <div class='flex flex-col justify-center items-center p-4'>
        <div class='bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80'>
            <p class='p-5 italic'>Conseguís avanzar y dejáis atrás el departamento. En algún punto del instituto tenéis que poder encontraros, pero ¿dónde? Veis que hay un mapa en el pasillo y es posible que haya algún tipo de indicación en él.</p>
        </div>
        <img src='{{asset("images/challenge4/Mapa2.png")}}' alt='Mapa' class='z-20 mb-6'>
        <div class='flex flex-col space-y-4 px-2 z-20'>
            <x-input placeholder='Introduce el codigo' id='inputView4'></x-input>
            <div class='flex space-x-12'>
                <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view4clue1'>PISTA 1</button>
                <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view4clue2'>PISTA 2</button>
                <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='comproveView4'>AVANZAR</button>     
            </div>
        </div>
    </div>
    <script src='{{ asset("js/page4.js") }}'></script> -->--}}
</x-app-layout>