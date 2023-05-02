<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Data Kandang</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('peternak.kandang') }}">Back</a>
                </div>
                <div class="p-6">
                    <form action="{{ route('peternak.kandang-create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="totalPembatas" :value="__('Total Pembatas')" />
                            <x-text-input id="totalPembatas" class="block mt-1 w-full" type="text" name="totalPembatas" :value="old('totalPembatas')" required autofocus autocomplete="totalPembatas" />
                            <x-input-error :messages="$errors->get('totalPembatas')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="bebekPembatas" :value="__('Bebek didalam Pembatas')" />
                            <x-text-input id="bebekPembatas" class="block mt-1 w-full" type="text" name="bebekPembatas" :value="old('bebekPembatas')" required autocomplete="bebekPembatas" />
                            <x-input-error :messages="$errors->get('bebekPembatas')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="totalBebek" :value="__('Total Bebek')" />
                            <x-text-input id="totalBebek" class="block mt-1 w-full" type="text" name="totalBebek" :value="old('totalBebek')" required autocomplete="totalBebek" />
                            <x-input-error :messages="$errors->get('totalBebek')" class="mt-2" />
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
