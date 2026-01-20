<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Menampilkan halaman galeri
     */
    public function index()
    {
        // Ambil data galeri dari database
        $galeri = Galeri::all();

        // Data kategori untuk filter
        $kategori = ['Semua', 'Pantai', 'Pegunungan', 'Air Terjun', 'Perkebunan', 'Wisata Keluarga', 'Kota', 'Rekreasi', 'Pantai'];

        return view('dashboard.galeri', compact('galeri', 'kategori'));
    }

    /**
     * Menyimpan galeri baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['judul', 'kategori', 'deskripsi']);

        // Handle file upload atau URL
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = 'galeri_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('galeri', $filename, 'public');
            $data['gambar'] = '/storage/' . $path;
        } elseif ($request->input('gambar_url')) {
            $data['gambar'] = $request->input('gambar_url');
        }

        Galeri::create($data);

        return response()->json(['success' => true, 'message' => 'Galeri berhasil ditambahkan']);
    }

    /**
     * Mengupdate galeri
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['judul', 'kategori', 'deskripsi']);

        // Handle file upload atau URL
        if ($request->hasFile('foto')) {
            // Hapus file lama jika ada
            if ($galeri->gambar && str_starts_with($galeri->gambar, '/storage/')) {
                $oldPath = str_replace('/storage/', '', $galeri->gambar);
                Storage::disk('public')->delete($oldPath);
            }

            $file = $request->file('foto');
            $filename = 'galeri_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('galeri', $filename, 'public');
            $data['gambar'] = '/storage/' . $path;
        } elseif ($request->input('gambar_url')) {
            $data['gambar'] = $request->input('gambar_url');
        }

        $galeri->update($data);

        return response()->json(['success' => true, 'message' => 'Galeri berhasil diupdate']);
    }

    /**
     * Menghapus galeri
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file jika ada
        if ($galeri->gambar && str_starts_with($galeri->gambar, '/storage/')) {
            $oldPath = str_replace('/storage/', '', $galeri->gambar);
            Storage::disk('public')->delete($oldPath);
        }

        $galeri->delete();

        return response()->json(['success' => true, 'message' => 'Galeri berhasil dihapus']);
    }

    /**
     * Menampilkan detail galeri
     */
    public function show($id)
    {
        // Untuk sementara redirect ke index
        return redirect()->route('galeri.index');
    }
}