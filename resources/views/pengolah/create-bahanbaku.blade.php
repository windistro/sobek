<x-pengolah-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Bahan Baku</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('pengolah.bahanbaku') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('pengolah.bahanbaku-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="stokTelurBebek" :value="__('Stok Telur Bebek')" />
                            <x-text-input id="stokTelurBebek" class="block mt-1 w-full" type="text" name="stokTelurBebek" :value="old('stokTelurBebek')" required autofocus autocomplete="stokTelurBebek" />
                            <x-input-error :messages="$errors->get('stokTelurBebek')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="stokGaram" :value="__('Stok Garam')" />
                            <x-text-input id="stokGaram" class="block mt-1 w-full" type="text" name="stokGaram" :value="old('stokGaram')" required autocomplete="stokGaram" />
                            <x-input-error :messages="$errors->get('stokGaram')" class="mt-2" />
                        </div>
                
                        <x-primary-button class="ml-4 mt-4">
                            {{ __('Add') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-pengolah-layout>
