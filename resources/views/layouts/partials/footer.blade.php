<footer class="bg-whitemax-w-screen-xl p-4 py-6 mx-auto lg:py-8">
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="text-center">
        <a href="#" class="flex flex-col items-center justify-center mb-5">
            <img src="{{ asset('kehutanan-logo.png') }}" class="h-6 mr-3 sm:h-24 mb-3" alt="Logo" />
        </a>
        <h1 class="lg:text-2xl md:text-xl text-lg mb-5 font-semibold text-gray-900 uppercase">
            Balai Pemantapan Kawasan Hutan
        </h1>
        <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2025 Balai Pemantapan Kawasan Hutan -
            All
            Rights Reserved.
        </span>
        <ul class="flex justify-center mt-5 space-x-5">
            @foreach (App\Models\MediaSosial::all() as $sosial)
                <li>
                    <a href="{{ $sosial->link }}" target="sites"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        {{ svg($sosial->tipe_media_sosial->icon, 'w-6 h-6') }}
                    </a>
                </li>
            @endforeach
        </ul>
        <ul class="flex justify-center mt-5 space-x-5 text-gray-500 dark:text-gray-400">
            @foreach (App\Models\Tautan::all() as $tautan)
                <li class="mb-4">
                    <a href="{{ $tautan->link }}" class=" hover:underline">{{ $tautan->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
</footer>

<div class="fixed bottom-5 right-5">
    <button id="scrollToTop" onclick="backTop()"
        class="z-50 hidden animate-bounce text-white bg-slate-700 hover:bg-blue-800 font-medium rounded-full text-sm p-4 text-center items-center mr-2 ">
        <svg class="w-4 h-4 -rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
        <span class="sr-only">Icon description</span>
    </button>
</div>
