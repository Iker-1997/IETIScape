<x-app-layout>
    @if($role == "java")
        <script>
            let role = "{{$role}}";
            let datos = <?php print_r($data['data']); ?>; 
            $(document).ready(function(){
                $("main").html(datos['html']["java"]);
            });
        </script>
    @else
        <script>
            let role = "{{$role}}";
            let datos = <?php print_r($data['data']); ?>;
            $(document).ready(function(){
                $("main").html(datos['html']["django"]);
            });
        </script>
    @endif
    {{--
    <!-- <img src="{{asset('images/challenge5/django2.png')}}" alt="Lavabo Java" class="z-0 top-0 fixed w-full h-screen">
    <div class="flex flex-col justify-between items-center p-4 h-screen">
        <div class="bg-white shadow-sm rounded-lg z-20 mb-4 bg-opacity-80">
            <p class="p-5 italic">Las señales os hacen dirigiros a uno de los lavabos. Una vez allí miráis alrededor y os posicionáis frente a los espejos. No os imagináis lo que iba a pasar a continuación.
            <br>
            -Java: ¡Django, puedo verte!
            <br>
            -Django: ¡Dios mío, Java! ¿Qué haces ahí dentro?
            <br>
            Por fin os encontráis. Os veis los dos en cada uno de los dos lados del espejo, pero no podéis atravesarlo. ¿Es posible que esas marcas en el espejo os ayuden?</p>
        </div>
        <div class="flex flex-col space-y-4 px-2 z-20">
            <x-input placeholder="Introduce el codigo"></x-input>
            <div class="flex space-x-12">
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">PISTA</button>
                <button class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">AVANZAR</button>     
            </div>
        </div>
    </div> -->--}}
</x-app-layout>