<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Edit Telur Asin</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('pengolah.telurasin') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('pengolah.telurasin-update', $salted->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="totalTelurAsin" :value="__('Total telur asin')" />
                            <x-text-input id="totalTelurAsin" class="block mt-1 w-full" type="text" name="totalTelurAsin" :value="$salted->totalTelurAsin" required autofocus autocomplete="totalTelurAsin" />
                            <x-input-error :messages="$errors->get('totalTelurAsin')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="tanggalPembuatan" :value="__('Tanggal pembuatan')" />
                            <x-text-input id="tanggalPembuatan" class="block mt-1 w-full" type="date" name="tanggalPembuatan" :value="$salted->tanggalPembuatan" required autocomplete="tanggalPembuatan" />
                            <x-input-error :messages="$errors->get('tanggalPembuatan')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tanggalKadaluarsa" :value="__('Tanggal kadaluarsa')" />
                            <x-text-input id="tanggalKadaluarsa" class="block mt-1 w-full" type="date" name="tanggalKadaluarsa" :value="$salted->tanggalKadaluarsa" required autocomplete="tanggalKadaluarsa" />
                            <x-input-error :messages="$errors->get('tanggalKadaluarsa')" class="mt-2" />
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
