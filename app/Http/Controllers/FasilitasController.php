<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Menampilkan halaman fasilitas
     */
    public function index()
    {
        // Ambil data fasilitas dari database
        $dbFasilitas = Fasilitas::all();
        
        // Data statistik fasilitas dari database
        $statistik = [
            'totalPenginapan' => Fasilitas::where('kategori', 'LIKE', '%Penginapan%')
                                    ->orWhere('kategori', 'LIKE', '%Hotel%')
                                    ->orWhere('kategori', 'LIKE', '%RBNB%')
                                    ->count() ?: 0,
            'totalRestoran' => Fasilitas::where('kategori', 'Restoran')->count() ?: 0,
            'totalTransportasi' => Fasilitas::where('kategori', 'Transportasi')->count() ?: 0,
            'totalOlehOleh' => Fasilitas::where('kategori', 'Oleh-oleh')->count() ?: 0
        ];
        
        if ($dbFasilitas->isEmpty()) {
            // Data fasilitas default jika database kosong
            $fasilitas = [];
        } else {
            // Format data dari database untuk view
            $fasilitas = $dbFasilitas->map(function($item) {
                $foto = $item->foto;
                if ($foto && (str_starts_with($foto, 'http://') || str_starts_with($foto, 'https://'))) {
                    $gambar = $foto;
                } elseif ($foto) {
                    $gambar = asset('storage/fasilitas/' . $foto);
                } else {
                    $gambar = 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80';
                }
                return [
                    'id' => $item->id,
                    'nama' => $item->nama,
                    'kategori' => $item->kategori,
                    'gambar' => $gambar,
                    'deskripsi' => $item->deskripsi,
                    'rating' => (float)$item->rating,
                    'alamat' => $item->alamat,
                    'harga' => 'Rp ' . number_format($item->harga_permalam, 0, ',', '.'),
                    'fasilitas' => $item->fasilitas ? explode(', ', $item->fasilitas) : []
                ];
            })->toArray();
        }

        return view('dashboard.fasilitas', compact('statistik', 'fasilitas'));
    }

    /**
     * Menyimpan fasilitas baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'harga_permalam' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'jarak_km' => 'required|numeric',
            'rating' => 'nullable|string',
            'fasilitas' => 'nullable|array',
            'fasilitas.*' => 'string',
            'website' => 'nullable|url',
            'foto' => 'nullable|image|max:5120'
        ]);

        // Gabungkan fasilitas array jadi string
        if (isset($validated['fasilitas']) && is_array($validated['fasilitas'])) {
            $validated['fasilitas'] = implode(', ', $validated['fasilitas']);
        }

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fasilitas', 'public');
            $validated['foto'] = $path;
        }

        // Buat fasilitas baru
        Fasilitas::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil ditambahkan!'
        ]);
    }

    /**
     * Menampilkan detail fasilitas
     */
    public function show($id)
    {
        // Untuk sementara redirect ke index
        return redirect()->route('fasilitas.index');
    }

    /**
     * Update fasilitas
     */
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'harga_permalam' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'jarak_km' => 'required|numeric',
            'rating' => 'nullable|string',
            'fasilitas' => 'nullable|array',
            'fasilitas.*' => 'string',
            'website' => 'nullable|url',
            'foto' => 'nullable|image|max:5120'
        ]);

        // Gabungkan fasilitas array jadi string
        if (isset($validated['fasilitas']) && is_array($validated['fasilitas'])) {
            $validated['fasilitas'] = implode(', ', $validated['fasilitas']);
        }

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($fasilitas->foto && Storage::disk('public')->exists($fasilitas->foto)) {
                Storage::disk('public')->delete($fasilitas->foto);
            }
            $path = $request->file('foto')->store('fasilitas', 'public');
            $validated['foto'] = $path;
        }

        // Update fasilitas
        $fasilitas->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil diperbarui!'
        ]);
    }

    /**
     * Hapus fasilitas
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        // Hapus foto jika ada
        if ($fasilitas->foto && Storage::disk('public')->exists($fasilitas->foto)) {
            Storage::disk('public')->delete($fasilitas->foto);
        }

        $fasilitas->delete();

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil dihapus!'
        ]);
    }
}