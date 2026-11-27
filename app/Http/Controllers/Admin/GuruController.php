<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    // Menampilkan daftar akun guru
    public function index()
    {
        $gurus = User::where('role', 'guru')->latest()->get();

        return view('admin.guru.index', compact('gurus'));
    }

    // Menampilkan form tambah guru
    public function create()
    {
        return view('admin.guru.create');
    }

    // Menyimpan akun guru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guru',
        ]);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Akun Guru berhasil ditambahkan.');
    }

    // Menghapus akun guru
    public function destroy(User $guru)
    {
        if ($guru->role !== 'guru') {
            abort(403);
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Akun Guru berhasil dihapus.');
    }
}
