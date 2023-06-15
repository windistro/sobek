<x-pelanggan-layout>
    <div class="grid grid-cols-3 gap-8 p-6">
        @foreach($statinvest as $investasi)
            <div class="border-2 rounded shadow-md h-auto">
                <img src="{{ asset('farm.jpg') }}" alt="">
                <h4 class="text-lg font-semibold text-center py-2">{{ $investasi->peternakan }}</h4>
                <p class="overflow-hidden text-ellipsis p-2">{{ Str::limit($investasi->deskripsi, 150) }}</p>
                <p class="font-semibold p-2">Status            : {{ $investasi->status }}</p>
                <p class="font-semibold p-2">Durasi            : {{ $investasi->durasi }}</p>
                <p class="font-semibold p-2">Nominal           : {{ $investasi->nominal }}</p>
            </div>
        @endforeach
    </div>
</x-pelanggan-layout>