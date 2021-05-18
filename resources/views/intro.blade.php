<x-app-layout>
    @if($role == "java")
        <img src="{{asset('images/scenes/dark_pasillo.png')}}" alt="Pasillo Java" class="z-0 top-0 fixed w-full h-screen">
        <div class="h-screen flex flex-col justify-between items-center p-12">
            <div class="bg-white shadow-sm z-50 rounded-lg bg-opacity-80">
                <p class="p-5 italic z-10">Aunque las clases han finalizado y en el instituto por estas fechas no hay mucha gente, te encuentras con que hay más silencio de lo normal y está algo vacío. Aún así, consideras que no es algo de lo que preocuparse y decides avanzar hacia la sala de actos para realizar tus exámenes.</p>
            </div>
            <a href="/first" class="z-50 self-center text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-5 shadow-md">Avanzar a la sala de actos</a>
        </div>
    @else
        <img src="{{asset('images/scenes/pasillo.jpg')}}" alt="Pasillo Django" class="z-0 top-0 fixed w-full h-screen">
        <div class="h-screen flex flex-col justify-between items-center p-12">
            <div class="bg-white shadow-sm z-50 rounded-lg bg-opacity-80">
                <p class="p-5 italic z-10">Aunque las clases han finalizado y en el instituto por estas fechas no hay mucha gente, te encuentras con que hay más silencio de lo normal y está algo vacío. Aún así, consideras que no es algo de lo que preocuparse y decides avanzar hacia la sala de actos para realizar tus exámenes.</p>
            </div>
            <a href="/first" class="z-50 self-center text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 block p-5 shadow-md">Avanzar a la sala de actos</a>
        </div>
    @endif
</x-app-layout>