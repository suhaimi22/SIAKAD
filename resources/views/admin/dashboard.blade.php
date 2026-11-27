
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Admin SIAKAD
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h3 class="text-2xl font-bold text-gray-800">
                    Selamat Datang, Admin!
                </h3>

                <p class="mt-2 text-gray-600">
                    Anda masuk sebagai Administrator SIAKAD.
                </p>

                <!-- Tombol Kelola Akun Guru -->
                <div class="mt-6">
                    <a href="{{ route('admin.guru.index') }}"
                       style="display:inline-block; background:#2563eb; color:white; padding:12px 20px; border-radius:8px; text-decoration:none;">
                        Kelola Akun Guru
                    </a>
                </div>

                <!-- Menu Dashboard -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

                    <!-- Data Guru -->
                    <a href="{{ route('admin.guru.index') }}"
                       class="block bg-blue-100 p-6 rounded-lg hover:bg-blue-200 transition cursor-pointer">
                        <h4 class="font-bold text-blue-800">
                            Data Guru
                        </h4>
                        <p class="text-gray-600 mt-2">
                            Kelola akun dan data guru.
                        </p>
                        <p class="text-blue-700 font-semibold mt-4">
                            Lihat Data Guru →
                        </p>
                    </a>

                    <!-- Data Siswa -->
                    <a href="#"
                       class="block bg-green-100 p-6 rounded-lg hover:bg-green-200 transition cursor-pointer">
                        <h4 class="font-bold text-green-800">
                            Data Siswa
                        </h4>
                        <p class="text-gray-600 mt-2">
                            Kelola data siswa sekolah.
                        </p>
                        <p class="text-green-700 font-semibold mt-4">
                            Segera tersedia
                        </p>
                    </a>

                    <!-- Data Kelas -->
                    <a href="#"
                       class="block bg-yellow-100 p-6 rounded-lg hover:bg-yellow-200 transition cursor-pointer">
                        <h4 class="font-bold text-yellow-800">
                            Data Kelas
                        </h4>
                        <p class="text-gray-600 mt-2">
                            Kelola kelas sekolah.
                        </p>
                        <p class="text-yellow-700 font-semibold mt-4">
                            Segera tersedia
                        </p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
