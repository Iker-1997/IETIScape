<x-app-layout>
    <img src="{{asset('images/scenes/pasillo.jpg')}}" alt="Pasillo Django" class="z-0 top-0 fixed w-full h-screen">
    <div id="felpudo" class="w-full hidden absolute overflow-hidden z-50 px-32 py-12 bg-black bg-opacity-80">
        <img src="/images/periodico.png" alt="Felpudo" class="w-8/12 mx-auto">
    </div>
    <div class="flex flex-col justify-center items-center p-4">
        <div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80">
            <p class="p-5 italic">Conseguís entrar, pero el profesor no está. El despacho está algo desordenado, como si alguien hubiese salido con prisa de allí. Pensáis en ir a otro lugar, pero hay algo extraño en esa habitación.
            <br>
            -Java: ¡A éste despacho le falta algo!
            <br>
            -Django: ¿Algo? Yo solamente lo veo desordenado.
            <br>
            Es posible que por aquí encontréis alguna forma de ayudar a Java a encontrar lo que falta.</p>
        </div>
        <div class="flex flex-col space-y-4 px-2 z-20">
            <x-input placeholder="Introduce el codigo"></x-input>
            <div class="flex space-x-12">
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">PISTA 1</button>
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">PISTA 2</button>
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">PISTA 3</button>
                <a href="" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">AVANZAR</a>     
            </div>
        </div>
        <button id="verFelpudo" class="z-10 self-start border-none block h-32 w-60 outline-none cursor-pointer" style="background:transparent;"></button>
    </div>
    <script>
    $(document).ready(function () {
        $("#verFelpudo").bind( "click", function (){
            if ($("#felpudo").hasClass("hidden")){
                $("#felpudo").removeClass("hidden");
            }
        });
        $("#felpudo").bind( "click", function (){
            $("#felpudo").addClass("hidden");
        });
    });
    </script>
</x-app-layout>