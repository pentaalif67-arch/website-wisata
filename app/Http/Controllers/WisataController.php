<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        return view('wisata.index');
    }

    public function create()
    {
        return view('wisata.create');
    }

    public function store(Request $request)
    {
        // To be implemented
        return redirect()->route('wisata.index');
    }

    public function show($id)
    {
        return view('wisata.show');
    }

    public function edit($id)
    {
        return view('wisata.edit');
    }

    public function update(Request $request, $id)
    {
        // To be implemented
        return redirect()->route('wisata.index');
    }

    public function destroy($id)
    {
        // To be implemented
        return redirect()->route('wisata.index');
    }
}