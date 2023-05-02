<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Edit Data Telur</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('peternak.telur') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('peternak.telur-update', $egg->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="telurPembatas" :value="__('Telur didalam Pembatas')" />
                            <x-text-input id="telurPembatas" class="block mt-1 w-full" type="text" name="telurPembatas" :value="$egg->telurPembatas" required autofocus autocomplete="telurPembatas" />
                            <x-input-error :messages="$errors->get('telurPembatas')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="totalTelur" :value="__('Total Telur')" />
                            <x-text-input id="totalTelur" class="block mt-1 w-full" type="text" name="totalTelur" :value="$egg->totalTelur" required autocomplete="totalTelur" />
                            <x-input-error :messages="$errors->get('totalTelur')" class="mt-2" />
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
</x-peternak-layout>