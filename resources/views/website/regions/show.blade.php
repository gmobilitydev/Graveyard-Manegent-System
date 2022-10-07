<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Regions </h2>
    </x-slot>
    <div class="container mx-auto mb-5 px-5">
        <div class="lg:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full lg:w-3/12 md:mx-2 rounded">
                <!-- Profile Card -->
                <div class="bg-white px-3 border-t-4 border-blue-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="https://www.globalpharmatek.com/wp-content/uploads/2016/10/orionthemes-placeholder-image.jpg"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $region->name }} Region</h1>

                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Number of Locations</span>
                            <span class="ml-auto"><span
                                    class="bg-blue-500 py-1 px-2 rounded text-white text-sm">{{ $region->location->count() }}</span>
                        </li>

                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="mb-4"></div>

            </div>
            <!-- Right Side -->
            <div class="w-full lg:w-9/12 mx-2 h-64">
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
                        <span class="tracking-wide">Locations in {{ $region->name }} Region</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="max-w-7xl mx-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                    #</th>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">
                                                    Location Name</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Location Type
                                                </th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Number of Graveyards</th>

                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            @foreach ($region->location as $location)
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 sm:pl-6">
                                                        {{ $location->id }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        <a class="focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4"
                                                            href="{{ url('/locations') }}/{{ $location->id }}">
                                                            {{ $location->name }}</a>
                                                    </td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm">
                                                        <a class="focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4"
                                                            href="">
                                                            {{ $location->locationTypes->name }}
                                                        </a>
                                                    </td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm">
                                                        {{ $location->graveyard->count() }}
                                                    </td>

                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
                    </div>

                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-blue-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Main Graveyards</span>
                            </div>
                            <ul class="list-inside space-y-2">
                            
                            </ul>
                        </div>

                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
