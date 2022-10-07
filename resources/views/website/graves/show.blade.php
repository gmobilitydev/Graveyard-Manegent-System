@extends('website.Site.layout.app')

@section('content')
<div class="container mx-auto my-5 p-5">
    <div class="md:flex no-wrap md:-mx-2 ">
        <!-- Left Side -->
        <div class="w-full md:w-3/12 md:mx-2 rounded">
            <!-- Profile Card -->
            <div class="bg-white p-3 border-t-4 border-blue-400">
                <div class="image overflow-hidden">
                    <img class="h-auto w-full mx-auto"
                        src="https://www.globalpharmatek.com/wp-content/uploads/2016/10/orionthemes-placeholder-image.jpg"
                        alt="">
                </div>
                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Grave No: <span class="font-light">{{ $grave->grave_number }}</span></h1>

                <ul
                    class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <li class="flex items-center py-3">
                        <span>Grave Status</span>
                        <span class="ml-auto"><span
                                class="bg-white py-1 px-2 rounded text-white text-sm">
                                @if ($grave->grave_status != '1')
                                <span
                                class="text-green-600 font-medium text-xs"> {{ 'UNOCCUPIED' }} </span>
                                @else
                                <span
                                class="text-red-600 font-medium text-xs"> {{ 'OCCUPIED' }} </span>
                                @endif
                            </span>
                    </li>
                    <li class="flex items-center py-3">
                        <span>Deceased: </span>
                        {{-- <span class="font-light ml-auto"> {{$deceased->first_names }} </span> --}}
                    </li>
                    {{-- <li class="flex items-center py-3">
                        <span>Graveyard Section: </span>
                        <span class="font-light ml-auto"> {{$grave->section->name}} </span>
                    </li> --}}
                </ul>
            </div>
            <!-- End of profile card -->
            <div class="my-4"></div>

        </div>
        <!-- Right Side -->
        <div class="w-full md:w-9/12 mx-2 h-64">
            <!-- Profile tab -->
            <!-- About Section -->
            <div class="bg-white p-3 shadow-sm rounded">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                    <span clas="text-blue-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="tracking-wide">Graveyard Information</span>
                </div>
                <div class="text-gray-700">
                    <div class="max-w-7xl mx-auto">
                        <div class="inline-block min-w-full py-2 align-middle">
                            <div class="overflow-auto h-fit">
                                <div class="flex items-center py-3">
                                    <span>Graveyard: </span>
                                    <span class="font-light ml-5"> {{$grave->section->graveyard->name}} </span>
                                </div> 
                                <div class="flex items-center py-3">
                                    <span>Address: </span>
                                    <span class="font-light ml-5"> {{$grave->section->graveyard->address}}, <i>{{$grave->section->graveyard->location->name}}</i> </span>
                                </div>
                                <div class="flex items-center py-3">
                                    <span>Graveyard Section: </span>
                                    <span class="font-light ml-5"> {{$grave->section->name}} </span>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
                </div>

            </div>
        </div>
@endsection
