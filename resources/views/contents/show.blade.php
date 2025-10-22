@extends('layouts.partials.main')
@section('content')
    <section class="min-w-full bg-white pt-16">
        <div class="max-w-screen-xl mx-auto">
            <h1 class="pt-10 pb-5 px-16 font-semibold md:text-3xl sm:text-2xl text-xl text-gray-800">
                {{ is_object($item) && $item->category ? $item->category->name : (is_string($item) ? $item : '') }}</h1>
        </div>
    </section>
    <section class="w-full bg-gray-100 overflow-hidden">
        <div class="grid grid-cols-10 max-w-screen-xl mx-auto lg:space-x-4 lg:px-10 px-3">
            <div class="lg:col-span-7 col-span-10 p-5 shadow-md rounded-md mx-auto bg-white mt-3 lg:mb-10 w-full">
                @if (is_object($item))
                    <h1 class="md:text-3xl sm:text-2xl text-lg font-semibold text-gray-800">{{ $item->title }}</h1>
                    <div class="text-base font-poppins text-slate-800 leading-7 w-full space-y-3 mb-4">
                        {!! $item->body !!}</div>
                    @if ($item->file)
                        @php
                            $path = explode('/', $item->file);
                            $folder = $path[0];
                            $filename = $path[1];
                        @endphp
                        <iframe src="{{ route('pdf.show', ['folder' => $folder, 'filename' => $filename]) }}"
                            type="application/pdf" width="100%" height="1080px"></iframe>
                    @endif
                @else
                    @foreach ($items as $itm)
                        <h6 class="text-lg font-semibold text-gray-800">{{ $itm->title }}</h6>
                        <div class="text-base font-poppins text-slate-800 leading-7 w-full space-y-3 mb-4">
                            {!! $itm->body !!}</div>
                    @endforeach
                @endif
            </div>
            <div class="lg:col-span-3 col-span-10">
                @if (is_object($item))
                    <div
                        class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-md my-3 shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Lainnya</h5>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">

                            </a>
                        </div>
                        <ul>
                            @foreach ($items as $itm)
                                <li class="mb-1">
                                    <a href="{{ route($othersRoute, ['title' => $itm->title]) }}"
                                        class="{{ is_object($item) && $item->id == $itm->id ? 'text-green-600' : '' }} hover:text-green-600 duration-300">{{ $itm->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div
                    class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-md my-3 shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    @include('comment.create')
                </div>
            </div>
        </div>
    </section>
    @if (isset($comments) && count($comments) > 0)
        <section class="w-full bg-gray-100 overflow-hidden">
            <div class="grid grid-cols-10 max-w-screen-xl mx-auto lg:space-x-3 lg:px-10 px-3">
                <div class="col-span-10 mt-4 p-4 shadow-md rounded-md mx-auto bg-white lg:mb-10 w-full">
                    @foreach ($comments as $comment)
                        <article class="p-6 text-base">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p
                                        class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                        {{ $comment->nama }}</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="{{ $comment->created_at->format('d-M-Y') }}">{{ $comment->created_at->diffForHumans() }}</time>
                                    </p>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">{!! $comment->ulasan !!}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
