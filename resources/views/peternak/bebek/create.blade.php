<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Data Bebek</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('peternak.bebek') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('peternak.bebek-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="umur" :value="__('Umur')" />
                            <x-text-input id="umur" class="block mt-1 w-full" type="text" name="umur" :value="old('umur')" required autofocus autocomplete="umur" />
                            <x-input-error :messages="$errors->get('umur')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autocomplete="status" />
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="telurWeekly" :value="__('Telur perminggu')" />
                            <x-text-input id="telurWeekly" class="block mt-1 w-full" type="text" name="telurWeekly" :value="old('telurWeekly')" required autocomplete="telurWeekly" />
                            <x-input-error :messages="$errors->get('telurWeekly')" class="mt-2" />
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
