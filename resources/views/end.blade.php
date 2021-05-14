<x-app-layout>
    <img src="{{asset('images/Entrada-frontal.jpg')}}" alt="Salida" class="z-0 top-0 fixed w-full h-screen">
    <div class="flex flex-col justify-center items-center p-8 h-screen">
        <div class="bg-white shadow-sm rounded-lg z-20 mb-4 p-2">
            <h1 class="text-center text-3xl font-black">¡ENHORABUENA! Habéis conseguido juntaros, ¡por fin!</h1>
            <p class="p-5 italic text-center">La extraña y fría realidad en la que se encontraba Java era un portal que se creo hace muchos años después de un desastre tecnológico en el centro a través del espejo. De ahí que todo lo que había en ese lado se viese del revés. Se había vuelto a abrir y por eso Django tampoco encontraba a nadie desde su lado. Habían desalojado el centro y no os había llegado el comunicado de la dirección. Gracias a vosotros, se ha podido volver a cerrar y tener otra vez a Java de vuelta.</p>
        </div>
        <div class="flex flex-col space-y-4 px-2 z-20">
            <div class="flex space-x-12">
                <a href="/ranking" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">Ver ranking</a>
                <a href="/" class="text-center bg-gray-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 p-5 shadow-md">Volver al inicio</a>
            </div>
        </div>
    </div>
</x-app-layout>