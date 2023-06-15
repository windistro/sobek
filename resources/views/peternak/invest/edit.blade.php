<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-[#006D77] font-bold justify-between">
                    <p>Edit Data Investasi</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('peternak.invest') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('peternak.invest-update', $invest->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="peternakan" :value="__('Nama Peternakan')" />
                            <x-text-input id="peternakan" class="block mt-1 w-full" type="text" name="peternakan" :value="$invest->peternakan" required autofocus autocomplete="peternakan" />
                            <x-input-error :messages="$errors->get('peternakan')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                            <x-text-input id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi" :value="$invest->deskripsi" required autocomplete="deskripsi" />
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="durasi" :value="__('Durasi Investasi (minimal 30 hari)')" />
                            <x-text-input id="durasi" class="block mt-1 w-full" type="text" name="durasi" :value="$invest->durasi" required autocomplete="durasi" />
                            <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4 bg-[#FFB813]">
                                {{ __('Edit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-peternak-layout>
