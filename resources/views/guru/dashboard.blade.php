
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

                    <!-- Jadwal Mengajar -->
                    <a href="#"
                       style="display:block; background:#dbeafe; padding:24px; border-radius:10px; text-decoration:none;">
                        <h4 style="font-weight:bold; color:#1e40af;">
                            Jadwal Mengajar
                        </h4>
                        <p style="color:#4b5563; margin-top:8px;">
                            Lihat jadwal pelajaran.
                        </p>
                        <p style="color:#1d4ed8; font-weight:bold; margin-top:16px;">
                            Lihat Jadwal 
                        </p>
                    </a>

                    <!-- Absensi -->
                    <a href="#"
                       style="display:block; background:#dcfce7; padding:24px; border-radius:10px; text-decoration:none;">
                        <h4 style="font-weight:bold; color:#166534;">
                            Absensi
                        </h4>
                        <p style="color:#4b5563; margin-top:8px;">
                            Kelola absensi siswa.
                        </p>
                        <p style="color:#15803d; font-weight:bold; margin-top:16px;">
                            Kelola Absensi 
                        </p>
                    </a>

                    <!-- Nilai Siswa -->
                    <a href="#"
                       style="display:block; background:#fef3c7; padding:24px; border-radius:10px; text-decoration:none;">
                        <h4 style="font-weight:bold; color:#92400e;">
                            Nilai Siswa
                        </h4>
                        <p style="color:#4b5563; margin-top:8px;">
                            Kelola nilai siswa.
                        </p>
                        <p style="color:#b45309; font-weight:bold; margin-top:16px;">
                            Kelola Nilai 
                        </p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
