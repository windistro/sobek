<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Edit Data Kandang</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('peternak.kandang') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('peternak.kandang-update', $pen->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="totalPembatas" :value="__('Total Pembatas')" />
                            <x-text-input id="totalPembatas" class="block mt-1 w-full" type="text" name="totalPembatas" :value="$pen->totalPembatas" required autofocus autocomplete="totalPembatas" />
                            <x-input-error :messages="$errors->get('totalPembatas')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="bebekPembatas" :value="__('Bebek didalam Pembatas')" />
                            <x-text-input id="bebekPembatas" class="block mt-1 w-full" type="text" name="bebekPembatas" :value="$pen->bebekPembatas" required autocomplete="bebekPembatas" />
                            <x-input-error :messages="$errors->get('bebekPembatas')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="totalBebek" :value="__('Total Bebek')" />
                            <x-text-input id="totalBebek" class="block mt-1 w-full" type="text" name="totalBebek" :value="$pen->totalBebek" required autocomplete="totalBebek" />
                            <x-input-error :messages="$errors->get('totalBebek')" class="mt-2" />
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
