
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

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-blue-100 p-6 rounded-lg">
                        <h4 class="font-bold text-blue-800">Data Guru</h4>
                        <p class="text-gray-600 mt-2">Kelola akun dan data guru.</p>
                    </div>

                    <div class="bg-green-100 p-6 rounded-lg">
                        <h4 class="font-bold text-green-800">Data Siswa</h4>
                        <p class="text-gray-600 mt-2">Kelola data siswa sekolah.</p>
                    </div>

                    <div class="bg-yellow-100 p-6 rounded-lg">
                        <h4 class="font-bold text-yellow-800">Data Kelas</h4>
                        <p class="text-gray-600 mt-2">Kelola kelas sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
