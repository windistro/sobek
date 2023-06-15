<x-pelanggan-layout>
    <div class="grid grid-cols-3 gap-8 p-6"> 
        @foreach($invest as $invest)
            <div class="border-2 rounded shadow-md h-auto p-4">
                <img src="{{ asset('farm.jpg') }}" alt="">
                <h4 class="text-lg my-2 font-semibold text-center">{{ $invest->peternakan }}</h4>
                <p class="overflow-hidden text-ellipsis">{{ Str::limit($invest->deskripsi, 150) }}</p>
                <p class="font-semibold py-4">Durasi : {{ $invest->durasi }} Hari</p>
                <x-primary-button type="button" class="mt-8 p-4">
                    <a href="{{ route('pelanggan.form-invest', $invest->id) }}">Invest</a>
                </x-primary-button>
            </div>
            {{-- <x-modal name="openInvest" id="openInvest" maxwidth="2xl" show="false">
                <x-slot name="slot">
                    <div class="border-2 rounded shadow-md h-auto">
                        <img src="{{ asset('placeholder-image.png') }}" alt="">
                        <h4 class="text-lg font-semibold text-center py-2">{{ $invest->peternakan }}</h4>
                        <p class="overflow-hidden text-ellipsis">{{ $invest->deskripsi }}</p>
                        <x-primary-button type="button" class="mt-8 bottom-1">
                            <a href="" data->Invest</a>
                        </x-primary-button>
                    </div>
                </x-slot>
            </x-modal> --}}
        @endforeach
    </div>
</x-pelanggan-layout>