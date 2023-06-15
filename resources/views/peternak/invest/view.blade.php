<x-peternak-layout>
    <div>
        <div class="mx-auto">
            <div class="bg-[#006D77] overflow-hidden h-20 flex justify-center items-center">
                <div class="p-6 text-xl text-white">
                    <a href="{{ route('peternak.invest-create') }}">Tambah Data Investasi</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="bg-cyan-300 p-4 rounded">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="p-6">
                <div class="grid grid-flow-col grid-cols-3 gap-8"> 
                    @foreach($invest as $invest)
                        <div class="border-2 rounded shadow-md h-auto p-4">
                            <img src="{{ asset('farm.jpg') }}" alt="">
                            <h4 class="text-lg font-semibold text-center">{{ $invest->peternakan }}</h4>
                            <p class="overflow-hidden text-ellipsis">{{ Str::limit($invest->deskripsi, 150) }}</p>
                            <p class="font-semibold py-4">Durasi : {{ $invest->durasi }} Hari</p>
                            {{-- <button class="justify-center">
                                <a href=" {{ route('peternak.invest-edit', $invest->id) }}" ><i data-feather="edit"></i></a>
                            </button> --}}
                            <x-primary-button class="mt-4">
                                <a href=" {{ route('peternak.invest-edit', $invest->id) }}">Edit</a>
                            </x-primary-button>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-peternak-layout>