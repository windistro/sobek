<x-pelanggan-layout>
    <div>
        <div class="mx-auto">
            <div class="bg-[#006D77] overflow-hidden h-80 flex justify-center items-center">
                <div class="p-6 text-5xl text-white font-semibold">
                    <h1>Selamat Datang Pelanggan</h1>
                    <img src="{{ asset('Logov2.svg') }}" alt="Logo Sobat Bebek" class="p-4 pt-8 ml-20">
                </div>
            </div>
        </div>
        <div>
            {{-- <div class="text-lg p-8">
                <p>Status Investasi Anda :</p>
            </div> --}}
            <div class="m-auto p-6 px-10 max-w-xl">
                <div class="border rounded border-slate-200 shadow-md justify-center items-center content-center">
                    {{-- <img src="https://cdn.pixabay.com/photo/2014/04/03/11/08/duck-311868_960_720.png" alt="investasi bebek" width="50%" height="50%"> --}}
                    <a href="{{ route('pelanggan.investasi') }}">
                        <img src="{{ asset('logo-sobek.svg') }}" alt="investasi bebek" class="w-full">
                        <p class="font-semibold text-lg text-center">investasi Bebek</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-pelanggan-layout>