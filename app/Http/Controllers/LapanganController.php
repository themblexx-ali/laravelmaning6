<?php

namespace App\Http\Controllers;

use App\Models\lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapangan = Lapangan::first();
        return view('lapangan.index', compact('lapangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $lapangan = Lapangan::with('jadwals')->findOrFail($id);
        return view('lapangan.detail', compact('lapangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lapangan $lapangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lapangan $lapangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lapangan $lapangan)
    {
        //
    }
}
