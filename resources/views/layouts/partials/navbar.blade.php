{{-- <header class="w-full lg:bg-transparent bg-slate-900 absolute top-0 left-0">
    <nav class="z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg/900px-Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg.png"
                    class="h-12 mr-2" alt="Flowbite Logo">
                <div class="flex flex-col">
                    <span class="text-2xl font-semibold whitespace-nowrap text-white">BPKHTL-XV</span>
                    <span class="text-xl -mt-2 font-semibold whitespace-nowrap text-white">GORONTALO</span>
                </div>
            </a>
            <div class="flex">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 lg:-ml-44 font-medium rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-white md:p-0">Home</a>
                    </li>
                    <li>
                        <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded md:w-auto hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Struktur</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Sejarah</a>
                    </li>

                </ul>
            </div>
        </div>
        <div id="mega-menu-full-dropdown" class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y hidden">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Online Stores</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Segmentation</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Marketing CRM</div>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Online Stores</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Segmentation</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Marketing CRM</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> --}}


<nav class="bg-white absolute w-full z-50 top-0 left-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('kehutanan-logo.png') }}" class="h-11 mr-2" alt="Flowbite Logo">
            <div class="flex flex-col">
                <span class="text-xl font-semibold whitespace-nowrap text-gray-800">BPKH XV</span>
                <span class="text-base -mt-2 font-semibold whitespace-nowrap text-gray-800">GORONTALO</span>
            </div>
        </a>
        <div class="flex md:order-2">
            @auth
                <a href="{{ url('/admin') }}"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 self-center text-center mr-3 md:mr-0">DASHBOARD</a>
            @else
                <a href="{{ url('/admin') }}"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 self-center text-center mr-3 md:mr-0">LOGIN</a>
            @endauth
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:-ml-14"
            id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium tracking-wider rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 bg-slate-700 md:bg-transparent">
                @php($allProfile = App\Models\Profile::where('published', true)->latest()->get())
                @if (count($allProfile) > 0)
                    <li>
                        <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="100"
                            data-dropdown-trigger="hover"
                            class="flex items-center justify-between w-full text-gray-800 pl-3 md:pl-0 mt-2 md:mt-0"
                            type="button">Profil <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDelay"
                            class="z-10 hidden bg-gray-200 divide-y divide-gray-300 rounded-lg shadow w-fit dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDelayButton">
                                @foreach ($allProfile as $profile)
                                    <li>
                                        <a href="{{ route('profile.show', ['title' => $profile->title]) }}"
                                            class="block px-4 whitespace-nowrap py-2 hover:bg-green-600 dark:hover:bg-gray-600 hover:text-white">{{ $profile->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
                @php($allTataUsaha = App\Models\TataUsaha::where('published', true)->latest()->get())
                @if (count($allTataUsaha) > 0)
                    <li>
                        <button id="dropdownDelayButton1" data-dropdown-toggle="dropdownDelay1"
                            data-dropdown-delay="100" data-dropdown-trigger="hover"
                            class="flex items-center justify-between w-full text-white pl-3 md:pl-0 mt-2 md:mt-0"
                            type="button">Sub bag TU <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDelay1"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDelayButton1">
                                @foreach ($allTataUsaha as $tataUsaha)
                                    <li>
                                        <a href="{{ route('tu.show', ['title' => $tataUsaha->title]) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $tataUsaha->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
                @php($allPKH = App\Models\PKH::where('published', true)->latest()->get())
                @if (count($allPKH) > 0)
                    <li>
                        <button id="dropdownDelayButton2" data-dropdown-toggle="dropdownDelay2"
                            data-dropdown-delay="100" data-dropdown-trigger="hover"
                            class="flex items-center justify-between w-full text-white pl-3 md:pl-0 mt-2 md:mt-0"
                            type="button">PPKH<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDelay2"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDelayButton">
                                @foreach ($allPKH as $pkh)
                                    <li>
                                        <a href="{{ route('pkh.show', ['title' => $pkh->title]) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $pkh->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
                @php($allISDHTL = App\Models\ISDHTL::where('published', true)->latest()->get())
                @if (count($allISDHTL) > 0)
                    <li>
                        <button id="dropdownDelayButton3" data-dropdown-toggle="dropdownDelay3"
                            data-dropdown-delay="100" data-dropdown-trigger="hover"
                            class="flex items-center justify-between w-full text-white pl-3 md:pl-0 mt-2 md:mt-0"
                            type="button">SDH<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDelay3"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDelayButton">
                                @foreach ($allISDHTL as $isdhtl)
                                    <li>
                                        <a href="{{ route('isdhtl.show', ['title' => $isdhtl->title]) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $isdhtl->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
                @if (count(App\Models\Publikasi::where('published', true)->get()) > 0)
                    <li>
                        <a href="{{ route('publikasi.show') }}"
                            class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 md:dark:text-blue-500"
                            aria-current="page">Publikasi</a>
                    </li>
                @endif
                @php($allLayanan = App\Models\Layanan::where('published', true)->latest()->get())
                @if (count($allLayanan) > 0)
                    <li>
                        <button id="dropdownDelayButton4" data-dropdown-toggle="dropdownDelay4"
                            data-dropdown-delay="100" data-dropdown-trigger="hover"
                            class="flex items-center justify-between w-full text-white pl-3 md:pl-0 mt-2 md:mt-0"
                            type="button">Layanan <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDelay4"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDelayButton">
                                @foreach ($allLayanan as $layanan)
                                    <li>
                                        <a href="{{ route('layanan.show', ['title' => $layanan->title]) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $layanan->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
