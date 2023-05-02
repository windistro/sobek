<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pb-0 text-[#006D77] font-bold">
                    Data Kandang
                </div>
                @if ($message = Session::get('success'))
                    <div class="bg-cyan-300 p-4 rounded">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="p-6">
                    <a class="p-3 bg-[#006D77] rounded text-white" href="{{ route('peternak.kandang-create') }}">Tambah Data</a>
                    <table class="table-auto border-separate border border-slate-300 w-full mt-4">
                        <thead>
                            <tr class="bg-slate-200">
                                <th class="p-1 text-sm font-semibold tracking-wide">Id</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Total Pembatas</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Bebek didalam pembatas</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Total Bebek</th>                                
                                <th class="p-1 text-sm font-semibold tracking-wide">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pen as $kandang)
                                <tr>
                                    <td class="p-2 text-center">{{ $kandang->id }}</td>
                                    <td class="p-2 text-center">{{ $kandang->totalPembatas }}</td>
                                    <td class="p-2 text-center">{{ $kandang->bebekPembatas }}</td>
                                    <td class="p-2 text-center">{{ $kandang->totalBebek }}</td>
                                    <td class="p-2 flex justify-center">
                                        <a href=" {{ route('peternak.kandang-edit', $kandang->id) }}"><i data-feather="edit"></i></a>
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
