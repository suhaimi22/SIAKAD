
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Akun Guru
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">

                <h3 class="text-lg font-bold mb-6">Formulir Akun Guru</h3>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.guru.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium mb-2">Nama Guru</label>
                        <input type="text" name="name"
                            value="{{ old('name') }}"
                            class="w-full border-gray-300 rounded-md"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-2">Email</label>
                        <input type="email" name="email"
                            value="{{ old('email') }}"
                            class="w-full border-gray-300 rounded-md"
                            required>
                    </div>

                    <div class="mb-6">
                        <label class="block font-medium mb-2">Password</label>
                        <input type="password" name="password"
                            class="w-full border-gray-300 rounded-md"
                            required>
                        <p class="text-sm text-gray-500 mt-1">
                            Password minimal 8 karakter.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit"
                            class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                            Simpan Akun
                        </button>

                        <a href="{{ route('admin.guru.index') }}"
                            class="bg-gray-500 text-white px-5 py-2 rounded">
                            Kembali
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
