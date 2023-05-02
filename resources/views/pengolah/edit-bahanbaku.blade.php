<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Edit Bahan Baku</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('pengolah.bahanbaku') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('pengolah.bahanbaku-update', $baku->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="stokTelurBebek" :value="__('Stok Telur Bebek')" />
                            <x-text-input id="stokTelurBebek" class="block mt-1 w-full" type="text" name="stokTelurBebek" :value="$baku->stokTelurBebek" required autofocus autocomplete="stokTelurBebek" />
                            <x-input-error :messages="$errors->get('stokTelurBebek')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="stokGaram" :value="__('Stok Garam')" />
                            <x-text-input id="stokGaram" class="block mt-1 w-full" type="text" name="stokGaram" :value="$baku->stokGaram" required autocomplete="stokGaram" />
                            <x-input-error :messages="$errors->get('stokGaram')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Edit') }}
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
