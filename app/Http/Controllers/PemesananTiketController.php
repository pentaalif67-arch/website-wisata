<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PemesananTiketController extends Controller
{
    /**
     * Tampilkan halaman pemesanan tiket untuk pelanggan
     */
    public function index()
    {
        $pemesanans = DB::table('pemesanan_tikets')
            ->join('destinasis', 'pemesanan_tikets.destinasi_id', '=', 'destinasis.id')
            ->where('pemesanan_tikets.user_id', Auth::id())
            ->select('pemesanan_tikets.*', 'destinasis.nama as destinasi_nama', 'destinasis.gambar as destinasi_gambar')
            ->orderBy('pemesanan_tikets.created_at', 'desc')
            ->get();

        return view('dashboard.pemesanan-tiket', compact('pemesanans'));
    }

    /**
     * Tampilkan form pemesanan tiket
     */
    public function create($destinasi_id)
    {
        $destinasi = DB::table('destinasis')->where('id', $destinasi_id)->first();
        
        if (!$destinasi) {
            return redirect()->route('destinasi.index')
                ->with('error', 'Destinasi tidak ditemukan.');
        }

        return view('dashboard.pemesanan-tiket-create', compact('destinasi'));
    }

    /**
     * Simpan pemesanan tiket
     */
    public function store(Request $request)
    {
        $request->validate([
            'destinasi_id' => 'required|exists:destinasis,id',
            'tanggal_kunjungan' => 'required|date|after_or_equal:today',
            'jumlah_tiket' => 'required|integer|min:1|max:20',
            'nama_pemesan' => 'required|string|max:255',
            'email_pemesan' => 'required|email|max:255',
            'no_telepon' => 'nullable|string|max:20',
            'catatan' => 'nullable|string|max:500',
        ]);

        $destinasi = DB::table('destinasis')->where('id', $request->destinasi_id)->first();
        
        if (!$destinasi) {
            return back()->with('error', 'Destinasi tidak ditemukan.')->withInput();
        }

        $total_harga = $destinasi->harga_tiket * $request->jumlah_tiket;
        $kode_pemesanan = 'TKT-' . strtoupper(Str::random(8));

        DB::table('pemesanan_tikets')->insert([
            'user_id' => Auth::id(),
            'destinasi_id' => $request->destinasi_id,
            'kode_pemesanan' => $kode_pemesanan,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'jumlah_tiket' => $request->jumlah_tiket,
            'total_harga' => $total_harga,
            'status' => 'pending',
            'nama_pemesan' => $request->nama_pemesan,
            'email_pemesan' => $request->email_pemesan,
            'no_telepon' => $request->no_telepon,
            'catatan' => $request->catatan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('pemesanan-tiket.index')
            ->with('success', 'Pemesanan tiket berhasil dibuat! Kode Pemesanan: ' . $kode_pemesanan);
    }

    /**
     * Tampilkan detail pemesanan
     */
    public function show($id)
    {
        $pemesanan = DB::table('pemesanan_tikets')
            ->join('destinasis', 'pemesanan_tikets.destinasi_id', '=', 'destinasis.id')
            ->where('pemesanan_tikets.id', $id)
            ->where('pemesanan_tikets.user_id', Auth::id())
            ->select('pemesanan_tikets.*', 'destinasis.*')
            ->first();

        if (!$pemesanan) {
            return redirect()->route('pemesanan-tiket.index')
                ->with('error', 'Pemesanan tidak ditemukan.');
        }

        return view('dashboard.pemesanan-tiket-show', compact('pemesanan'));
    }

    /**
     * Batalkan pemesanan
     */
    public function cancel($id)
    {
        $pemesanan = DB::table('pemesanan_tikets')
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if (!$pemesanan) {
            return redirect()->route('pemesanan-tiket.index')
                ->with('error', 'Pemesanan tidak ditemukan.');
        }

        if ($pemesanan->status === 'cancelled') {
            return redirect()->route('pemesanan-tiket.index')
                ->with('error', 'Pemesanan sudah dibatalkan sebelumnya.');
        }

        DB::table('pemesanan_tikets')
            ->where('id', $id)
            ->update([
                'status' => 'cancelled',
                'updated_at' => now(),
            ]);

        return redirect()->route('pemesanan-tiket.index')
            ->with('success', 'Pemesanan berhasil dibatalkan.');
    }
}
