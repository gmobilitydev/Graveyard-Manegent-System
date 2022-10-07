<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:pl-6 lg:px-8">
            <div class="bg-white w-full overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Locations
                </div>

                <div class="max-w-screen-xl sm:px-4 py-4 md:py-10 sm:mx-auto sm:pl-6 lg:px-8">
                    <div class="h-96 pb-40 w-full">
                        Locations by Region
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>