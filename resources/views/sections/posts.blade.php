<section class="bg-gray-50 overflow-hidden">
    <div class="max-w-screen-xl px-6 py-8 mx-auto lg:pb-24 lg:pt-10 lg:px-6">
        <div class="w-full text-center mb-8">
            <h1 class="sm:text-3xl text-2xl font-semibold text-green-600">Berita</h1>
            <h1 class="max-w-screen-md mx-auto font-light text-lg text-gray-500 py-2">Temukan informasi disini!</h1>
        </div>
        <div class="w-full p-4 bg-green-600 rounded-lg shadow-md sm:p-8">
            @if (count($posts))
                <div class="grid lg:grid-cols-10 grid-cols-1 gap-7">
                    <div class="lg:col-span-3 col-span-1 bg-white border rounded-lg shadow overflow-hidden">
                        @foreach ($posts as $image)
                            <img src="{{ asset('storage/' . $image->post_image) }}"
                                class="rounded-lg hover:scale-105 duration-300 max-w-full h-auto" alt="">
                        @endforeach
                    </div>

                    <div class="lg:col-span-7">
                        <div class="flex items-center mb-5">
                            <h1 class="md:text-2xl font-semibold text-gray-100">Berita terkini</h1>
                            <div class="flex-1 text-center px-3">
                                <div class="border-b border-gray-300"></div>
                            </div>
                            <a href="#"
                                class="text-gray-300 md:text-sm text-xs  mr-2 flex space-x-1 hover:text-blue-300">
                                <p class="self-center">Lihat semua</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </a>
                        </div>

                        @foreach ($posts as $post)
                            <div class="bg-green-700 border border-slate-600 rounded-lg shadow overflow-hidden mt-4 ">
                                <div class="grid lg:grid-cols-9 row-span-3">
                                    <div class="lg:col-span-2 overflow-hidden lg:block hidden">
                                        <div class="bg-transparent max-h-[10rem]">
                                            @if ($post->post_image != null)
                                                <img src="{{ asset('storage/' . $post->post_image) }}"
                                                    class="hover:scale-105 duration-300 min-w-[240px] max-h-[10rem] bg-cover"
                                                    alt="">
                                            @else
                                                <img src="https://source.unsplash.com/240x200?{{ $post->category->name }}"
                                                    class="hover:scale-105 duration-300" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="lg:col-span-7 flex flex-col justify-center p-3">
                                        <a
                                            href="{{ route('post.show', ['year' => $post->created_at->format('Y'), 'month' => $post->created_at->format('m'), 'day' => $post->created_at->format('d'), 'slug' => $post->slug]) }}">
                                            <h5
                                                class="lg:text-2xl text-sm font-bold tracking-tight text-gray-200 hover:text-green-300">
                                                {{ $post->title }}</h5>
                                        </a>
                                        <div class="font-light py-4 text-sm text-gray-200 dark:text-gray-400">
                                            {!! $post->excerpt !!}</div>
                                        <div class="font-normal text-xs text-gray-300 dark:text-gray-400">Kategori :
                                            {{ $post->category->name }} | {{ $post->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    @else
        <div class="grid grid-cols-1">
            <div class="col-span-1 p-6 bg-green-700 border border-slate-600 rounded-lg shadow">
                <h1 class="text-center py-40 text-gray-200">No post found.</h1>
            </div>
        </div>
        @endif
    </div>
</section>
