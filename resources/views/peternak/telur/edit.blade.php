<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-[#006D77] font-bold justify-between">
                    <p>Edit Data Telur</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('peternak.telur') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('peternak.telur-update', $egg->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="telurEarned" :value="__('Telur yang dihasilkan')" />
                            <x-text-input id="telurEarned" class="block mt-1 w-full" type="text" name="telurEarned" :value="$egg->telurEarned" required autofocus autocomplete="telurEarned" />
                            <x-input-error :messages="$errors->get('telurEarned')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="tanggal" :value="__('Tanggal')" />
                            <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="$egg->tanggal" required autocomplete="tanggal" />
                            <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4 bg-[#FFB813]">
                                {{ __('Edit') }}
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-peternak-layout>
