<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-[#006D77] font-bold justify-between">
                    <p>Edit Data Bebek</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('peternak.bebek') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('peternak.bebek-update', $duck->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="tag" :value="__('Tag')" />
                            <x-text-input id="tag" class="block mt-1 w-full" type="text" name="tag" :value="$duck->tag" required autofocus autocomplete="tag" />
                            <x-input-error :messages="$errors->get('tag')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="tempat" :value="__('Tempat Kandang')" />
                            <x-text-input id="tempat" class="block mt-1 w-full" type="text" name="tempat" :value="$duck->tempat" required autofocus autocomplete="tempat" />
                            <x-input-error :messages="$errors->get('tempat')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="jumlah" :value="__('Jumlah Bebek')" />
                            <x-text-input id="jumlah" class="block mt-1 w-full" type="text" name="jumlah" :value="$duck->jumlah" required autofocus autocomplete="jumlah" />
                            <x-input-error :messages="$errors->get('jumlah')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="kelamin" :value="__('Jenis Kelamin')" />
                            <select name="kelamin" id="kelamin" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 rounded" :value="$duck->kelamin" required autofocus autocomplete="kelamin">
                                <option value="betina">Betina</option>
                                <option value="jantan">Jantan</option>
                            </select>
                            <x-input-error :messages="$errors->get('kelamin')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="umur" :value="__('Umur')" />
                            <x-text-input id="umur" class="block mt-1 w-full" type="text" name="umur" :value="$duck->umur" required autofocus autocomplete="umur" />
                            <x-input-error :messages="$errors->get('umur')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="kategori" :value="__('Kategori')" />
                            <x-text-input id="kategori" class="block mt-1 w-full" type="text" name="kategori" :value="$duck->kategori" required autocomplete="kategori" />
                            <x-input-error :messages="$errors->get('kategori')" class="mt-2" />
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
