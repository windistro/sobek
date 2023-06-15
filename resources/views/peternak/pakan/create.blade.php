<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-[#006D77] font-bold justify-between">
                    <p>Tambah Data Pakan</p>
                </div>
                {{-- <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('peternak.pakan') }}">Kembali</a> --}}
                <div class="p-6 pt-0">
                    <form action="{{ route('peternak.pakan-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="nama" :value="__('Nama Pakan')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="stok" :value="__('Stok Pakan')" />
                            <x-text-input id="stok" class="block mt-1 w-full" type="text" name="stok" :value="old('stok')" required autocomplete="stok" />
                            <x-input-error :messages="$errors->get('stok')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="catatan" :value="__('Catatan')" />
                            <x-text-input id="catatan" class="block mt-1 w-full" type="text" name="catatan" :value="old('catatan')" required autocomplete="catatan" />
                            <x-input-error :messages="$errors->get('catatan')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-between mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah') }}
                            </x-primary-button>
                            <a class="px-4 py-2 bg-[#006D77] font-semibold text-xs text-white uppercase tracking-widest rounded-md border" href="{{ route('peternak.pakan') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-peternak-layout>
