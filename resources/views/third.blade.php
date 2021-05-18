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
    <!-- <img src='{{asset("images/scenes/Despacho-Java1.png")}}' alt='Despacho Java' class='z-0 top-0 fixed w-full h-screen'>
    <div id='periodico' class='w-full hidden absolute overflow-hidden z-50 px-32 py-12 bg-black bg-opacity-80'>
        <img src='/images/challenge3/periodico.png' alt='Periodico' class='w-8/12 mx-auto'>
    </div>
    <div class='flex flex-col justify-center items-center p-4'>
        <div class='bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80'>
            <p class='p-5 italic'>Conseguís entrar, pero el profesor no está. El despacho está algo desordenado, como si alguien hubiese salido con prisa de allí. Pensáis en ir a otro lugar, pero hay algo extraño en esa habitación.
            <br>
            -Java: ¡A éste despacho le falta algo!
            <br>
            -Django: ¿Algo? Yo solamente lo veo desordenado.
            <br>
            Es posible que por aquí encontréis alguna forma de ayudar a Java a encontrar lo que falta.</p>
        </div>
        <div class='flex flex-col space-y-4 px-2 z-20'>
            <x-input placeholder='Introduce el codigo'></x-input>
            <div class='flex space-x-12'>
                <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view3clue1'>PISTA 1</button>
                <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view3clue2'>PISTA 2</button>
                <button class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='view3clue3'>PISTA 3</button>
                <button href='' class='text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md' id='comproveView3'>AVANZAR</button>     
            </div>
        </div>
        <img src='/images/challenge3/periodico.png' id='verPeriodico' class='z-10 mt-2 ml-6 self-start border-none hidden xl:block h-12 w-20 outline-none cursor-pointer' style='background:transparent;'>
    </div>
    <script src='{{ asset("js/page3java1.js") }}'></script> -->--}}
</x-app-layout>