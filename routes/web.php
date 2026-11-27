
<?php

use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {

    // Mengarahkan pengguna sesuai role
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        if (auth()->user()->role === 'guru') {
            return redirect()->route('guru.dashboard');
        }

        abort(403, 'Role tidak dikenali.');
    })->name('dashboard');

    Route::middleware('role:admin')->group(function () {

        // Dashboard Admin
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // Kelola Akun Guru
        Route::get('/admin/guru', [GuruController::class, 'index'])
            ->name('admin.guru.index');

        Route::get('/admin/guru/create', [GuruController::class, 'create'])
            ->name('admin.guru.create');

        Route::post('/admin/guru', [GuruController::class, 'store'])
            ->name('admin.guru.store');

        Route::delete('/admin/guru/{guru}', [GuruController::class, 'destroy'])
            ->name('admin.guru.destroy');
    });

    // Dashboard Guru
    Route::middleware('role:guru')->group(function () {
        Route::get('/guru/dashboard', function () {
            return view('guru.dashboard');
        })->name('guru.dashboard');
    });

    // Profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
