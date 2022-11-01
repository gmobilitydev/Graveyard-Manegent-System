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
    <header>
        {{-- NavBar --}}
        <header class="shadow-sm">
            <div class="flex items-center justify-between h-16 max-w-screen-xl px-4 mx-auto">
                {{-- Basic Navbar --}}
                <nav class="px-auto py-4 bg-white text-sm font-medium flex lg:flex-1 lg:w-0">


                        <div class="lg:hidden">
                            <button class="navbar-burger flex items-center text-blue-600 p-3">
                                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Mobile menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="lg:hidden my-auto justify-end">
                            <a href="{{ route('search') }}">
                                <x-application-logo class="block ml-100 h-10 w-auto fill-current text-gray-600" />
                            </a>
                        </div>
                        {{-- Normal Navbar --}}
                            <div class="hidden lg:flex shrink-0 flex items-center">
                                <a href="{{ url('search') }}">
                                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                                </a>
                            </div>

                            <!-- Pushes nav links to the right -->
                            <div class="mx-auto">
                            </div>

                            <!-- Normal navigation with a search box -->
                            <div class="hidden lg:flex shrink-0 flex items-center">
                                <ul class="hidden lg:flex text-base text-gray-600 space-x-4 pt-4 md:pt-0">
                                    <li class="mb-1"><a class="text-gray-900 hover:text-amber-300" href="{{ url('search') }}">SEARCH</a></li>
                                    <li class="mb-1 ml-auto"><a class="text-gray-900 hover:text-amber-300" href="{{ url('login') }}">LOGIN</a></li>
                                    <li class="mb-1 ml-auto"><a class="text-gray-900 hover:text-amber-300" href="{{ url('register') }}">REGISTER</a></li>
                                </ul>
                            </div>
                        {{-- End of Normal Navbar --}}

                </nav>

                {{-- Burger Menu --}}
                <div class="navbar-menu relative z-50 hidden">
                    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>

                        <div class="navbar-menu relative z-50 hidden">
                            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                            <nav
                                class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                                <div class="flex items-center mb-8">

                                    <button>
                                        <div class="shrink-0 flex items-center">
                                            <a href="{{ route('search') }}">
                                                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                                            </a>
                                        </div>
                                    </button>

                                    <button class="navbar-close ml-auto">
                                        <svg class="h-6 w-6 text-red-400 cursor-pointer hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <ul>
                                        {{-- <li class="mb-1"><a class="text-blue-900 hover:text-amber-300" href="#">HOME</a></li> --}}
                                        <li class="mb-1"><a class="text-gray-900 hover:text-amber-300" href="{{ route('search') }}">SEARCH</a></li>
                                        <li class="mb-1"><a class="text-gray-900 hover:text-amber-300" href="{{ url('login') }}">LOGIN</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="mt-auto">
                                    <p class="my-4 text-xs text-center text-gray-400">
                                        <span class="block text-sm text-gray-600 sm:text-center dark:text-gray-600">© 2022. Powered By: <a
                                            href="https://gmobility.co.na/" class="hover:underline">G-Mobility Investment CC™</a>. All Rights
                                        Reserved.
                                    </span>
                                    </p>
                                </div>
                            </nav>
                        </div>
                </div>
        </header>

        <script>
            // Burger menus
            document.addEventListener('DOMContentLoaded', function() {
                // open
                const burger = document.querySelectorAll('.navbar-burger');
                const menu = document.querySelectorAll('.navbar-menu');

                if (burger.length && menu.length) {
                    for (var i = 0; i < burger.length; i++) {
                        burger[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                // close
                const close = document.querySelectorAll('.navbar-close');
                const backdrop = document.querySelectorAll('.navbar-backdrop');

                if (close.length) {
                    for (var i = 0; i < close.length; i++) {
                        close[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                if (backdrop.length) {
                    for (var i = 0; i < backdrop.length; i++) {
                        backdrop[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }
            });
        </script>


    {{-- content --}}
    <main class="h-screen px-10 lg:px-40 py-10">@yield('content')</main>
</body>
@include('layouts.footer')

</html>
