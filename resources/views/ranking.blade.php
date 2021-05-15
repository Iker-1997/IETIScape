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
                    <div class="flex items-center space-x-4">
                        <x-input type="search" class="shadow"></x-input>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>   
                                    
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
                            @foreach ($data as $user)
                            <tr>
                                <th class="p-3" scope="row">{{ $count }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->time }}</td>
                            </tr>
                            <?php
                                $count ++;
                            ?>
                            @endforeach
                        </tbody>
                    </table> 
                        
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            Por página:
                            <select class="border rounded ml-3 shadow" bind:value={per_page}>
                                <option>3</option>
                                <option>5</option>
                                <option>10</option>
                            </select>
                        </div>
                        {{ $data->render() }}    
                    </div>         
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
