<x-pelanggan-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-[#006D77] font-bold justify-between">
                    <p>Investasi</p>
                </div>
                <a class="px-6 py-2 mx-6 bg-white rounded text-red-400 border border-red-400" href="{{ route('pelanggan.investasi') }}">Kembali</a>
                <div class="p-6">
                    <form action="{{ route('pelanggan.form-invest', $invest->id) }}" method="POST">
                        @csrf
                        {{-- <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autofocus autocomplete="status" />
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div> --}}
                        <div>
                            <x-input-label for="nominal" :value="__('Nominal')" />
                            <x-text-input id="nominal" class="block mt-1 w-full" type="text" name="nominal" :value="old('nominal')" required autofocus autocomplete="nominal" />
                            <x-input-error :messages="$errors->get('nominal')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Invest') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-pelanggan-layout>
