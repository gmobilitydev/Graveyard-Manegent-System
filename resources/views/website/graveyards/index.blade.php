<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            graveyards </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white w-full shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    graveyards </div>
                <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 lg:px-8">


                    <div class="sm:px-6 w-full">

                        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10  rounded">
                            <div class="sm:flex items-center justify-between">

                            </div>
                            <div class="mt-7 overflow-x-auto">
                                <table class="w-full whitespace-nowrap text-center">
                                    <tbody>
                                        <th>Graveyard Name</th>
                                        <th>Sections</th>

                                        <th>Graves</th>

                                        @foreach ($list_graveyards as $graveyard)
                                            <tr tabindex="0"
                                                class="focus:outline-none h-16 border border-gray-100 rounded">

                                                <td class="">
                                                    <div class="flex items-center pl-5">
                                                        <a href="./graveyards/{{ $graveyard->id }}"
                                                            class="text-base font-medium leading-none text-gray-700 mr-2">
                                                            {{ $graveyard->name }}</a>

                                                    </div>
                                                </td>
                                                <td class="pl-24">
                                                    <div class="flex items-center">

                                                        <p class="text-sm leading-none text-gray-600 ml-2">

                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="pl-24">
                                                    <div class=" text-center">

                                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                                            {{ $graveyard->sections->count() }}
                                                        </p>

                                                    </div>
                                                </td>




                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $list_graveyards->links() }}

                    </div>


                </div>

            </div>
        </div>
    </div>

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
