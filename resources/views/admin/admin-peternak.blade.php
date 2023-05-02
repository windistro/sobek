<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    Data Akun Peternak
                </div>
                <hr>
                @if ($message = Session::get('success'))
                    <div class="bg-cyan-300 p-4 rounded">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="p-6">
                    <a class="p-3 bg-lime-400 rounded" href="{{ route('admin.create') }}">Tambah Akun</a>
                    <table class="table-auto border-separate border border-slate-300 w-full mt-4">
                        <thead>
                            <tr class="bg-slate-200">
                                <th class="p-1 text-sm font-semibold tracking-wide">Id</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Nama</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Email</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">No Hp</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Jenis Kelamin</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Alamat</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Tanggal Lahir</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Role</th>
                                <th class="p-1 text-sm font-semibold tracking-wide">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $akun)
                                <tr>
                                    {{-- <td class="p-2 text-center">{{ $loop->iteration }}</td> --}}
                                    <td class="p-2 text-center">{{ $akun->id }}</td>
                                    <td class="p-2 text-center">{{ $akun->name }}</td>
                                    <td class="p-2 text-center">{{ $akun->email }}</td>
                                    <td class="p-2 text-center">{{ $akun->no }}</td>
                                    <td class="p-2 text-center">{{ $akun->gender }}</td>
                                    <td class="p-2 text-center">{{ $akun->address }}</td>
                                    <td class="p-2 text-center">{{ $akun->birthdate }}</td>
                                    <td class="p-2 text-center">{{ $akun->role }}</td>
                                    <td class="p-2 flex justify-center">
                                        <a href=" {{ route('admin.edit', $akun->id) }}"><i data-feather="edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
