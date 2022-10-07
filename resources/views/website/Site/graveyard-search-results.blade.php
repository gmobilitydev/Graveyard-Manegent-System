@extends('website.Site.layout.app')

@section('content')
{{-- $found = true; --}}
<div>
   @if ($graveyards->count() > 0)
        <h1 class="text-xl md:text-3xl lg:text-4xl xl:text-5xl text-center font-bold mb-8">Graveyards Found</h1>
        <div class="mx-auto">
            {{-- List of Graveyards --}}
            {{-- The List item will be highlighted when the pin is clicked --}}
            <div class="p-4">
                {{-- @for ($i = 0; $i < 5; $i++) --}}
                <style>
                    .accordion {
                        width: 100%;
                    }

                    .panel {
                        display: none;
                        overflow: hidden;
                    }
                </style>

                <div class='w-full overflow-hidden'>
                    <div class="contents-center grid md:grid-cols-2 gap-8 mx-auto">
                        @foreach ($graveyards as $graveyard)
                            {{-- <div class="group px-3 rounded mt-2"> --}}
                            {{-- This will lead --}}
                            <div class="accordion px-3 rounded mt-2" href="#">
                                <a href=""><h2 class="text-left border-b border-gray-200 font-bold text-lg hover:text-xl hover:text-gray-300">{{$graveyard->name}} </h2></a>
                            {{-- </button> --}}
                            {{-- <div class="panel hover:bg-blue-200 mx-4 my-1 w-full"> --}}
                                <!-- Collapsable content -->
                                <p class="text-left">{{$graveyard->location->name}}  <span class="text-gray-400">| <i>{{$graveyard->address}}</i></span></p>
                                {{-- <a class="text-blue-600 underline" href="#">See More -></a> --}}
                                <!-- end content -->
                            {{-- </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- @endfor --}}
            </div>
        </div>
        <script>

            var accordElement = document.getElementsByClassName("accordion");

            for (i = 0; i < accordElement.length; i++) {
                accordElement[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
   @else
        
        <h1  class="text-xl md:text-3xl lg:text-4xl xl:text-5xl text-center font-bold pb-5">No Graveyards Found</h1>
        <p class="text-center underline text-blue-500"><a href="{{ route('search') }}">Try another search term</a></p>

   @endif
</div>
@endsection
