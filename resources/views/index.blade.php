@extends('layouts.partials.main')
@section('content')
    <section class="w-full relative">

        {{-- <div class="duration-700 ease-in-out absolute inset-0 blur-sm" data-carousel-item>
        <img src="/images/Untitled-1.jpg"
            class="bg-blend-multiply bg-black absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div> --}}
        <div id="default-carousel" class="w-full relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden md:h-screen">
                <!-- Item 1 -->
                @forelse ($banners as $banner)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/' . $banner->image_path) }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                @empty
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/slider/2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                @endforelse

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        {{-- <div class="max-w-screen-lg px-4 mx-auto absolute inset-0 flex flex-col justify-center items-center">
        <div class="text-center col-span-12">
            <h1
                class=" mb-4 text-2xl sm:text-3xl font-extrabold lg:leading-none leading-normal md:text-4xl lg:text-5xl text-green">
                Selamat Datang di Balai Pemantapan Kawasan Hutan dan Tata Lingkungan</h1>
            <p
                class="mx-auto mb-8 font-light text-green lg:mb-8 md:text-lg lg:text-xl text-sm">
                Jl.
                Rusli Datau No.10, Dulomo Sel., Kec. Kota Utara, Kota Gorontalo, Gorontalo 96128</p>

            <a href="#sambutan"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br font-medium rounded-lg md:text-lg px-5 py-3 text-center md:w-40 w-20 text-sm">Lihat
                Sambutan</a>
        </div>
    </div> --}}
    </section>




    <section class="bg-gray-50 w-full py-8 text-center lg:py-20 lg:px-10 overflow-hidden">
        <div class="max-w-screen-2xl mx-auto text-center">
            <h1 class="sm:text-3xl text-2xl font-semibold text-green-600 mb-2">PETA</h1>
            <h2 class="text-lg text-gray-500 lg:mb-8 mb-4">Peta Kawasan Hutan Provinsi Gorontalo
            </h2>
            <img src="{{ asset('images/peta2.jpg') }}" alt="Peta Kawasan Hutan Prov. Gorontalo">
        </div>
    </section>

    @include('sections.posts')

    <section id="sambutan" class="flex justify-center items-center overflow-hidden">
        <div class="flex flex-col overflow-hidden h-screen">
            <img class="thumbnail blur-sm w-screen h-[110vh] bg-blend-multiply"
                srcset="{{ asset('images/kantor.jpg') }} 1x, {{ asset('images/kantor.jpg') }} 2x" alt="">
        </div>

        <div class="w-full absolute h-screen bg-black opacity-70 space-y-96"></div>

        <figure class="max-w-screen-md absolute px-5 duration-1000 py-5 overflow-hidden" id="blockquote">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                    fill="currentColor" />
            </svg>
            <blockquote>
                <p class="text-sm text-center font-medium text-gray-100 md:text-2xl">"Selamat datang di website resmi Balai
                    Pemantapan Kawasan Hutan! Kami berkomitmen untuk melestarikan kekayaan alam dan
                    lingkungan. Terus dukung upaya kami dalam menjaga keindahan alam kita. Terima kasih!"</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                {{-- <a href="{{ asset('images/fiqri.jpg') }}" target="_blank">
                    <img class="w-6 h-6 rounded-full" src="{{ asset('images/fiqri.jpg') }}" alt="profile picture">
                </a> --}}
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    {{-- <div class="pr-3 font-medium text-gray-300">Nama Kepala Balai</div> --}}
                    <div class="pl-3 text-sm font-light text-gray-300">- Kepala Balai</div>
                </div>
            </figcaption>
        </figure>
    </section>

    <section class="bg-gray-50 w-full px-4 py-8 mx-auto lg:py-16 lg:px-6 mySwiper">
        <div class="max-w-screen-lg mx-auto pb-4 text-center mb-5">
            <h1 class="sm:text-3xl text-2xl font-semibold text-gray-700 mb-2">Informasi PPKH - KLHK</h1>
            <h2 class="text-base text-gray-400">Pelayanan Informasi Permohonan Persetujuan Penggunaan Kawasan Hutan (PPKH)
            </h2>
        </div>
        <div class="max-w-screen-xl mx-auto flex space-x-3 text-center overflow-x-auto">
            @include('sections.swiper')
        </div>
    </section>

    <section class="bg-gray-50 w-full px-4 py-8 mx-auto lg:py-16 lg:px-6 mySwiper">
        <div class="max-w-screen-lg mx-auto pb-4 text-center mb-5">
            <h1 class="sm:text-3xl text-2xl font-semibold text-gray-700 mb-2">Portal Terkait</h1>
            <h2 class="text-base text-gray-400">Jelajahi portal lain yang masih berada di bawah naungan BPKH
            </h2>
            <div class="flex md:flex-row flex-col items-center justify-center gap-4 mt-10">
                <a href="https://bukutamu.bpkh15gorontalo.com/" target="_blank">
                    <div
                        class="rounded-xl border flex flex-col items-center justify-center w-[300px] py-5 duration-300 gap-4">
                        <div class="bg-green-100 p-2.5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" strokeWidth="1.6" strokeLinecap="round" strokeLinejoin="round"
                                class="w-8 h-8 text-green-500" aria-hidden="true" focusable="false">
                                <title>Buku Tamu</title>
                                <path
                                    d="M3 5.5A2.5 2.5 0 0 1 5.5 3h11A2.5 2.5 0 0 1 19 5.5v13A2.5 2.5 0 0 1 16.5 21h-11A2.5 2.5 0 0 1 3 18.5v-13z" />
                                <path d="M8 8.5h6M8 11h6" />
                                <path d="M17.2 6.8l-2.4 2.4 1.2 1.2 2.4-2.4a1 1 0 0 0 0-1.4l-.8-.8a1 1 0 0 0-1.4 0z" />
                            </svg>
                        </div>

                        <h1 class="text-green-500 font-semibold text-2xl">
                            Buku Tamu
                        </h1>
                    </div>
                </a>
                {{-- <a href="https://bpbd.bonebolangokab.go.id/" target="_blank">
                    <div class="rounded-xl border flex items-center justify-center w-[300px] py-5 duration-300 gap-3">
                        <img src="/sinergi/bpbd.png" class="h-20" alt="" />
                        <h1 class="text-orange-400 font-semibold text-2xl">
                            Peminjaman Barang
                        </h1>
                    </div>
                </a> --}}
            </div>
        </div>
    </section>
@endsection
