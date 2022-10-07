@extends('website.Site.layout.app')

@section('content')

<div>
    <div class="my-auto">
        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-center font-bold">Search for a </h1>

        <div>
            <section class="pt-5">

                <div x-data="{
                    openTab: 1,
                    activeClasses: 'text-md px-2 py-8 xs:py-4 md:p-4 border-1 border-gray-300 rounded bg-gray-100 text-gray-500',
                    inactiveClasses: 'text-md px-2 py-8 xs:py-4 md:p-4 border-1 border-transparent hover:text-amber-500',
                }" class="w-10/12 mb-14 mx-auto items-center">

                    {{-- <div class="flex text-sm font-medium  border-gray-100">
                        <p class="text-md md:text-lg py-4 md:py-2 px-2 -mb-px">Search for:</p>
                        <a href="javascript:void(0)" @click="openTab = 1"
                            :class="openTab === 1 ? activeClasses : inactiveClasses">
                            Grave
                        </a>
                        <a href="javascript:void(0)" @click="openTab = 2"
                            :class="openTab === 2 ? activeClasses : inactiveClasses">
                            Graveyard
                        </a>
                    </div> --}}


                    <!-- component -->
                    <div class="bg-white flex flex-col py-1 my-auto mx-2 bg-white flex items-center justify-center mx-auto mt-5">
                        <!-- Grave table -->
                        <div x-show="openTab === 1" style="display: none;" class="w-full h-full flex flex-col p-4">
                            <h2 class="text-lg sm:text-3xl lg:text-5xl font-bold text-center pb-8">
                                Grave
                            </h2>

                            <form  action="{{url('/search-grave')}}" method="GET" id="grave-form" class="space-y-4">
                            {{csrf_field()}}    
                            {{-- Search Box --}}
                                <div class="sm:flex items-center mx-auto mb-8">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="hidden sm:flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" id="search" name="grave-query" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2  sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by grave no." required>
                                    </div>
                                    <button type="submit" class="inline-flex justify-center items-center mx-auto w-full sm:w-1/4 py-2.5 px-3 mt-4 sm:mt-0 sm:ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <a class="inline-flex" href="{{ route('search-grave') }}">
                                        <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Search
                                        </a>
                                    </button>
                                </div>

                                <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                                    <select name="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="--All Regions--" >
                                        <option value="">--All Regions--</option>
                                        <option value="">Khomas</option>
                                        <option value="">Hardap</option>
                                        <option value="">//Karas</option>
                                        <option value="">Omusati</option>
                                    </select>

                                    <select name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="--All Locations--" >
                                        <option value="">--All Locations--</option>
                                        <option value="">Windhoek</option>
                                        <option value="">Okahandja</option>
                                    </select>

                                    <select name="graveyard" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 sm:pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="--All Graveyards--" >
                                        <option value="">--All Graveyards--</option>
                                        <option value="">Pioneerspark Cemetary</option>
                                        <option value="">Hochland Cemetary</option>
                                    </select>

                                </div> -->
                            </form>


                        </div>


                        <!-- Graveyard table -->
                        {{-- <div x-show="openTab === 2" style="display: none;" class="w-full h-full flex flex-col p-4">
                            <h2 class="text-lg sm:text-3xl lg:text-5xl font-bold text-center pb-8">
                                Graveyard
                            </h2> --}}
                            {{-- <form action="{{url('/search-graveyard')}}" type="GET" id="graveyard-form" class="space-y-4"> --}}
                            {{csrf_field()}}    
                            {{-- Search Box --}}
                                {{-- <div class="sm:flex items-center mx-auto mb-8">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="hidden sm:flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" id="search" name="graveyard-query" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2  sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by graveyard name" required>
                                    </div>
                                    <button type="submit" class="inline-flex justify-center items-center mx-auto w-full sm:w-1/4 py-2.5 px-3 mt-4 sm:mt-0 sm:ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <a class="inline-flex" href="{{ route('search-graveyard') }}">
                                            <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Search
                                        </a>
                                    </button>
                                </div> --}}

                                <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                                    <select name="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="--All Regions--" >
                                        <option value="">--All Regions--</option>
                                        <option value="">Khomas</option>
                                        <option value="">Hardap</option>
                                        <option value="">//Karas</option>
                                        <option value="">Omusati</option>
                                    </select>

                                    <select name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="--All Locations--" required>
                                        <option value="">--All Locations--</option>
                                        <option value="">Windhoek</option>
                                        <option value="">Okahandja</option>
                                    </select>

                                </div> -->
                            {{-- </form> --}}

                        {{-- </div>
                    </div>
                </div> --}}
                <script src="//unpkg.com/alpinejs" defer></script>

                <!-- end of fixture table -->
            </section>
        </div>
    </div>
</div>
@endsection
