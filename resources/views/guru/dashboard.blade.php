
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Guru SIAKAD
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <h3 class="text-2xl font-bold text-gray-800">
                    Selamat Datang, Guru!
                </h3>

                <p class="mt-2 text-gray-600">
                    Anda masuk sebagai Guru.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-blue-100 p-6 rounded-lg">
                        <h4 class="font-bold text-blue-800">Jadwal Mengajar</h4>
                        <p class="text-gray-600 mt-2">Lihat jadwal pelajaran.</p>
                    </div>

                    <div class="bg-green-100 p-6 rounded-lg">
                        <h4 class="font-bold text-green-800">Absensi</h4>
                        <p class="text-gray-600 mt-2">Kelola absensi siswa.</p>
                    </div>

                    <div class="bg-yellow-100 p-6 rounded-lg">
                        <h4 class="font-bold text-yellow-800">Nilai Siswa</h4>
                        <p class="text-gray-600 mt-2">Kelola nilai siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
