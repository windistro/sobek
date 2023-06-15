<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-[#006D77] font-bold justify-between">
                    <p>Tambah Data Kandang</p>
                </div>
                {{-- <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('peternak.kandang') }}">Kembali</a> --}}
                <div class="p-6 pt-0">
                    <form action="{{ route('peternak.kandang-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Nama Kandang')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="kategori" :value="__('Kategori')" />
                            <x-text-input id="kategori" class="block mt-1 w-full" type="text" name="kategori" :value="old('kategori')" required autocomplete="kategori" />
                            <x-input-error :messages="$errors->get('kategori')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kapasitas" :value="__('Kapasitas')" />
                            <x-text-input id="kapasitas" class="block mt-1 w-full" type="text" name="kapasitas" :value="old('kapasitas')" required autocomplete="kapasitas" />
                            <x-input-error :messages="$errors->get('kapasitas')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="totalBebek" :value="__('Total Bebek')" />
                            <x-text-input id="totalBebek" class="block mt-1 w-full" type="text" name="totalBebek" :value="old('totalBebek')" required autocomplete="totalBebek" />
                            <x-input-error :messages="$errors->get('totalBebek')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah') }}
                            </x-primary-button>
                            <a class="px-4 py-2 bg-[#006D77] font-semibold text-xs text-white uppercase tracking-widest rounded-md border" href="{{ route('peternak.kandang') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-peternak-layout>
