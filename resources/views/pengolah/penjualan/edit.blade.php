<x-pengolah-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Edit Data Penjualan</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('pengolah.penjualan') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('pengolah.penjualan-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="tanggal" :value="__('Tanggal')" />
                            <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="$sell->tanggal" required autofocus autocomplete="tanggal" />
                            <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="total" :value="__('Total')" />
                            <x-text-input id="total" class="block mt-1 w-full" type="text" name="total" :value="$sell->total" required autocomplete="total" />
                            <x-input-error :messages="$errors->get('total')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="terjual" :value="__('Telur terjual')" />
                            <x-text-input id="terjual" class="block mt-1 w-full" type="text" name="terjual" :value="$sell->terjual" required autocomplete="terjual" />
                            <x-input-error :messages="$errors->get('terjual')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Edit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-pengolah-layout>
