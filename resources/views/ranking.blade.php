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
                    <div class="sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex text-sm font-semibold text-black-500 hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Tanca sessió') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
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
