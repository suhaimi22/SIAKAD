
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Akun Guru
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 shadow-sm rounded-lg">

                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold">Daftar Akun Guru</h3>

                    <a href="{{ route('admin.guru.create') }}"
                    style="display:inline-block; background-color:#2563eb; color:#ffffff; padding:10px 18px; border-radius:8px; text-decoration:none; font-weight:bold;">
                        + Tambah Guru
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse border">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border p-3">No</th>
                                <th class="border p-3">Nama</th>
                                <th class="border p-3">Email</th>
                                <th class="border p-3">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($gurus as $guru)
                                <tr>
                                    <td class="border p-3">{{ $loop->iteration }}</td>
                                    <td class="border p-3">{{ $guru->name }}</td>
                                    <td class="border p-3">{{ $guru->email }}</td>
                                    <td class="border p-3">
                                        <form action="{{ route('admin.guru.destroy', $guru->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus akun Guru ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="bg-red-600 text-white px-3 py-1 rounded">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="border p-4 text-center text-gray-500">
                                        Belum ada akun Guru.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
