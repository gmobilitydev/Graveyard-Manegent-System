<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="sm:flex bg-white shadow">
            <div class="max-w-7xl mr-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>

            {{-- Search Box --}}
            <form  action="{{url('/graves')}}" method="GET" id="grave-form" class="space-y-4">
                <div class="sm:flex items-center md:ml-auto mx-6 lg:mr-6 md:my-px pb-4 pt-4 mb-6 lg:mb-4">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="hidden sm:flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="search" name="query-grave" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2  sm:pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by grave no." required>
                    </div>
                    <button type="submit" class="inline-flex justify-center items-center mx-auto w-full sm:w-1/4 py-2.5 px-3 mt-4 sm:mt-0 sm:ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a class="inline-flex" href="{{ url('/graves') }}">
                        <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Search
                        </a>
                    </button>
                </div>
            </form>
        </header>

        <!-- Page Content -->
        <div class="flex px-4 mx-auto my-6 w-full xl:px-5">

            <!-- Left Settings Menu -->
            <div class="w-16 mr-2 sm:mr-6 md:w-1/5">

                <div
                    class="relative flex flex-col items-start justify-center w-full py-6 bg-white border rounded-lg border-gray-150">
                    <h3
                        class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">
                        Graveyards</h3>

                        
                    <a href="{{ url('/regions') }}"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/profile')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/profile')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Regions</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/profile')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a>
                    <!-- <a href="{{ url('/locations') }}"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/security')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/security')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Locations</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/security')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a> -->
                    <!-- <a href="{{ url('/graveyards') }}"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/profile')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/profile')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Graveyards</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/profile')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a> -->
                    <!-- <a href="{{ url('/locations') }}"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/security')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/security')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Graves</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/security')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a> -->


                </div>

                {{-- <div
                    class="relative flex flex-col items-start justify-center w-full py-6 mt-6 bg-white border rounded-lg border-gray-150">
                    <h3
                        class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">
                        System</h3>

                    <a href="#"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/plans')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/plans')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Test 1</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/plans')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a>
                    <a href="#"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/payment-information')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/subscription')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Test 2</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/subscription')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a>
                    <a href="#"
                        class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if (Request::is('settings/invoices')) {{ 'text-gray-900' }}@else{{ 'text-gray-600' }} @endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                        <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if (Request::is('settings/invoices')) {{ 'text-gray-500' }}@else{{ 'text-gray-400' }} @endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <span class="hidden truncate md:inline-block">Test 3</span>
                        <span
                            class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if (Request::is('settings/invoices')) {{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }} @endif "></span>
                    </a>
                </div> --}}

            </div>
            <!-- End Settings Menu -->

            <main class="w-4/5 sm:w-full">
                {{ $slot }}

            </main>
        </div>
        
    </div>
    @include('layouts.footer')
</body>

</html>
