<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between h-16">

            <div class="flex space-x-8 ">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a>
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('IETI Escape Room') }}
                </h2>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link href="/ranking">
                        {{ __('Ranking') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </x-slot>

    <h1 class="text-center text-5xl font-black pt-14">RANKING</h1>    

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 shadow">
                <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto space-y-4 py-5">       
                    <table class="table w-full text-center border-2 shadow">
                        <thead>
                            <tr>
                                <th class="p-4" scope="col">#</th>
                                <th scope="col">EQUIPO</th>
                                <th class="px-4" scope="col">TIEMPO</th>
                            </tr>
                        </thead>
                        <?php
                            $count = 1;
                        ?>
                        <tbody class="divide-y">
                            @foreach ($data as $team)
                            <tr>
                                <th class="p-3" scope="row">{{ $count }}</th>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->time }}</td>
                            </tr>
                            <?php
                                $count ++;
                            ?>
                            @endforeach
                        </tbody>
                    </table>         
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
