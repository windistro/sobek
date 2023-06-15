<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 pb-0 text-[#006D77] font-bold text-lg">
                    Data Bebek
                </div>
                @if ($message = Session::get('success'))
                    <div class="bg-cyan-300 p-4 rounded">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="p-6">
                    <a class="p-3 bg-[#006D77] rounded text-white" href="{{ route('peternak.bebek-create') }}">Tambah Data</a>
                    <table class="table-auto border-separate border border-slate-300 w-full mt-4">
                        <thead>
                            <tr class="bg-slate-200">
                                <th class="p-1 text-sm font-semibold tracking-wide">Id</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Tag</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Tempat Kandang</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Jumlah Bebek</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Kelamin</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Umur</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Kategorri</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Id Kandang</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($duck as $bebek)
                                <tr>
                                    <td class="p-2 text-center">{{ $bebek->id }}</td>
                                    <td class="p-2 text-center">{{ $bebek->tag }}</td>
                                    <td class="p-2 text-center">{{ $bebek->tempat }}</td>
                                    <td class="p-2 text-center">{{ $bebek->jumlah }}</td>
                                    <td class="p-2 text-center">{{ $bebek->kelamin }}</td>
                                    <td class="p-2 text-center">{{ $bebek->umur }}</td>
                                    <td class="p-2 text-center">{{ $bebek->kategori }}</td>
                                    <td class="p-2 text-center">{{ $bebek->kandang_id }}</td>
                                    <td class="p-2 flex justify-center">
                                        <a href=" {{ route('peternak.bebek-edit', $bebek->id) }}"><i data-feather="edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-pengolah-layout>
