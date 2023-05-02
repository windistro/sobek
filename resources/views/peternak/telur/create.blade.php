<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Data Telur</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('peternak.telur') }}">Back</a>
                </div>
                <div class="p-6">
                    <form action="{{ route('peternak.telur-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="telurPembatas" :value="__('Telur didalam Pembatas')" />
                            <x-text-input id="telurPembatas" class="block mt-1 w-full" type="text" name="telurPembatas" :value="old('telurPembatas')" required autofocus autocomplete="telurPembatas" />
                            <x-input-error :messages="$errors->get('telurPembatas')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="totalTelur" :value="__('Total Telur')" />
                            <x-text-input id="totalTelur" class="block mt-1 w-full" type="text" name="totalTelur" :value="old('totalTelur')" required autocomplete="totalTelur" />
                            <x-input-error :messages="$errors->get('totalTelur')" class="mt-2" />
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
