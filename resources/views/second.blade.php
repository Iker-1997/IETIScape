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
    {{--<!-- <img src='{{asset("images/scenes/Puerta-despacho-Java.png")}}' alt='Puerta despacho Django' class='z-0 top-0 fixed w-full h-screen'>
    <div id='felpudo' class='hidden absolute overflow-hidden w-full min-h-screen z-50 px-32 py-12 bg-black bg-opacity-80'>
        <img src='/images/challenge2/java1.png' alt='Felpudo' class='w-8/12 mx-auto'>
    </div>
    <div class='h-screen flex flex-col justify-between items-center p-4'>
        <div class='z-20 flex flex-col items-center'>
            <div class='bg-white shadow-sm rounded-lg mb-4 bg-opacity-80'>
                <p class='p-5 italic'>Estáis muy confusos pero, aún así, decidís ir en busca del profesor a su departamento y ver por qué no hay nadie en el lugar del examen.
                <br>
                -Java: No me gusta ésta sensación. Todo está oscuro y me dan escalofríos...
                <br>
                -Django: Yo todo lo veo muy normal. Pero no entiendo por qué sigo sin verte.
                <br>
                Cuando llegas te encuentras con la puerta cerrada. Seguro que hay alguna forma de abrirla.</p>
            </div>
            <div class='flex flex-col space-y-4 px-2 z-20'>
                <x-input placeholder='Introduce el codigo' id='inputView2'></x-input>
                <div class='flex space-x-12'>
                    <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view2clue1'>PISTA 1</button>
                    <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view2clue2'>PISTA 2</button>
                    <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='comproveView2'>AVANZAR</button>     
                </div>
            </div>
        </div>
        <button id='verFelpudo' class='justify-self-end self-start z-10 border-none h-32 w-60 outline-none cursor-pointer mb-2 ml-80' style='background:transparent;'></button>
    </div>
    <script src='{{ asset("js/page2.js") }}'></script> -->--}}
</x-app-layout>