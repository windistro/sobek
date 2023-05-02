<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Data Pakan</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('peternak.pakan') }}">Back</a>
                </div>
                <div class="p-6">
                    <form action="{{ route('peternak.pakan-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="stokKatul" :value="__('Stok Katul')" />
                            <x-text-input id="stokKatul" class="block mt-1 w-full" type="text" name="stokKatul" :value="old('stokKatul')" required autofocus autocomplete="stokKatul" />
                            <x-input-error :messages="$errors->get('stokKatul')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="stokKosentrat" :value="__('Stok Kosentrat')" />
                            <x-text-input id="stokKosentrat" class="block mt-1 w-full" type="text" name="stokKosentrat" :value="old('stokKosentrat')" required autocomplete="stokKosentrat" />
                            <x-input-error :messages="$errors->get('stokKosentrat')" class="mt-2" />
                        </div>
                
                        <x-primary-button class="ml-4 mt-4">
                            {{ __('Add') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-peternak-layout>
