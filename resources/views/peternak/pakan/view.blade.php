<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pb-0 text-[#006D77] font-bold text-lg">
                    Data Pakan
                </div>
                @if ($message = Session::get('success'))
                    <div class="bg-cyan-300 p-4 rounded">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="p-6">
                    <a class="p-3 bg-[#006D77] rounded text-white" href="{{ route('peternak.pakan-create') }}">Tambah Data</a>
                    <table class="table-auto border-separate border border-slate-300 w-full mt-4">
                        <thead>
                            <tr class="bg-slate-200">
                                <th class="p-1 text-sm font-semibold tracking-wide">Id</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Nama Pakan</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Stok Pakan</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Catatan</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($food as $pakan)
                                <tr>
                                    <td class="p-2 text-center">{{ $pakan->id }}</td>
                                    <td class="p-2 text-center">{{ $pakan->nama }}</td>
                                    <td class="p-2 text-center">{{ $pakan->stok }}</td>
                                    <td class="p-2 text-center">{{ $pakan->catatan }}</td>
                                    <td class="p-2 flex justify-center">
                                        <a href=" {{ route('peternak.pakan-edit', $pakan->id) }}"><i data-feather="edit"></i></a>
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
