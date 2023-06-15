<x-pengolah-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Telur Asin</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('pengolah.telurasin') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('pengolah.telurasin-create') }}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="tanggalPembuatan" :value="__('Tanggal pembuatan')" />
                            <x-text-input id="tanggalPembuatan" class="block mt-1 w-full" type="date" name="tanggalPembuatan" :value="old('tanggalPembuatan')" required autocomplete="tanggalPembuatan" />
                            <x-input-error :messages="$errors->get('tanggalPembuatan')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="totalTelurAsin" :value="__('Total telur asin')" />
                            <x-text-input id="totalTelurAsin" class="block mt-1 w-full" type="text" name="totalTelurAsin" :value="old('totalTelurAsin')" required autofocus autocomplete="totalTelurAsin" />
                            <x-input-error :messages="$errors->get('totalTelurAsin')" class="mt-2" />
                        </div>
                

                        <div class="mt-4">
                            <x-input-label for="tanggalKadaluarsa" :value="__('Tanggal kadaluarsa')" />
                            <x-text-input id="tanggalKadaluarsa" class="block mt-1 w-full" type="date" name="tanggalKadaluarsa" :value="old('tanggalKadaluarsa')" required autocomplete="tanggalKadaluarsa" />
                            <x-input-error :messages="$errors->get('tanggalKadaluarsa')" class="mt-2" />
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
