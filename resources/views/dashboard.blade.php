<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Insights for Windhoek City
                </div>
                <div class="max-w-screen-xl overflow-auto px-4 py-10 mx-auto sm:px-6 lg:px-8">
                    <div class="h-72 pb-40 overflow-auto snap-y grid grid-cols-1 gap-4 mt-2 md:grid-cols-2 lg:grid-cols-4">

                        {{-- <a class="block p-8 transition border border-gray-300 shadow-xl rounded-xl hover:shadow-blue-500/40 hover:border-blue-500/40"
                            href="{{ url('/regions') }}">
                            <h2 class="text-center m-2 text-xl font-bold text-grey-600">Regions</h2>

                            <h3 class="text-center m-2 text-xl font-bold text-grey-600">{{ $list_regions->count() }}
                            </h3>
                        </a> --}}

                        {{-- <a class="block p-8 transition border border-gray-300 shadow-xl rounded-xl hover:shadow-blue-500/40 hover:border-blue-500/40"
                            href="#">
                            <h2 class="text-center m-2 text-xl font-bold text-grey-600">Locations</h2>

                            <h3 class="text-center m-2 text-xl font-bold text-grey-600">{{ $list_regions->count() }}
                            </h3>


                        </a> --}}
                        @foreach ($graveyards as $graveyard)
                        <a class="block snap-center p-4 transition border border-gray-300 shadow-xl rounded-xl hover:shadow-blue-500/40 hover:border-blue-500/40"
                            href="/graveyard/{{ $graveyard->id }}">
                            <h2 class="text-center m-2 text-md sm:text-xl font-bold text-grey-600">{{ $graveyard->name }}</h2>

                            <p class="text-center m-2 text-sm text-grey-600">{{ $graveyard->location->name}}</p>
                            <p class="text-center m-2 text-sm text-grey-600"><i>{{ $graveyard->address}}</i></p>
                        </a>
                        @endforeach
                        {{-- <a class="block p-8 transition border border-gray-300 shadow-xl rounded-xl hover:shadow-blue-500/40 hover:border-blue-500/40"
                            href="#">
                            <h2 class="text-center m-2 text-xl font-bold text-grey-600">Graveyards</h2>

                            <h3 class="text-center m-2 text-xl font-bold text-grey-600">{{ $list_regions->count() }}
                            </h3>
                        </a> --}}

                        {{-- <a class="block p-8 transition border border-gray-300 shadow-xl rounded-xl hover:shadow-blue-500/40 hover:border-blue-500/40"
                            href="#">
                            <h2 class="text-center m-2 text-xl font-bold text-grey-600">Graves</h2>

                            <h3 class="text-center m-2 text-xl font-bold text-grey-600">{{ $list_regions->count() }}
                            </h3>


                        </a> --}}


                    </div>
                </div>

            </div>
        </div>
    </div>


</x-app-layout>
