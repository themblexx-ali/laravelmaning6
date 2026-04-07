<?php

namespace App\Http\Controllers;

use App\Models\JamSlot;
use App\Models\jadwal;
use App\Models\lapangan;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapangan = Lapangan::with('jadwals')->get();
        $jam_slots_weekday = JamSlot::where('tipe_hari', 'weekday')->get();
        $jam_slots_weekend = JamSlot::where('tipe_hari', 'weekend')->get();

        return view('jadwal.index', compact('lapangan', 'jam_slots_weekday', 'jam_slots_weekend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_hari' => 'required',
        'tipe_hari' => 'required',
    ]);

    Jadwal::create([
        'lapangan_id' => 1, // Ganti dengan ID lapangan yang sesuai
        'nama_hari' => $request->nama_hari,
        'tipe_hari' => $request->tipe_hari,
        'status' => 'tersedia'
    ]);

    return redirect()->route('dashboard')->with('success', 'Jadwal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
        'lapangan_id' => $jadwal->lapangan_id, // tetap menggunakan lapangan_id yang sama
        'nama_hari' => $request->nama_hari,
        'tipe_hari' => $request->tipe_hari,
        'status' => $request->status,
        ]);

        return redirect()->route('dashboard')->with('success', 'Berhasil update');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        $jadwal = Jadwal::findOrFail($jadwal->id);
        $jadwal->delete();

        return redirect()->route('dashboard')->with('success', 'Berhasil dihapus');
    }
}
