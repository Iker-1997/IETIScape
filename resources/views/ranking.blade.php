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
                    <div class="flex items-center justify-end">
                        <a href="/logout"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <h1 class="text-center text-5xl font-black pt-14">RANKING</h1>    

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-5 shadow">
                <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto space-y-4 py-5">       
                    <table class="table w-full text-center shadow">
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
