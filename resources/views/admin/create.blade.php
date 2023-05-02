<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex text-gray-900 font-bold justify-between">
                    <p>Tambah Data</p>
                    <a class="px-6 bg-yellow-300 rounded" href="{{ route('admin.peternak') }}">Back</a>
                </div>
                <hr>
                <div class="p-6">
                    <form action="{{ route('admin.create') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Nama')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="no" :value="__('Nomor')" />
                            <x-text-input id="no" class="block mt-1 w-full" type="text" inputmode="numeric" name="no" :value="old('no')" required autocomplete="no" />
                            <x-input-error :messages="$errors->get('no')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="gender" :value="__('Jenis Kelamin')" />
                            <select name="gender" id="gender" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                <option value="L">Laki laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Alamat')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />
                            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="date" id="birthdate" name="birthdate" required autocomplete="birthdate">
                            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="role" :value="__('Role')" />
                            <select name="role" id="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                <option value="Peternak">Peternak</option>
                                <option value="Pengolah">Pengolah telur asin</option>
                                <option value="Pelanggan">Pelanggan</option>
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                
                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Add') }}
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
