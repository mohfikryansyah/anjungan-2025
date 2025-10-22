<form action="{{ route('comment.create') }}" method="POST">
    @csrf
    <input type="text" name="model" value="{{ $commentParam }}" hidden>
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900 mb-4">Komentar</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full mb-3">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2 w-full">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md w-full">
                            <input type="text" name="nama" id="nama" autocomplete="nama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset @error('nama') ring-red-600 @else ring-gray-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" placeholder="janesmith" value="{{ old('nama') }}">
                        </div>
                        @error('nama')
                            <p class="mt-2 text-sm leading-6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-span-full mb-3">
                    <label for="telepon" class="block text-sm font-medium leading-6 text-gray-900">telepon</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md">
                            <input type="text" inputmode="tel" name="telepon" id="telepon" autocomplete="telepon" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset @error('telepon') ring-red-600 @else ring-gray-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" placeholder="0812********" value="{{ old('telepon') }}">
                        </div>
                        @error('telepon')
                            <p class="mt-2 text-sm leading-6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-span-full mb-4">
                    <label for="ulasan" class="block text-sm font-medium leading-6 text-gray-900">Ulasan</label>
                    <div class="mt-2">
                        <textarea id="ulasan" name="ulasan" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset @error('ulasan') ring-red-600 @else ring-gray-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">{{ old('ulasan') }}</textarea>
                        @error('ulasan')
                            <p class="mt-2 text-sm leading-6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    <div class="mt-6 flex items-center justify-end gap-6">
        <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Kirim</button>
    </div>
</form>