<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function generate(Request $request)
    {
        // To be implemented - generate reports
        return response()->json(['message' => 'Report generated successfully']);
    }
}