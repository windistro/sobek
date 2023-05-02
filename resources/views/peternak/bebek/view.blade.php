<x-peternak-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    Data Bebek
                </div>
                <hr>
                @if ($message = Session::get('success'))
                    <div class="bg-cyan-300 p-4 rounded">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="p-6">
                    <a class="p-3 bg-lime-400 rounded" href="{{ route('peternak.bebek-create') }}">Tambah Data</a>
                    <table class="table-auto border-separate border border-slate-300 w-full mt-4">
                        <thead>
                            <tr class="bg-slate-200">
                                <th class="p-1 text-sm font-semibold tracking-wide">Id</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Umur</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Status</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Telur perminggu</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($duck as $bebek)
                                <tr>
                                    <td class="p-2 text-center">{{ $bebek->id }}</td>
                                    <td class="p-2 text-center">{{ $bebek->umur }}</td>
                                    <td class="p-2 text-center">{{ $bebek->status }}</td>
                                    <td class="p-2 text-center">{{ $bebek->telurWeekly }}</td>
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
