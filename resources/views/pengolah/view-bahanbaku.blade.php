<x-pengolah-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    Data Bahan Baku
                </div>
                <hr>
                @if ($message = Session::get('success'))
                    <div class="bg-cyan-300 p-4 rounded">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="p-6">
                    <a class="p-3 bg-lime-400 rounded" href="{{ route('pengolah.bahanbaku-create') }}">Tambah Bahan Baku</a>
                    <table class="table-auto border-separate border border-slate-300 w-full mt-4">
                        <thead>
                            <tr class="bg-slate-200">
                                <th class="p-1 text-sm font-semibold tracking-wide">Id</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Nama Bahan Baku</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Jenis</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Stok</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Catatan</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baku as $ingredients)
                                <tr>
                                    <td class="p-2 text-center">{{ $ingredients->id }}</td>
                                    <td class="p-2 text-center">{{ $ingredients->nama }}</td>
                                    <td class="p-2 text-center">{{ $ingredients->jenis }}</td>
                                    <td class="p-2 text-center">{{ $ingredients->stok }}</td>
                                    <td class="p-2 text-center">{{ $ingredients->catatan }}</td>
                                    <td class="p-2 flex justify-center">
                                        <a href=" {{ route('pengolah.bahanbaku-edit', $ingredients->id) }}"><i data-feather="edit"></i></a>
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
