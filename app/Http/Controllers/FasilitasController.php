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
            $fasilitas = [
                [
                    'id' => 1,
                    'nama' => 'Hotel Mutiara Jember',
                    'kategori' => 'Penginapan',
                    'gambar' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80',
                    'deskripsi' => 'Hotel bintang 4 dengan fasilitas lengkap di pusat kota Jember. Cocok untuk bisnis dan liburan keluarga.',
                    'rating' => 4.0,
                    'alamat' => 'Jl. Gatot Subroto No. 123, Jember',
                    'harga' => 'Rp 450.000 - Rp 1.200.000',
                    'fasilitas' => ['Kolam Renang', 'Restoran', 'Spa', 'WiFi Gratis', 'Parkir Luas']
                ],
                [
                    'id' => 2,
                    'nama' => 'Restoran Laut Biru',
                    'kategori' => 'Restoran',
                    'gambar' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=900&q=80',
                    'deskripsi' => 'Restoran seafood segar dengan pemandangan pantai. Menyajikan hidangan laut khas Jember.',
                    'rating' => 4.5,
                    'alamat' => 'Jl. Pantai Papuma No. 45, Jember',
                    'harga' => 'Rp 50.000 - Rp 250.000',
                    'fasilitas' => ['Pemandangan Laut', 'Live Music', 'Parkir', 'AC', 'WiFi']
                ],
                [
                    'id' => 3,
                    'nama' => 'Jember Car Rental',
                    'kategori' => 'Transportasi',
                    'gambar' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=900&q=80',
                    'deskripsi' => 'Penyewaan mobil dengan harga terjangkau dan armada terawat. Siap melayani tour ke destinasi wisata.',
                    'rating' => 4.3,
                    'alamat' => 'Jl. Jawa No. 78, Jember',
                    'harga' => 'Rp 350.000 - Rp 500.000/hari',
                    'fasilitas' => ['AC', 'Asuransi', 'Driver Profesional', 'WiFi', 'Flexible Booking']
                ],
                [
                    'id' => 4,
                    'nama' => 'Toko Oleh-Oleh Khas Jember',
                    'kategori' => 'Oleh-Oleh',
                    'gambar' => 'https://images.unsplash.com/photo-1552820728-8ac41f1ce891?auto=format&fit=crop&w=900&q=80',
                    'deskripsi' => 'Toko oleh-oleh resmi Jember dengan berbagai pilihan khas daerah. Kualitas terjamin dan harga bersaing.',
                    'rating' => 4.2,
                    'alamat' => 'Jl. Letjend Panjaitan No. 56, Jember',
                    'harga' => 'Rp 20.000 - Rp 500.000',
                    'fasilitas' => ['Parcel Service', 'Kualitas Premium', 'Halal Certified', 'Bisa Dikirim', 'Diskon Group']
                ],
                [
                    'id' => 5,
                    'nama' => 'Homestay Nusa Indah',
                    'kategori' => 'RBNB',
                    'gambar' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80',
                    'deskripsi' => 'Homestay dengan suasana keluarga, lokasi strategis dekat destinasi wisata. Nyaman dan terjangkau.',
                    'rating' => 4.6,
                    'alamat' => 'Jl. Diponegoro No. 89, Jember',
                    'harga' => 'Rp 150.000 - Rp 300.000',
                    'fasilitas' => ['WiFi', 'Dapur Bersama', 'Area Terbuka', 'Parkir', 'Nyaman']
                ],
                [
                    'id' => 6,
                    'nama' => 'Warung Tahu Telur Jember',
                    'kategori' => 'Restoran',
                    'gambar' => 'https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=900&q=80',
                    'deskripsi' => 'Kuliner legendaris Jember dengan tahu telur yang khas. Tempat favorit wisatawan lokal maupun mancanegara.',
                    'rating' => 4.9,
                    'alamat' => 'Jl. Mastrip No. 34, Jember',
                    'harga' => 'Rp 15.000 - Rp 40.000',
                    'fasilitas' => ['Makanan Halal', 'Tempat Nyaman', 'Parkir Motor', 'Take Away', 'Harga Terjangkau']
                ]
            ];
        } else {
            // Format data dari database untuk view
            $fasilitas = $dbFasilitas->map(function($item) {
                return [
                    'id' => $item->id,
                    'nama' => $item->nama,
                    'kategori' => $item->kategori,
                    'gambar' => $item->foto ? asset('storage/' . $item->foto) : 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80',
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