<x-pengolah-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Bahan Baku</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('pengolah.bahanbaku') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('pengolah.bahanbaku-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="nama" :value="__('Nama Bahan Baku')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="jenis" :value="__('Jenis')" />
                            <x-text-input id="jenis" class="block mt-1 w-full" type="text" name="jenis" :value="old('jenis')" required autocomplete="jenis" />
                            <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="stok" :value="__('Stok')" />
                            <x-text-input id="stok" class="block mt-1 w-full" type="text" name="stok" :value="old('stok')" required autocomplete="stok" />
                            <x-input-error :messages="$errors->get('stok')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="catatan" :value="__('Catatan')" />
                            <x-text-input id="catatan" class="block mt-1 w-full" type="text" name="catatan" :value="old('catatan')" required autocomplete="catatan" />
                            <x-input-error :messages="$errors->get('catatan')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-pengolah-layout>
