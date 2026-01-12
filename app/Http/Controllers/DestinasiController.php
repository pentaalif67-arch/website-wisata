<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    /**
     * Tampilkan semua destinasi dari database
     */
    public function index()
    {
        $destinasis = DB::table('destinasis')->latest('id')->paginate(6);
        return view('dashboard.destinasi', compact('destinasis'));
    }

    /**
     * Form tambah destinasi baru
     */
    public function create()
    {
        $kategori = ['Pantai', 'Pegunungan', 'Air Terjun', 'Perkebunan', 'Wisata Keluarga', 'Budaya'];
        return view('dashboard.destinasi-create', compact('kategori'));
    }

    /**
     * Simpan destinasi baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'deskripsi_lengkap' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string|max:255',
            'harga_tiket' => 'required|numeric|min:0',
            'jam_buka' => 'required|string|max:50',
            'jam_tutup' => 'required|string|max:50',
            'kategori' => 'required|string|max:50',
            'kontak' => 'nullable|string|max:20',
            'maps_link' => 'nullable|url',
        ]);

        // Buat slug unik
        $slug = Str::slug($request->nama);
        $counter = 1;
        $originalSlug = $slug;
        while (DB::table('destinasis')->where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        // Simpan file gambar ke storage
        $gambarPath = '';
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('destinasi', 'public');
            // Pastikan path disimpan dengan benar
            if (!$gambarPath) {
                return back()->withErrors(['gambar' => 'Gagal menyimpan gambar.'])->withInput();
            }
        } else {
            return back()->withErrors(['gambar' => 'Gambar wajib diisi.'])->withInput();
        }

        DB::table('destinasis')->insert([
            'nama' => $request->nama,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'deskripsi_lengkap' => $request->deskripsi_lengkap ?: $request->deskripsi,
            'gambar' => $gambarPath,
            'lokasi' => $request->lokasi,
            'harga_tiket' => $request->harga_tiket,
            'jam_buka' => $request->jam_buka,
            'jam_tutup' => $request->jam_tutup,
            'rating' => 0,
            'jumlah_ulasan' => 0,
            'kategori' => $request->kategori,
            'kontak' => $request->kontak,
            'maps_link' => $request->maps_link,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('destinasi.index')->with('success', 'Destinasi baru berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail destinasi
     */
    public function show($slug)
    {
        $destinasi = DB::table('destinasis')->where('slug', $slug)->first();

        if (!$destinasi) {
            abort(404, 'Destinasi tidak ditemukan.');
        }

        $destinasiLainnya = DB::table('destinasis')
            ->where('slug', '!=', $slug)
            ->take(3)
            ->get();

        return view('dashboard.destinasi-show', compact('destinasi', 'destinasiLainnya'));
    }

    /**
     * Hapus destinasi dari database
     */
    public function destroy($id)
    {
        $destinasi = DB::table('destinasis')->where('id', $id)->first();
        
        if (!$destinasi) {
            return redirect()->route('destinasi.index')
                ->with('error', 'Destinasi tidak ditemukan.');
        }
        
        // Hapus gambar dari storage jika ada
        if ($destinasi->gambar && Storage::disk('public')->exists($destinasi->gambar)) {
            Storage::disk('public')->delete($destinasi->gambar);
        }
        
        // Hapus dari database
        DB::table('destinasis')->where('id', $id)->delete();
        
        return redirect()->route('destinasi.index')
            ->with('success', 'Destinasi "' . $destinasi->nama . '" berhasil dihapus!');
    }

    /**
     * Form edit destinasi
     */
    public function edit($id)
    {
        $destinasi = DB::table('destinasis')->where('id', $id)->first();
        
        if (!$destinasi) {
            return redirect()->route('destinasi.index')
                ->with('error', 'Destinasi tidak ditemukan.');
        }
        
        $kategori = ['Pantai', 'Pegunungan', 'Air Terjun', 'Perkebunan', 'Wisata Keluarga', 'Budaya'];
        
        return view('dashboard.destinasi-edit', compact('destinasi', 'kategori'));
    }

    /**
     * Update destinasi
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'deskripsi_lengkap' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string|max:255',
            'harga_tiket' => 'required|numeric|min:0',
            'jam_buka' => 'required|string|max:50',
            'jam_tutup' => 'required|string|max:50',
            'kategori' => 'required|string|max:50',
            'kontak' => 'nullable|string|max:20',
            'maps_link' => 'nullable|url',
        ]);

        $destinasi = DB::table('destinasis')->where('id', $id)->first();
        
        if (!$destinasi) {
            return redirect()->route('destinasi.index')
                ->with('error', 'Destinasi tidak ditemukan.');
        }

        // Buat slug unik jika nama berubah
        $slug = $destinasi->slug;
        if ($request->nama != $destinasi->nama) {
            $slug = Str::slug($request->nama);
            $counter = 1;
            $originalSlug = $slug;
            while (DB::table('destinasis')->where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = "{$originalSlug}-{$counter}";
                $counter++;
            }
        }

        // Update gambar jika ada file baru
        $gambarPath = $destinasi->gambar;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambarPath && Storage::disk('public')->exists($gambarPath)) {
                Storage::disk('public')->delete($gambarPath);
            }
            // Simpan gambar baru
            $gambarPath = $request->file('gambar')->store('destinasi', 'public');
        }

        DB::table('destinasis')->where('id', $id)->update([
            'nama' => $request->nama,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'deskripsi_lengkap' => $request->deskripsi_lengkap ?: $request->deskripsi,
            'gambar' => $gambarPath,
            'lokasi' => $request->lokasi,
            'harga_tiket' => $request->harga_tiket,
            'jam_buka' => $request->jam_buka,
            'jam_tutup' => $request->jam_tutup,
            'kategori' => $request->kategori,
            'kontak' => $request->kontak,
            'maps_link' => $request->maps_link,
            'updated_at' => now(),
        ]);

        return redirect()->route('destinasi.index')
            ->with('success', 'Destinasi "' . $request->nama . '" berhasil diperbarui!');
    }
}