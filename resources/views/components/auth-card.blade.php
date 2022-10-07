<!--Edit the background box and add footer -->
<div class="relative overflow-hidden bg-no-repeat bg-cover"
    style="background-position: bg-center; background-image: url({{ asset('assets/images/img2.jpg') }}); height: 100%;">
    <div class=" flex justify-center">
        <div class="text-center text-gray-800 flex items-center">
            <div class="lg:block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12 lg:flex justify-center"
                style="margin-top: 180px; background-color: hsla(0, 0%, 100%, 0.8);backdrop-filter: saturate(200%) blur(0px);">
                <h1 class="text-3xl sm:text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight p-12"
                    style="color: hsl(220, 96%, 11%);">
                    Graveyard Management <br /><span style="color: hsl(218, 81%, 75%);">System</span>
                </h1>
                <div
                    class="w-full sm:max-w-md mt-6 px-6 py-4 backdrop-blur-md bg-white/30 shadow-md overflow-hidden sm:rounded-lg justify-center text-left">
                    <div class="text-center">
                        <h1 class="text-2xl md:text-2xl xl:text-2xl font-bold tracking-tight"
                            style="color: hsl(220, 96%, 11%);">
                            Login</h1>
                    </div>

                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>
