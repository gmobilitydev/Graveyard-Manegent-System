<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Regions </h2>
    </x-slot>


    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:pl-6 lg:px-8">
            <div class="bg-white w-full overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Regions
                </div>
                <div class="max-w-screen-xl sm:px-4 py-4 md:py-10 sm:mx-auto sm:pl-6 lg:px-8">
                    <div class="h-96 pb-40 w-full">

                       <!-- Table Start -->
                       <div class="px-1 sm:px-4 w-full">
                            <div class="bg-white rounded">
                                <div class="flex items-center justify-between"></div>
                                <div class="mt-0 overflow-auto snap-y w-full h-96 max-w-screen-xl px-1 sm:px-4 mx-auto pl-0 sm:pl-6 lg:px-8">
                                    <table class="relative w-full">
                                        <tbody>
                                            <th class="sticky top-0 opacity-100 h-16 bg-gray-200 leading-none text-sm sm:text-md">Region Name</th>
                                            <th class="sticky top-0 opacity-100 h-16 bg-gray-200 text-sm sm:text-md pl-2 sm:pl-6 md:pl-12 lg:pl-24">Locations</th>

                                            <th class="sticky top-0 opacity-100 h-16 bg-gray-200 text-sm sm:text-md pl-2 sm:pl-6 md:pl-12 lg:pl-24 pr-12">Graveyards</th>

                                            @foreach ($list_regions as $region)
                                                <tr tabindex="0"
                                                    class="focus:outline-none h-16 border border-gray-100 rounded">

                                                    <td class="">
                                                        <div class="flex items-center pl-5">
                                                            <a href="./regions/{{ $region->id }}"
                                                                class="text-sm sm:text-md font-medium leading-none text-gray-700 mr-2">
                                                                {{ $region->name }}</a>

                                                        </div>
                                                    </td>
                                                    <td class="pl-2 sm:pl-6 md:pl-12 lg:pl-24">
                                                        <div class="flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M7.5 5H16.6667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M7.5 10H16.6667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M7.5 15H16.6667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16669 5V5.00667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16669 10V10.0067" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16669 15V15.0067" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                            <p class="text-sm leading-none text-gray-600 ml-2">
                                                                {{ $region->location->count() }}</p>
                                                        </div>
                                                    </td>
                                                    <td class="pl-2 sm:pl-6 md:pl-12 lg:pl-24">
                                                        <div class="flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M7.5 5H16.6667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M7.5 10H16.6667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M7.5 15H16.6667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16669 5V5.00667" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16669 10V10.0067" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16669 15V15.0067" stroke="#52525B"
                                                                    stroke-width="1.25" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                            @foreach ($region->location as $loc)
                                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                                    {{ $loc->graveyard->count() }}
                                                                </p>
                                                            @endforeach

                                                        </div>
                                                    </td>




                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       <!-- Table End -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Table -->
    
    <!-- <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Regions </div>
                <div class="w-full h-96 md:max-w-screen-xl px-4 py-8 mx-auto sm:px-6 lg:px-8">

            </div>
        </div>
    </div> -->

    <!-- component -->

    <script src="./index.js"></script>
    <style>
        .checkbox:checked+.check-icon {
            display: flex;
        }
    </style>
    <script>
        function dropdownFunction(element) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
            list.classList.add("target");
            for (i = 0; i < dropdowns.length; i++) {
                if (!dropdowns[i].classList.contains("target")) {
                    dropdowns[i].classList.add("hidden");
                }
            }
            list.classList.toggle("hidden");
        }
    </script>




</x-app-layout>
